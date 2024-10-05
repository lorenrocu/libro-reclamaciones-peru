<?php
// Registrar los ajustes
function libro_reclamaciones_settings_init() {
    // Registrar la sección de opciones
    add_settings_section(
        'libro_reclamaciones_section',
        'Datos de la Empresa',
        null,
        'libro-reclamaciones-options'
    );

    // Registrar el campo para Razón Social
    add_settings_field(
        'libro_reclamaciones_razon_social',
        'Razón Social',
        'libro_reclamaciones_razon_social_cb',
        'libro-reclamaciones-options',
        'libro_reclamaciones_section'
    );
    register_setting('libro_reclamaciones_options_group', 'libro_reclamaciones_razon_social');

    // Registrar el campo para RUC
    add_settings_field(
        'libro_reclamaciones_ruc',
        'RUC',
        'libro_reclamaciones_ruc_cb',
        'libro-reclamaciones-options',
        'libro_reclamaciones_section'
    );
    register_setting('libro_reclamaciones_options_group', 'libro_reclamaciones_ruc');

    // Registrar el campo para Dirección
    add_settings_field(
        'libro_reclamaciones_direccion',
        'Dirección',
        'libro_reclamaciones_direccion_cb',
        'libro-reclamaciones-options',
        'libro_reclamaciones_section'
    );
    register_setting('libro_reclamaciones_options_group', 'libro_reclamaciones_direccion');

    add_settings_section(
        'libro_reclamaciones_politica_section',
        'Páginas de Política',
        null,
        'libro-reclamaciones'
    );

    add_settings_field(
        'libro_reclamaciones_politica_privacidad',
        'Página de Política de Privacidad',
        'libro_reclamaciones_politica_privacidad_callback',
        'libro-reclamaciones',
        'libro_reclamaciones_politica_section'
    );

    add_settings_field(
        'libro_reclamaciones_politica_cookies',
        'Página de Política de Cookies',
        'libro_reclamaciones_politica_cookies_callback',
        'libro-reclamaciones',
        'libro_reclamaciones_politica_section'
    );

    register_setting('libro_reclamaciones', 'libro_reclamaciones_politica_privacidad');
    register_setting('libro_reclamaciones', 'libro_reclamaciones_politica_cookies');
}

add_action('admin_init', 'libro_reclamaciones_settings_init');

// Callbacks para los campos
function libro_reclamaciones_razon_social_cb() {
    $razon_social = get_option('libro_reclamaciones_razon_social');
    echo '<input type="text" name="libro_reclamaciones_razon_social" value="' . esc_attr($razon_social) . '" class="regular-text">';
}

function libro_reclamaciones_ruc_cb() {
    $ruc = get_option('libro_reclamaciones_ruc');
    echo '<input type="text" name="libro_reclamaciones_ruc" value="' . esc_attr($ruc) . '" class="regular-text">';
}

function libro_reclamaciones_direccion_cb() {
    $direccion = get_option('libro_reclamaciones_direccion');
    echo '<input type="text" name="libro_reclamaciones_direccion" value="' . esc_attr($direccion) . '" class="regular-text">';
}

// Callback para la selección de la página de política de privacidad
function libro_reclamaciones_politica_privacidad_callback() {
    $pagina_privacidad = get_option('libro_reclamaciones_politica_privacidad');
    wp_dropdown_pages(array(
        'name' => 'libro_reclamaciones_politica_privacidad',
        'selected' => $pagina_privacidad,
        'show_option_none' => 'Seleccionar página'
    ));
}

// Callback para la selección de la página de política de cookies
function libro_reclamaciones_politica_cookies_callback() {
    $pagina_cookies = get_option('libro_reclamaciones_politica_cookies');
    wp_dropdown_pages(array(
        'name' => 'libro_reclamaciones_politica_cookies',
        'selected' => $pagina_cookies,
        'show_option_none' => 'Seleccionar página'
    ));
}
