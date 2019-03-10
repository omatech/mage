<?php

namespace Omatech\Mage\Database\Seeds;

use Illuminate\Database\Seeder;

class LanguageLinesTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('language_lines')->delete();

        \DB::table('language_lines')->insert(array (
            0 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.user.logout',
                    'text' => '{"es":"Cerrar sesi\\u00f3n", "ca":"Tancar sessi\\u00f3","en":"Logout"}',
                ),
            1 =>
                array (
                    'group' => 'mage',
                    'key' => 'sidebar.administration',
                    'text' => '{"es":"Administración","ca":"Administració","en":"Administration"}',
                ),
            2 =>
                array (
                    'group' => 'mage',
                    'key' => 'sidebar.users-management',
                    'text' => '{"es":"Gestión de usuarios","ca":"Gestió d\'usuaris","en":"User Management"}',
                ),
            3 =>
                array (
                    'group' => 'mage',
                    'key' => 'sidebar.users',
                    'text' => '{"es":"Usuarios","ca":"Usuaris","en":"Users"}',
                ),
            4 =>
                array (
                    'group' => 'mage',
                    'key' => 'sidebar.roles',
                    'text' => '{"es":"Roles","ca":"Rols","en":"Roles"}',
                ),
            5 =>
                array (
                    'group' => 'mage',
                    'key' => 'sidebar.permissions',
                    'text' => '{"es":"Permisos","ca":"Permisos","en":"Permissions"}',
                ),
            6 =>
                array (
                    'group' => 'mage',
                    'key' => 'sidebar.translations',
                    'text' => '{"es":"Traducciones","ca":"Traduccions","en":"Translations"}',
                ),
            7 =>
                array (
                    'group' => 'mage',
                    'key' => 'sidebar.navigation',
                    'text' => '{"es":"Navegación","ca":"Navegació","en":"Navigation"}',
                ),
            8 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.create.title',
                    'text' => '{"es":"Nuevo permiso","ca":"Nou permís","en":"New permission"}',
                ),
            9 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.index.title',
                    'text' => '{"es":"Permisos","ca":"Permisos","en":"Permissions"}',
                ),
            10 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.datatable.field.id',
                    'text' => '{"es":"ID","ca":"ID","en":"ID"}',
                ),
            11 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.datatable.field.name',
                    'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
                ),
            12 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.datatable.field.actions',
                    'text' => '{"es":"Acciones","ca":"Accions","en":"Actions"}',
                ),
            13 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.update.title',
                    'text' => '{"es":"Actualizar permiso","ca":"__NOT TRANSLATED__","en":"__NOT TRANSLATED__"}',
                ),
            14 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.create.title',
                    'text' => '{"es":"Nuevo rol","ca":"Nou rol","en":"New role"}',
                ),
            15 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.index.title',
                    'text' => '{"es":"Listado de roles","ca":"Llistat de rols","en":"List of roles"}',
                ),
            16 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.datatable.field.id',
                    'text' => '{"es":"ID","ca":"ID","en":"ID"}',
                ),
            17 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.datatable.field.name',
                    'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
                ),
            18 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.datatable.field.actions',
                    'text' => '{"es":"Acciones","ca":"Accions","en":"Actions"}',
                ),
            19 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.form.name',
                    'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
                ),
            20 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.form.name.placeholder',
                    'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
                ),
            21 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.form.save',
                    'text' => '{"es":"Guardar","ca":"Guardar","en":"Save"}',
                ),
            22 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.index.datatable.title',
                    'text' => '{"es":"Listado de roles","ca":"Llistat de rols","en":"List of roles"}',
                ),
            23 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.new',
                    'text' => '{"es":"Nuevo","ca":"Nou","en":"New"}',
                ),
            24 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.show.title',
                    'text' => '{"es":"Rol","ca":"Rol","en":"Role"}',
                ),
            25 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.title',
                    'text' => '{"es":"Traducciones","ca":"Traduccions","en":"Translations"}',
                ),
            26 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.index.title',
                    'text' => '{"es":"Listado de traducciones","ca":"Llistat de traduccions","en":"List of translations"}',
                ),
            27 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.create.title',
                    'text' => '{"es":"Nuevo usuario","ca":"Nou usuari","en":"New user"}',
                ),
            28 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.index.title',
                    'text' => '{"es":"Listado de usuarios","ca":"Llistat d\'usuaris","en":"List of users"}',
                ),
            29 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.datatable.field.id',
                    'text' => '{"es":"ID","ca":"ID","en":"ID"}',
                ),
            30 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.datatable.field.name',
                    'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
                ),
            31 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.datatable.field.email',
                    'text' => '{"es":"eMail","ca":"eMail","en":"eMail"}',
                ),
            32 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.datatable.field.rol',
                    'text' => '{"es":"Rol","ca":"Rol","en":"Role"}',
                ),
            33 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.datatable.field.language',
                    'text' => '{"es":"Idioma","ca":"Idioma","en":"Language"}',
                ),
            34 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.datatable.field.actions',
                    'text' => '{"es":"Acciones","ca":"Accions","en":"Actions"}',
                ),
            35 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.edit.title',
                    'text' => '{"es":"Editar usuario","ca":"Editar usuari","en":"Edit user"}',
                ),
            36 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.form.name',
                    'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
                ),
            37 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.form.name.placeholder',
                    'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
                ),
            38 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.form.email',
                    'text' => '{"es":"eMail","ca":"eMail","en":"eMail"}',
                ),
            39 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.form.email.placeholder',
                    'text' => '{"es":"eMail","ca":"eMail","en":"eMail"}',
                ),
            40 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.form.language',
                    'text' => '{"es":"Idioma","ca":"Idioma","en":"Language"}',
                ),
            41 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.form.language.placeholder',
                    'text' => '{"es":"Idioma","ca":"Idioma","en":"Language"}',
                ),
            42 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.form.roles',
                    'text' => '{"es":"Roles","ca":"Rols","en":"Roles"}',
                ),
            43 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.form.roles.placeholder',
                    'text' => '{"es":"Roles","ca":"Rols","en":"Roles"}',
                ),
            44 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.form.save',
                    'text' => '{"es":"Guardar","ca":"Guardar","en":"Save"}',
                ),
            45 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.index.datatable.title',
                    'text' => '{"es":"Listado de usuarios","ca":"Llistat d\'usuaris","en":"List of users"}',
                ),
            46 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.new',
                    'text' => '{"es":"Nuevo","ca":"Nou","en":"New"}',
                ),
            47 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.sProcessing',
                    'text' => '{"es":"Procesando...","ca":"Processant...","en":"Processing..."}',
                ),
            48 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.sLengthMenu',
                    'text' => '{"es":"Mostrar _MENU_ registros","ca":"Mostra _MENU_ registres","en":"Show _MENU_ entries"}',
                ),
            49 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.sZeroRecords',
                    'text' => '{"es":"No se encontraron resultados","ca":"No s\'han trobat registres.","en":"No matching records found"}',
                ),
            50 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.sEmptyTable',
                    'text' => '{"es":"Ningún dato disponible en esta tabla","ca":"Cap dada disponible en aquesta taula","en":"No data available in table"}',
                ),
            51 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.sInfo',
                    'text' => '{"es":"Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros","ca":"Mostrant de _START_ a _END_ de _TOTAL_ registres","en":"Showing _START_ to _END_ of _TOTAL_ entries"}',
                ),
            52 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.sInfoEmpty',
                    'text' => '{"es":"Mostrando registros del 0 al 0 de un total de 0 registros","ca":"Mostrant de 0 a 0 de 0 registres","en":"Showing 0 to 0 of 0 entries"}',
                ),
            53 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.sInfoFiltered',
                    'text' => '{"es":"(filtrado de un total de _MAX_ registros)","ca":"(filtrat de _MAX_ total registres)","en":"(filtered from _MAX_ total entries)"}',
                ),
            54 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.sInfoPostFix',
                    'text' => '{"es":"","ca":"","en":""}',
                ),
            55 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.sSearch',
                    'text' => '{"es":"Buscar:","ca":"Filtrar:","en":"Search:"}',
                ),
            56 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.sUrl',
                    'text' => '{"es":"","ca":"","en":""}',
                ),
            57 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.sInfoThousands',
                    'text' => '{"es":",","ca":",","en":","}',
                ),
            58 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.sLoadingRecords',
                    'text' => '{"es":"Cargando...","ca":"Carregant...","en":"Loading..."}',
                ),
            59 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.oPaginate.sFirst',
                    'text' => '{"es":"Primero","ca":"Primer","en":"First"}',
                ),
            60 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.oPaginate.sLast',
                    'text' => '{"es":"Último","ca":"Anterior","en":"Last"}',
                ),
            61 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.oPaginate.sNext',
                    'text' => '{"es":"Siguiente","ca":"Seg\\u00fcent","en":"Next"}',
                ),
            62 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.oPaginate.sPrevious',
                    'text' => '{"es":"Anterior","ca":"Últim","en":"Previous"}',
                ),
            63 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.oAria.sSortAscending',
                    'text' => '{"es":": Activar para ordenar la columna de manera ascendente","ca":": Activar per a ordenar la columna de manera ascendent","en":": Activate to sort column ascending"}',
                ),
            64 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.oAria.sSortDescending',
                    'text' => '{"es":": Activar para ordenar la columna de manera descendente","ca":": Activar per a ordenar la columna de manera descendent","en":": Activate to sort column descending"}',
                ),
            65 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.deleteForm.title',
                    'text' => '{"es":"¿Eliminar recurso?","ca":"Eliminar recurs?","en":"Delete resource?"}',
                ),
            66 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.deleteForm.text',
                    'text' => '{"es":"¿Estás seguro de que quieres eliminar este recurso?","ca":"Estàs segur que vols eliminar aquest recurs?","en":"Are you sure you want to delete this resource?"}',
                ),
            67 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.deleteForm.success',
                    'text' => '{"es":"Recurso eliminado correctamente","ca":"Recurs eliminat correctament","en":"Resource successfully deleted"}',
                ),
            68 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.deleteForm.cancel',
                    'text' => '{"es":"Cancelar","ca":"Cancel·lar","en":"Cancel"}',
                ),
            69 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.deleteForm.confirm',
                    'text' => '{"es":"Confirmar","ca":"Confirmar","en":"Confirm"}',
                ),
            70 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.deleteForm.close',
                    'text' => '{"es":"Cerrar","ca":"Tancar","en":"Close"}',
                ),
            71 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.datatable.field.id',
                    'text' => '{"es":"ID","ca":"ID","en":"ID"}',
                ),
            72 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.datatable.field.group',
                    'text' => '{"es":"Grupo","ca":"Grup","en":"Group"}',
                ),
            73 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.datatable.field.key',
                    'text' => '{"es":"Key","ca":"Key","en":"Key"}',
                ),
            74 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatable.sweetalert.translations.title',
                    'text' => '{"es":"Traducir al","ca":"Traduir al","en":"Translate to"}',
                ),
            75 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatable.sweetalert.translations.text',
                    'text' => '{"es":"Key:","ca":"Key:","en":"Key:"}',
                ),
            76 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatable.sweetalert.translations.success',
                    'text' => '{"es":"La traducci\\u00f3n ha sido guardada correctamente","ca":"La traducci\\u00f3 ha estat guardada correctament","en":"The translation has been saved successfully"}',
                ),
            77 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.sweetalert.buttons.confirm',
                    'text' => '{"es":"Confirmar","ca":"Confirmar","en":"Confirm"}',
                ),
            78 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.sweetalert.buttons.cancel',
                    'text' => '{"es":"Cancelar","ca":"Cancel\\u00b7lar","en":"Cancel"}',
                ),
            79 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatables.sweetalert.buttons.close',
                    'text' => '{"es":"Cerrar","ca":"Tancar","en":"Close"}',
                ),
            80 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.create.title',
                    'text' => '{"es":"Nueva traducci\\u00f3n","ca":"Nova traducci\\u00f3","en":"New translation"}',
                ),
            81 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.index.page-title',
                    'text' => '{"es":"Traducciones","ca":"Traduccions","en":"Translations"}',
                ),
            82 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.index.new',
                    'text' => '{"es":"Nueva","ca":"Nova","en":"New"}',
                ),
            83 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.create.page-title',
                    'text' => '{"es":"Nueva traducci\\u00f3n","ca":"Nova traducci\\u00f3","en":"New translation"}',
                ),
            84 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.create.web-title',
                    'text' => '{"es":"Traducciones","ca":"Traduccions","en":"Translations"}',
                ),
            85 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.index.breadcrumb.title',
                    'text' => '{"es":"Traducciones","ca":"Traduccions","en":"Translations"}',
                ),
            86 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.create.breadcrumb.title',
                    'text' => '{"es":"Nueva","ca":"Nova","en":"New"}',
                ),
            87 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.form.group',
                    'text' => '{"es":"Grupo","ca":"Grup","en":"Group"}',
                ),
            88 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.form.key',
                    'text' => '{"es":"Key","ca":"Key","en":"Key"}',
                ),
            89 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.form.save',
                    'text' => '{"es":"Guardar","ca":"Guardar","en":"Save"}',
                ),
            90 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.index.web-title',
                    'text' => '{"es":"Traducciones","ca":"Traduccions","en":"Translations"}',
                ),
            91 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.form.text-es',
                    'text' => '{"es":"Traducci\\u00f3n en Castellano","ca":"Traducci\\u00f3 en Castell\\u00e0","en":"Translate into Spanish"}',
                ),
            92 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.form.text-ca',
                    'text' => '{"es":"Traducci\\u00f3n en Catal\\u00e1n","ca":"Traducci\\u00f3 en Catal\\u00e0","en":"Translate into Catalan"}',
                ),
            93 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.form.text-en',
                    'text' => '{"es":"Traducci\\u00f3n en Ingl\\u00e9s","ca":"Traducci\\u00f3 en Angl\\u00e8s","en":"Translate into English"}',
                ),
            94 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.datatable.field.es',
                    'text' => '{"es":"Castellano","ca":"Castell\\u00e0","en":"Spanish"}',
                ),
            95 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.datatable.field.ca',
                    'text' => '{"es":"Catal\\u00e1n","ca":"Catal\\u00e0","en":"Catalan"}',
                ),
            96 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.datatable.field.en',
                    'text' => '{"es":"Ingl\\u00e9s","ca":"Angl\\u00e8s","en":"English"}',
                ),
            97 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.index.alert.created.title',
                    'text' => '{"es":"Traducci\\u00f3n creada","ca":"Traducci\\u00f3 creada","en":"Translation created"}',
                ),
            98 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.index.alert.created.description',
                    'text' => '{"es":"La traducci\\u00f3n ha sido creada correctamente","ca":"La traducci\\u00f3 ha estat creada correctament","en":"The translation has been created correctly"}',
                ),
            99 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.create.web-title',
                    'text' => '{"es":"Nueva traducci\\u00f3n","ca":"Nova traducci\\u00f3","en":"New translation"}',
                ),
            100 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.create.page-title',
                    'text' => '{"es":"Nueva traducci\\u00f3n","ca":"Nova traducci\\u00f3","en":"New translation"}',
                ),
            101 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.create.alert.errors.title',
                    'text' => '{"es":"Se ha producido un error al crear una nueva traducci\\u00f3n","ca":"S\'ha produ\\u00eft un error en crear una nova traducci\\u00f3","en":"An error occurred when creating a new translation"}',
                ),
            102 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.create.alert.errors.description',
                    'text' => '{"es":"Se ha producido un error al crear una nueva traducci\\u00f3n","ca":"S\'ha produ\\u00eft un error en crear una nova traducci\\u00f3","en":"An error occurred when creating a new translation"}',
                ),
            103 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatable.sweetalert.translations.error',
                    'text' => '{"es":"Se ha producido un error al intentar guardar la traducci\\u00f3n","ca":"S\'ha produ\\u00eft un error en intentar guardar la traducci\\u00f3","en":"An error occurred while trying to save the translation"}',
                ),
            104 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.validations.key.required',
                    'text' => '{"es":"La key de traducci\\u00f3n es obligatoria","ca":"La key de traducci\\u00f3 \\u00e9s obligat\\u00f2ria","en":"The translation key is mandatory"}',
                ),
            105 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.validations.key.unique',
                    'text' => '{"es":"La key de traducci\\u00f3n debe ser \\u00fanica","ca":"La key de traducci\\u00f3 ha de ser \\u00fanica","en":"The translation key must be unique"}',
                ),
            106 =>
                array (
                    'group' => 'mage',
                    'key' => 'translations.validations.group.required',
                    'text' => '{"es":"El grupo de la traducci\\u00f3n es obligatorio","ca":"El grup de la traducci\\u00f3 \\u00e9s obligatori","en":"The translation group is mandatory"}',
                ),
            107 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.index.web-title',
                    'text' => '{"es":"Usuarios","ca":"Usuaris","en":"Users"}',
                ),
            108 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.index.page-title',
                    'text' => '{"es":"Usuarios","ca":"Usuaris","en":"Users"}',
                ),
            109 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.index.breadcrumb.title',
                    'text' => '{"es":"Usuarios","ca":"Usuaris","en":"Users"}',
                ),
            110 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.create.web-title',
                    'text' => '{"es":"Nuevo usuario","ca":"Nou usuari","en":"New user"}',
                ),
            111 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.create.page-title',
                    'text' => '{"es":"Nuevo usuario","ca":"Nou usuari","en":"New user"}',
                ),
            112 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.create.breadcrumb.title',
                    'text' => '{"es":"Nuevo","ca":"Nou","en":"New"}',
                ),
            113 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.create.alert.errors.title',
                    'text' => '{"es":"Se ha producido un error al crear un nuevo usuario","ca":"S\'ha produ\\u00eft un error en crear un nou usuari","en":"An error occurred when creating a new user"}',
                ),
            114 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.validations.name.required',
                    'text' => '{"es":"El nombre de usuario es obligatorio","ca":"El nom d\'usuari \\u00e9s obligatori","en":"The user\'s name is mandatory"}',
                ),
            115 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.validations.email.required',
                    'text' => '{"es":"El email del usuario es obligatorio","ca":"L\'email de l\'usuari \\u00e9s obligatori","en":"The user\'s email address is mandatory"}',
                ),
            116 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.validations.email.email',
                    'text' => '{"es":"El email del usuario no tiene un formato correcto","ca":"L\'email de l\'usuari no t\\u00e9 un format correcte","en":"The user\'s email is not formatted correctly"}',
                ),
            117 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.validations.email.unique',
                    'text' => '{"es":"El email del usuario debe ser \\u00fanico","ca":"L\'email de l\'usuari ha de ser \\u00fanic","en":"The user\'s email must be unique"}',
                ),
            118 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.validations.language.required',
                    'text' => '{"es":"El idioma del usuario es obligatorio","ca":"L\'idioma de l\'usuari \\u00e9s obligatori","en":"The user\'s language is mandatory"}',
                ),
            119 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.validations.roles.required',
                    'text' => '{"es":"El\\/los roles del usuario es\\/son obligatorios","ca":"El\\/els rols de l\'usuari \\u00e9s\\/s\\u00f3n obligatoris","en":"The user\'s role(s) is\\/are mandatory"}',
                ),
            120 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.index.alert.created.title',
                    'text' => '{"es":"Usuario creado","ca":"Usuari creat","en":"User created"}',
                ),
            121 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.index.alert.created.description',
                    'text' => '{"es":"El usuario ha sido creado correctamente","ca":"L\'usuari ha estat creat correctament","en":"The user has been created correctly"}',
                ),
            122 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.edit.web-title',
                    'text' => '{"es":"Editar usuario","ca":"Editar usuari","en":"Edit user"}',
                ),
            123 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.edit.page-title',
                    'text' => '{"es":"Editar usuario","ca":"Editar usuari","en":"Edit user"}',
                ),
            124 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.edit.breadcrumb.title',
                    'text' => '{"es":"Editar","ca":"Editar","en":"Edit"}',
                ),
            125 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.edit.alert.errors.title',
                    'text' => '{"es":"Se ha producido un error al actualizar el usuario","ca":"S\'ha produ\\u00eft un error en actualitzar l\'usuari","en":"An error occurred when updating the user"}',
                ),
            126 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatable.sweetalert.users.title',
                    'text' => '{"es":"\\u00bfEliminar usuario?","ca":"Eliminar usuari?","en":"Delete user?"}',
                ),
            127 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatable.sweetalert.users.text',
                    'text' => '{"es":"\\u00bfEst\\u00e1s a punto de eliminar el usuario, quieres continuar?","ca":"Est\\u00e0s a punt d\'eliminar l\'usuari, vols continuar?","en":"Are you about to delete the user, do you want to continue?"}',
                ),
            128 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatable.sweetalert.users.success',
                    'text' => '{"es":"El usuario ha sido eliminado","ca":"L\'usuari ha estat eliminat","en":"The user has been deleted"}',
                ),
            129 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatable.sweetalert.users.error',
                    'text' => '{"es":"Se ha producido un error al intentar eliminar el usuario","ca":"S\'ha produ\\u00eft un error en intentar eliminar l\'usuari","en":"An error occurred while trying to delete the user"}',
                ),
            130 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.index.breadcrumb.title',
                    'text' => '{"es":"Roles","ca":"Rols","en":"Roles"}',
                ),
            131 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.index.web-title',
                    'text' => '{"es":"Roles","ca":"Rols","en":"Roles"}',
                ),
            132 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.index.page-title',
                    'text' => '{"es":"Roles","ca":"Rols","en":"Roles"}',
                ),
            133 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.create.web-title',
                    'text' => '{"es":"Nuevo rol","ca":"Nou rol","en":"New role"}',
                ),
            134 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.create.page-title',
                    'text' => '{"es":"Nuevo rol","ca":"Nou rol","en":"New role"}',
                ),
            135 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.create.breadcrumb.title',
                    'text' => '{"es":"Nuevo","ca":"Nou","en":"New"}',
                ),
            136 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.create.alert.errors.title',
                    'text' => '{"es":"Se ha producido un error al crear un nuevo rol","ca":"S\'ha produ\\u00eft un error en crear un nou rol","en":"An error occurred when creating a new role"}',
                ),
            137 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.validations.name.required',
                    'text' => '{"es":"El nombre del rol es obligatorio","ca":"El nom del rol \\u00e9s obligatori","en":"The name of the role is mandatory"}',
                ),
            138 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.validations.name.unique',
                    'text' => '{"es":"El nombre del rol debe ser \\u00fanico","ca":"El nom del rol ha de ser \\u00fanic","en":"The name of the role must be unique"}',
                ),
            139 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.index.alert.created.title',
                    'text' => '{"es":"Rol creado","ca":"Rol creat","en":"Role created"}',
                ),
            140 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.index.alert.created.description',
                    'text' => '{"es":"El rol ha sido creado correctamente","ca":"El rol ha estat creat correctament","en":"The role has been created correctly"}',
                ),
            141 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.show.web-title',
                    'text' => '{"es":"Rol","ca":"Rol","en":"Role"}',
                ),
            142 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.show.page-title',
                    'text' => '{"es":"Rol","ca":"Rol","en":"Role"}',
                ),
            143 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.show.breadcrumb.title',
                    'text' => '{"es":"Detalles","ca":"Detalls","en":"Details"}',
                ),
            144 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.edit.breadcrumb.title',
                    'text' => '{"es":"Editar","ca":"Editar","en":"Edit"}',
                ),
            145 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.edit.title',
                    'text' => '{"es":"Editar rol","ca":"Editar rol","en":"Edit role"}',
                ),
            146 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.edit.web-title',
                    'text' => '{"es":"Editar rol","ca":"Editar rol","en":"Edit role"}',
                ),
            147 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.edit.page-title',
                    'text' => '{"es":"Editar rol","ca":"Editar rol","en":"Edit role"}',
                ),
            148 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.index.alert.updated.title',
                    'text' => '{"es":"Rol actualizado","ca":"Rol actualitzat","en":"Updated role"}',
                ),
            149 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.index.alert.updated.description',
                    'text' => '{"es":"El rol ha sido actualizado correctamente","ca":"El rol ha estat actualitzat correctament","en":"The role has been updated correctly"}',
                ),
            150 =>
                array (
                    'group' => 'mage',
                    'key' => 'roles.edit.alert.errors.title',
                    'text' => '{"es":"Se ha producido un error al actualizar el rol","ca":"S\'ha produ\\u00eft un error en actualitzar el rol","en":"An error occurred while updating the role"}',
                ),
            151 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatable.sweetalert.roles.title',
                    'text' => '{"es":"\\u00bfEliminar rol?","ca":"Eliminar rol?","en":"Delete role?"}',
                ),
            152 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatable.sweetalert.roles.text',
                    'text' => '{"es":"\\u00bfEst\\u00e1s a punto de eliminar el rol, quieres continuar?","ca":"Est\\u00e0s a punt d\'eliminar el rol, vols continuar?","en":"You\'re about to eliminate the role, do you want to continue?"}',
                ),
            153 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatable.sweetalert.roles.success',
                    'text' => '{"es":"El rol ha sido eliminado","ca":"El rol ha estat eliminat","en":"The role has been removed"}',
                ),
            154 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatable.sweetalert.roles.error',
                    'text' => '{"es":"Se ha producido un error al intentar eliminar el rol","ca":"S\'ha produ\\u00eft un error en intentar eliminar el rol","en":"An error occurred when trying to remove the role"}',
                ),
            155 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.show.web-title',
                    'text' => '{"es":"Permisos","ca":"Permisos","en":"Permissions"}',
                ),
            156 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.show.page-title',
                    'text' => '{"es":"Permisos","ca":"Permisos","en":"Permissions"}',
                ),
            157 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.index.datatable.title',
                    'text' => '{"es":"Listado de permisos","ca":"Llistat de permisos","en":"List of permissions"}',
                ),
            158 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.new',
                    'text' => '{"es":"Nuevo","ca":"Nou","en":"New"}',
                ),
            159 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.login.login',
                    'text' => '{"es":"Iniciar sesi\\u00f3n","ca":"Iniciar sessi\\u00f3","en":"Login"}',
                ),
            160 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.login.email',
                    'text' => '{"es":"eMail","ca":"eMail","en":"eMail"}',
                ),
            161 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.login.password',
                    'text' => '{"es":"Contrase\\u00f1a","ca":"Contrasenya","en":"Password"}',
                ),
            162 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.login.signin',
                    'text' => '{"es":"Entrar","ca":"Entrar","en":"Sign in"}',
                ),
            163 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.login.forgot-password',
                    'text' => '{"es":"Recordar contrase\\u00f1a","ca":"Recordar contrasenya","en":"Forgot password"}',
                ),
            164 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.form.name',
                    'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
                ),
            165 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.form.name.placeholder',
                    'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
                ),
            166 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.form.save',
                    'text' => '{"es":"Guardar","ca":"Guardar","en":"Save"}',
                ),
            167 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.create.alert.errors.title',
                    'text' => '{"es":"Se ha producido un error al crear un nuevo permiso","ca":"S\'ha produ\\u00eft un error en crear un nou perm\\u00eds","en":"An error occurred when creating a new permission"}',
                ),
            168 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.index.alert.created.title',
                    'text' => '{"es":"Permiso creado","ca":"Perm\\u00eds creat","en":"Permission created"}',
                ),
            169 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.index.alert.created.description',
                    'text' => '{"es":"El permiso ha sido creado correctamente","ca":"El perm\\u00eds ha estat creat correctament","en":"The permission has been created correctly"}',
                ),
            170 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.create.web-title',
                    'text' => '{"es":"Nuevo permiso","ca":"Nou perm\\u00eds","en":"New permission"}',
                ),
            171 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.create.page-title',
                    'text' => '{"es":"Nuevo permiso","ca":"Nou perm\\u00eds","en":"New permission"}',
                ),
            172 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.index.breadcrumb.title',
                    'text' => '{"es":"Permisos","ca":"Permisos","en":"Permissions"}',
                ),
            173 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.create.breadcrumb.title',
                    'text' => '{"es":"Nuevo","ca":"Nou","en":"New"}',
                ),
            174 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.validations.name.required',
                    'text' => '{"es":"El nombre del permiso es obligatorio","ca":"El nom del perm\\u00eds \\u00e9s obligatori","en":"The name of the permission is mandatory"}',
                ),
            175 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.validations.name.unique',
                    'text' => '{"es":"El nombre del permiso debe ser \\u00fanico","ca":"El nom del perm\\u00eds ha de ser \\u00fanic","en":"The name of the permission must be unique"}',
                ),
            176 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.edit.web-title',
                    'text' => '{"es":"Editar permiso","ca":"Editar perm\\u00eds","en":"Edit permission"}',
                ),
            177 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.edit.page-title',
                    'text' => '{"es":"Editar permiso","ca":"Editar perm\\u00eds","en":"Edit permission"}',
                ),
            178 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.edit.breadcrumb.title',
                    'text' => '{"es":"Editar","ca":"Editar","en":"Edit"}',
                ),
            179 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.edit.title',
                    'text' => '{"es":"Editar permiso","ca":"Editar perm\\u00eds","en":"Edit permission"}',
                ),
            180 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.index.alert.updated.title',
                    'text' => '{"es":"Permiso actualizado","ca":"Perm\\u00eds actualitzat","en":"Updated permission"}',
                ),
            181 =>
                array (
                    'group' => 'mage',
                    'key' => 'permissions.index.alert.updated.description',
                    'text' => '{"es":"El permiso ha sido actualizado correctamente","ca":"El perm\\u00eds ha estat actualitzat correctament","en":"The permission has been updated correctly"}',
                ),
            182 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatable.sweetalert.permissions.title',
                    'text' => '{"es":"\\u00bfEliminar permiso?","ca":"Eliminar perm\\u00eds?","en":"Delete permission?"}',
                ),
            183 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatable.sweetalert.permissions.text',
                    'text' => '{"es":"\\u00bfEst\\u00e1s a punto de eliminar el permiso, quieres continuar?","ca":"Est\\u00e0s a punt d\'eliminar el perm\\u00eds, vols continuar?","en":"You\'re about to delete the permission, do you want to continue?"}',
                ),
            184 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatable.sweetalert.permissions.success',
                    'text' => '{"es":"El permiso ha sido eliminado","ca":"El perm\\u00eds ha estat eliminat","en":"The permission has been removed"}',
                ),
            185 =>
                array (
                    'group' => 'mage',
                    'key' => 'datatable.sweetalert.permissions.error',
                    'text' => '{"es":"Se ha producido un error al intentar eliminar el permiso","ca":"S\'ha produ\\u00eft un error en intentar eliminar el perm\\u00eds","en":"An error occurred while attempting to delete the permission"}',
                ),
            186 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.validations.email.required',
                    'text' => '{"es":"El email es obligatorio","ca":"L\'email \\u00e9s obligatori","en":"The email is mandatory"}',
                ),
            187 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.validations.password.required',
                    'text' => '{"es":"La contrase\\u00f1a es obligatoria","ca":"La contrasenya \\u00e9s obligat\\u00f2ria","en":"The password is mandatory"}',
                ),
            188 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.login.invalid-credentials',
                    'text' => '{"es":"Las credenciales son incorrectas","ca":"Les credencials s\\u00f3n incorrectes","en":"The credentials are incorrect"}',
                ),
            189 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.forgot-password',
                    'text' => '{"es":"Recordar contrase\\u00f1a","ca":"Recordar contrasenya","en":"Forgot password"}',
                ),
            190 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.forgot-password.email',
                    'text' => '{"es":"eMail","ca":"eMail","en":"eMail"}',
                ),
            191 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.forgot-password.reset',
                    'text' => '{"es":"Restablecer","ca":"Restablir","en":"Reset"}',
                ),
            192 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.validations.email.string',
                    'text' => '{"es":"El eMail debe ser una cadena","ca":"L\'eMail ha de ser una cadena","en":"The eMail must be a string"}',
                ),
            193 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.validations.email.email',
                    'text' => '{"es":"El eMail debe tener el formato correcto","ca":"L\'eMail ha de tenir el format correcte","en":"The eMail must be in the correct format"}',
                ),
            194 =>
                array (
                    'group' => 'passwords',
                    'key' => 'user',
                    'text' => '{"es":"El usuario no ha sido encontrado","ca":"L\'usuari no ha estat trobat","en":"The user has not been found"}',
                ),
            195 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.validations.password.string',
                    'text' => '{"es":"La contrase\\u00f1a debe ser una cadena","ca":"La contrasenya ha de ser una cadena","en":"The password must be a string"}',
                ),
            196 =>
                array (
                    'group' => 'passwords',
                    'key' => 'sent',
                    'text' => '{"es":"El eMail para recuperar su contrase\\u00f1a ha sido enviado","ca":"L\'eMail per a recuperar la seva contrasenya ha estat enviat","en":"The eMail to recovery your password has been sent"}',
                ),
            197 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.reset-password',
                    'text' => '{"es":"Restablecer contrase\\u00f1a","ca":"Restablir contrasenya","en":"Reset password"}',
                ),
            198 =>
                array (
                    'group' => 'passwords',
                    'key' => 'reset',
                    'text' => '{"es":"La contrase\\u00f1a ha sido restablecida correctamente","ca":"La contrasenya ha estat restablerta correctament","en":"The password has been reset correctly"}',
                ),
            199 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.reset-password.email',
                    'text' => '{"es":"eMail","ca":"eMail","en":"eMail"}',
                ),
            200 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.reset-password.password',
                    'text' => '{"es":"Contrase\\u00f1a","ca":"Contrasenya","en":"Password"}',
                ),
            201 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.reset-password.repeat-password',
                    'text' => '{"es":"Confirmar contrase\\u00f1a","ca":"Confirmar contrasenya","en":"Confirm password"}',
                ),
            202 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.reset-password.reset',
                    'text' => '{"es":"Guardar","ca":"Guardar","en":"Save"}',
                ),
            203 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.validations.token.required',
                    'text' => '{"es":"El token es obligatorio","ca":"El token \\u00e9s obligatori","en":"The token is mandatory"}',
                ),
            204 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.validations.password.confirmed',
                    'text' => '{"es":"Las contrase\\u00f1as no coinciden","ca":"Les contrasenyes no coincideixen","en":"The passwords don\'t match"}',
                ),
            205 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.validations.password.min',
                    'text' => '{"es":"La longitud de la contrase\\u00f1a ha de ser de m\\u00ednimo 6 caracteres","ca":"La longitud de la contrasenya ha de ser de m\\u00ednim 6 car\\u00e0cters","en":"The length of the password must be at least 6 characters"}',
                ),
            206 =>
                array (
                    'group' => 'mage',
                    'key' => 'auth.reset-password.email.subject',
                    'text' => '{"es":"Solicitud de restablecimiento de contrase\\u00f1a","ca":"Sol\\u00b7licitud de restabliment de contrasenya","en":"Password Reset Request"}',
                ),
            207 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.index.alert.updated.title',
                    'text' => '{"es":"Usuario actualizado","ca":"Usuari actualitzat","en":"Updated user"}',
                ),
            208 =>
                array (
                    'group' => 'mage',
                    'key' => 'users.index.alert.updated.description',
                    'text' => '{"es":"El usuario ha sido actualizado correctamente","ca":"L\'usuari ha estat actualitzat correctament","en":"The user has been updated correctly"}',
                ),
            209 =>
                array (
                    'group' => 'mage',
                    'key' => 'errors.404.web-title',
                    'text' => '{"es":"La p\\u00e1gina no ha sido encontrada","ca":"La p\\u00e0gina no ha estat trobada","en":"Page not found"}',
                ),
            210 =>
                array (
                    'group' => 'mage',
                    'key' => 'errors.404.page-title',
                    'text' => '{"es":"P\\u00e1gina no encontrada","ca":"P\\u00e0gina no trobada","en":"Page not found"}',
                ),
            211 =>
                array (
                    'group' => 'mage',
                    'key' => 'errors.404.breadcrumb.title',
                    'text' => '{"es":"404","ca":"404","en":"404"}',
                ),
            212 =>
                array (
                    'group' => 'mage',
                    'key' => 'errors.403.web-title',
                    'text' => '{"es":"No tiene permisos para acceder","ca":"No t\\u00e9 permisos per a accedir","en":"You don\'t have permission to access"}',
                ),
            213 =>
                array (
                    'group' => 'mage',
                    'key' => 'errors.403.page-title',
                    'text' => '{"es":"Acceso no permitido","ca":"Acc\\u00e9s no perm\\u00e8s","en":"Access not allowed"}',
                ),
            214 =>
                array (
                    'group' => 'mage',
                    'key' => 'errors.403.breadcrumb.title',
                    'text' => '{"es":"403","ca":"403","en":"403"}',
                ),
            215 =>
                array (
                    'group' => 'mage',
                    'key' => 'dashboard.index.web-title',
                    'text' => '{"es":"Dashboard","ca":"Dashboard","en":"Dashboard"}',
                ),
            216 =>
                array (
                    'group' => 'mage',
                    'key' => 'dashboard.index.page-title',
                    'text' => '{"es":"Dashboard","ca":"Dashboard","en":"Dashboard"}',
                ),
            217 =>
                array (
                    'group' => 'mage',
                    'key' => 'dashboard.index.breadcrumb.title',
                    'text' => '{"es":"Dashboard","ca":"Dashboard","en":"Dashboard"}',
                ),
            218 =>
                array (
                    'group' => 'mage',
                    'key' => 'dashboard.index.title',
                    'text' => '{"es":"Dashboard","ca":"Dashboard","en":"Dashboard"}',
                ),
            219 =>
                array (
                    'group' => 'mage',
                    'key' => 'sidebar.dashboard',
                    'text' => '{"es":"Dashboard","ca":"Dashboard","en":"Dashboard"}',
                ),
        ));
    }
}