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
                    <p class="mb-0 pb-0 text-muted small">${row.owner_name}</p>
                </div>
            </div>
            `
        }
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
            return data == 'pending' ? 'Menunggu Verifikasi' : (data == 'approved' ? 'Terverifikasi' : 'Ditolak')
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
                render += `<button class="btn btn-outline-success btn-sm" data-toggle="edit" data-id="${data}"><i class="fas fa-check"></i></button> `
                render += `<button class="btn btn-outline-primary btn-sm" data-toggle="ajax" data-target="${window.location.href}/${data}/detail"><i class="fas fa-eye"></i></button> `
                render += `<button class="btn btn-outline-danger btn-sm" data-toggle="delete" data-id="${data}"><i class="fas fa-times"></i></button> `
            }

            // if (userPermissions.includes('company-validations')) {
            // }

            return render
        }
    }
])