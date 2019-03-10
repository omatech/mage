<?php

namespace Omatech\Mage\Database\Seeds;

use Illuminate\Database\Seeder;

class LanguageLinesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 207; $i++) {
            \DB::table('language_lines')->where('id', $i)->delete();
        }

        \DB::table('language_lines')->insert(array (
            0 =>
            array (
                'id' => 1,
                'group' => 'mage',
                'key' => 'auth.user.logout',
                'text' => '{"es":"Cerrar sesi\\u00f3n", "ca":"Tancar sessi\\u00f3","en":"Logout"}',
            ),
            1 =>
            array (
                'id' => 2,
                'group' => 'mage',
                'key' => 'sidebar.administration',
                'text' => '{"es":"Administración","ca":"Administració","en":"Administration"}',
            ),
            2 =>
            array (
                'id' => 3,
                'group' => 'mage',
                'key' => 'sidebar.users-management',
                'text' => '{"es":"Gestión de usuarios","ca":"Gestió d\'usuaris","en":"User Management"}',
            ),
            3 =>
            array (
                'id' => 4,
                'group' => 'mage',
                'key' => 'sidebar.users',
                'text' => '{"es":"Usuarios","ca":"Usuaris","en":"Users"}',
            ),
            4 =>
            array (
                'id' => 5,
                'group' => 'mage',
                'key' => 'sidebar.roles',
                'text' => '{"es":"Roles","ca":"Rols","en":"Roles"}',
            ),
            5 =>
            array (
                'id' => 6,
                'group' => 'mage',
                'key' => 'sidebar.permissions',
                'text' => '{"es":"Permisos","ca":"Permisos","en":"Permissions"}',
            ),
            6 =>
            array (
                'id' => 7,
                'group' => 'mage',
                'key' => 'sidebar.translations',
                'text' => '{"es":"Traducciones","ca":"Traduccions","en":"Translations"}',
            ),
            7 =>
            array (
                'id' => 8,
                'group' => 'mage',
                'key' => 'sidebar.navigation',
                'text' => '{"es":"Navegación","ca":"Navegació","en":"Navigation"}',
            ),
            8 =>
            array (
                'id' => 9,
                'group' => 'mage',
                'key' => 'permissions.create.title',
                'text' => '{"es":"Nuevo permiso","ca":"Nou permís","en":"New permission"}',
            ),
            9 =>
            array (
                'id' => 10,
                'group' => 'mage',
                'key' => 'permissions.index.title',
                'text' => '{"es":"Permisos","ca":"Permisos","en":"Permissions"}',
            ),
            10 =>
            array (
                'id' => 11,
                'group' => 'mage',
                'key' => 'permissions.datatable.field.id',
                'text' => '{"es":"ID","ca":"ID","en":"ID"}',
            ),
            11 =>
            array (
                'id' => 12,
                'group' => 'mage',
                'key' => 'permissions.datatable.field.name',
                'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
            ),
            12 =>
            array (
                'id' => 13,
                'group' => 'mage',
                'key' => 'permissions.datatable.field.actions',
                'text' => '{"es":"Acciones","ca":"Accions","en":"Actions"}',
            ),
            13 =>
            array (
                'id' => 14,
                'group' => 'mage',
                'key' => 'permissions.update.title',
                'text' => '{"es":"Actualizar permiso","ca":"__NOT TRANSLATED__","en":"__NOT TRANSLATED__"}',
            ),
            14 =>
            array (
                'id' => 15,
                'group' => 'mage',
                'key' => 'roles.create.title',
                'text' => '{"es":"Nuevo rol","ca":"Nou rol","en":"New role"}',
            ),
            15 =>
            array (
                'id' => 16,
                'group' => 'mage',
                'key' => 'roles.index.title',
                'text' => '{"es":"Listado de roles","ca":"Llistat de rols","en":"List of roles"}',
            ),
            16 =>
            array (
                'id' => 17,
                'group' => 'mage',
                'key' => 'roles.datatable.field.id',
                'text' => '{"es":"ID","ca":"ID","en":"ID"}',
            ),
            17 =>
            array (
                'id' => 18,
                'group' => 'mage',
                'key' => 'roles.datatable.field.name',
                'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
            ),
            18 =>
            array (
                'id' => 19,
                'group' => 'mage',
                'key' => 'roles.datatable.field.actions',
                'text' => '{"es":"Acciones","ca":"Accions","en":"Actions"}',
            ),
            19 =>
            array (
                'id' => 20,
                'group' => 'mage',
                'key' => 'roles.form.name',
                'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
            ),
            20 =>
            array (
                'id' => 21,
                'group' => 'mage',
                'key' => 'roles.form.name.placeholder',
                'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
            ),
            21 =>
            array (
                'id' => 22,
                'group' => 'mage',
                'key' => 'roles.form.save',
                'text' => '{"es":"Guardar","ca":"Guardar","en":"Save"}',
            ),
            22 =>
            array (
                'id' => 23,
                'group' => 'mage',
                'key' => 'roles.index.datatable.title',
                'text' => '{"es":"Listado de roles","ca":"Llistat de rols","en":"List of roles"}',
            ),
            23 =>
            array (
                'id' => 24,
                'group' => 'mage',
                'key' => 'roles.new',
                'text' => '{"es":"Nuevo","ca":"Nou","en":"New"}',
            ),
            24 =>
            array (
                'id' => 25,
                'group' => 'mage',
                'key' => 'roles.show.title',
                'text' => '{"es":"Rol","ca":"Rol","en":"Role"}',
            ),
            25 =>
            array (
                'id' => 26,
                'group' => 'mage',
                'key' => 'translations.title',
                'text' => '{"es":"Traducciones","ca":"Traduccions","en":"Translations"}',
            ),
            26 =>
            array (
                'id' => 27,
                'group' => 'mage',
                'key' => 'translations.index.title',
                'text' => '{"es":"Listado de traducciones","ca":"Llistat de traduccions","en":"List of translations"}',
            ),
            27 =>
            array (
                'id' => 28,
                'group' => 'mage',
                'key' => 'users.create.title',
                'text' => '{"es":"Nuevo usuario","ca":"Nou usuari","en":"New user"}',
            ),
            28 =>
            array (
                'id' => 29,
                'group' => 'mage',
                'key' => 'users.index.title',
                'text' => '{"es":"Listado de usuarios","ca":"Llistat d\'usuaris","en":"List of users"}',
            ),
            29 =>
            array (
                'id' => 30,
                'group' => 'mage',
                'key' => 'users.datatable.field.id',
                'text' => '{"es":"ID","ca":"ID","en":"ID"}',
            ),
            30 =>
            array (
                'id' => 31,
                'group' => 'mage',
                'key' => 'users.datatable.field.name',
                'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
            ),
            31 =>
            array (
                'id' => 32,
                'group' => 'mage',
                'key' => 'users.datatable.field.email',
                'text' => '{"es":"eMail","ca":"eMail","en":"eMail"}',
            ),
            32 =>
            array (
                'id' => 33,
                'group' => 'mage',
                'key' => 'users.datatable.field.rol',
                'text' => '{"es":"Rol","ca":"Rol","en":"Role"}',
            ),
            33 =>
            array (
                'id' => 34,
                'group' => 'mage',
                'key' => 'users.datatable.field.language',
                'text' => '{"es":"Idioma","ca":"Idioma","en":"Language"}',
            ),
            34 =>
            array (
                'id' => 35,
                'group' => 'mage',
                'key' => 'users.datatable.field.actions',
                'text' => '{"es":"Acciones","ca":"Accions","en":"Actions"}',
            ),
            35 =>
            array (
                'id' => 36,
                'group' => 'mage',
                'key' => 'users.edit.title',
                'text' => '{"es":"Editar usuario","ca":"Editar usuari","en":"Edit user"}',
            ),
            36 =>
            array (
                'id' => 37,
                'group' => 'mage',
                'key' => 'users.form.name',
                'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
            ),
            37 =>
            array (
                'id' => 38,
                'group' => 'mage',
                'key' => 'users.form.name.placeholder',
                'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
            ),
            38 =>
            array (
                'id' => 39,
                'group' => 'mage',
                'key' => 'users.form.email',
                'text' => '{"es":"eMail","ca":"eMail","en":"eMail"}',
            ),
            39 =>
            array (
                'id' => 40,
                'group' => 'mage',
                'key' => 'users.form.email.placeholder',
                'text' => '{"es":"eMail","ca":"eMail","en":"eMail"}',
            ),
            40 =>
            array (
                'id' => 41,
                'group' => 'mage',
                'key' => 'users.form.language',
                'text' => '{"es":"Idioma","ca":"Idioma","en":"Language"}',
            ),
            41 =>
            array (
                'id' => 42,
                'group' => 'mage',
                'key' => 'users.form.language.placeholder',
                'text' => '{"es":"Idioma","ca":"Idioma","en":"Language"}',
            ),
            42 =>
            array (
                'id' => 43,
                'group' => 'mage',
                'key' => 'users.form.roles',
                'text' => '{"es":"Roles","ca":"Rols","en":"Roles"}',
            ),
            43 =>
            array (
                'id' => 44,
                'group' => 'mage',
                'key' => 'users.form.roles.placeholder',
                'text' => '{"es":"Roles","ca":"Rols","en":"Roles"}',
            ),
            44 =>
            array (
                'id' => 45,
                'group' => 'mage',
                'key' => 'users.form.save',
                'text' => '{"es":"Guardar","ca":"Guardar","en":"Save"}',
            ),
            45 =>
            array (
                'id' => 46,
                'group' => 'mage',
                'key' => 'users.index.datatable.title',
                'text' => '{"es":"Listado de usuarios","ca":"Llistat d\'usuaris","en":"List of users"}',
            ),
            46 =>
            array (
                'id' => 47,
                'group' => 'mage',
                'key' => 'users.new',
                'text' => '{"es":"Nuevo","ca":"Nou","en":"New"}',
            ),
            47 =>
            array (
                'id' => 48,
                'group' => 'mage',
                'key' => 'datatables.sProcessing',
                'text' => '{"es":"Procesando...","ca":"Processant...","en":"Processing..."}',
            ),
            48 =>
            array (
                'id' => 49,
                'group' => 'mage',
                'key' => 'datatables.sLengthMenu',
                'text' => '{"es":"Mostrar _MENU_ registros","ca":"Mostra _MENU_ registres","en":"Show _MENU_ entries"}',
            ),
            49 =>
            array (
                'id' => 50,
                'group' => 'mage',
                'key' => 'datatables.sZeroRecords',
                'text' => '{"es":"No se encontraron resultados","ca":"No s\'han trobat registres.","en":"No matching records found"}',
            ),
            50 =>
            array (
                'id' => 51,
                'group' => 'mage',
                'key' => 'datatables.sEmptyTable',
                'text' => '{"es":"Ningún dato disponible en esta tabla","ca":"Cap dada disponible en aquesta taula","en":"No data available in table"}',
            ),
            51 =>
            array (
                'id' => 52,
                'group' => 'mage',
                'key' => 'datatables.sInfo',
                'text' => '{"es":"Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros","ca":"Mostrant de _START_ a _END_ de _TOTAL_ registres","en":"Showing _START_ to _END_ of _TOTAL_ entries"}',
            ),
            52 =>
            array (
                'id' => 53,
                'group' => 'mage',
                'key' => 'datatables.sInfoEmpty',
                'text' => '{"es":"Mostrando registros del 0 al 0 de un total de 0 registros","ca":"Mostrant de 0 a 0 de 0 registres","en":"Showing 0 to 0 of 0 entries"}',
            ),
            53 =>
            array (
                'id' => 54,
                'group' => 'mage',
                'key' => 'datatables.sInfoFiltered',
            'text' => '{"es":"(filtrado de un total de _MAX_ registros)","ca":"(filtrat de _MAX_ total registres)","en":"(filtered from _MAX_ total entries)"}',
            ),
            54 =>
            array (
                'id' => 55,
                'group' => 'mage',
                'key' => 'datatables.sInfoPostFix',
                'text' => '{"es":"","ca":"","en":""}',
            ),
            55 =>
            array (
                'id' => 56,
                'group' => 'mage',
                'key' => 'datatables.sSearch',
                'text' => '{"es":"Buscar:","ca":"Filtrar:","en":"Search:"}',
            ),
            56 =>
            array (
                'id' => 57,
                'group' => 'mage',
                'key' => 'datatables.sUrl',
                'text' => '{"es":"","ca":"","en":""}',
            ),
            57 =>
            array (
                'id' => 58,
                'group' => 'mage',
                'key' => 'datatables.sInfoThousands',
                'text' => '{"es":",","ca":",","en":","}',
            ),
            58 =>
            array (
                'id' => 59,
                'group' => 'mage',
                'key' => 'datatables.sLoadingRecords',
                'text' => '{"es":"Cargando...","ca":"Carregant...","en":"Loading..."}',
            ),
            59 =>
            array (
                'id' => 60,
                'group' => 'mage',
                'key' => 'datatables.oPaginate.sFirst',
                'text' => '{"es":"Primero","ca":"Primer","en":"First"}',
            ),
            60 =>
            array (
                'id' => 61,
                'group' => 'mage',
                'key' => 'datatables.oPaginate.sLast',
                'text' => '{"es":"Último","ca":"Anterior","en":"Last"}',
            ),
            61 =>
            array (
                'id' => 62,
                'group' => 'mage',
                'key' => 'datatables.oPaginate.sNext',
                'text' => '{"es":"Siguiente","ca":"Seg\\u00fcent","en":"Next"}',
            ),
            62 =>
            array (
                'id' => 63,
                'group' => 'mage',
                'key' => 'datatables.oPaginate.sPrevious',
                'text' => '{"es":"Anterior","ca":"Últim","en":"Previous"}',
            ),
            63 =>
            array (
                'id' => 64,
                'group' => 'mage',
                'key' => 'datatables.oAria.sSortAscending',
                'text' => '{"es":": Activar para ordenar la columna de manera ascendente","ca":": Activar per a ordenar la columna de manera ascendent","en":": Activate to sort column ascending"}',
            ),
            64 =>
            array (
                'id' => 65,
                'group' => 'mage',
                'key' => 'datatables.oAria.sSortDescending',
                'text' => '{"es":": Activar para ordenar la columna de manera descendente","ca":": Activar per a ordenar la columna de manera descendent","en":": Activate to sort column descending"}',
            ),
            65 =>
            array (
                'id' => 66,
                'group' => 'mage',
                'key' => 'datatables.deleteForm.title',
                'text' => '{"es":"¿Eliminar recurso?","ca":"Eliminar recurs?","en":"Delete resource?"}',
            ),
            66 =>
            array (
                'id' => 67,
                'group' => 'mage',
                'key' => 'datatables.deleteForm.text',
                'text' => '{"es":"¿Estás seguro de que quieres eliminar este recurso?","ca":"Estàs segur que vols eliminar aquest recurs?","en":"Are you sure you want to delete this resource?"}',
            ),
            67 =>
            array (
                'id' => 68,
                'group' => 'mage',
                'key' => 'datatables.deleteForm.success',
                'text' => '{"es":"Recurso eliminado correctamente","ca":"Recurs eliminat correctament","en":"Resource successfully deleted"}',
            ),
            68 =>
            array (
                'id' => 69,
                'group' => 'mage',
                'key' => 'datatables.deleteForm.cancel',
                'text' => '{"es":"Cancelar","ca":"Cancel·lar","en":"Cancel"}',
            ),
            69 =>
            array (
                'id' => 70,
                'group' => 'mage',
                'key' => 'datatables.deleteForm.confirm',
                'text' => '{"es":"Confirmar","ca":"Confirmar","en":"Confirm"}',
            ),
            70 =>
            array (
                'id' => 71,
                'group' => 'mage',
                'key' => 'datatables.deleteForm.close',
                'text' => '{"es":"Cerrar","ca":"Tancar","en":"Close"}',
            ),
            71 =>
            array (
                'id' => 72,
                'group' => 'mage',
                'key' => 'translations.datatable.field.id',
                'text' => '{"es":"ID","ca":"ID","en":"ID"}',
            ),
            72 =>
            array (
                'id' => 73,
                'group' => 'mage',
                'key' => 'translations.datatable.field.group',
                'text' => '{"es":"Grupo","ca":"Grup","en":"Group"}',
            ),
            73 =>
            array (
                'id' => 74,
                'group' => 'mage',
                'key' => 'translations.datatable.field.key',
                'text' => '{"es":"Key","ca":"Key","en":"Key"}',
            ),
            74 =>
            array (
                'id' => 75,
                'group' => 'mage',
                'key' => 'datatable.sweetalert.translations.title',
                'text' => '{"es":"Traducir al","ca":"Traduir al","en":"Translate to"}',
            ),
            75 =>
            array (
                'id' => 76,
                'group' => 'mage',
                'key' => 'datatable.sweetalert.translations.text',
                'text' => '{"es":"Key:","ca":"Key:","en":"Key:"}',
            ),
            76 =>
            array (
                'id' => 77,
                'group' => 'mage',
                'key' => 'datatable.sweetalert.translations.success',
                'text' => '{"es":"La traducci\\u00f3n ha sido guardada correctamente","ca":"La traducci\\u00f3 ha estat guardada correctament","en":"The translation has been saved successfully"}',
            ),
            77 =>
            array (
                'id' => 78,
                'group' => 'mage',
                'key' => 'datatables.sweetalert.buttons.confirm',
                'text' => '{"es":"Confirmar","ca":"Confirmar","en":"Confirm"}',
            ),
            78 =>
            array (
                'id' => 79,
                'group' => 'mage',
                'key' => 'datatables.sweetalert.buttons.cancel',
                'text' => '{"es":"Cancelar","ca":"Cancel\\u00b7lar","en":"Cancel"}',
            ),
            79 =>
            array (
                'id' => 80,
                'group' => 'mage',
                'key' => 'datatables.sweetalert.buttons.close',
                'text' => '{"es":"Cerrar","ca":"Tancar","en":"Close"}',
            ),
            80 =>
            array (
                'id' => 81,
                'group' => 'mage',
                'key' => 'translations.create.title',
                'text' => '{"es":"Nueva traducci\\u00f3n","ca":"Nova traducci\\u00f3","en":"New translation"}',
            ),
            81 =>
            array (
                'id' => 82,
                'group' => 'mage',
                'key' => 'translations.index.page-title',
                'text' => '{"es":"Traducciones","ca":"Traduccions","en":"Translations"}',
            ),
            82 =>
            array (
                'id' => 83,
                'group' => 'mage',
                'key' => 'translations.index.new',
                'text' => '{"es":"Nueva","ca":"Nova","en":"New"}',
            ),
            83 =>
            array (
                'id' => 84,
                'group' => 'mage',
                'key' => 'translations.create.page-title',
                'text' => '{"es":"Nueva traducci\\u00f3n","ca":"Nova traducci\\u00f3","en":"New translation"}',
            ),
            84 =>
            array (
                'id' => 85,
                'group' => 'mage',
                'key' => 'translations.create.web-title',
                'text' => '{"es":"Traducciones","ca":"Traduccions","en":"Translations"}',
            ),
            85 =>
            array (
                'id' => 86,
                'group' => 'mage',
                'key' => 'translations.index.breadcrumb.title',
                'text' => '{"es":"Traducciones","ca":"Traduccions","en":"Translations"}',
            ),
            86 =>
            array (
                'id' => 87,
                'group' => 'mage',
                'key' => 'translations.create.breadcrumb.title',
                'text' => '{"es":"Nueva","ca":"Nova","en":"New"}',
            ),
            87 =>
            array (
                'id' => 88,
                'group' => 'mage',
                'key' => 'translations.form.group',
                'text' => '{"es":"Grupo","ca":"Grup","en":"Group"}',
            ),
            88 =>
            array (
                'id' => 89,
                'group' => 'mage',
                'key' => 'translations.form.key',
                'text' => '{"es":"Key","ca":"Key","en":"Key"}',
            ),
            89 =>
            array (
                'id' => 90,
                'group' => 'mage',
                'key' => 'translations.form.save',
                'text' => '{"es":"Guardar","ca":"Guardar","en":"Save"}',
            ),
            90 =>
            array (
                'id' => 91,
                'group' => 'mage',
                'key' => 'translations.index.web-title',
                'text' => '{"es":"Traducciones","ca":"Traduccions","en":"Translations"}',
            ),
            91 =>
            array (
                'id' => 92,
                'group' => 'mage',
                'key' => 'translations.form.text-es',
                'text' => '{"es":"Traducci\\u00f3n en Castellano","ca":"Traducci\\u00f3 en Castell\\u00e0","en":"Translate into Spanish"}',
            ),
            92 =>
            array (
                'id' => 93,
                'group' => 'mage',
                'key' => 'translations.form.text-ca',
                'text' => '{"es":"Traducci\\u00f3n en Catal\\u00e1n","ca":"Traducci\\u00f3 en Catal\\u00e0","en":"Translate into Catalan"}',
            ),
            93 =>
            array (
                'id' => 94,
                'group' => 'mage',
                'key' => 'translations.form.text-en',
                'text' => '{"es":"Traducci\\u00f3n en Ingl\\u00e9s","ca":"Traducci\\u00f3 en Angl\\u00e8s","en":"Translate into English"}',
            ),
            94 =>
            array (
                'id' => 95,
                'group' => 'mage',
                'key' => 'translations.datatable.field.es',
                'text' => '{"es":"Castellano","ca":"Castell\\u00e0","en":"Spanish"}',
            ),
            95 =>
            array (
                'id' => 96,
                'group' => 'mage',
                'key' => 'translations.datatable.field.ca',
                'text' => '{"es":"Catal\\u00e1n","ca":"Catal\\u00e0","en":"Catalan"}',
            ),
            96 =>
            array (
                'id' => 97,
                'group' => 'mage',
                'key' => 'translations.datatable.field.en',
                'text' => '{"es":"Ingl\\u00e9s","ca":"Angl\\u00e8s","en":"English"}',
            ),
            97 =>
            array (
                'id' => 98,
                'group' => 'mage',
                'key' => 'translations.index.alert.created.title',
                'text' => '{"es":"Traducci\\u00f3n creada","ca":"Traducci\\u00f3 creada","en":"Translation created"}',
            ),
            98 =>
            array (
                'id' => 99,
                'group' => 'mage',
                'key' => 'translations.index.alert.created.description',
                'text' => '{"es":"La traducci\\u00f3n ha sido creada correctamente","ca":"La traducci\\u00f3 ha estat creada correctament","en":"The translation has been created correctly"}',
            ),
            99 =>
            array (
                'id' => 100,
                'group' => 'mage',
                'key' => 'translations.create.web-title',
                'text' => '{"es":"Nueva traducci\\u00f3n","ca":"Nova traducci\\u00f3","en":"New translation"}',
            ),
            100 =>
            array (
                'id' => 101,
                'group' => 'mage',
                'key' => 'translations.create.page-title',
                'text' => '{"es":"Nueva traducci\\u00f3n","ca":"Nova traducci\\u00f3","en":"New translation"}',
            ),
            101 =>
            array (
                'id' => 102,
                'group' => 'mage',
                'key' => 'translations.create.alert.errors.title',
                'text' => '{"es":"Se ha producido un error al crear una nueva traducci\\u00f3n","ca":"S\'ha produ\\u00eft un error en crear una nova traducci\\u00f3","en":"An error occurred when creating a new translation"}',
            ),
            102 =>
            array (
                'id' => 103,
                'group' => 'mage',
                'key' => 'translations.create.alert.errors.description',
                'text' => '{"es":"Se ha producido un error al a\\u00f1adir una nueva traducci\\u00f3n","ca":"S\'ha produ\\u00eft un error en afegir una nova traducci\\u00f3","en":"An error occurred when adding a new translation"}',
            ),
            103 =>
            array (
                'id' => 104,
                'group' => 'mage',
                'key' => 'datatable.sweetalert.translations.error',
                'text' => '{"es":"Se ha producido un error al intentar guardar la traducci\\u00f3n","ca":"S\'ha produ\\u00eft un error en intentar guardar la traducci\\u00f3","en":"An error occurred while trying to save the translation"}',
            ),
            104 =>
            array (
                'id' => 105,
                'group' => 'mage',
                'key' => 'translations.validations.key.required',
                'text' => '{"es":"La key de traducci\\u00f3n es obligatoria","ca":"La key de traducci\\u00f3 \\u00e9s obligat\\u00f2ria","en":"The translation key is mandatory"}',
            ),
            105 =>
            array (
                'id' => 106,
                'group' => 'mage',
                'key' => 'translations.validations.key.unique',
                'text' => '{"es":"La key de traducci\\u00f3n debe ser \\u00fanica","ca":"La key de traducci\\u00f3 ha de ser \\u00fanica","en":"The translation key must be unique"}',
            ),
            106 =>
            array (
                'id' => 107,
                'group' => 'mage',
                'key' => 'translations.validations.group.required',
                'text' => '{"es":"El grupo de la traducci\\u00f3n es obligatorio","ca":"El grup de la traducci\\u00f3 \\u00e9s obligatori","en":"The translation group is mandatory"}',
            ),
            107 =>
            array (
                'id' => 108,
                'group' => 'mage',
                'key' => 'users.index.web-title',
                'text' => '{"es":"Usuarios","ca":"Usuaris","en":"Users"}',
            ),
            108 =>
            array (
                'id' => 109,
                'group' => 'mage',
                'key' => 'users.index.page-title',
                'text' => '{"es":"Usuarios","ca":"Usuaris","en":"Users"}',
            ),
            109 =>
            array (
                'id' => 110,
                'group' => 'mage',
                'key' => 'users.index.breadcrumb.title',
                'text' => '{"es":"Usuarios","ca":"Usuaris","en":"Users"}',
            ),
            110 =>
            array (
                'id' => 111,
                'group' => 'mage',
                'key' => 'users.create.web-title',
                'text' => '{"es":"Crear usuario","ca":"Crear usuari","en":"Create user"}',
            ),
            111 =>
            array (
                'id' => 112,
                'group' => 'mage',
                'key' => 'users.create.page-title',
                'text' => '{"es":"Nuevo usuario","ca":"Nou usuari","en":"New user"}',
            ),
            112 =>
            array (
                'id' => 113,
                'group' => 'mage',
                'key' => 'users.create.breadcrumb.title',
                'text' => '{"es":"Crear","ca":"Crear","en":"Create"}',
            ),
            113 =>
            array (
                'id' => 114,
                'group' => 'mage',
                'key' => 'users.create.alert.errors.title',
                'text' => '{"es":"Se ha producido un error al crear un nuevo usuario","ca":"S\'ha produ\\u00eft un error en crear un nou usuari","en":"An error occurred when creating a new user"}',
            ),
            114 =>
            array (
                'id' => 115,
                'group' => 'mage',
                'key' => 'users.validations.name.required',
                'text' => '{"es":"El nombre de usuario es obligatorio","ca":"El nom d\'usuari \\u00e9s obligatori","en":"The user\'s name is mandatory"}',
            ),
            115 =>
            array (
                'id' => 116,
                'group' => 'mage',
                'key' => 'users.validations.email.required',
                'text' => '{"es":"El email del usuario es obligatorio","ca":"L\'email de l\'usuari \\u00e9s obligatori","en":"The user\'s email address is mandatory"}',
            ),
            116 =>
            array (
                'id' => 117,
                'group' => 'mage',
                'key' => 'users.validations.email.email',
                'text' => '{"es":"El email del usuario no tiene un formato correcto","ca":"L\'email de l\'usuari no t\\u00e9 un format correcte","en":"The user\'s email is not formatted correctly"}',
            ),
            117 =>
            array (
                'id' => 118,
                'group' => 'mage',
                'key' => 'users.validations.email.unique',
                'text' => '{"es":"El email del usuario debe ser \\u00fanico","ca":"L\'email de l\'usuari ha de ser \\u00fanic","en":"The user\'s email must be unique"}',
            ),
            118 =>
            array (
                'id' => 119,
                'group' => 'mage',
                'key' => 'users.validations.language.required',
                'text' => '{"es":"El idioma del usuario es obligatorio","ca":"L\'idioma de l\'usuari \\u00e9s obligatori","en":"The user\'s language is mandatory"}',
            ),
            119 =>
            array (
                'id' => 120,
                'group' => 'mage',
                'key' => 'users.validations.roles.required',
            'text' => '{"es":"El\\/los roles del usuario es\\/son obligatorios","ca":"El\\/els rols de l\'usuari \\u00e9s\\/s\\u00f3n obligatoris","en":"The user\'s role(s) is\\/are mandatory"}',
            ),
            120 =>
            array (
                'id' => 121,
                'group' => 'mage',
                'key' => 'users.index.alert.created.title',
                'text' => '{"es":"Usuario creado","ca":"Usuari creat","en":"User created"}',
            ),
            121 =>
            array (
                'id' => 122,
                'group' => 'mage',
                'key' => 'users.index.alert.created.description',
                'text' => '{"es":"El usuario ha sido creado correctamente","ca":"L\'usuari ha estat creat correctament","en":"The user has been created correctly"}',
            ),
            122 =>
            array (
                'id' => 123,
                'group' => 'mage',
                'key' => 'users.edit.web-title',
                'text' => '{"es":"Editar usuario","ca":"Editar usuari","en":"Edit user"}',
            ),
            123 =>
            array (
                'id' => 124,
                'group' => 'mage',
                'key' => 'users.edit.page-title',
                'text' => '{"es":"Editar usuario","ca":"Editar usuari","en":"Edit user"}',
            ),
            124 =>
            array (
                'id' => 125,
                'group' => 'mage',
                'key' => 'users.edit.breadcrumb.title',
                'text' => '{"es":"Editar","ca":"Editar","en":"Edit"}',
            ),
            125 =>
            array (
                'id' => 126,
                'group' => 'mage',
                'key' => 'users.edit.alert.errors.title',
                'text' => '{"es":"Se ha producido un error al actualizar el usuario","ca":"S\'ha produ\\u00eft un error en actualitzar l\'usuari","en":"An error occurred when updating the user"}',
            ),
            126 =>
            array (
                'id' => 127,
                'group' => 'mage',
                'key' => 'datatable.sweetalert.users.title',
                'text' => '{"es":"\\u00bfEliminar usuario?","ca":"Eliminar usuari?","en":"Delete user?"}',
            ),
            127 =>
            array (
                'id' => 128,
                'group' => 'mage',
                'key' => 'datatable.sweetalert.users.text',
                'text' => '{"es":"\\u00bfEst\\u00e1s a punto de eliminar el usuario, quieres continuar?","ca":"Est\\u00e0s a punt d\'eliminar l\'usuari, vols continuar?","en":"Are you about to delete the user, do you want to continue?"}',
            ),
            128 =>
            array (
                'id' => 129,
                'group' => 'mage',
                'key' => 'datatable.sweetalert.users.success',
                'text' => '{"es":"El usuario ha sido eliminado","ca":"L\'usuari ha estat eliminat","en":"The user has been deleted"}',
            ),
            129 =>
            array (
                'id' => 130,
                'group' => 'mage',
                'key' => 'datatable.sweetalert.users.error',
                'text' => '{"es":"Se ha producido un error al intentar eliminar el usuario","ca":"S\'ha produ\\u00eft un error en intentar eliminar l\'usuari","en":"An error occurred while trying to delete the user"}',
            ),
            130 =>
            array (
                'id' => 131,
                'group' => 'mage',
                'key' => 'roles.index.breadcrumb.title',
                'text' => '{"es":"Roles","ca":"Rols","en":"Roles"}',
            ),
            131 =>
            array (
                'id' => 132,
                'group' => 'mage',
                'key' => 'roles.index.web-title',
                'text' => '{"es":"Roles","ca":"Rols","en":"Roles"}',
            ),
            132 =>
            array (
                'id' => 133,
                'group' => 'mage',
                'key' => 'roles.index.page-title',
                'text' => '{"es":"Roles","ca":"Rols","en":"Roles"}',
            ),
            133 =>
            array (
                'id' => 134,
                'group' => 'mage',
                'key' => 'roles.create.web-title',
                'text' => '{"es":"Nuevo rol","ca":"Nou rol","en":"New role"}',
            ),
            134 =>
            array (
                'id' => 135,
                'group' => 'mage',
                'key' => 'roles.create.page-title',
                'text' => '{"es":"Nuevo rol","ca":"Nou rol","en":"New role"}',
            ),
            135 =>
            array (
                'id' => 136,
                'group' => 'mage',
                'key' => 'roles.create.breadcrumb.title',
                'text' => '{"es":"Nuevo","ca":"Nou","en":"New"}',
            ),
            136 =>
            array (
                'id' => 137,
                'group' => 'mage',
                'key' => 'roles.create.alert.errors.title',
                'text' => '{"es":"Se ha producido un error al crear un nuevo rol","ca":"S\'ha produ\\u00eft un error en crear un nou rol","en":"An error occurred when creating a new role"}',
            ),
            137 =>
            array (
                'id' => 138,
                'group' => 'mage',
                'key' => 'roles.validations.name.required',
                'text' => '{"es":"El nombre del rol es obligatorio","ca":"El nom del rol \\u00e9s obligatori","en":"The name of the role is mandatory"}',
            ),
            138 =>
            array (
                'id' => 139,
                'group' => 'mage',
                'key' => 'roles.validations.name.unique',
                'text' => '{"es":"El nombre del rol debe ser \\u00fanico","ca":"El nom del rol ha de ser \\u00fanic","en":"The name of the role must be unique"}',
            ),
            139 =>
            array (
                'id' => 140,
                'group' => 'mage',
                'key' => 'roles.index.alert.created.title',
                'text' => '{"es":"Rol creado","ca":"Rol creat","en":"Role created"}',
            ),
            140 =>
            array (
                'id' => 141,
                'group' => 'mage',
                'key' => 'roles.index.alert.created.description',
                'text' => '{"es":"El rol ha sido creado correctamente","ca":"El rol ha estat creat correctament","en":"The role has been created correctly"}',
            ),
            141 =>
            array (
                'id' => 142,
                'group' => 'mage',
                'key' => 'roles.show.web-title',
                'text' => '{"es":"Rol","ca":"Rol","en":"Role"}',
            ),
            142 =>
            array (
                'id' => 143,
                'group' => 'mage',
                'key' => 'roles.show.page-title',
                'text' => '{"es":"Rol","ca":"Rol","en":"Role"}',
            ),
            143 =>
            array (
                'id' => 144,
                'group' => 'mage',
                'key' => 'roles.show.breadcrumb.title',
                'text' => '{"es":"Detalles","ca":"Detalls","en":"Details"}',
            ),
            144 =>
            array (
                'id' => 145,
                'group' => 'mage',
                'key' => 'roles.edit.breadcrumb.title',
                'text' => '{"es":"Editar","ca":"Editar","en":"Edit"}',
            ),
            145 =>
            array (
                'id' => 146,
                'group' => 'mage',
                'key' => 'roles.edit.title',
                'text' => '{"es":"Editar rol","ca":"Editar rol","en":"Edit role"}',
            ),
            146 =>
            array (
                'id' => 147,
                'group' => 'mage',
                'key' => 'roles.edit.web-title',
                'text' => '{"es":"Editar rol","ca":"Editar rol","en":"Edit role"}',
            ),
            147 =>
            array (
                'id' => 148,
                'group' => 'mage',
                'key' => 'roles.edit.page-title',
                'text' => '{"es":"Editar rol","ca":"Editar rol","en":"Edit role"}',
            ),
            148 =>
            array (
                'id' => 149,
                'group' => 'mage',
                'key' => 'roles.index.alert.updated.title',
                'text' => '{"es":"Rol actualizado","ca":"Rol actualitzat","en":"Updated role"}',
            ),
            149 =>
            array (
                'id' => 150,
                'group' => 'mage',
                'key' => 'roles.index.alert.updated.description',
                'text' => '{"es":"El rol ha sido actualizado correctamente","ca":"El rol ha estat actualitzat correctament","en":"The role has been updated correctly"}',
            ),
            150 =>
            array (
                'id' => 151,
                'group' => 'mage',
                'key' => 'roles.edit.alert.errors.title',
                'text' => '{"es":"Se ha producido un error al actualizar el rol","ca":"S\'ha produ\\u00eft un error en actualitzar el rol","en":"An error occurred while updating the role"}',
            ),
            151 =>
            array (
                'id' => 152,
                'group' => 'mage',
                'key' => 'datatable.sweetalert.roles.title',
                'text' => '{"es":"\\u00bfEliminar rol?","ca":"Eliminar rol?","en":"Delete role?"}',
            ),
            152 =>
            array (
                'id' => 153,
                'group' => 'mage',
                'key' => 'datatable.sweetalert.roles.text',
                'text' => '{"es":"\\u00bfEst\\u00e1s a punto de eliminar el rol, quieres continuar?","ca":"Est\\u00e0s a punt d\'eliminar el rol, vols continuar?","en":"You\'re about to eliminate the role, do you want to continue?"}',
            ),
            153 =>
            array (
                'id' => 154,
                'group' => 'mage',
                'key' => 'datatable.sweetalert.roles.success',
                'text' => '{"es":"El rol ha sido eliminado","ca":"El rol ha estat eliminat","en":"The role has been removed"}',
            ),
            154 =>
            array (
                'id' => 155,
                'group' => 'mage',
                'key' => 'datatable.sweetalert.roles.error',
                'text' => '{"es":"Se ha producido un error al intentar eliminar el rol","ca":"S\'ha produ\\u00eft un error en intentar eliminar el rol","en":"An error occurred when trying to remove the role"}',
            ),
            155 =>
            array (
                'id' => 156,
                'group' => 'mage',
                'key' => 'permissions.show.web-title',
                'text' => '{"es":"Permisos","ca":"Permisos","en":"Permissions"}',
            ),
            156 =>
            array (
                'id' => 157,
                'group' => 'mage',
                'key' => 'permissions.show.page-title',
                'text' => '{"es":"Permisos","ca":"Permisos","en":"Permissions"}',
            ),
            157 =>
            array (
                'id' => 158,
                'group' => 'mage',
                'key' => 'permissions.index.datatable.title',
                'text' => '{"es":"Listado de permisos","ca":"Llistat de permisos","en":"List of permissions"}',
            ),
            158 =>
            array (
                'id' => 159,
                'group' => 'mage',
                'key' => 'permissions.new',
                'text' => '{"es":"Nuevo","ca":"Nou","en":"New"}',
            ),
            159 =>
            array (
                'id' => 160,
                'group' => 'mage',
                'key' => 'auth.login.login',
                'text' => '{"es":"Iniciar sesi\\u00f3n","ca":"Iniciar sessi\\u00f3","en":"Login"}',
            ),
            160 =>
            array (
                'id' => 161,
                'group' => 'mage',
                'key' => 'auth.login.email',
                'text' => '{"es":"eMail","ca":"eMail","en":"eMail"}',
            ),
            161 =>
            array (
                'id' => 162,
                'group' => 'mage',
                'key' => 'auth.login.password',
                'text' => '{"es":"Contrase\\u00f1a","ca":"Contrasenya","en":"Password"}',
            ),
            162 =>
            array (
                'id' => 163,
                'group' => 'mage',
                'key' => 'auth.login.signin',
                'text' => '{"es":"Entrar","ca":"Entrar","en":"Sign in"}',
            ),
            163 =>
            array (
                'id' => 164,
                'group' => 'mage',
                'key' => 'auth.login.forgot-password',
                'text' => '{"es":"Recordar contrase\\u00f1a","ca":"Recordar contrasenya","en":"Forgot password"}',
            ),
            164 =>
            array (
                'id' => 165,
                'group' => 'mage',
                'key' => 'permissions.form.name',
                'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
            ),
            165 =>
            array (
                'id' => 166,
                'group' => 'mage',
                'key' => 'permissions.form.name.placeholder',
                'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
            ),
            166 =>
            array (
                'id' => 167,
                'group' => 'mage',
                'key' => 'permissions.form.save',
                'text' => '{"es":"Guardar","ca":"Guardar","en":"Save"}',
            ),
            167 =>
            array (
                'id' => 168,
                'group' => 'mage',
                'key' => 'permissions.create.alert.errors.title',
                'text' => '{"es":"Se ha producido un error al crear un nuevo permiso","ca":"S\'ha produ\\u00eft un error en crear un nou perm\\u00eds","en":"An error occurred when creating a new permission"}',
            ),
            168 =>
            array (
                'id' => 169,
                'group' => 'mage',
                'key' => 'permissions.index.alert.created.title',
                'text' => '{"es":"Permiso creado","ca":"Perm\\u00eds creat","en":"Permission created"}',
            ),
            169 =>
            array (
                'id' => 170,
                'group' => 'mage',
                'key' => 'permissions.index.alert.created.description',
                'text' => '{"es":"El permiso ha sido creado correctamente","ca":"El perm\\u00eds ha estat creat correctament","en":"The permission has been created correctly"}',
            ),
            170 =>
            array (
                'id' => 171,
                'group' => 'mage',
                'key' => 'permissions.create.web-title',
                'text' => '{"es":"Nuevo permiso","ca":"Nou perm\\u00eds","en":"New permission"}',
            ),
            171 =>
            array (
                'id' => 172,
                'group' => 'mage',
                'key' => 'permissions.create.page-title',
                'text' => '{"es":"Nuevo permiso","ca":"Nou perm\\u00eds","en":"New permission"}',
            ),
            172 =>
            array (
                'id' => 173,
                'group' => 'mage',
                'key' => 'permissions.index.breadcrumb.title',
                'text' => '{"es":"Permisos","ca":"Permisos","en":"Permissions"}',
            ),
            173 =>
            array (
                'id' => 174,
                'group' => 'mage',
                'key' => 'permissions.create.breadcrumb.title',
                'text' => '{"es":"Nuevo","ca":"Nou","en":"New"}',
            ),
            174 =>
            array (
                'id' => 175,
                'group' => 'mage',
                'key' => 'permissions.validations.name.required',
                'text' => '{"es":"El nombre del permiso es obligatorio","ca":"El nom del perm\\u00eds \\u00e9s obligatori","en":"The name of the permission is mandatory"}',
            ),
            175 =>
            array (
                'id' => 176,
                'group' => 'mage',
                'key' => 'permissions.validations.name.unique',
                'text' => '{"es":"El nombre del permiso debe ser \\u00fanico","ca":"El nom del perm\\u00eds ha de ser \\u00fanic","en":"The name of the permission must be unique"}',
            ),
            176 =>
            array (
                'id' => 177,
                'group' => 'mage',
                'key' => 'permissions.edit.web-title',
                'text' => '{"es":"Editar permiso","ca":"Editar perm\\u00eds","en":"Edit permission"}',
            ),
            177 =>
            array (
                'id' => 178,
                'group' => 'mage',
                'key' => 'permissions.edit.page-title',
                'text' => '{"es":"Editar permiso","ca":"Editar perm\\u00eds","en":"Edit permission"}',
            ),
            178 =>
            array (
                'id' => 179,
                'group' => 'mage',
                'key' => 'permissions.edit.breadcrumb.title',
                'text' => '{"es":"Editar","ca":"Editar","en":"Edit"}',
            ),
            179 =>
            array (
                'id' => 180,
                'group' => 'mage',
                'key' => 'permissions.edit.title',
                'text' => '{"es":"Editar permiso","ca":"Editar perm\\u00eds","en":"Edit permission"}',
            ),
            180 =>
            array (
                'id' => 181,
                'group' => 'mage',
                'key' => 'permissions.index.alert.updated.title',
                'text' => '{"es":"Permiso actualizado","ca":"Perm\\u00eds actualitzat","en":"Updated permission"}',
            ),
            181 =>
            array (
                'id' => 182,
                'group' => 'mage',
                'key' => 'permissions.index.alert.updated.description',
                'text' => '{"es":"El permiso ha sido actualizado correctamente","ca":"El perm\\u00eds ha estat actualitzat correctament","en":"The permission has been updated correctly"}',
            ),
            182 =>
            array (
                'id' => 183,
                'group' => 'mage',
                'key' => 'datatable.sweetalert.permissions.title',
                'text' => '{"es":"\\u00bfEliminar permiso?","ca":"Eliminar perm\\u00eds?","en":"Delete permission?"}',
            ),
            183 =>
            array (
                'id' => 184,
                'group' => 'mage',
                'key' => 'datatable.sweetalert.permissions.text',
                'text' => '{"es":"\\u00bfEst\\u00e1s a punto de eliminar el permiso, quieres continuar?","ca":"Est\\u00e0s a punt d\'eliminar el perm\\u00eds, vols continuar?","en":"You\'re about to delete the permission, do you want to continue?"}',
            ),
            184 =>
            array (
                'id' => 185,
                'group' => 'mage',
                'key' => 'datatable.sweetalert.permissions.success',
                'text' => '{"es":"El permiso ha sido eliminado","ca":"El perm\\u00eds ha estat eliminat","en":"The permission has been removed"}',
            ),
            185 =>
            array (
                'id' => 186,
                'group' => 'mage',
                'key' => 'datatable.sweetalert.permissions.error',
                'text' => '{"es":"Se ha producido un error al intentar eliminar el permiso","ca":"S\'ha produ\\u00eft un error en intentar eliminar el perm\\u00eds","en":"An error occurred while attempting to delete the permission"}',
            ),
            186 =>
            array (
                'id' => 187,
                'group' => 'mage',
                'key' => 'auth.validations.email.required',
                'text' => '{"es":"El email es obligatorio","ca":"L\'email \\u00e9s obligatori","en":"The email is mandatory"}',
            ),
            187 =>
            array (
                'id' => 188,
                'group' => 'mage',
                'key' => 'auth.validations.password.required',
                'text' => '{"es":"La contrase\\u00f1a es obligatoria","ca":"La contrasenya \\u00e9s obligat\\u00f2ria","en":"The password is mandatory"}',
            ),
            188 =>
            array (
                'id' => 189,
                'group' => 'mage',
                'key' => 'auth.login.invalid-credentials',
                'text' => '{"es":"Las credenciales son incorrectas","ca":"Les credencials s\\u00f3n incorrectes","en":"The credentials are incorrect"}',
            ),
            189 =>
            array (
                'id' => 190,
                'group' => 'mage',
                'key' => 'auth.forgot-password',
                'text' => '{"es":"Recordar contrase\\u00f1a","ca":"Recordar contrasenya","en":"Forgot password"}',
            ),
            190 =>
            array (
                'id' => 191,
                'group' => 'mage',
                'key' => 'auth.forgot-password.email',
                'text' => '{"es":"eMail","ca":"eMail","en":"eMail"}',
            ),
            191 =>
            array (
                'id' => 192,
                'group' => 'mage',
                'key' => 'auth.forgot-password.reset',
                'text' => '{"es":"Restablecer","ca":"Restablir","en":"Reset"}',
            ),
            192 =>
            array (
                'id' => 193,
                'group' => 'mage',
                'key' => 'auth.validations.email.string',
                'text' => '{"es":"El eMail debe ser una cadena","ca":"L\'eMail ha de ser una cadena","en":"The eMail must be a string"}',
            ),
            193 =>
            array (
                'id' => 194,
                'group' => 'mage',
                'key' => 'auth.validations.email.email',
                'text' => '{"es":"El eMail debe tener el formato correcto","ca":"L\'eMail ha de tenir el format correcte","en":"The eMail must be in the correct format"}',
            ),
            194 =>
            array (
                'id' => 195,
                'group' => 'passwords',
                'key' => 'user',
                'text' => '{"es":"El usuario no ha sido encontrado","ca":"L\'usuari no ha estat trobat","en":"The user has not been found"}',
            ),
            195 =>
            array (
                'id' => 196,
                'group' => 'mage',
                'key' => 'auth.validations.password.string',
                'text' => '{"es":"La contrase\\u00f1a debe ser una cadena","ca":"La contrasenya ha de ser una cadena","en":"The password must be a string"}',
            ),
            196 =>
            array (
                'id' => 197,
                'group' => 'passwords',
                'key' => 'sent',
                'text' => '{"es":"El eMail para recuperar su contrase\\u00f1a ha sido enviado","ca":"L\'eMail per a recuperar la seva contrasenya ha estat enviat","en":"The eMail to recovery your password has been sent"}',
            ),
            197 =>
            array (
                'id' => 198,
                'group' => 'mage',
                'key' => 'auth.reset-password',
                'text' => '{"es":"Restablecer contrase\\u00f1a","ca":"Restablir contrasenya","en":"Reset password"}',
            ),
            198 =>
            array (
                'id' => 199,
                'group' => 'passwords',
                'key' => 'reset',
                'text' => '{"es":"La contrase\\u00f1a ha sido restablecida correctamente","ca":"La contrasenya ha estat restablerta correctament","en":"The password has been reset correctly"}',
            ),
            199 =>
            array (
                'id' => 200,
                'group' => 'mage',
                'key' => 'auth.reset-password.email',
                'text' => '{"es":"eMail","ca":"eMail","en":"eMail"}',
            ),
            200 =>
            array (
                'id' => 201,
                'group' => 'mage',
                'key' => 'auth.reset-password.password',
                'text' => '{"es":"Contrase\\u00f1a","ca":"Contrasenya","en":"Password"}',
            ),
            201 =>
            array (
                'id' => 202,
                'group' => 'mage',
                'key' => 'auth.reset-password.repeat-password',
                'text' => '{"es":"Confirmar contrase\\u00f1a","ca":"Confirmar contrasenya","en":"Confirm password"}',
            ),
            202 =>
            array (
                'id' => 203,
                'group' => 'mage',
                'key' => 'auth.reset-password.reset',
                'text' => '{"es":"Guardar","ca":"Guardar","en":"Save"}',
            ),
            203 =>
            array (
                'id' => 204,
                'group' => 'mage',
                'key' => 'auth.validations.token.required',
                'text' => '{"es":"El token es obligatorio","ca":"El token \\u00e9s obligatori","en":"The token is mandatory"}',
            ),
            204 =>
            array (
                'id' => 205,
                'group' => 'mage',
                'key' => 'auth.validations.password.confirmed',
                'text' => '{"es":"Las contrase\\u00f1as no coinciden","ca":"Les contrasenyes no coincideixen","en":"The passwords don\'t match"}',
            ),
            205 =>
            array (
                'id' => 206,
                'group' => 'mage',
                'key' => 'auth.validations.password.min',
                'text' => '{"es":"La longitud de la contrase\\u00f1a ha de ser de m\\u00ednimo 6 caracteres","ca":"La longitud de la contrasenya ha de ser de m\\u00ednim 6 car\\u00e0cters","en":"The length of the password must be at least 6 characters"}',
            ),
            206 =>
            array (
                'id' => 207,
                'group' => 'mage',
                'key' => 'auth.reset-password.email.subject',
                'text' => '{"es":"Solicitud de restablecimiento de contrase\\u00f1a","ca":"Sol\\u00b7licitud de restabliment de contrasenya","en":"Password Reset Request"}',
            ),
        ));
    }
}
