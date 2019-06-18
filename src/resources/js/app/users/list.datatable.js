jQ(document).ready(function () {
    let adminUsersDatatable = jQ('#mage-users-datatable');
    adminUsersDatatable.DataTable({
        processing: true,
        serverSide: true,
        ajax: route('mage.users.list').url(),
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
            { data: 'email', name: 'email' },
            { data: 'roles', name: 'roles', searchable: false, orderable: false },
            { data: 'language', name: 'language' },
            { data: null, searchable: false, orderable: false, render: function(data, type, row) {
                return "" +
                "<div class=\"btn-group\" role=\"group\">" +
                /*  "<a href=\"" + route('mage.users.show', { id: data.id }) + "\">" +
                    "<button type=\"button\" class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\">\n" +
                      "<i class=\"fa fa-eye\"></i>" +
                    "</button>" +
                  "</a>" +*/
                  "<a href=\"" + route('mage.users.edit', { id: data.id }) + "\">" +
                    "<button type=\"button\" class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\">\n" +
                      "<i class=\"fa fa-pen\"></i>" +
                    "</button>" +
                  "</a>" +
                  "<a class=\"mage-users-delete-btn\" data-id=\"" + data.id + "\">" +
                    "<button type=\"button\" data-id=\"" + data.id + "\" class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\">\n" +
                      "<i data-id=\"" + data.id + "\" class=\"fa fa-trash no-click\"></i>" +
                    "</button>" +
                  "</a>" +
                "</div>";
                }
            }
        ],
        columnDefs: [{
            targets: 3,
            render: function (data, type, row) {
                let cell = '';
                Object.keys(data).forEach(function(role) {
                    cell += "<span class=\"badge badge-pill badge-primary\">" + data[role].name + "</span> ";
                });
                return cell;
            }
        }]
    });

    adminUsersDatatable.on('click', '.mage-users-delete-btn', function(e) {
        let id = jQ(e.target).attr('data-id');
        let locale = adminUsersDatatable.dataTableSettings[0].oLanguage.sweetAlert.users;

        mage.deleteAlert(id, adminUsersDatatable, 'mage.users.destroy', locale);
    });
});
