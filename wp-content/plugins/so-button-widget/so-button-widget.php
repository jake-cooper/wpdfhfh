<?php
/*
Plugin Name: Button Widget
Description: A powerful yet simple button widget for your sidebars or Page Builder pages.
Version: 1.0.1
Author: Greg Priday
Author URI: http://siteorigin.com
License: GPL3
License URI: https://www.gnu.org/copyleft/gpl.html
*/

define('SOW_BUTTON_VERSION', '1.0.1');

if( !class_exists('SiteOrigin_Widgets_Loader') ) include(plugin_dir_path(__FILE__).'base/loader.php');
new SiteOrigin_Widgets_Loader('button', __FILE__, plugin_dir_path(__FILE__).'inc/widget.php', SOW_BUTTON_VERSION);