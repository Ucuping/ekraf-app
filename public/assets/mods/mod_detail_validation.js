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
            const res = await fetch(`${$('meta[name="base-url"]').attr('content')}/apps/validations/${$(this).data('id')}/approved`, {
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
                    if (typeof $(this).data('callback') != 'undefined' && $(this).data('callback') != '') {
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

// $('button[data-toggle="rejected"]').unbind().on('click', function (e) {
//     e.preventDefault()
//     $('#rejectedMessageForm').attr('action', `${window.location.href}/${$(this).data('id')}/rejected`)
// })