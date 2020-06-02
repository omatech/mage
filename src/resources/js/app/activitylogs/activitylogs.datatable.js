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
            { data: 'model_id', name: 'model_id' },
            { data: 'uri', name: 'uri' },
            { data: 'action', name: 'action' },
            { data: 'alias', name: 'alias' },
            { data: 'method', name: 'method' },
            { data: 'created_at', name: 'created_at' },
            { data: null, searchable: false, orderable: false, render: function(data, type, row) {
                return "" +
                "<div class=\"btn-group\" role=\"group\">" +
                  "<a href=\"" + route('backend.activity-logs.show', { id: data.id }) + "\">" +
                    "<button type=\"button\" class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\">\n" +
                      "<i class=\"fa fa-eye\"></i>" +
                    "</button>" +
                  "</a>" +
                "</div>";
                }
            }
        ],
    });
});