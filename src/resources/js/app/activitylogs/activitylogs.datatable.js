jQ(document).ready(function () {
    let $mageActivityLogsDatatable = jQ('#mage-activity-logs-datatable');

    $mageActivityLogsDatatable.DataTable({
        processing: true,
        serverSide: true,
        ajax: {
          url: route('backend.activity-logs.list').url(),
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
            { data: 'user_id', name: 'user_id' },
            { data: 'email', name: 'email' },
            { data: 'model_type', name: 'model_type' },
            { data: 'model_id', name: 'model_id' },
            { data: 'uri', name: 'uri' },
            { data: 'action', name: 'action' },
            { data: 'alias', name: 'alias' },
            { data: 'method', name: 'method' },
            { data: 'user_agent', name: 'user_agent' },
            { data: 'ip_address', name: 'ip_address' },
            { data: 'created_at', name: 'created_at' },
        ],
    });
});