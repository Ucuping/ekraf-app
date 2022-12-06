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
                    <img src="${row.picture}" width="100%">
                </div>
                <div>
                    <strong>${data}</strong>
                    <p class="mb-0 pb-0 text-muted small">${row.username}</p>
                </div>
            </div>
            `
        }
    },
    {
        name: 'identity_number',
        data: 'identity_number'
    },
    {
        name: 'username',
        data: 'username'
    },
    {
        name: 'email',
        data: 'email'
    },
    {
        name: 'status',
        data: 'is_active',
        mRender: (data, type, row, meta) => {
            console.log(data)
            return data == true ? 'Aktif' : 'Tidak Aktif'
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

            if (userPermissions.includes('update-users')) {
                render += `<button class="btn btn-outline-primary btn-sm" data-toggle="edit" data-id="${data}"><i class="fas fa-edit"></i></button> `
            }

            if (userPermissions.includes('delete-users')) {
                render += `<button class="btn btn-outline-danger btn-sm" data-toggle="delete" data-id="${data}"><i class="fas fa-trash"></i></button> `
            }

            return render
        }
    }
])