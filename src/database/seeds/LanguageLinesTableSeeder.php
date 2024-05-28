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


        \DB::table('language_lines')->delete();

        \DB::table('language_lines')->insert(array (
            0 =>
            array (
                'group' => 'mage',
                'key' => 'auth.user.logout',
                'text' => '{"es":"Cerrar sesi\\u00f3n", "ca":"Tancar sessi\\u00f3","en":"Logout"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            1 =>
            array (
                'group' => 'mage',
                'key' => 'sidebar.administration',
                'text' => '{"es":"Administración","ca":"Administració","en":"Administration"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            2 =>
            array (
                'group' => 'mage',
                'key' => 'sidebar.users-management',
                'text' => '{"es":"Gestión de usuarios","ca":"Gestió d\'usuaris","en":"User Management"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            3 =>
            array (
                'group' => 'mage',
                'key' => 'sidebar.users',
                'text' => '{"es":"Usuarios","ca":"Usuaris","en":"Users"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            4 =>
            array (
                'group' => 'mage',
                'key' => 'sidebar.roles',
                'text' => '{"es":"Roles","ca":"Rols","en":"Roles"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            5 =>
            array (
                'group' => 'mage',
                'key' => 'sidebar.permissions',
                'text' => '{"es":"Permisos","ca":"Permisos","en":"Permissions"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            6 =>
            array (
                'group' => 'mage',
                'key' => 'sidebar.translations',
                'text' => '{"es":"Traducciones","ca":"Traduccions","en":"Translations"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            7 =>
            array (
                'group' => 'mage',
                'key' => 'sidebar.navigation',
                'text' => '{"es":"Navegación","ca":"Navegació","en":"Navigation"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            8 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.create.title',
                'text' => '{"es":"Nuevo permiso","ca":"Nou permís","en":"New permission"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            9 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.index.title',
                'text' => '{"es":"Permisos","ca":"Permisos","en":"Permissions"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            10 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.datatable.field.id',
                'text' => '{"es":"ID","ca":"ID","en":"ID"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            11 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.datatable.field.name',
                'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            12 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.datatable.field.actions',
                'text' => '{"es":"Acciones","ca":"Accions","en":"Actions"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            13 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.update.title',
                'text' => '{"es":"Actualizar permiso","ca":"Actualitzar perm\\u00eds","en":"Update permission"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            14 =>
            array (
                'group' => 'mage',
                'key' => 'roles.create.title',
                'text' => '{"es":"Nuevo rol","ca":"Nou rol","en":"New role"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            15 =>
            array (
                'group' => 'mage',
                'key' => 'roles.index.title',
                'text' => '{"es":"Listado de roles","ca":"Llistat de rols","en":"List of roles"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            16 =>
            array (
                'group' => 'mage',
                'key' => 'roles.datatable.field.id',
                'text' => '{"es":"ID","ca":"ID","en":"ID"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            17 =>
            array (
                'group' => 'mage',
                'key' => 'roles.datatable.field.name',
                'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            18 =>
            array (
                'group' => 'mage',
                'key' => 'roles.datatable.field.actions',
                'text' => '{"es":"Acciones","ca":"Accions","en":"Actions"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            19 =>
            array (
                'group' => 'mage',
                'key' => 'roles.form.name.label',
                'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            20 =>
            array (
                'group' => 'mage',
                'key' => 'roles.form.name.placeholder',
                'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            21 =>
            array (
                'group' => 'mage',
                'key' => 'roles.form.save',
                'text' => '{"es":"Guardar","ca":"Guardar","en":"Save"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            22 =>
            array (
                'group' => 'mage',
                'key' => 'roles.index.datatable.title',
                'text' => '{"es":"Listado de roles","ca":"Llistat de rols","en":"List of roles"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            23 =>
            array (
                'group' => 'mage',
                'key' => 'roles.new',
                'text' => '{"es":"Nuevo","ca":"Nou","en":"New"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            24 =>
            array (
                'group' => 'mage',
                'key' => 'roles.show.title',
                'text' => '{"es":"Rol","ca":"Rol","en":"Role"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            25 =>
            array (
                'group' => 'mage',
                'key' => 'translations.title',
                'text' => '{"es":"Traducciones","ca":"Traduccions","en":"Translations"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            26 =>
            array (
                'group' => 'mage',
                'key' => 'translations.index.title',
                'text' => '{"es":"Listado de traducciones","ca":"Llistat de traduccions","en":"List of translations"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            27 =>
            array (
                'group' => 'mage',
                'key' => 'users.create.title',
                'text' => '{"es":"Nuevo usuario","ca":"Nou usuari","en":"New user"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            28 =>
            array (
                'group' => 'mage',
                'key' => 'users.index.title',
                'text' => '{"es":"Listado de usuarios","ca":"Llistat d\'usuaris","en":"List of users"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            29 =>
            array (
                'group' => 'mage',
                'key' => 'users.datatable.field.id',
                'text' => '{"es":"ID","ca":"ID","en":"ID"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            30 =>
            array (
                'group' => 'mage',
                'key' => 'users.datatable.field.name',
                'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            31 =>
            array (
                'group' => 'mage',
                'key' => 'users.datatable.field.email',
                'text' => '{"es":"eMail","ca":"eMail","en":"eMail"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            32 =>
            array (
                'group' => 'mage',
                'key' => 'users.datatable.field.rol',
                'text' => '{"es":"Rol","ca":"Rol","en":"Role"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            33 =>
            array (
                'group' => 'mage',
                'key' => 'users.datatable.field.language',
                'text' => '{"es":"Idioma","ca":"Idioma","en":"Language"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            34 =>
            array (
                'group' => 'mage',
                'key' => 'users.datatable.field.actions',
                'text' => '{"es":"Acciones","ca":"Accions","en":"Actions"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            35 =>
            array (
                'group' => 'mage',
                'key' => 'users.edit.title',
                'text' => '{"es":"Editar usuario","ca":"Editar usuari","en":"Edit user"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            36 =>
            array (
                'group' => 'mage',
                'key' => 'users.form.name.label',
                'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            37 =>
            array (
                'group' => 'mage',
                'key' => 'users.form.name.placeholder',
                'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            38 =>
            array (
                'group' => 'mage',
                'key' => 'users.form.email',
                'text' => '{"es":"eMail","ca":"eMail","en":"eMail"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            39 =>
            array (
                'group' => 'mage',
                'key' => 'users.form.email.placeholder',
                'text' => '{"es":"eMail","ca":"eMail","en":"eMail"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            40 =>
            array (
                'group' => 'mage',
                'key' => 'users.form.language',
                'text' => '{"es":"Idioma","ca":"Idioma","en":"Language"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            41 =>
            array (
                'group' => 'mage',
                'key' => 'users.form.language.placeholder',
                'text' => '{"es":"Idioma","ca":"Idioma","en":"Language"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            42 =>
            array (
                'group' => 'mage',
                'key' => 'users.form.roles',
                'text' => '{"es":"Roles","ca":"Rols","en":"Roles"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            43 =>
            array (
                'group' => 'mage',
                'key' => 'users.form.roles.placeholder',
                'text' => '{"es":"Roles","ca":"Rols","en":"Roles"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            44 =>
            array (
                'group' => 'mage',
                'key' => 'users.form.save',
                'text' => '{"es":"Guardar","ca":"Guardar","en":"Save"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            45 =>
            array (
                'group' => 'mage',
                'key' => 'users.index.datatable.title',
                'text' => '{"es":"Listado de usuarios","ca":"Llistat d\'usuaris","en":"List of users"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            46 =>
            array (
                'group' => 'mage',
                'key' => 'users.new',
                'text' => '{"es":"Nuevo","ca":"Nou","en":"New"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            47 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.sProcessing',
                'text' => '{"es":"Procesando...","ca":"Processant...","en":"Processing..."}',
                'created_at' => null,
                'updated_at' => null,
            ),
            48 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.sLengthMenu',
                'text' => '{"es":"Mostrar _MENU_ registros","ca":"Mostra _MENU_ registres","en":"Show _MENU_ entries"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            49 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.sZeroRecords',
                'text' => '{"es":"No se encontraron resultados","ca":"No s\'han trobat registres.","en":"No matching records found"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            50 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.sEmptyTable',
                'text' => '{"es":"Ningún dato disponible en esta tabla","ca":"Cap dada disponible en aquesta taula","en":"No data available in table"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            51 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.sInfo',
                'text' => '{"es":"Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros","ca":"Mostrant de _START_ a _END_ de _TOTAL_ registres","en":"Showing _START_ to _END_ of _TOTAL_ entries"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            52 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.sInfoEmpty',
                'text' => '{"es":"Mostrando registros del 0 al 0 de un total de 0 registros","ca":"Mostrant de 0 a 0 de 0 registres","en":"Showing 0 to 0 of 0 entries"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            53 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.sInfoFiltered',
            'text' => '{"es":"(filtrado de un total de _MAX_ registros)","ca":"(filtrat de _MAX_ total registres)","en":"(filtered from _MAX_ total entries)"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            54 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.sInfoPostFix',
                'text' => '{"es":"","ca":"","en":""}',
                'created_at' => null,
                'updated_at' => null,
            ),
            55 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.sSearch',
                'text' => '{"es":"Buscar:","ca":"Filtrar:","en":"Search:"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            56 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.sUrl',
                'text' => '{"es":"","ca":"","en":""}',
                'created_at' => null,
                'updated_at' => null,
            ),
            57 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.sInfoThousands',
                'text' => '{"es":",","ca":",","en":","}',
                'created_at' => null,
                'updated_at' => null,
            ),
            58 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.sLoadingRecords',
                'text' => '{"es":"Cargando...","ca":"Carregant...","en":"Loading..."}',
                'created_at' => null,
                'updated_at' => null,
            ),
            59 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.oPaginate.sFirst',
                'text' => '{"es":"Primero","ca":"Primer","en":"First"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            60 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.oPaginate.sLast',
                'text' => '{"es":"Último","ca":"Anterior","en":"Last"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            61 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.oPaginate.sNext',
                'text' => '{"es":"Siguiente","ca":"Seg\\u00fcent","en":"Next"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            62 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.oPaginate.sPrevious',
                'text' => '{"es":"Anterior","ca":"Últim","en":"Previous"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            63 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.oAria.sSortAscending',
                'text' => '{"es":": Activar para ordenar la columna de manera ascendente","ca":": Activar per a ordenar la columna de manera ascendent","en":": Activate to sort column ascending"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            64 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.oAria.sSortDescending',
                'text' => '{"es":": Activar para ordenar la columna de manera descendente","ca":": Activar per a ordenar la columna de manera descendent","en":": Activate to sort column descending"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            65 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.deleteForm.title',
                'text' => '{"es":"¿Eliminar recurso?","ca":"Eliminar recurs?","en":"Delete resource?"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            66 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.deleteForm.text',
                'text' => '{"es":"¿Estás seguro de que quieres eliminar este recurso?","ca":"Estàs segur que vols eliminar aquest recurs?","en":"Are you sure you want to delete this resource?"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            67 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.deleteForm.success',
                'text' => '{"es":"Recurso eliminado correctamente","ca":"Recurs eliminat correctament","en":"Resource successfully deleted"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            68 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.deleteForm.cancel',
                'text' => '{"es":"Cancelar","ca":"Cancel·lar","en":"Cancel"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            69 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.deleteForm.confirm',
                'text' => '{"es":"Confirmar","ca":"Confirmar","en":"Confirm"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            70 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.deleteForm.close',
                'text' => '{"es":"Cerrar","ca":"Tancar","en":"Close"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            71 =>
            array (
                'group' => 'mage',
                'key' => 'translations.datatable.field.id',
                'text' => '{"es":"ID","ca":"ID","en":"ID"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            72 =>
            array (
                'group' => 'mage',
                'key' => 'translations.datatable.field.group',
                'text' => '{"es":"Grupo","ca":"Grup","en":"Group"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            73 =>
            array (
                'group' => 'mage',
                'key' => 'translations.datatable.field.key',
                'text' => '{"es":"Key","ca":"Key","en":"Key"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            74 =>
            array (
                'group' => 'mage',
                'key' => 'datatable.sweetalert.translations.title',
                'text' => '{"es":"Traducir al","ca":"Traduir al","en":"Translate to"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            75 =>
            array (
                'group' => 'mage',
                'key' => 'datatable.sweetalert.translations.text',
                'text' => '{"es":"Key:","ca":"Key:","en":"Key:"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            76 =>
            array (
                'group' => 'mage',
                'key' => 'datatable.sweetalert.translations.success',
                'text' => '{"es":"La traducci\\u00f3n ha sido guardada correctamente","ca":"La traducci\\u00f3 ha estat guardada correctament","en":"The translation has been saved successfully"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            77 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.sweetalert.buttons.confirm',
                'text' => '{"es":"Confirmar","ca":"Confirmar","en":"Confirm"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            78 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.sweetalert.buttons.cancel',
                'text' => '{"es":"Cancelar","ca":"Cancel\\u00b7lar","en":"Cancel"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            79 =>
            array (
                'group' => 'mage',
                'key' => 'datatables.sweetalert.buttons.close',
                'text' => '{"es":"Cerrar","ca":"Tancar","en":"Close"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            80 =>
            array (
                'group' => 'mage',
                'key' => 'translations.create.title',
                'text' => '{"es":"Nueva traducci\\u00f3n","ca":"Nova traducci\\u00f3","en":"New translation"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            81 =>
            array (
                'group' => 'mage',
                'key' => 'translations.index.page-title',
                'text' => '{"es":"Traducciones","ca":"Traduccions","en":"Translations"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            82 =>
            array (
                'group' => 'mage',
                'key' => 'translations.index.new',
                'text' => '{"es":"Nueva","ca":"Nova","en":"New"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            83 =>
            array (
                'group' => 'mage',
                'key' => 'translations.create.page-title',
                'text' => '{"es":"Nueva traducci\\u00f3n","ca":"Nova traducci\\u00f3","en":"New translation"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            84 =>
            array (
                'group' => 'mage',
                'key' => 'translations.create.web-title',
                'text' => '{"es":"Traducciones","ca":"Traduccions","en":"Translations"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            85 =>
            array (
                'group' => 'mage',
                'key' => 'translations.index.breadcrumb.title',
                'text' => '{"es":"Traducciones","ca":"Traduccions","en":"Translations"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            86 =>
            array (
                'group' => 'mage',
                'key' => 'translations.create.breadcrumb.title',
                'text' => '{"es":"Nueva","ca":"Nova","en":"New"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            87 =>
            array (
                'group' => 'mage',
                'key' => 'translations.form.group',
                'text' => '{"es":"Grupo","ca":"Grup","en":"Group"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            88 =>
            array (
                'group' => 'mage',
                'key' => 'translations.form.key',
                'text' => '{"es":"Key","ca":"Key","en":"Key"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            89 =>
            array (
                'group' => 'mage',
                'key' => 'translations.form.save',
                'text' => '{"es":"Guardar","ca":"Guardar","en":"Save"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            90 =>
            array (
                'group' => 'mage',
                'key' => 'translations.index.web-title',
                'text' => '{"es":"Traducciones","ca":"Traduccions","en":"Translations"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            91 =>
            array (
                'group' => 'mage',
                'key' => 'translations.form.text-es',
                'text' => '{"es":"Traducci\\u00f3n en Castellano","ca":"Traducci\\u00f3 en Castell\\u00e0","en":"Translate into Spanish"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            92 =>
            array (
                'group' => 'mage',
                'key' => 'translations.form.text-ca',
                'text' => '{"es":"Traducci\\u00f3n en Catal\\u00e1n","ca":"Traducci\\u00f3 en Catal\\u00e0","en":"Translate into Catalan"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            93 =>
            array (
                'group' => 'mage',
                'key' => 'translations.form.text-en',
                'text' => '{"es":"Traducci\\u00f3n en Ingl\\u00e9s","ca":"Traducci\\u00f3 en Angl\\u00e8s","en":"Translate into English"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            94 =>
            array (
                'group' => 'mage',
                'key' => 'translations.datatable.field.es',
                'text' => '{"es":"Castellano","ca":"Castell\\u00e0","en":"Spanish"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            95 =>
            array (
                'group' => 'mage',
                'key' => 'translations.datatable.field.ca',
                'text' => '{"es":"Catal\\u00e1n","ca":"Catal\\u00e0","en":"Catalan"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            96 =>
            array (
                'group' => 'mage',
                'key' => 'translations.datatable.field.en',
                'text' => '{"es":"Ingl\\u00e9s","ca":"Angl\\u00e8s","en":"English"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            97 =>
            array (
                'group' => 'mage',
                'key' => 'translations.index.alert.created.title',
                'text' => '{"es":"Traducci\\u00f3n creada","ca":"Traducci\\u00f3 creada","en":"Translation created"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            98 =>
            array (
                'group' => 'mage',
                'key' => 'translations.index.alert.created.description',
                'text' => '{"es":"La traducci\\u00f3n ha sido creada correctamente","ca":"La traducci\\u00f3 ha estat creada correctament","en":"The translation has been created correctly"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            99 =>
            array (
                'group' => 'mage',
                'key' => 'translations.create.web-title',
                'text' => '{"es":"Nueva traducci\\u00f3n","ca":"Nova traducci\\u00f3","en":"New translation"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            100 =>
            array (
                'group' => 'mage',
                'key' => 'translations.create.page-title',
                'text' => '{"es":"Nueva traducci\\u00f3n","ca":"Nova traducci\\u00f3","en":"New translation"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            101 =>
            array (
                'group' => 'mage',
                'key' => 'translations.create.alert.errors.title',
                'text' => '{"es":"Se ha producido un error al crear una nueva traducci\\u00f3n","ca":"S\'ha produ\\u00eft un error en crear una nova traducci\\u00f3","en":"An error occurred when creating a new translation"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            102 =>
            array (
                'group' => 'mage',
                'key' => 'translations.create.alert.errors.description',
                'text' => '{"es":"Se ha producido un error al crear una nueva traducci\\u00f3n","ca":"S\'ha produ\\u00eft un error en crear una nova traducci\\u00f3","en":"An error occurred when creating a new translation"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            103 =>
            array (
                'group' => 'mage',
                'key' => 'datatable.sweetalert.translations.error',
                'text' => '{"es":"Se ha producido un error al intentar guardar la traducci\\u00f3n","ca":"S\'ha produ\\u00eft un error en intentar guardar la traducci\\u00f3","en":"An error occurred while trying to save the translation"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            104 =>
            array (
                'group' => 'mage',
                'key' => 'translations.validations.key.required',
                'text' => '{"es":"La key de traducci\\u00f3n es obligatoria","ca":"La key de traducci\\u00f3 \\u00e9s obligat\\u00f2ria","en":"The translation key is mandatory"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            105 =>
            array (
                'group' => 'mage',
                'key' => 'translations.validations.key.unique',
                'text' => '{"es":"La key de traducci\\u00f3n debe ser \\u00fanica","ca":"La key de traducci\\u00f3 ha de ser \\u00fanica","en":"The translation key must be unique"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            106 =>
            array (
                'group' => 'mage',
                'key' => 'translations.validations.group.required',
                'text' => '{"es":"El grupo de la traducci\\u00f3n es obligatorio","ca":"El grup de la traducci\\u00f3 \\u00e9s obligatori","en":"The translation group is mandatory"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            107 =>
            array (
                'group' => 'mage',
                'key' => 'users.index.web-title',
                'text' => '{"es":"Usuarios","ca":"Usuaris","en":"Users"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            108 =>
            array (
                'group' => 'mage',
                'key' => 'users.index.page-title',
                'text' => '{"es":"Usuarios","ca":"Usuaris","en":"Users"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            109 =>
            array (
                'group' => 'mage',
                'key' => 'users.index.breadcrumb.title',
                'text' => '{"es":"Usuarios","ca":"Usuaris","en":"Users"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            110 =>
            array (
                'group' => 'mage',
                'key' => 'users.create.web-title',
                'text' => '{"es":"Nuevo usuario","ca":"Nou usuari","en":"New user"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            111 =>
            array (
                'group' => 'mage',
                'key' => 'users.create.page-title',
                'text' => '{"es":"Nuevo usuario","ca":"Nou usuari","en":"New user"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            112 =>
            array (
                'group' => 'mage',
                'key' => 'users.create.breadcrumb.title',
                'text' => '{"es":"Nuevo","ca":"Nou","en":"New"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            113 =>
            array (
                'group' => 'mage',
                'key' => 'users.create.alert.errors.title',
                'text' => '{"es":"Se ha producido un error al crear un nuevo usuario","ca":"S\'ha produ\\u00eft un error en crear un nou usuari","en":"An error occurred when creating a new user"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            114 =>
            array (
                'group' => 'mage',
                'key' => 'users.validations.name.required',
                'text' => '{"es":"El nombre de usuario es obligatorio","ca":"El nom d\'usuari \\u00e9s obligatori","en":"The user\'s name is mandatory"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            115 =>
            array (
                'group' => 'mage',
                'key' => 'users.validations.email.required',
                'text' => '{"es":"El email del usuario es obligatorio","ca":"L\'email de l\'usuari \\u00e9s obligatori","en":"The user\'s email address is mandatory"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            116 =>
            array (
                'group' => 'mage',
                'key' => 'users.validations.email.email',
                'text' => '{"es":"El email del usuario no tiene un formato correcto","ca":"L\'email de l\'usuari no t\\u00e9 un format correcte","en":"The user\'s email is not formatted correctly"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            117 =>
            array (
                'group' => 'mage',
                'key' => 'users.validations.email.unique',
                'text' => '{"es":"El email del usuario debe ser \\u00fanico","ca":"L\'email de l\'usuari ha de ser \\u00fanic","en":"The user\'s email must be unique"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            118 =>
            array (
                'group' => 'mage',
                'key' => 'users.validations.language.required',
                'text' => '{"es":"El idioma del usuario es obligatorio","ca":"L\'idioma de l\'usuari \\u00e9s obligatori","en":"The user\'s language is mandatory"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            119 =>
            array (
                'group' => 'mage',
                'key' => 'users.validations.roles.required',
            'text' => '{"es":"El\\/los roles del usuario es\\/son obligatorios","ca":"El\\/els rols de l\'usuari \\u00e9s\\/s\\u00f3n obligatoris","en":"The user\'s role(s) is\\/are mandatory"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            120 =>
            array (
                'group' => 'mage',
                'key' => 'users.index.alert.created.title',
                'text' => '{"es":"Usuario creado","ca":"Usuari creat","en":"User created"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            121 =>
            array (
                'group' => 'mage',
                'key' => 'users.index.alert.created.description',
                'text' => '{"es":"El usuario ha sido creado correctamente","ca":"L\'usuari ha estat creat correctament","en":"The user has been created correctly"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            122 =>
            array (
                'group' => 'mage',
                'key' => 'users.edit.web-title',
                'text' => '{"es":"Editar usuario","ca":"Editar usuari","en":"Edit user"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            123 =>
            array (
                'group' => 'mage',
                'key' => 'users.edit.page-title',
                'text' => '{"es":"Editar usuario","ca":"Editar usuari","en":"Edit user"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            124 =>
            array (
                'group' => 'mage',
                'key' => 'users.edit.breadcrumb.title',
                'text' => '{"es":"Editar","ca":"Editar","en":"Edit"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            125 =>
            array (
                'group' => 'mage',
                'key' => 'users.edit.alert.errors.title',
                'text' => '{"es":"Se ha producido un error al actualizar el usuario","ca":"S\'ha produ\\u00eft un error en actualitzar l\'usuari","en":"An error occurred when updating the user"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            126 =>
            array (
                'group' => 'mage',
                'key' => 'datatable.sweetalert.users.title',
                'text' => '{"es":"\\u00bfEliminar usuario?","ca":"Eliminar usuari?","en":"Delete user?"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            127 =>
            array (
                'group' => 'mage',
                'key' => 'datatable.sweetalert.users.text',
                'text' => '{"es":"\\u00bfEst\\u00e1s a punto de eliminar el usuario, quieres continuar?","ca":"Est\\u00e0s a punt d\'eliminar l\'usuari, vols continuar?","en":"Are you about to delete the user, do you want to continue?"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            128 =>
            array (
                'group' => 'mage',
                'key' => 'datatable.sweetalert.users.success',
                'text' => '{"es":"El usuario ha sido eliminado","ca":"L\'usuari ha estat eliminat","en":"The user has been deleted"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            129 =>
            array (
                'group' => 'mage',
                'key' => 'datatable.sweetalert.users.error',
                'text' => '{"es":"Se ha producido un error al intentar eliminar el usuario","ca":"S\'ha produ\\u00eft un error en intentar eliminar l\'usuari","en":"An error occurred while trying to delete the user"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            130 =>
            array (
                'group' => 'mage',
                'key' => 'roles.index.breadcrumb.title',
                'text' => '{"es":"Roles","ca":"Rols","en":"Roles"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            131 =>
            array (
                'group' => 'mage',
                'key' => 'roles.index.web-title',
                'text' => '{"es":"Roles","ca":"Rols","en":"Roles"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            132 =>
            array (
                'group' => 'mage',
                'key' => 'roles.index.page-title',
                'text' => '{"es":"Roles","ca":"Rols","en":"Roles"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            133 =>
            array (
                'group' => 'mage',
                'key' => 'roles.create.web-title',
                'text' => '{"es":"Nuevo rol","ca":"Nou rol","en":"New role"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            134 =>
            array (
                'group' => 'mage',
                'key' => 'roles.create.page-title',
                'text' => '{"es":"Nuevo rol","ca":"Nou rol","en":"New role"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            135 =>
            array (
                'group' => 'mage',
                'key' => 'roles.create.breadcrumb.title',
                'text' => '{"es":"Nuevo","ca":"Nou","en":"New"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            136 =>
            array (
                'group' => 'mage',
                'key' => 'roles.create.alert.errors.title',
                'text' => '{"es":"Se ha producido un error al crear un nuevo rol","ca":"S\'ha produ\\u00eft un error en crear un nou rol","en":"An error occurred when creating a new role"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            137 =>
            array (
                'group' => 'mage',
                'key' => 'roles.validations.name.required',
                'text' => '{"es":"El nombre del rol es obligatorio","ca":"El nom del rol \\u00e9s obligatori","en":"The name of the role is mandatory"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            138 =>
            array (
                'group' => 'mage',
                'key' => 'roles.validations.name.unique',
                'text' => '{"es":"El nombre del rol debe ser \\u00fanico","ca":"El nom del rol ha de ser \\u00fanic","en":"The name of the role must be unique"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            139 =>
            array (
                'group' => 'mage',
                'key' => 'roles.index.alert.created.title',
                'text' => '{"es":"Rol creado","ca":"Rol creat","en":"Role created"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            140 =>
            array (
                'group' => 'mage',
                'key' => 'roles.index.alert.created.description',
                'text' => '{"es":"El rol ha sido creado correctamente","ca":"El rol ha estat creat correctament","en":"The role has been created correctly"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            141 =>
            array (
                'group' => 'mage',
                'key' => 'roles.show.web-title',
                'text' => '{"es":"Rol","ca":"Rol","en":"Role"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            142 =>
            array (
                'group' => 'mage',
                'key' => 'roles.show.page-title',
                'text' => '{"es":"Rol","ca":"Rol","en":"Role"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            143 =>
            array (
                'group' => 'mage',
                'key' => 'roles.show.breadcrumb.title',
                'text' => '{"es":"Detalles","ca":"Detalls","en":"Details"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            144 =>
            array (
                'group' => 'mage',
                'key' => 'roles.edit.breadcrumb.title',
                'text' => '{"es":"Editar","ca":"Editar","en":"Edit"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            145 =>
            array (
                'group' => 'mage',
                'key' => 'roles.edit.title',
                'text' => '{"es":"Editar rol","ca":"Editar rol","en":"Edit role"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            146 =>
            array (
                'group' => 'mage',
                'key' => 'roles.edit.web-title',
                'text' => '{"es":"Editar rol","ca":"Editar rol","en":"Edit role"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            147 =>
            array (
                'group' => 'mage',
                'key' => 'roles.edit.page-title',
                'text' => '{"es":"Editar rol","ca":"Editar rol","en":"Edit role"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            148 =>
            array (
                'group' => 'mage',
                'key' => 'roles.index.alert.updated.title',
                'text' => '{"es":"Rol actualizado","ca":"Rol actualitzat","en":"Updated role"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            149 =>
            array (
                'group' => 'mage',
                'key' => 'roles.index.alert.updated.description',
                'text' => '{"es":"El rol ha sido actualizado correctamente","ca":"El rol ha estat actualitzat correctament","en":"The role has been updated correctly"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            150 =>
            array (
                'group' => 'mage',
                'key' => 'roles.edit.alert.errors.title',
                'text' => '{"es":"Se ha producido un error al actualizar el rol","ca":"S\'ha produ\\u00eft un error en actualitzar el rol","en":"An error occurred while updating the role"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            151 =>
            array (
                'group' => 'mage',
                'key' => 'datatable.sweetalert.roles.title',
                'text' => '{"es":"\\u00bfEliminar rol?","ca":"Eliminar rol?","en":"Delete role?"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            152 =>
            array (
                'group' => 'mage',
                'key' => 'datatable.sweetalert.roles.text',
                'text' => '{"es":"\\u00bfEst\\u00e1s a punto de eliminar el rol, quieres continuar?","ca":"Est\\u00e0s a punt d\'eliminar el rol, vols continuar?","en":"You\'re about to eliminate the role, do you want to continue?"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            153 =>
            array (
                'group' => 'mage',
                'key' => 'datatable.sweetalert.roles.success',
                'text' => '{"es":"El rol ha sido eliminado","ca":"El rol ha estat eliminat","en":"The role has been deleted"}',
                'created_at' => null,
                'updated_at' => '2019-06-23 14:47:11',
            ),
            154 =>
            array (
                'group' => 'mage',
                'key' => 'datatable.sweetalert.roles.error',
                'text' => '{"es":"Se ha producido un error al intentar eliminar el rol","ca":"S\'ha produ\\u00eft un error en intentar eliminar el rol","en":"An error occurred when trying to delete the role"}',
                'created_at' => null,
                'updated_at' => '2019-06-23 14:49:48',
            ),
            155 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.show.web-title',
                'text' => '{"es":"Permisos","ca":"Permisos","en":"Permissions"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            156 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.show.page-title',
                'text' => '{"es":"Permisos","ca":"Permisos","en":"Permissions"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            157 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.index.datatable.title',
                'text' => '{"es":"Listado de permisos","ca":"Llistat de permisos","en":"List of permissions"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            158 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.new',
                'text' => '{"es":"Nuevo","ca":"Nou","en":"New"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            159 =>
            array (
                'group' => 'mage',
                'key' => 'auth.login.login',
                'text' => '{"es":"Iniciar sesi\\u00f3n","ca":"Iniciar sessi\\u00f3","en":"Login"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            160 =>
            array (
                'group' => 'mage',
                'key' => 'auth.login.email',
                'text' => '{"es":"eMail","ca":"eMail","en":"eMail"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            161 =>
            array (
                'group' => 'mage',
                'key' => 'auth.login.password',
                'text' => '{"es":"Contrase\\u00f1a","ca":"Contrasenya","en":"Password"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            162 =>
            array (
                'group' => 'mage',
                'key' => 'auth.login.signin',
                'text' => '{"es":"Entrar","ca":"Entrar","en":"Sign in"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            163 =>
            array (
                'group' => 'mage',
                'key' => 'auth.login.forgot-password',
                'text' => '{"es":"Recordar contrase\\u00f1a","ca":"Recordar contrasenya","en":"Forgot password"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            164 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.form.name.label',
                'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            165 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.form.name.placeholder',
                'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            166 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.form.save',
                'text' => '{"es":"Guardar","ca":"Guardar","en":"Save"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            167 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.create.alert.errors.title',
                'text' => '{"es":"Se ha producido un error al crear un nuevo permiso","ca":"S\'ha produ\\u00eft un error en crear un nou perm\\u00eds","en":"An error occurred when creating a new permission"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            168 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.index.alert.created.title',
                'text' => '{"es":"Permiso creado","ca":"Perm\\u00eds creat","en":"Permission created"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            169 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.index.alert.created.description',
                'text' => '{"es":"El permiso ha sido creado correctamente","ca":"El perm\\u00eds ha estat creat correctament","en":"The permission has been created correctly"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            170 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.create.web-title',
                'text' => '{"es":"Nuevo permiso","ca":"Nou perm\\u00eds","en":"New permission"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            171 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.create.page-title',
                'text' => '{"es":"Nuevo permiso","ca":"Nou perm\\u00eds","en":"New permission"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            172 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.index.breadcrumb.title',
                'text' => '{"es":"Permisos","ca":"Permisos","en":"Permissions"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            173 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.create.breadcrumb.title',
                'text' => '{"es":"Nuevo","ca":"Nou","en":"New"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            174 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.validations.name.required',
                'text' => '{"es":"El nombre del permiso es obligatorio","ca":"El nom del perm\\u00eds \\u00e9s obligatori","en":"The name of the permission is mandatory"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            175 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.validations.name.unique',
                'text' => '{"es":"El nombre del permiso debe ser \\u00fanico","ca":"El nom del perm\\u00eds ha de ser \\u00fanic","en":"The name of the permission must be unique"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            176 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.edit.web-title',
                'text' => '{"es":"Editar permiso","ca":"Editar perm\\u00eds","en":"Edit permission"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            177 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.edit.page-title',
                'text' => '{"es":"Editar permiso","ca":"Editar perm\\u00eds","en":"Edit permission"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            178 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.edit.breadcrumb.title',
                'text' => '{"es":"Editar","ca":"Editar","en":"Edit"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            179 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.edit.title',
                'text' => '{"es":"Editar permiso","ca":"Editar perm\\u00eds","en":"Edit permission"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            180 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.index.alert.updated.title',
                'text' => '{"es":"Permiso actualizado","ca":"Perm\\u00eds actualitzat","en":"Updated permission"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            181 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.index.alert.updated.description',
                'text' => '{"es":"El permiso ha sido actualizado correctamente","ca":"El perm\\u00eds ha estat actualitzat correctament","en":"The permission has been updated correctly"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            182 =>
            array (
                'group' => 'mage',
                'key' => 'datatable.sweetalert.permissions.title',
                'text' => '{"es":"\\u00bfEliminar permiso?","ca":"Eliminar perm\\u00eds?","en":"Delete permission?"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            183 =>
            array (
                'group' => 'mage',
                'key' => 'datatable.sweetalert.permissions.text',
                'text' => '{"es":"\\u00bfEst\\u00e1s a punto de eliminar el permiso, quieres continuar?","ca":"Est\\u00e0s a punt d\'eliminar el perm\\u00eds, vols continuar?","en":"You\'re about to delete the permission, do you want to continue?"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            184 =>
            array (
                'group' => 'mage',
                'key' => 'datatable.sweetalert.permissions.success',
                'text' => '{"es":"El permiso ha sido eliminado","ca":"El perm\\u00eds ha estat eliminat","en":"The permission has been deleted"}',
                'created_at' => null,
                'updated_at' => '2019-06-23 14:47:16',
            ),
            185 =>
            array (
                'group' => 'mage',
                'key' => 'datatable.sweetalert.permissions.error',
                'text' => '{"es":"Se ha producido un error al intentar eliminar el permiso","ca":"S\'ha produ\\u00eft un error en intentar eliminar el perm\\u00eds","en":"An error occurred while attempting to delete the permission"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            186 =>
            array (
                'group' => 'mage',
                'key' => 'auth.validations.email.required',
                'text' => '{"es":"El email es obligatorio","ca":"L\'email \\u00e9s obligatori","en":"The email is mandatory"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            187 =>
            array (
                'group' => 'mage',
                'key' => 'auth.validations.password.required',
                'text' => '{"es":"La contrase\\u00f1a es obligatoria","ca":"La contrasenya \\u00e9s obligat\\u00f2ria","en":"The password is mandatory"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            188 =>
            array (
                'group' => 'mage',
                'key' => 'auth.login.invalid-credentials',
                'text' => '{"es":"Las credenciales son incorrectas","ca":"Les credencials s\\u00f3n incorrectes","en":"The credentials are incorrect"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            189 =>
            array (
                'group' => 'mage',
                'key' => 'auth.forgot-password.title',
                'text' => '{"es":"Recordar contrase\\u00f1a","ca":"Recordar contrasenya","en":"Forgot password"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            190 =>
            array (
                'group' => 'mage',
                'key' => 'auth.forgot-password.email',
                'text' => '{"es":"eMail","ca":"eMail","en":"eMail"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            191 =>
            array (
                'group' => 'mage',
                'key' => 'auth.forgot-password.reset',
                'text' => '{"es":"Restablecer","ca":"Restablir","en":"Reset"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            192 =>
            array (
                'group' => 'mage',
                'key' => 'auth.validations.email.string',
                'text' => '{"es":"El eMail debe ser una cadena","ca":"L\'eMail ha de ser una cadena","en":"The eMail must be a string"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            193 =>
            array (
                'group' => 'mage',
                'key' => 'auth.validations.email.email',
                'text' => '{"es":"El eMail debe tener el formato correcto","ca":"L\'eMail ha de tenir el format correcte","en":"The eMail must be in the correct format"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            194 =>
            array (
                'group' => 'passwords',
                'key' => 'user',
                'text' => '{"es":"El usuario no ha sido encontrado","ca":"L\'usuari no ha estat trobat","en":"The user has not been found"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            195 =>
            array (
                'group' => 'mage',
                'key' => 'auth.validations.password.string',
                'text' => '{"es":"La contrase\\u00f1a debe ser una cadena","ca":"La contrasenya ha de ser una cadena","en":"The password must be a string"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            196 =>
            array (
                'group' => 'passwords',
                'key' => 'sent',
                'text' => '{"es":"El eMail para recuperar su contrase\\u00f1a ha sido enviado","ca":"L\'eMail per a recuperar la seva contrasenya ha estat enviat","en":"The eMail to recovery your password has been sent"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            197 =>
            array (
                'group' => 'mage',
                'key' => 'auth.reset-password',
                'text' => '{"es":"Restablecer contrase\\u00f1a","ca":"Restablir contrasenya","en":"Reset password"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            198 =>
            array (
                'group' => 'passwords',
                'key' => 'reset',
                'text' => '{"es":"La contrase\\u00f1a ha sido restablecida correctamente","ca":"La contrasenya ha estat restablerta correctament","en":"The password has been reset correctly"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            199 =>
            array (
                'group' => 'mage',
                'key' => 'auth.reset-password.email',
                'text' => '{"es":"eMail","ca":"eMail","en":"eMail"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            200 =>
            array (
                'group' => 'mage',
                'key' => 'auth.reset-password.password',
                'text' => '{"es":"Contrase\\u00f1a","ca":"Contrasenya","en":"Password"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            201 =>
            array (
                'group' => 'mage',
                'key' => 'auth.reset-password.repeat-password',
                'text' => '{"es":"Confirmar contrase\\u00f1a","ca":"Confirmar contrasenya","en":"Repeat password"}',
                'created_at' => null,
                'updated_at' => '2019-06-23 23:02:03',
            ),
            202 =>
            array (
                'group' => 'mage',
                'key' => 'auth.reset-password.reset',
                'text' => '{"es":"Guardar","ca":"Guardar","en":"Save"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            203 =>
            array (
                'group' => 'mage',
                'key' => 'auth.validations.token.required',
                'text' => '{"es":"El token es obligatorio","ca":"El token \\u00e9s obligatori","en":"The token is mandatory"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            204 =>
            array (
                'group' => 'mage',
                'key' => 'auth.validations.password.confirmed',
                'text' => '{"es":"Las contrase\\u00f1as no coinciden","ca":"Les contrasenyes no coincideixen","en":"The passwords don\'t match"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            205 =>
            array (
                'group' => 'mage',
                'key' => 'auth.validations.password.min',
                'text' => '{"es":"La longitud de la contrase\\u00f1a ha de ser de m\\u00ednimo :min caracteres","ca":"La longitud de la contrasenya ha de ser de m\\u00ednim :min car\\u00e0cters","en":"The length of the password must be at least :min characters"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            206 =>
            array (
                'group' => 'mage',
                'key' => 'auth.reset-password.email.subject',
                'text' => '{"es":"Solicitud de restablecimiento de contrase\\u00f1a","ca":"Sol\\u00b7licitud de restabliment de contrasenya","en":"Password Reset Request"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            207 =>
            array (
                'group' => 'mage',
                'key' => 'users.index.alert.updated.title',
                'text' => '{"es":"Usuario actualizado","ca":"Usuari actualitzat","en":"Updated user"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            208 =>
            array (
                'group' => 'mage',
                'key' => 'users.index.alert.updated.description',
                'text' => '{"es":"El usuario ha sido actualizado correctamente","ca":"L\'usuari ha estat actualitzat correctament","en":"The user has been updated correctly"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            209 =>
            array (
                'group' => 'mage',
                'key' => 'errors.404.web-title',
                'text' => '{"es":"La p\\u00e1gina no ha sido encontrada","ca":"La p\\u00e0gina no ha estat trobada","en":"Page not found"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            210 =>
            array (
                'group' => 'mage',
                'key' => 'errors.404.page-title',
                'text' => '{"es":"P\\u00e1gina no encontrada","ca":"P\\u00e0gina no trobada","en":"Page not found"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            211 =>
            array (
                'group' => 'mage',
                'key' => 'errors.404.breadcrumb.title',
                'text' => '{"es":"404","ca":"404","en":"404"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            212 =>
            array (
                'group' => 'mage',
                'key' => 'errors.403.web-title',
                'text' => '{"es":"No tiene permisos para acceder","ca":"No t\\u00e9 permisos per a accedir","en":"You don\'t have permission to access"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            213 =>
            array (
                'group' => 'mage',
                'key' => 'errors.403.page-title',
                'text' => '{"es":"Acceso no permitido","ca":"Acc\\u00e9s no perm\\u00e8s","en":"Access not allowed"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            214 =>
            array (
                'group' => 'mage',
                'key' => 'errors.403.breadcrumb.title',
                'text' => '{"es":"403","ca":"403","en":"403"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            215 =>
            array (
                'group' => 'mage',
                'key' => 'dashboard.index.web-title',
                'text' => '{"es":"Dashboard","ca":"Dashboard","en":"Dashboard"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            216 =>
            array (
                'group' => 'mage',
                'key' => 'dashboard.index.page-title',
                'text' => '{"es":"Dashboard","ca":"Dashboard","en":"Dashboard"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            217 =>
            array (
                'group' => 'mage',
                'key' => 'dashboard.index.breadcrumb.title',
                'text' => '{"es":"Dashboard","ca":"Dashboard","en":"Dashboard"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            218 =>
            array (
                'group' => 'mage',
                'key' => 'dashboard.index.title',
                'text' => '{"es":"Dashboard","ca":"Dashboard","en":"Dashboard"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            219 =>
            array (
                'group' => 'mage',
                'key' => 'sidebar.dashboard',
                'text' => '{"es":"Dashboard","ca":"Dashboard","en":"Dashboard"}',
                'created_at' => null,
                'updated_at' => null,
            ),
            220 =>
            array (
                'group' => 'mage',
                'key' => 'auth.register.email',
                'text' => '{"es":"eMail","ca":"eMail","en":"eMail"}',
                'created_at' => '2019-03-10 23:23:10',
                'updated_at' => '2019-06-23 22:54:08',
            ),
            221 =>
            array (
                'group' => 'mage',
                'key' => 'auth.register.password',
                'text' => '{"es":"Contrase\\u00f1a","ca":"Contrasenya","en":"Password"}',
                'created_at' => '2019-03-10 23:23:10',
                'updated_at' => '2019-06-23 22:54:37',
            ),
            222 =>
            array (
                'group' => 'mage',
                'key' => 'auth.register.repeat-password',
                'text' => '{"es":"Confirmar contrase\\u00f1a","ca":"Confirmar contrasenya","en":"Repeat password"}',
                'created_at' => '2019-03-10 23:23:10',
                'updated_at' => '2019-06-23 23:02:00',
            ),
            223 =>
            array (
                'group' => 'mage',
                'key' => 'auth.register.register',
                'text' => '{"es":"Reg\\u00edstrate","ca":"Registra\'t","en":"Sign up"}',
                'created_at' => '2019-03-10 23:23:10',
                'updated_at' => '2019-06-23 22:58:21',
            ),
            224 =>
            array (
                'group' => 'mage',
                'key' => 'translations.language.es',
                'text' => '{"es":"Castellano","ca":"Castell\\u00e0","en":"Spanish"}',
                'created_at' => '2019-06-22 13:54:16',
                'updated_at' => '2019-06-22 22:32:29',
            ),
            225 =>
            array (
                'group' => 'mage',
                'key' => 'translations.language.ca',
                'text' => '{"es":"Catal\\u00e1n","ca":"Catal\\u00e0","en":"Catalan"}',
                'created_at' => '2019-06-22 13:54:16',
                'updated_at' => '2019-06-23 14:44:52',
            ),
            226 =>
            array (
                'group' => 'mage',
                'key' => 'translations.language.en',
                'text' => '{"es":"Ingl\\u00e9s","ca":"Angl\\u00e8s","en":"English"}',
                'created_at' => '2019-06-22 22:22:36',
                'updated_at' => '2019-06-23 14:45:13',
            ),
            227 =>
            array (
                'group' => 'mage',
                'key' => 'sidebar.plugins',
                'text' => '{"es":"Plugins","ca":"Plugins","en":"Plugins"}',
                'created_at' => '2019-06-22 22:52:25',
                'updated_at' => '2019-06-22 23:11:38',
            ),
            228 =>
            array (
                'group' => 'mage',
                'key' => 'auth.user.profile',
                'text' => '{"es":"Perfil","ca":"Perfil","en":"Profile"}',
                'created_at' => '2019-06-22 23:01:34',
                'updated_at' => '2019-06-23 14:43:15',
            ),
            229 =>
            array (
                'group' => 'mage',
                'key' => 'auth.user.password',
                'text' => '{"es":"Cambiar contrase\\u00f1a","ca":"Canviar contrasenya","en":"Change password"}',
                'created_at' => '2019-06-22 23:01:35',
                'updated_at' => '2019-06-23 15:01:58',
            ),
            230 =>
            array (
                'group' => 'mage',
                'key' => 'translations.index.not-translated',
                'text' => '{"es":"Mostrar textos no traducidos","ca":"Mostrar textos no tradu\\u00efts","en":"Show untranslated texts"}',
                'created_at' => '2019-06-22 23:04:31',
                'updated_at' => '2019-06-23 14:57:13',
            ),
            231 =>
            array (
                'group' => 'mage',
                'key' => 'permissions.toggle',
                'text' => '{"es":"El estado del permiso ha sido actualizado correctamente","ca":"L\'estat del perm\\u00eds ha estat actualitzat correctament","en":"The permission status has been updated correctly"}',
                'created_at' => '2019-06-23 12:14:14',
                'updated_at' => '2019-06-23 15:00:40',
            ),
            232 =>
            array (
                'group' => 'mage',
                'key' => 'translations.datatable.field.actions',
                'text' => '{"es":"Acciones","ca":"Accions","en":"Actions"}',
                'created_at' => '2019-06-23 12:18:05',
                'updated_at' => '2019-06-23 14:40:33',
            ),
            233 =>
            array (
                'group' => 'mage',
                'key' => 'datatable.sweetalert.translations.delete.title',
                'text' => '{"es":"\\u00bfEliminar traducci\\u00f3n?","ca":"Eliminar traducci\\u00f3?","en":"Delete translation?"}',
                'created_at' => '2019-06-23 14:37:50',
                'updated_at' => '2019-06-23 14:41:53',
            ),
            234 =>
            array (
                'group' => 'mage',
                'key' => 'datatable.sweetalert.translations.delete.success',
                'text' => '{"es":"La traducci\\u00f3n ha sido eliminada","ca":"La traducci\\u00f3 ha estat eliminada","en":"The translation has been deleted"}',
                'created_at' => '2019-06-23 14:37:50',
                'updated_at' => '2019-06-23 14:47:30',
            ),
            235 =>
            array (
                'group' => 'mage',
                'key' => 'datatable.sweetalert.translations.delete.text',
                'text' => '{"es":"Key: <strong>:value<\\/strong>","ca":"Key: <strong>:value<\\/strong>","en":"Key: <strong>:value<\\/strong>"}',
                'created_at' => '2019-06-23 14:37:50',
                'updated_at' => '2019-06-23 14:56:16',
            ),
            236 =>
            array (
                'group' => 'mage',
                'key' => 'datatable.sweetalert.translations.delete.error',
                'text' => '{"es":"Se ha producido un error al intentar eliminar la traducci\\u00f3n","ca":"S\'ha produ\\u00eft un error en intentar eliminar la traducci\\u00f3","en":"An error occurred while trying to delete the translation"}',
                'created_at' => '2019-06-23 14:37:50',
                'updated_at' => '2019-06-23 14:49:54',
            ),
            237 =>
            array (
                'group' => 'mage',
                'key' => 'auth.login.web-title',
                'text' => '{"es":"Login","ca":"Login","en":"Login"}',
                'created_at' => '2019-06-23 18:54:24',
                'updated_at' => '2019-06-23 22:49:43',
            ),
            238 =>
            array (
                'group' => 'mage',
                'key' => 'auth.login.page-title',
                'text' => '{"es":"Mage | Login","ca":"Mage | Login","en":"Mage | Login"}',
                'created_at' => '2019-06-23 18:54:24',
                'updated_at' => '2019-06-23 22:50:50',
            ),
            239 =>
            array (
                'group' => 'mage',
                'key' => 'auth.login.page-description',
                'text' => '{"es":"Speak, friend and enter","ca":"Speak, friend and enter","en":"Speak, friend and enter"}',
                'created_at' => '2019-06-23 18:54:24',
                'updated_at' => '2019-06-23 22:51:17',
            ),
            240 =>
            array (
                'group' => 'mage',
                'key' => 'auth.login.page-subdescription',
                'text' => '{"es":"","ca":"","en":""}',
                'created_at' => '2019-06-23 18:54:24',
                'updated_at' => '2019-06-23 22:51:31',
            ),
            241 =>
            array (
                'group' => 'mage',
                'key' => 'auth.login.register',
                'text' => '{"es":"Reg\\u00edstrate","ca":"Registra\'t","en":"Sign up"}',
                'created_at' => '2019-06-23 18:56:25',
                'updated_at' => '2019-06-23 22:52:57',
            ),
            242 =>
            array (
                'group' => 'mage',
                'key' => 'auth.forgot-password.web-title',
                'text' => '{"es":"Olvid\\u00e9 mi contrase\\u00f1a","ca":"Vaig oblidar la meva contrasenya","en":"Forgot password"}',
                'created_at' => '2019-06-23 18:58:59',
                'updated_at' => '2019-06-23 23:17:00',
            ),
            243 =>
            array (
                'group' => 'mage',
                'key' => 'auth.forgot-password.page-title',
                'text' => '{"es":"Mage | Olvid\\u00e9 mi contrase\\u00f1a","ca":"Mage | Vaig oblidar la meva contrasenya","en":"Mage | Forgot password"}',
                'created_at' => '2019-06-23 18:58:59',
                'updated_at' => '2019-06-23 23:16:35',
            ),
            244 =>
            array (
                'group' => 'mage',
                'key' => 'auth.forgot-password.page-description',
                'text' => '{"es":"Speak, friend and enter","ca":"Speak, friend and enter","en":"Speak, friend and enter"}',
                'created_at' => '2019-06-23 18:58:59',
                'updated_at' => '2019-06-23 22:56:55',
            ),
            245 =>
            array (
                'group' => 'mage',
                'key' => 'auth.forgot-password.page-subdescription',
                'text' => '{"es":"","ca":"","en":""}',
                'created_at' => '2019-06-23 18:58:59',
                'updated_at' => '2019-06-23 22:57:26',
            ),
            246 =>
            array (
                'group' => 'mage',
                'key' => 'auth.register.web-title',
                'text' => '{"es":"Reg\\u00edstrate","ca":"Registra\'t","en":"Sign up"}',
                'created_at' => '2019-06-23 20:08:58',
                'updated_at' => '2019-06-23 22:55:50',
            ),
            247 =>
            array (
                'group' => 'mage',
                'key' => 'auth.register.page-title',
                'text' => '{"es":"Mage | Reg\\u00edstrate","ca":"Mage | Registra\'t","en":"Mage | Sign up"}',
                'created_at' => '2019-06-23 20:08:58',
                'updated_at' => '2019-06-23 22:56:22',
            ),
            248 =>
            array (
                'group' => 'mage',
                'key' => 'auth.register.page-description',
                'text' => '{"es":"Speak, friend and enter","ca":"Speak, friend and enter","en":"Speak, friend and enter"}',
                'created_at' => '2019-06-23 20:08:58',
                'updated_at' => '2019-06-23 22:56:57',
            ),
            249 =>
            array (
                'group' => 'mage',
                'key' => 'auth.register.page-subdescription',
                'text' => '{"es":"","ca":"","en":""}',
                'created_at' => '2019-06-23 20:08:58',
                'updated_at' => '2019-06-23 22:57:29',
            ),
            250 =>
            array (
                'group' => 'mage',
                'key' => 'auth.register.name',
                'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
                'created_at' => '2019-06-23 20:09:59',
                'updated_at' => '2019-06-23 22:55:12',
            ),
            251 =>
            array (
                'group' => 'mage',
                'key' => 'auth.register.login',
                'text' => '{"es":"Login","ca":"Login","en":"Login"}',
                'created_at' => '2019-06-23 22:31:22',
                'updated_at' => '2019-06-23 22:55:27',
            ),
            252 =>
            array (
                'group' => 'mage',
                'key' => 'auth.forgot-password.login',
                'text' => '{"es":"Login","ca":"Login","en":"Login"}',
                'created_at' => '2019-06-23 22:33:57',
                'updated_at' => '2019-06-23 23:12:04',
            ),
            253 =>
            array (
                'group' => 'mage',
                'key' => 'auth.reset-password.web-title',
                'text' => '{"es":"Restaurar contrase\\u00f1a","ca":"Restaurar contrasenya","en":"Forgot password"}',
                'created_at' => '2019-06-23 22:41:45',
                'updated_at' => '2019-06-23 23:13:53',
            ),
            254 =>
            array (
                'group' => 'mage',
                'key' => 'auth.reset-password.page-title',
                'text' => '{"es":"Mage | Restaurar contrase\\u00f1a","ca":"Mage | Restaurar contrasenya","en":"Mage | Reset password"}',
                'created_at' => '2019-06-23 22:41:45',
                'updated_at' => '2019-06-23 23:18:08',
            ),
            255 =>
            array (
                'group' => 'mage',
                'key' => 'auth.reset-password.page-description',
                'text' => '{"es":"Speak, friend and enter","ca":"Speak, friend and enter","en":"Speak, friend and enter"}',
                'created_at' => '2019-06-23 22:41:45',
                'updated_at' => '2019-06-23 22:56:59',
            ),
            256 =>
            array (
                'group' => 'mage',
                'key' => 'auth.reset-password.page-subdescription',
                'text' => '{"es":"","ca":"","en":""}',
                'created_at' => '2019-06-23 22:41:45',
                'updated_at' => '2019-06-23 22:57:32',
            ),
            257 =>
            array (
                'group' => 'mage',
                'key' => 'auth.register',
                'text' => '{"es":"Reg\\u00edstrate","ca":"Registra\'t","en":"Sign up"}',
                'created_at' => '2019-06-23 22:58:28',
                'updated_at' => '2019-06-23 22:59:02',
            ),
            258 =>
            array (
                'group' => 'mage',
                'key' => 'auth.validations.name.required',
                'text' => '{"es":"El nombre es obligatorio","ca":"El nom \\u00e9s obligatori","en":"The name is mandatory"}',
                'created_at' => '2019-06-23 23:09:14',
                'updated_at' => '2019-06-23 23:11:05',
            ),
            259 =>
            array (
                'group' => 'mage',
                'key' => 'auth.validations.email.unique',
                'text' => '{"es":"El email debe ser \\u00fanico","ca":"L\'email ha de ser \\u00fanic","en":"The email must be unique"}',
                'created_at' => '2019-06-23 23:11:09',
                'updated_at' => '2019-06-23 23:19:19',
            ),
            260 =>
            array (
                'group' => 'mage',
                'key' => 'profile.change-password.web-title',
                'text' => '{"es":"Cambiar contrase\\u00f1a","ca":"Canviar contrasenya","en":"Change password"}',
                'created_at' => '2019-06-26 12:55:01',
                'updated_at' => '2019-06-26 13:07:36',
            ),
            261 =>
            array (
                'group' => 'mage',
                'key' => 'profile.change-password.page-title',
                'text' => '{"es":"Cambiar contrase\\u00f1a","ca":"Canviar contrasenya","en":"Change password"}',
                'created_at' => '2019-06-26 12:55:01',
                'updated_at' => '2019-06-26 13:05:02',
            ),
            262 =>
            array (
                'group' => 'mage',
                'key' => 'profile.change-password.breadcrumb.title',
                'text' => '{"es":"Cambiar contrase\\u00f1a","ca":"Canviar contrasenya","en":"Change password"}',
                'created_at' => '2019-06-26 12:55:01',
                'updated_at' => '2019-06-26 13:05:04',
            ),
            263 =>
            array (
                'group' => 'mage',
                'key' => 'profile.chage-password.form.current',
                'text' => '{"es":"Contrase\\u00f1a actual","ca":"Contrasenya actual","en":"Current password"}',
                'created_at' => '2019-06-26 12:55:01',
                'updated_at' => '2019-06-26 13:05:22',
            ),
            264 =>
            array (
                'group' => 'mage',
                'key' => 'profile.chage-password.form.current.placeholder',
                'text' => '{"es":"Contrase\\u00f1a actual","ca":"Contrasenya actual","en":"Current password"}',
                'created_at' => '2019-06-26 12:55:01',
                'updated_at' => '2019-06-26 13:05:36',
            ),
            265 =>
            array (
                'group' => 'mage',
                'key' => 'profile.chage-password.form.password-new',
                'text' => '{"es":"Nueva contrase\\u00f1a","ca":"Nova contrasenya","en":"New password"}',
                'created_at' => '2019-06-26 12:55:01',
                'updated_at' => '2019-06-26 13:05:49',
            ),
            266 =>
            array (
                'group' => 'mage',
                'key' => 'profile.chage-password.form.password-new.placeholder',
                'text' => '{"es":"Nueva contrase\\u00f1a","ca":"Nova contrasenya","en":"New password"}',
                'created_at' => '2019-06-26 12:55:01',
                'updated_at' => '2019-06-26 13:05:53',
            ),
            267 =>
            array (
                'group' => 'mage',
                'key' => 'profile.chage-password.form.password-new-confirmation',
                'text' => '{"es":"Repetir nueva contrase\\u00f1a","ca":"Repetir nova contrasenya","en":"Repeat new password"}',
                'created_at' => '2019-06-26 12:55:01',
                'updated_at' => '2019-06-26 13:06:06',
            ),
            268 =>
            array (
                'group' => 'mage',
                'key' => 'profile.chage-password.form.password-new-confirmation.placeholder',
                'text' => '{"es":"Repetir nueva contrase\\u00f1a","ca":"Repetir nova contrasenya","en":"Repeat new password"}',
                'created_at' => '2019-06-26 12:55:01',
                'updated_at' => '2019-06-26 13:06:08',
            ),
            269 =>
            array (
                'group' => 'mage',
                'key' => 'profile.change-password.form.save',
                'text' => '{"es":"Guardar","ca":"Guardar","en":"Save"}',
                'created_at' => '2019-06-26 12:55:01',
                'updated_at' => '2019-06-26 13:06:21',
            ),
            270 =>
            array (
                'group' => 'mage',
                'key' => 'profile.show.breadcrumb.title',
                'text' => '{"es":"Perfil","ca":"Perfil","en":"Profile"}',
                'created_at' => '2019-06-26 12:57:06',
                'updated_at' => '2019-06-26 13:06:33',
            ),
            271 =>
            array (
                'group' => 'mage',
                'key' => 'profile.change-password.title',
                'text' => '{"es":"Datos de acceso","ca":"Dades d\'acc\\u00e9s","en":"Access data"}',
                'created_at' => '2019-06-26 13:01:45',
                'updated_at' => '2019-06-26 13:07:00',
            ),
            272 =>
            array (
                'group' => 'mage',
                'key' => 'profile.form.validations.password_current.required',
                'text' => '{"es":"La contrase\\u00f1a es obligatoria","ca":"La contrasenya \\u00e9s obligat\\u00f2ria","en":"Password is mandatory"}',
                'created_at' => '2019-06-26 13:07:48',
                'updated_at' => '2019-06-26 14:36:26',
            ),
            273 =>
            array (
                'group' => 'mage',
                'key' => 'profile.form.validations.password_new.required',
                'text' => '{"es":"La nueva contrase\\u00f1a es obligatoria","ca":"La nova contrasenya \\u00e9s obligat\\u00f2ria","en":"The new password is mandatory"}',
                'created_at' => '2019-06-26 13:07:48',
                'updated_at' => '2019-06-26 14:37:21',
            ),
            274 =>
            array (
                'group' => 'mage',
                'key' => 'profile.form.validations.password_new.confirmed',
                'text' => '{"es":"La nueva contrase\\u00f1a no coincide con la confirmaci\\u00f3n","ca":"La nova contrasenya no coincideix amb la confirmaci\\u00f3","en":"New password does not match confirmation"}',
                'created_at' => '2019-06-26 13:07:48',
                'updated_at' => '2019-06-26 14:36:46',
            ),
            275 =>
            array (
                'group' => 'mage',
                'key' => 'profile.change-password.index.alert.errors.title',
                'text' => '{"es":"Se ha producido un error al intentar cambiar la contrase\\u00f1a","ca":"S\'ha produ\\u00eft un error en intentar canviar la contrasenya","en":"An error occurred while trying to change the password"}',
                'created_at' => '2019-06-26 13:07:49',
                'updated_at' => '2019-06-26 14:37:36',
            ),
            276 =>
            array (
                'group' => 'mage',
                'key' => 'profile.form.validations.password_new_confirmation.required',
                'text' => '{"es":"Es necesario confirmar la nueva contrase\\u00f1a","ca":"\\u00c9s necessari confirmar la nova contrasenya","en":"It is necessary to confirm the new password"}',
                'created_at' => '2019-06-26 13:26:38',
                'updated_at' => '2019-06-26 14:37:51',
            ),
            277 =>
            array (
                'group' => 'mage',
                'key' => 'profile.form.validations.password-hash',
                'text' => '{"es":"La contrase\\u00f1a actual es incorrecta","ca":"La contrasenya actual \\u00e9s incorrecta","en":"Current password is incorrect"}',
                'created_at' => '2019-06-26 13:32:28',
                'updated_at' => '2019-06-26 14:38:06',
            ),
            278 =>
            array (
                'group' => 'mage',
                'key' => 'profile.change-password.index.alert.updated.title',
                'text' => '{"es":"Contrase\\u00f1a actualizada","ca":"Contrasenya actualitzada","en":"Password updated"}',
                'created_at' => '2019-06-26 14:47:04',
                'updated_at' => '2019-06-26 15:57:47',
            ),
            279 =>
            array (
                'group' => 'mage',
                'key' => 'profile.change-password.index.alert.updated.description',
                'text' => '{"es":"La contrase\\u00f1a ha sido actualizada correctamente","ca":"La contrasenya ha estat actualitzada correctament","en":"The password has been correctly updated"}',
                'created_at' => '2019-06-26 14:47:04',
                'updated_at' => '2019-06-26 15:58:07',
            ),
            280 =>
            array (
                'group' => 'mage',
                'key' => 'profile.index.web-title',
                'text' => '{"es":"Perfil","ca":"Perfil","en":"Profile"}',
                'created_at' => '2019-06-26 15:59:16',
                'updated_at' => '2019-06-26 16:14:40',
            ),
            281 =>
            array (
                'group' => 'mage',
                'key' => 'profile.index.page-title',
                'text' => '{"es":"Perfil","ca":"Perfil","en":"Profile"}',
                'created_at' => '2019-06-26 15:59:16',
                'updated_at' => '2019-06-26 16:14:52',
            ),
            282 =>
            array (
                'group' => 'mage',
                'key' => 'profile.index.breadcrumb.title',
                'text' => '{"es":"Perfil","ca":"Perfil","en":"Profile"}',
                'created_at' => '2019-06-26 15:59:16',
                'updated_at' => '2019-06-26 16:16:22',
            ),
            283 =>
            array (
                'group' => 'mage',
                'key' => 'profile.show.alert.errors.title',
                'text' => '{"es":"Se ha producido un error al actualizar el perfil","ca":"S\'ha produ\\u00eft un error en actualitzar el perfil","en":"An error occurred when updating the profile"}',
                'created_at' => '2019-06-27 13:09:51',
                'updated_at' => '2019-06-27 14:03:42',
            ),
            284 =>
            array (
                'group' => 'mage',
                'key' => 'profile.form.name.label',
                'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
                'created_at' => '2019-06-27 13:20:39',
                'updated_at' => '2019-06-27 14:08:37',
            ),
            285 =>
            array (
                'group' => 'mage',
                'key' => 'profile.form.name.placeholder',
                'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
                'created_at' => '2019-06-27 13:20:39',
                'updated_at' => '2019-06-27 14:08:47',
            ),
            286 =>
            array (
                'group' => 'mage',
                'key' => 'profile.show.alert.updated.title',
                'text' => '{"es":"Perfil actualizado","ca":"Perfil actualitzat","en":"Updated profile"}',
                'created_at' => '2019-06-27 13:21:03',
                'updated_at' => '2019-06-27 14:11:09',
            ),
            287 =>
            array (
                'group' => 'mage',
                'key' => 'profile.show.alert.updated.description',
                'text' => '{"es":"El perfil ha sido actualizado correctamente","ca":"El perfil ha estat actualitzat correctament","en":"The profile has been successfully updated"}',
                'created_at' => '2019-06-27 13:21:03',
                'updated_at' => '2019-06-27 14:12:24',
            ),
            288 =>
            array (
                'group' => 'mage',
                'key' => 'profile.form.validations.name.required',
                'text' => '{"es":"El nombre es obligatorio","ca":"El nom \\u00e9s obligatori","en":"The name is mandatory"}',
                'created_at' => '2019-06-27 13:58:55',
                'updated_at' => '2019-06-27 14:14:09',
            ),
            289 =>
            array (
                'group' => 'mage',
                'key' => 'profile.name',
                'text' => '{"es":"Nombre","ca":"Nom","en":"Name"}',
                'created_at' => '2019-06-27 14:00:55',
                'updated_at' => '2019-06-27 14:13:47',
            ),
            290 =>
            array (
                'group' => 'mage',
                'key' => 'profile.email',
                'text' => '{"es":"eMail","ca":"eMail","en":"eMail"}',
                'created_at' => '2019-06-27 14:00:55',
                'updated_at' => '2019-06-27 14:12:59',
            ),
            291 =>
            array (
                'group' => 'mage',
                'key' => 'profile.profile',
                'text' => '{"es":"Perfil","ca":"Perfil","en":"Profile"}',
                'created_at' => '2019-06-27 14:00:55',
                'updated_at' => '2019-06-27 14:13:06',
            ),
        ));
    }
}
