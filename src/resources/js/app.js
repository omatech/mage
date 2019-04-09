window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
}
window.$ = window.jQuery = require('jquery');
window.Swal = require('sweetalert2/dist/sweetalert2.all');
window.Toast = require('./app/components/alerts/toast').Toast;
window.Dropzone = require('./vendor/dropzone/src_dropzone');
require('bootstrap/dist/js/bootstrap.bundle');
require('popper.js');
require('select2/dist/js/select2.full');
require('datatables.net/js/jquery.dataTables');
require('datatables.net-bs4/js/dataTables.bootstrap4');
require('feather-icons/dist/feather.js').replace();
require('./vendor/admin-lte/AdminLTE.js');
require('overlayscrollbars/js/OverlayScrollbars');

window.sodium = require('libsodium-wrappers/dist/modules/libsodium-wrappers');
window.base64 = require('./app/components/cipher/base64');

window.mage = {
    'encrypt' : require('./app/components/cipher/encrypt').encrypt,
    'deleteAlert': require('./app/components/alerts/delete.alert').call,
    'translations': { 'editAlert': require('./app/translations/edit.alert').call }
};

require('./app/components/overlayScrollbars');


require('./app/users/list.datatable');
require('./app/roles/list.datatable');
require('./app/permissions/list.datatable');
require('./app/translations/list.datatable');


require('./app/components/select2');
require('./app/components/togglePermissions');
require('./app/components/encrypted-dropzone');

require('./app/components/annotation');