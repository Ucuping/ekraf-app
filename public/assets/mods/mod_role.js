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
        data: 'name'
    },
    {
        name: 'guard_name',
        data: 'guard_name'
    },
    {
        name: 'id',
        data: 'hashid',
        width: 150,
        sortable: false,
        orderable: false,
        sClass: 'text-center nowrap',
        mRender: (data, type, row, meta) => {
            let render = ``

            if (userPermissions.includes('change-permissions')) {
                render += `<button type="button" class="btn btn-outline-primary btn-sm mx-1" data-toggle="ajax" data-target="${ window.location.href }/${ data }/change-permissions"><i class="fas fa-shield-alt"></i></button>`
            }

            return render
        }
    }
])

$('#check-all').unbind().on('change', function () {
    $('.check-all').prop('checked', this.checked)
})

$('.check-all').unbind().on('change', function () {
    if ($('.check-all:checked').length == $('.check-all').length) {
        $('#check-all').prop('checked', true)
    } else {
        $('#check-all').prop('checked', false)
    }
})

if ($('.check-all:checked').length == $('.check-all').length) {
    $('#check-all').prop('checked', true)
} else {
    $('#check-all').prop('checked', false)
}