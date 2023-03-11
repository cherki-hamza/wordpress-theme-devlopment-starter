<?php

/**
 * Enqueue theme assets .
 *
 * @package CHERKI_HAMZA_THEME
 */

namespace CHERKI_HAMZA_THEME\Inc;

use CHERKI_HAMZA_THEME\Inc\Traits\Singleton;

class Assets
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
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        // register the main style.css file
        wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(CHERKI_HAMZA_PATH . '/style.css'), 'all');
        // register styles
        wp_register_style('bootstrap_cherki_hamza_css', CHERKI_HAMZA_URI . '/assets/css/bootstrap.css', [], false, 'all');
        wp_register_style('custom_style_cherki_hamza_css', CHERKI_HAMZA_URI . '/assets/css/custom_style.css', [], filemtime(CHERKI_HAMZA_PATH . '/assets/css/custom_style.css'), 'all');
        wp_register_style('fontawsme_cherki_hamza_font', CHERKI_HAMZA_URI . '/assets/css/all.css', [], filemtime(CHERKI_HAMZA_PATH . '/assets/css/all.css'), 'all');


        // enqueue styles
        wp_enqueue_style('bootstrap_cherki_hamza_css');
        wp_enqueue_style('custom_style_cherki_hamza_css');
        wp_enqueue_style('fontawsme_cherki_hamza_font');
    }

    public function register_scripts()
    {
        // register scripts
        wp_register_script('bootstrap_cherki_hamza_js', CHERKI_HAMZA_URI . '/assets/js/bootstrap.js', ['jquery'], false, true);
        wp_register_script('custom_script_cherki_hamza_js', CHERKI_HAMZA_URI . '/assets/js/custom_script.js', [], filemtime(CHERKI_HAMZA_PATH . '/assets/js/custom_script.js'), true);

        // enqueue scripts
        wp_enqueue_script('bootstrap_cherki_hamza_js');
        wp_enqueue_script('custom_script_cherki_hamza_js');
    }
}
