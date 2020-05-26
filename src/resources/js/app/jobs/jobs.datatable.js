jQ(document).ready(function () {
    let $mageJobsDatatable = jQ('#mage-jobs-datatable');

    $mageJobsDatatable.DataTable({
        processing: true,
        serverSide: true,
        ajax: {
          url: route('backend.jobs.list').url(),
        },
        deferRender: true,
        rowId: 'id',
        language: window.dataTablesLocales(),
        paging: true,
        lengthChange: true,
        lengthMenu: [10, 25, 50, 100],
        pageLength: 50,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: true,
        scrollX: true,
        columns: [
            { data: 'id', name: 'id' },
            { data: 'queue', name: 'queue' },
            { data: 'payload', name: 'payload' },
            { data: 'attempts', name: 'attempts' },
            { data: 'reserved_at', name: 'reserved_at' },
            { data: 'available_at', name: 'available_at' },
            { data: 'created_at', name: 'created_at' },
        ],

    });
});
