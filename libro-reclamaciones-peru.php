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

// Registrar la acción solo después de que la función esté definida
add_action('init', 'procesar_reclamo');

// Registrar el shortcode y otros hooks...
function libro_reclamaciones_shortcode() {
    ob_start();
    include plugin_dir_path(__FILE__) . 'templates/form-template.php';
    return ob_get_clean();
}
add_shortcode('libro_reclamaciones', 'libro_reclamaciones_shortcode');

// Encolar estilos y scripts...
function libro_reclamaciones_enqueue_assets() {
    if (is_page() && has_shortcode(get_post()->post_content, 'libro_reclamaciones')) {
        wp_enqueue_style('libro-reclamaciones-styles', plugin_dir_url(__FILE__) . 'assets/css/styles.css');
        wp_enqueue_script('libro-reclamaciones-scripts', plugin_dir_url(__FILE__) . 'assets/js/scripts.js', array('jquery'), null, true);
        wp_localize_script('libro-reclamaciones-scripts', 'libro_reclamaciones', array(
            'ajaxurl' => admin_url('admin-ajax.php'),
            'provincias_nonce' => wp_create_nonce('obtener_provincias_nonce'),
            'distritos_nonce' => wp_create_nonce('obtener_distritos_nonce')
        ));
    }
}
add_action('wp_enqueue_scripts', 'libro_reclamaciones_enqueue_assets');

// Función para crear la tabla de reclamos...
function crear_tabla_reclamos() {
    global $wpdb;
    $tabla_reclamos = $wpdb->prefix . 'reclamos';
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE $tabla_reclamos (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        fecha_registro datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        nombre varchar(255) NOT NULL,
        primer_apellido varchar(255) NOT NULL,
        segundo_apellido varchar(255) NOT NULL,
        tipo_documento varchar(50) NOT NULL,
        numero_documento varchar(50) NOT NULL,
        celular varchar(50),
        departamento varchar(255),
        provincia varchar(255),
        distrito varchar(255),
        direccion text,
        referencia text,
        correo varchar(255),
        menor_edad varchar(3),
        tutor_nombre varchar(255),
        tutor_email varchar(255),
        tutor_tipo_documento varchar(50),
        tutor_numero_documento varchar(50),
        tipo_reclamo varchar(50),
        tipo_consumo varchar(50),
        numero_pedido varchar(100),
        fecha_reclamacion date,
        proveedor varchar(255),
        monto_reclamado varchar(50),
        descripcion_producto text,
        fecha_compra date,
        fecha_consumo date,
        fecha_caducidad date,
        detalle_reclamacion text,
        pedido_cliente text,
        PRIMARY KEY  (id)
    ) $charset_collate;";
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}
register_activation_hook( __FILE__, 'crear_tabla_reclamos' );

function generar_codigo_seguimiento() {
    // Genera un código único con prefijo "RC-" y 10 caracteres en mayúsculas
    return 'RC-' . strtoupper(substr(md5(uniqid(rand(), true)), 0, 10));
}
