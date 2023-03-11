<?php

/**
 * Bootstraps the theme.
 *
 * @package CHERKI_HAMZA_THEME
 */

namespace CHERKI_HAMZA_THEME\Inc;

use CHERKI_HAMZA_THEME\Inc\Traits\Singleton;

class CHERKI_HAMZA_THEME
{

    use Singleton;

    protected function __construct()
    {
        // lod classes
        Assets::get_instance();
        //Redux_framework::get_instance();

        // setup the hooks
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        // Actions
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme()
    {

        // add support for title
        add_theme_support('title-tag');

        // add support for custom-logo
        add_theme_support(
            'custom-logo',
            [
                'header-text' => ['site-title', 'site-description'],
                'height'      => 30,
                'width'       => 25,
                'flex-height' => true,
                'flex-width'  => true,
            ]
        );
    }
}
