/* eslint-disable no-undef */
/* eslint-disable no-unused-vars */
/*!
 * Essential javascript functions/variables
 *
 * @author      _a
 * @version     0.1.0
 * @since       _s_1.0.0.0
 *
 */

/*==================================================================================
  General Variables & Presets
==================================================================================*/


/* Viewport Width
/––––––––––––––––––––––––*/
var $vpWidth = jQuery(window).width();

/* Touch Device
/––––––––––––––––––––––––*/
var $root = $('html');
var isTouch = 'ontouchstart' in document.documentElement;
if (isTouch) {
	$root.attr('data-touch','true');
} else {
	$root.attr('data-touch','false');
}


