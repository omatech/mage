jQ(document).ready(function () {
    let adminPermissionsDatatable = jQ('#mage-permissions-datatable');
    adminPermissionsDatatable.DataTable({
        processing: true,
        serverSide: true,
        ajax: route('mage.permissions.list').url(),
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
            { data: 'name', name: 'name' },
            { data: null, searchable: false, orderable: false, render: function(data, type, row) {
                return "" +
                "<div class=\"btn-group\" role=\"group\">" +
                  "<a href=\"" + route('mage.permissions.edit', { id: data.id }) + "\">" +
                    "<button type=\"button\" class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\">\n" +
                      "<i class=\"fa fa-pen\"></i>" +
                    "</button>" +
                  "</a>" +
                  "<a class=\"mage-permissions-delete-btn\" data-id=\"" + data.id + "\">" +
                    "<button type=\"button\" data-id=\"" + data.id + "\" class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\">\n" +
                      "<i data-id=\"" + data.id + "\" class=\"fa fa-trash\"></i>" +
                    "</button>" +
                  "</a>" +
                "</div>";
                }
            }
        ]
    });

    adminPermissionsDatatable.on('click', '.mage-permissions-delete-btn', function(e) {
        let id = jQ(e.target).attr('data-id');
        let locale = {
          "title"   : trans('mage.datatable.sweetalert.permissions.title'),
          "text"    : trans('mage.datatable.sweetalert.permissions.text'),
          "success" : trans('mage.datatable.sweetalert.permissions.success'),
          "error"   : trans('mage.datatable.sweetalert.permissions.error'),
        }

        window.deleteAlert(id, adminPermissionsDatatable, 'mage.permissions.destroy', locale);
    });
});
