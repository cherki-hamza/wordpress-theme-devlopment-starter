<?php

/**
 * Add Redux framework theme options.
 *
 * @package CHERKI_HAMZA_THEME
 */

namespace CHERKI_HAMZA_THEME\Inc;

use CHERKI_HAMZA_THEME\Inc\Traits\Singleton;

class Redux_framework
{
    use Singleton;

    protected function __construct()
    {
        // lod classes
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        // actions and filters
        if (!class_exists('ReduxFramework') && file_exists(CHERKI_HAMZA_PATH . '/theme-options/redux-core/framework.php')) {
            require_once(CHERKI_HAMZA_PATH . '/theme-options/redux-core/framework.php');
        }

        if (!isset($redux_demo) && file_exists(CHERKI_HAMZA_PATH . '/theme-options/sample/sample-config.php')) {
            require_once(CHERKI_HAMZA_PATH . '/theme-options/sample/sample-config.php');
        }
    }
}
