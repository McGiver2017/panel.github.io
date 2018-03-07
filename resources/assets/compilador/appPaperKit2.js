/**require('./../paper-kit-2/js/jquery-3.2.1.min.js');

require('./../paper-kit-2/js/popper');
require('./../paper-kit-2/js/bootstrap.min.js');
**/
window._ = require('lodash');

window.Popper = require('./../js/static/js/core/popper.min.js');;

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.$ = window.jQuery = require('./../js/static/js/core/jquery.3.2.1.min.js');
    require('./../paper-kit-2/js/jquery-ui-1.12.1.custom.min.js');
    require('./../js/static/js/core/bootstrap.min.js');
    
} catch (e) { }
require('./../paper-kit-2/js/bootstrap-switch.min');
require('./../paper-kit-2/js/nouislider');
require('./../paper-kit-2/js/photo_swipe/photoswipe.min');
require('./../paper-kit-2/js/photo_swipe/photoswipe-ui-default.min');
require('./../paper-kit-2/js/photo_swipe/init-gallery');
require('./../paper-kit-2/js/bootstrap-select');
require('./../paper-kit-2/js/jasny-bootstrap.min');
require('./../paper-kit-2/js/bootstrap-tagsinput');
require('moment');
require('./../paper-kit-2/js/bootstrap-datetimepicker.min');
require('./../paper-kit-2/js/paper-kit.js?v=2.1.0');
