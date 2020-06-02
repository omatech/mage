jQ(document).ready(function () {
    let $mageFailedJobsDatatable = jQ('#mage-failed-jobs-datatable');

    $mageFailedJobsDatatable.DataTable({
        processing: true,
        serverSide: true,
        ajax: {
          url: route('backend.failed-jobs.list').url(),
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
            { data: 'failed_at', name: 'failed_at' },
            { data: null, searchable: false, orderable: false, render: function(data, type, row) {
                return "" +
                "<div class=\"btn-group\" role=\"group\">" +
                  "<a href=\"" + route('backend.jobs.show.failed', { id: data.id }) + "\">" +
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
