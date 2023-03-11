<?php

/**  video ==> 18
 * Theme Name: Cherki Hamza wordpress theme starter (ch_wp_starter)
 * Description: This is The Cherki Hamza wordpress theme starter: 
 * Plugin URI: https://hamzacherki.com/
 * Author: Cherki 
 * Website: https://www.hamzacherki.com/
 * Version: 1.0
 * Author URI: https://hamzacherki.com/
 *
 * Text Domain: hamzacherki
 * 
 * GNU General Public License.
 */

use CHERKI_HAMZA_THEME\Inc\CHERKI_HAMZA_THEME;

if (!defined('CHERKI_HAMZA_PATH')) {
    define('CHERKI_HAMZA_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('CHERKI_HAMZA_URI')) {
    define('CHERKI_HAMZA_URI', untrailingslashit(get_template_directory_uri()));
}



require_once CHERKI_HAMZA_PATH . '/inc/helpers/autoloader.php';

/* require_once 'theme-options/redux-core/framework.php';
require_once 'theme-options/sample/sample-config.php'; */


function cherki_hamza_theme_instance()
{
    \CHERKI_HAMZA_THEME\Inc\CHERKI_HAMZA_THEME::get_instance();
}
cherki_hamza_theme_instance();




// function for enqueue scrips and styles
function cherki_hamza_scripts()
{
}
