<?php
/*
Plugin Name: Libro de Reclamaciones Perú
Description: Un formulario básico para registrar reclamaciones según las normativas de Perú.
Version: 1.0
Author: Lorenzo Romero
License: GPL2
*/

// Incluir los archivos necesarios
require_once plugin_dir_path(__FILE__) . 'includes/form-handler.php';
require_once plugin_dir_path(__FILE__) . 'includes/email-functions.php';
require_once plugin_dir_path(__FILE__) . 'includes/admin-menu.php';
require_once plugin_dir_path(__FILE__) . 'includes/settings.php';
require_once plugin_dir_path(__FILE__) . 'includes/departamentos.php';
require_once plugin_dir_path(__FILE__) . 'includes/provincias.php';
require_once plugin_dir_path(__FILE__) . 'includes/ajax-handler.php';


// Registrar shortcode del formulario
function libro_reclamaciones_shortcode() {
    ob_start();
    include plugin_dir_path(__FILE__) . 'templates/form-template.php';
    return ob_get_clean();
}
add_shortcode('libro_reclamaciones', 'libro_reclamaciones_shortcode');

// Encolar estilos y scripts
function libro_reclamaciones_enqueue_assets() {
    if (is_page() && has_shortcode(get_post()->post_content, 'libro_reclamaciones')) {
        wp_enqueue_style('libro-reclamaciones-styles', plugin_dir_url(__FILE__) . 'assets/css/styles.css');
        wp_enqueue_script('libro-reclamaciones-scripts', plugin_dir_url(__FILE__) . 'assets/js/scripts.js', array('jquery'), null, true);

        // Localizar ajaxurl y los nonce
        wp_localize_script('libro-reclamaciones-scripts', 'libro_reclamaciones', array(
            'ajaxurl' => admin_url('admin-ajax.php'),
            'provincias_nonce' => wp_create_nonce('obtener_provincias_nonce'),
            'distritos_nonce' => wp_create_nonce('obtener_distritos_nonce') // Nonce para distritos
        ));
    }
}


add_action('wp_enqueue_scripts', 'libro_reclamaciones_enqueue_assets');
