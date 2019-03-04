<?php

namespace Omatech\Mage\App\Http\Controllers;

use App\Http\Controllers\Controller;

class DatatableController extends Controller
{
    public function i18n()
    {
        return response()->json([
            "sProcessing"     => __('mage.datatables.sProcessing'),
            "sLengthMenu"     => __('mage.datatables.sLengthMenu'),
            "sZeroRecords"    => __('mage.datatables.sZeroRecords'),
            "sEmptyTable"     => __('mage.datatables.sEmptyTable'),
            "sInfo"           => __('mage.datatables.sInfo'),
            "sInfoEmpty"      => __('mage.datatables.sInfoEmpty'),
            "sInfoFiltered"   => __('mage.datatables.sInfoFiltered'),
            "sInfoPostFix"    => __('mage.datatables.sInfoPostFix'),
            "sSearch"         => __('mage.datatables.sSearch'),
            "sUrl"            => __('mage.datatables.sUrl'),
            "sInfoThousands"  => __('mage.datatables.sInfoThousands'),
            "sLoadingRecords" => __('mage.datatables.sLoadingRecords'),
            "oPaginate"       => [
                "sFirst"    => __('mage.datatables.oPaginate.sFirst'),
                "sLast"     => __('mage.datatables.oPaginate.sLast'),
                "sNext"     => __('mage.datatables.oPaginate.sNext'),
                "sPrevious" => __('mage.datatables.oPaginate.sPrevious')
            ],
            "oAria" => [
                "sSortAscending"  => __('mage.datatables.oAria.sSortAscending'),
                "sSortDescending" => __('mage.datatables.oAria.sSortDescending')
            ],
            "sweetAlert" => [
                "translations" => [
                    "title" => __('mage.datatable.sweetalert.translations.title'),
                    "text" => __('mage.datatable.sweetalert.translations.text'),
                    "success" => __('mage.datatable.sweetalert.translations.success'),
                    "error" => __('mage.datatable.sweetalert.translations.error'),
                ],
                "users" => [
                    "title" => __('mage.datatable.sweetalert.users.title'),
                    "text" => __('mage.datatable.sweetalert.users.text'),
                    "success" => __('mage.datatable.sweetalert.users.success'),
                    "error" => __('mage.datatable.sweetalert.users.error'),
                ],
                "roles" => [
                    "title" => __('mage.datatable.sweetalert.roles.title'),
                    "text" => __('mage.datatable.sweetalert.roles.text'),
                    "success" => __('mage.datatable.sweetalert.roles.success'),
                    "error" => __('mage.datatable.sweetalert.roles.error'),
                ],
                "permissions" => [
                    "title" => __('mage.datatable.sweetalert.permissions.title'),
                    "text" => __('mage.datatable.sweetalert.permissions.text'),
                    "success" => __('mage.datatable.sweetalert.permissions.success'),
                    "error" => __('mage.datatable.sweetalert.permissions.error'),
                ],
                "buttons" => [
                    "confirm" => __('mage.datatables.sweetalert.buttons.confirm'),
                    "cancel" => __('mage.datatables.sweetalert.buttons.cancel'),
                    "close" => __('mage.datatables.sweetalert.buttons.close'),
                ]
            ]
        ]);
    }
}
