$(function () {
    
    window.userPermissions = [];
    
    if ($('meta[name="user-permissions"]').length) {
        window.userPermissions = $('meta[name="user-permissions"]').attr('content').split(',')
    }
    window.onpopstate = () => {
        if ($('.modal').length) {
            $('.modal').modal('hide')
            $('.modal-backdrop').remove()
            $('body').removeClass('.modal-open')
        }
        handleView()
    }
    if ($('v-content-rendering').length) {
        handleView()
    } else {
        handleEvent()
    }
})

const pushState = async (url) => {
    await handleView(url)
    window.history.pushState([], null, url)
}

const handleView = async (url = null) => {
    if ($('v-rendering').length <= 0) {
        $('v-content-rendering').removeClass('show')
        await checkAuth()
    }

    showLoader()

    const res = await fetch(url ?? window.location.href, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })

    if (res.status == 200) {
        const data = await res.text()

        if ($('v-rendering').length > 0) {
            $('v-rendering').html(data)
            if (!$('v-content-rendering').hasClass('show')) {
                $('v-content-rendering').addClass('show')
            }
        } else {
            $('v-content-rendering').html(data)
            $('v-content-rendering').addClass('show')
            handleEvent()
        }

        if ($('.filepond').length) {
            FilePond.registerPlugin(FilePondPluginImagePreview)
            $.each($('.filepond'), (key, el) => {
                FilePond.create(el, {
                    storeAsFile: true
                })
            })
        }

        if ($('.js-choices').length) {
            $.each($('.js-choices'), (key, val) => {
                new Choices(val, {
                    duplicateItemsAllowed: false,
                    position: 'bottom',
                    placeholder: true,
                    placeholderValue: 'Choose'
                })
            })
        }
        App()
        horizontalLayout()
        handleEvent()
    } else {
        // handleError(res.status)
    }

    hideLoader()
}

const showLoader = () => {
    $('body').waitMe({
        effect: 'win8',
        bg: 'rgba(255,255,255,5)',
        color: '#6691e7'
    })
}

const hideLoader = () => {
    $('body').waitMe('hide')
}

const handleEvent = () => {
    $('a[data-toggle="ajax"]').unbind().on('click', function (e) {
        e.preventDefault()
        // pushState($(this).attr('href'))
        if ($(this).attr('href').charAt(0) != '#' && typeof $(this).data('bs-toggle') == 'undefined') {
            if ($(this).attr('target') == '_blank') {
                window.open($(this).attr('href'), '_blank')
            } else {
                pushState($(this).attr('href'))
            }
        }
    })

    $('button[data-toggle="ajax"]').unbind().on('click', function (e) {
        e.preventDefault()
        pushState($(this).data('target'))
    })

    $('button[data-toggle="edit"]').unbind().on('click', function (e) {
        e.preventDefault()
        pushState(`${window.location.href}/${$(this).data('id')}/edit`)
    })

    $('button[data-toggle="delete"]').unbind().on('click', function (e) {
        e.preventDefault()
        deleteAction(this)
    })

    $('a[data-toggle="logout"]').unbind().on('click', function (e) {
        e.preventDefault()
        Swal.fire({
            title: $(this).data('title'),
            icon: 'question',
            text: $(this).data('text') ?? 'Are you sure?',
            showCancelButton: true,
            confirmButtonCollor: '#3085d6',
            cancelButtonCollor: '#d33',
            confirmButtonText: 'Yes'
        }).then(async (result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Plase Wait...',
                    text: 'Logging Out',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                })

                const res = await fetch($(this).attr('href'), {
                    method: $(this).data('method') ?? 'GET',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': $(this).data('token'),
                        'Content-Type': 'application/json'
                    }
                })

                Swal.close()
                if (res.status == 200) {
                    const data = await res.json()
                    Swal.fire({
                        title: 'Success',
                        icon: 'success',
                        text: data.message
                    }).then(result => {
                        if (typeof $(this).data('callback') != 'undefined') {
                            $('v-content-rendering').html('')
                            // pushState($(this).data('callback'))
                            window.location.assign($(this).data('callback'))
                        } else {
                            if (typeof table != 'undefined') {
                                table.ajax.reload()
                            } else {
                                handleView()
                            }
                        }
                    })
                }
            }
        })
    })

    $('form[data-request="ajax"]').unbind().on('submit', async function (e) {
        e.preventDefault()
        let btn = $(this).find('button[type="submit"]').html()
        $(this).find('button[type="submit"]').html('Loading...').attr('disabled', true)
        resetInvalid()
        showLoader()
        const res = await fetch($(this).attr('action'), {
            method: $(this).attr('method'),
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            body: generateFormBody(new FormData(this))
        })

        $(this).find('button[type="submit"]').html(btn).removeAttr('disabled')
        if (res.status == 200) {
            const data = await res.json()
            toastify(data.message, 'success')

            if ($('.modal').length) {
                $('.modal').modal('hide')
                $('.modal-backdrop').remove()
                $('body').removeClass('.modal-open')
            }

            if ($(this).data('redirect')) {
                if (typeof $(this).data('callback') != 'undefined') {
                    window.location.assign($(this).data('callback'))
                } else {
                    window.location.reload()
                }
            } else {
                if (typeof table != 'undefined') {
                    if (typeof $(this).data('callback') != 'undefined') {
                        pushState($(this).data('callback'))
                    } else {
                        table.ajax.reload()
                    }
                } else {
                    if (typeof $(this).data('callback') != 'undefined') {
                        // pushState($(this).data('callback'))
                        window.location.assign($(this).data('callback'))
                    } else {
                        handleView()
                    }
                }
            }
        } else {
            if (res.status == 422) {
                const data = await res.json()
                showInvalid(data.errors)
            } else {
                if (res.status == 401) {
                    window.location.reload()
                } else {
                    toastify('Opps! something went wrong', 'danger')
                }
            }
        }
        hideLoader()
    })
}

const generateFormBody = (form) => {
    let formData = new FormData()
    form.forEach(function (value, key) {
        formData.append(key, value)
    })

    return formData
}

const showInvalid = (errorMessages) => {
    for (errorField in errorMessages) {
        if ($(`.form-control[name="${errorField}"]`).parent().hasClass('choices__inner')) {
            $(`.form-control[name="${errorField}"]`).parent().parent().parent().append(`
                <div class="small text-danger py-1 choices-invalid">${errorMessages[errorField]}</div>
            `)
            $(`.form-control[name="${errorField}"]`).parent().addClass('border-danger')
        } else if ($(`*[name="${errorField}"]`).parent().parent().hasClass('filepond--root')) {
            $(`*[name="${errorField}"]`).parent().parent().parent().append(`<div class="small text-danger py-1">${errorMessages[errorField]}</div>`);
            $(`*[name="${errorField}"]`).parent().parent().addClass('border-danger');
        } else {
            $(
                `<div class="invalid-feedback">${errorMessages[errorField]}</div>`
            ).insertAfter(`.form-control[name="${errorField}"]`)
            $(`.form-control[name="${errorField}"]`).addClass("is-invalid")
        }
    }
}

const resetInvalid = () => {
    for (const el of $('.form-control')) {
        $(el).removeClass('is-invalid')
        $('.choices__inner').removeClass('border-danger')
        $('.filepond--root').removeClass("border-danger")
        $(el).siblings('.invalid-feedback').remove()
        $('.invalid-feedback').remove()
        $('.choices-invalid').remove()
    }
}

const initTable = (el, columns = [], drawCallback = () => {}) => {
    if (!$.fn.DataTable.isDataTable(el)) {

    }

    let opt = {
        processing: true,
        serverSide: true,
        ajax: $(el).data('url'),
        columns: columns,
        responsive: true,
        search: {
            return: true
        },
        lengthMenu: [
            [10, 25, 50, 100],
            [10 + " baris", 25 + " baris", 50 + " baris", 100 + " baris"],
        ],
        language: {
            sLengthMenu: "_MENU_",
            search: "_INPUT_",
            searchPlaceholder: "Pencarian..."
        },
        order: [0, 'desc'],
        // dom: '<"col-sm-4 col-12 filter"f><"row"<"col-sm-12"tr>><"row"<"col-sm-12 col-md-5"l><"col-sm-12 col-md-7"p>>',
        drawCallback,
    }

    let table = $(el).DataTable(opt)

    table.on('draw.dt', function () {
        handleEvent()
        drawCallback()
    })
    
    table.on('responsive-display', function () {
        handleEvent()
        drawCallback()
    })

    $(el + ' th').addClass('bg-light')

    return table
}

const checkAuth = async () => {
    const res = await fetch(`${$('meta[name="base-url"]').attr('content')}/auth/check`, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })

    let data = await res.text()
    $('v-content-rendering').html(data)
}

const handleError = async (status) => {
    showLoader()
    const res = await fetch(`${$('meta[name="base-url"]').attr('content')}/errors?status=${status}`, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })

    if (res.status == 200) {
        console.log('aa')
        const data = await res.text()
        $('v-content-rendering').html(data)
        $('v-content-rendering').addClass('show')
        handleEvent()
    } else {
        toastify('Opps! Something went wrong', 'danger')
    }
    hideLoader()
}

const toastify = (message, type = 'success') => {
    // $('.toast-message').html(message)
    // let el = type == 'success' ? $('#toastSuccess') : (type == 'primary' ? $('#toastPrimary') : (type == 'danger' ? $('#toastDanger') : $('#toastWarning')))
    // el.toast('show')
    Toastify({
        text: message,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: type == 'success' ? '#13c56b' : (type == 'primary' ? '#6691e7' : (type == 'danger' ? '#ed5e5e' : '#e8bc52')),
    }).showToast()
}

const deleteAction = (el) => {
    Swal.fire({
        title: 'Hapus?',
        icon: 'question',
        text: $(this).data('text') ?? 'Are you sure?',
        showCancelButton: true,
        confirmButtonCollor: '#3085d6',
        cancelButtonCollor: '#d33',
        confirmButtonText: 'Yes'
    }).then(async result => {
        if (result.isConfirmed) {
            // $('v-loader-page').show()
            showLoader()
            const res = await fetch(`${window.location.href}/${$(el).data('id')}/delete`, {
                method: 'delete',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })

            // $('v-loader-page').hide()
            if (res.status == 200) {
                const data = await res.json()
                toastify(data.message, 'success')
                if (typeof table != 'undefined') table.ajax.reload()
                else handleView()
            } else {
                if (res.status == 401) {
                    window.location.reload()
                } else {
                    const data = await res.json()
                    toastify(data.message, 'warning')
                }
            }
            hideLoader()
        }
    })
}