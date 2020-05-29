/**
 * Axios / CSRF Configuration
 */
window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
}

/**
 * Isolated jQuery
 */
window.jQ = window.jQuery = require('jquery');
jQ.noConflict();

/**
 * Mage Main Dependencies
 */
require('bootstrap/dist/js/bootstrap.bundle');
require('popper.js');
require('select2/dist/js/select2.full');
require('datatables.net/js/jquery.dataTables');
require('datatables.net-bs4/js/dataTables.bootstrap4');
require('feather-icons/dist/feather.js').replace();
require('./vendor/admin-lte/AdminLTE.js');
require('overlayscrollbars/js/OverlayScrollbars');
window.Swal = require('sweetalert2/dist/sweetalert2.all');
window.Toast = require('./app/components/alerts/toast').Toast;

/**
 * Components
 */
require('./app/components/options.datatables');
require('./app/components/alerts/delete.alert');
require('./app/components/overlayScrollbars');
require('./app/users/list.datatable');
require('./app/roles/list.datatable');
require('./app/permissions/list.datatable');
require('./app/permissions/toggle.permissions');
require('./app/translations/list.datatable');
require('./app/components/select2');
require('./app/activitylogs/activitylogs.datatable');
require('./app/jobs/jobs.datatable');
require('./app/jobs/done.jobs.datatable');
require('./app/jobs/failed.jobs.datatable');
/**
 * To remove
 */
window.Dropzone = require('./vendor/dropzone/src_dropzone');
window.sodium = require('libsodium-wrappers/dist/modules/libsodium-wrappers');
window.base64 = require('./app/components/cipher/base64');

window.mage = {
    'encrypt' : require('./app/components/cipher/encrypt').encrypt
};

require('./app/components/encrypted-dropzone');

require('./app/components/annotation');