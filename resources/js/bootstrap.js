window._ = require('lodash');

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    window.validate = require('jquery-validation');
    window.toastr = require('toastr');

    require('../../node_modules/material-kit/assets/js/core/bootstrap-material-design.min');
    require('../../node_modules/material-kit/assets/js/material-kit.min');
    require('../../node_modules/jquery-validation/dist/localization/messages_pl.min');

} catch (e) {}

toastr.options = {
    "positionClass": "toast-bottom-right",
    "showDuration": "3",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};
