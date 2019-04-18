
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

global.jQuery = global.$ = require('jquery');
global.Popper = require('popper.js').default;

require('bootstrap');

require('jquery.nicescroll/jquery.nicescroll.js');
require('tooltip.js');
require('moment');
require('stisla-dev/assets/js/stisla');
require('./libraries');
require('stisla-dev/assets/js/scripts');

require('./custom');