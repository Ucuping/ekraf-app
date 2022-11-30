$(function () {

    // $('body').addClass('waitMe_body')

    window.userPermissions = [];

    if ($('meta[name="user-permissions"]').length) {
        window.userPermissions = $('meta[name="user-permissions"]').attr('content').split(',')
    }

    handleView()

    window.addEventListener('popstate', () => {
        handleView()
    })

    window.addEventListener('DOMContentLoaded', () => {
        handleView()
    })

    // checkIfReload()
    // removeLoaderBar()
    // window.document.readyState
})

// function print_nav_timing_data() {
//     // Use getEntriesByType() to just get the "navigation" events
//     var perfEntries = performance.getEntriesByType("navigation");
//     console.log(perfEntries[0].type)

//     for (var i = 0; i < perfEntries.length; i++) {
//         console.log("= Navigation entry[" + i + "]");
//         var p = perfEntries[i];
//         // dom Properties
//         console.log("DOM content loaded = " + (p.domContentLoadedEventEnd - p.domContentLoadedEventStart));
//         console.log("DOM complete = " + p.domComplete);
//         console.log("DOM interactive = " + p.interactive);

//         // document load and unload time
//         console.log("document load = " + (p.loadEventEnd - p.loadEventStart));
//         console.log("document unload = " + (p.unloadEventEnd - p.unloadEventStart));

//         // other properties
//         console.log("type = " + p.type);
//         console.log("redirectCount = " + p.redirectCount);
//     }
// }

const checkIfReload = () => {
    var perfEntries = performance.getEntriesByType("navigation");
    if (perfEntries[0].type == 'reload') {
        handleView()
    }
}

const pushState = async (url) => {
    await handleView(url)
    window.history.pushState(null, null, url)
}

const handleView = async (url = null) => {
    // $('v-')
    // $('#documentLoader').waitMe({
    //     effect: 'win8',
    //     bg: 'rgba(100, 100, 100, .3)',
    //     color: '#6691e7'
    // })
    if ($('v-rendering').length <= 0) {
        $('v-content-render').removeClass('show')
        await checkAuth()
    }

    loaderBar()

    const res = await fetch(url ?? window.location.href, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })

    if (res.status == 200) {
        const data = await res.text()

        if ($('v-rendering').length > 0) {
            $('v-rendering').html(data)
            if (!$('v-content-render').hasClass('show')) {
                $('v-content-render').addClass('show')
            }
            // removeLoaderBar()
        } else {
            $('v-content-render').html(data)
            $('v-content-render').addClass('show')
            handleEvent()
            // removeLoaderBar()
        }

        if ($('.js-choices').length) {
            $.each($('js-choices'), (key, val) => {
                new Choices(val, {
                    duplicateItemsAllowed: false,
                    position: 'bottom',
                    placeholder: true,
                    placeholderValue: 'Choose'
                })
            })
        }

        // $('.dropify').dropify()

        App()
        handleEvent()
    } else {
        // console.log(res.status)
        handleError(res.status)
        // pushState(window.location.href)
    }

    removeLoaderBar()
}

const loaderBar = () => {
    $('body').addClass('waitMe_body')
    var elem = $('<div class="waitMe_container progress" style="background-color:  #fff"><div style="background-color: #435ebe"></div></div>');
    $('body').prepend(elem);
}

const removeLoaderBar = () => {
    $('body.waitMe_body').addClass('hideMe')
    $('body.waitMe_body').find('.waitMe_container:not([data-waitme_id])').remove();
    $('body.waitMe_body').removeClass('waitMe_body hideMe')
}

const handleEvent = () => {
    $('a[data-toggle="ajax"]').unbind().on('click', function (e) {
        e.preventDefault()
        pushState($(this).attr('href'))
    })

    $('button[data-toggle="ajax"]').unbind().on('click', function (e) {
        e.preventDefault()
        pushState($(this).attr('href'))
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
                            $('v-content-render').html('')
                            pushState($(this).data('callback'))
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
        loaderBar()
        const res = await fetch($(this).attr('action'), {
            method: $(this).attr('method'),
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
            },
            body: generateFormBody(new FormData(this))
        })

        $(this).find('button[type="submit"]').html(btn).removeAttr('disabled')
        if (res.status == 200) {
            const data = await res.json()
            toastify(data.message, 'success')

            $('.modal').modal('hide')
            $('.modal-backdrop').remove()
            $('.modal-open').removeClass('modal-open')

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
                        pushState($(this).data('callback'))
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
                    toastify('Opps! Something went wrong', 'danger')
                }
            }
        }
        removeLoaderBar()
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
        $(el).siblings('.invalid-feedback').remove()
        $('.invalid-feedback').remove()
        $('.choices-invalid').remove()
    }
}

const initTable = (el, columns = [], drawCallback = null) => {
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
            [10 + "baris", 25 + "baris", 50 + "baris", 100 + "baris"],
        ],
        language: {
            sLengthMenu: "_MENU_",
            search: "_INPUT_",
            searchPlaceholder: "Pencarian..."
        },
        order: [0, "desc"],
        dom: '<"col-sm-4 col-12"f><"row"<"col-sm-12"tr>><"row"<"col-sm-12 col-md-5"l><"col-sm-12 col-md-7"p>>',
        drawCallback,
    }

    let table = $(el).DataTable(opt)

    table.on('draw.dt', function () {
        handleEvent()
    })

    table.on('responsive-display', function () {
        handleEvent()
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
    $('v-content-render').html(data)
}

const handleError = async (status) => {
    loaderBar()
    const res = await fetch(`${$('meta[name="base-url"]').attr('content')}/errors?status=${status}`, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })

    if (res.status == 200) {
        console.log('aa')
        const data = await res.text()
        $('v-content-render').html(data)
        $('v-content-render').addClass('show')
        handleEvent()
    } else {
        toastify('Opps! Something went wrong', 'danger')
    }
    removeLoaderBar()
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
        html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon><div class="mt-4 pt-2 fs-15 mx-5"><h4>Are you Sure ?</h4><p class="text-muted mx-4 mb-0">Are you Sure You want to Delete this Account ?</p></div></div>',
        showCancelButton: !0,
        confirmButtonClass: "btn btn-primary w-xs me-2 mb-1",
        confirmButtonText: "Yes, Delete It!",
        cancelButtonClass: "btn btn-danger w-xs mb-1",
        buttonsStyling: !1,
        showCloseButton: !0
    }).then(async result => {
        if (result.isConfirmed) {
            // $('v-loader-page').show()
            loaderBar()
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
            removeLoaderBar()
        }
    })
}