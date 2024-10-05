<?php
require_once 'provincias.php'; // Incluir el archivo de provincias

// Manejar la solicitud AJAX para obtener provincias
function obtener_provincias_ajax() {
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'obtener_provincias_nonce')) {
        wp_send_json_error('Error de seguridad. Nonce no válido.');
        return;
    }

    if (isset($_POST['departamento'])) {
        $departamento = sanitize_text_field($_POST['departamento']);
        $provincias = obtener_provincias($departamento);

        if (!empty($provincias)) {
            wp_send_json_success($provincias);
        } else {
            wp_send_json_error('No se encontraron provincias para el departamento seleccionado.');
        }
    } else {
        wp_send_json_error('Departamento no especificado.');
    }
}

// Manejar la solicitud AJAX para obtener distritos
function obtener_distritos_ajax() {
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'obtener_distritos_nonce')) {
        wp_send_json_error('Error de seguridad. Nonce no válido.');
        return;
    }

    if (isset($_POST['provincia'])) {
        $provincia = sanitize_text_field($_POST['provincia']);
        $distritos = obtener_distritos($provincia);

        if (!empty($distritos)) {
            wp_send_json_success($distritos);
        } else {
            wp_send_json_error('No se encontraron distritos para la provincia seleccionada.');
        }
    } else {
        wp_send_json_error('Provincia no especificada.');
    }
}

// Registrar las acciones AJAX
add_action('wp_ajax_obtener_provincias', 'obtener_provincias_ajax');
add_action('wp_ajax_nopriv_obtener_provincias', 'obtener_provincias_ajax');

add_action('wp_ajax_obtener_distritos', 'obtener_distritos_ajax');
add_action('wp_ajax_nopriv_obtener_distritos', 'obtener_distritos_ajax');
