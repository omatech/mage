$(document).ready(function () {
    let $adminPermissionsDatatable = $('#mage-permissions-datatable');
    $adminPermissionsDatatable.DataTable({
        processing: true,
        serverSide: true,
        ajax: route('mage.permissions.list').url(),
        deferRender: true,
        rowId: 'id',
        language: { 'url': route('mage.datatables.i18n') },
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
                  /*"<a href=\"" + route('mage.permissions.show', { id: data.id }) + "\">" +
                    "<button type=\"button\" class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\">\n" +
                      "<i class=\"fa fa-eye\"></i>" +
                    "</button>" +
                  "</a>" +*/
                  "<a href=\"" + route('mage.permissions.edit', { id: data.id }) + "\">" +
                    "<button type=\"button\" class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\">\n" +
                      "<i class=\"fa fa-pencil\"></i>" +
                    "</button>" +
                  "</a>" +
                  "<a class=\"mage-permissions-delete-btn\" data-id=\"" + data.id + "\">" +
                    "<button type=\"button\" data-id=\"" + data.id + "\" class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\">\n" +
                      "<i class=\"fa fa-trash\"></i>" +
                    "</button>" +
                  "</a>" +
                "</div>";
                }
            }
        ]
    });

    $adminPermissionsDatatable.on('click', '.mage-permissions-delete-btn', function(e) {
        let id = $(e.target).attr('data-id');
        let lang = $adminPermissionsDatatable.dataTableSettings[0].oLanguage.sweetAlert;
console.log(id);
        swal(Object.assign(lang, {
            icon: "warning",
            dangerMode: true,
        }))
        .then((willDelete) => {
            if (willDelete) {
                axios.delete(route('mage.permissions.destroy', id)).then(() => {
                    swal(lang.success, {
                        icon: "success",
                        buttons: lang.close
                    }).then(() => {
                        $adminPermissionsDatatable.DataTable().ajax.reload();
                    });
                })
                .catch((error) => {
                    console.log(error);
                });
            }
        });
    });
});
