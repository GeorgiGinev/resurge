require('./bootstrap');
import * as $ from 'jquery';

// export for others scripts to use
window.$ = $;
window.jQuery = $;

import * as popper from 'popper.js';
window.popper = popper;

import * as toastr from 'toastr';
window.toastr = toastr;
