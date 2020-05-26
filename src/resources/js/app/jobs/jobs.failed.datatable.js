jQ(document).ready(function () {
    let $mageJobsFailedDatatable = jQ('#mage-jobs-failed-datatable');

    $mageJobsFailedDatatable.DataTable({
        processing: true,
        serverSide: true,
        ajax: {
          url: route('backend.jobs-failed.list').url(),
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
            { data: 'exception', name: 'exception' },
            { data: 'failed_at', name: 'failed_at' },
        ],

    });
});
