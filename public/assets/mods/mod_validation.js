if (typeof table == 'undefined') {
    let table
}

table = initTable('#dataTable', [
    {
        name: 'id',
        data: null,
        width: '1%',
        mRender: (data, type, row, meta) => {
            return meta.row + meta.settings._iDisplayStart +1
        }
    },
    {
        name: 'name',
        data: 'name',
        mRender: (data, type, row, meta) => {
            return `
            <div class="d-flex align-items-center">
                <div class="me-3" style="width: 40px;height: 40px;border-radius: 50%;">
                    <img src="${row.logo}" width="100%">
                </div>
                <div>
                    <strong>${data}</strong>
                    <p class="mb-0 pb-0 text-muted small">${row.category.name}</p>
                </div>
            </div>
            `
        }
    },
    {
        name: 'owner_name',
        data: 'owner_name'
    },
    {
        name: 'address',
        data: 'address'
    },
    {
        name: 'status',
        data: 'status',
        mRender: (data, type, row, meta) => {
            // console.log(data)
            return data == 'pending' ? 'Menunggu Diverifikasi' : (data == 'approved' ? 'Terverifikasi' : 'Ditolak')
        }
    },
    {
        name: 'id',
        data: 'hashid',
        width: 150,
        sortable: false,
        orderable: false,
        sClass: 'text-center nowrap',
        mRender: (data, type, row, meta) => {
            var render = ``

            if (userPermissions.includes('company-validations')) {
                render += `<button class="btn btn-outline-primary btn-sm" data-toggle="ajax" data-target="${window.location.href}/${data}/detail"><i class="fas fa-eye"></i></button> `
                render += `<button class="btn btn-outline-success btn-sm" data-toggle="approved" data-id="${data}"><i class="fas fa-check"></i></button> `
                render += `<button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#myModal" data-toggle="rejected" data-id="${data}"><i class="fas fa-times"></i></button> `
            }

            // if (userPermissions.includes('company-validations')) {
            // }

            return render
        }
    }
], function () {
    $('button[data-toggle="approved"]').unbind().on('click', function (e) {
        e.preventDefault()

        Swal.fire({
            title: 'Verifikasi?',
            icon: 'question',
            text: 'Apakah anda yakin?',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then(async (result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Plase Wait...',
                    text: 'Sedang memproses data',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                })

                const res = await fetch(`${window.location.href}/${$(this).data('id')}/approved`, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
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

    $('button[data-toggle="rejected"]').unbind().on('click', function (e) {
        e.preventDefault()
        $('#rejectedMessageForm').attr('action', `${window.location.href}/${$(this).data('id')}/rejected`)
    })
})
