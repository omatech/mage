<?php

namespace Omatech\Mage\App\Http\Controllers;

use App\Http\Controllers\Controller;

class DatatableController extends Controller
{
    public function i18n()
    {
        return response()->json([
            "sProcessing"     => trans('Cargando...'),
            "sLengthMenu"     => trans('Mostrar _MENU_ registros'),
            "sZeroRecords"    => trans('No se encontraron resultados'),
            "sEmptyTable"     => trans('Ningún dato disponible en esta tabla'),
            "sInfo"           => trans('Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros'),
            "sInfoEmpty"      => trans('Mostrando registros del 0 al 0 de un total de 0 registros'),
            "sInfoFiltered"   => trans('filtrado de un total de _MAX_ registros'),
            "sInfoPostFix"    => trans(''),
            "sSearch"         => trans('Buscar:'),
            "sUrl"            => trans(''),
            "sInfoThousands"  => trans(','),
            "sLoadingRecords" => trans('Cargando...'),
            "oPaginate"       => [
                "sFirst"    => trans('Primero'),
                "sLast"     => trans('Último'),
                "sNext"     => trans('Siguiente'),
                "sPrevious" => trans('Anterior')
            ],
            "oAria" => [
                "sSortAscending"  => trans(': Activar para ordenar la columna de manera ascendente'),
                "sSortDescending" => trans(': Activar para ordenar la columna de manera descendente')
            ],
            "sweetAlert" => [
                "title"   => trans("Are you sureeeeee?"),
                "text"    => trans("Once deleted, you will not be able to recover this imaginary file!"),
                "success" => trans("Poof! Borrado!"),
                "buttons" => [
                    trans("cancela"),
                    trans("borra")
                ],
                "close" => trans('cerrar')
            ]
        ]);
    }
}
