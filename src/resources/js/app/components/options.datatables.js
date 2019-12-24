jQ(document).ready(function () {
    jQ('#nav-toggle').on('click', function (e) {
        setTimeout(() => {
            jQ(jQ.fn.dataTable.tables()).DataTable().draw('page')
        }, 300)
    });

    window.dataTablesLocales = function () {
        return {
            "sProcessing": trans('mage.datatables.sProcessing'),
            "sLengthMenu": trans('mage.datatables.sLengthMenu'),
            "sZeroRecords": trans('mage.datatables.sZeroRecords'),
            "sEmptyTable": trans('mage.datatables.sEmptyTable'),
            "sInfo": trans('mage.datatables.sInfo'),
            "sInfoEmpty": trans('mage.datatables.sInfoEmpty'),
            "sInfoFiltered": trans('mage.datatables.sInfoFiltered'),
            "sInfoPostFix": trans('mage.datatables.sInfoPostFix'),
            "sSearch": trans('mage.datatables.sSearch'),
            "sUrl": trans('mage.datatables.sUrl'),
            "sInfoThousands": trans('mage.datatables.sInfoThousands'),
            "sLoadingRecords": trans('mage.datatables.sLoadingRecords'),
            "oPaginate": {
                "sFirst": trans('mage.datatables.oPaginate.sFirst'),
                "sLast": trans('mage.datatables.oPaginate.sLast'),
                "sNext": trans('mage.datatables.oPaginate.sNext'),
                "sPrevious": trans('mage.datatables.oPaginate.sPrevious')
            },
            "oAria": {
                "sSortAscending": trans('mage.datatables.oAria.sSortAscending'),
                "sSortDescending": trans('mage.datatables.oAria.sSortDescending')
            }
        }
    }
});
