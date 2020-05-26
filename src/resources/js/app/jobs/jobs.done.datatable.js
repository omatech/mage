jQ(document).ready(function () {
    let $mageJobsDoneDatatable = jQ('#mage-jobs-done-datatable');

    $mageJobsDoneDatatable.DataTable({
        processing: true,
        serverSide: true,
        ajax: {
          url: route('backend.jobs-done.list').url(),
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
            { data: 'connection', name: 'connection' },
            { data: 'queue', name: 'queue' },
            { data: 'payload', name: 'payload' },
            { data: 'attempts', name: 'attempts' },
            { data: 'done_at', name: 'done_at' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' },
        ],

    });
});
