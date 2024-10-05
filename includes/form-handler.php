<?php
function procesar_reclamo() {
    if (isset($_POST['enviar_reclamo'])) {
        // Validar y sanitizar los datos del formulario
        $nombre = sanitize_text_field($_POST['nombre']);
        $dni = sanitize_text_field($_POST['dni']);
        $direccion = sanitize_text_field($_POST['direccion']);
        $telefono = sanitize_text_field($_POST['telefono']);
        $correo = sanitize_email($_POST['correo']);
        $tipo_reclamo = sanitize_text_field($_POST['tipo_reclamo']);
        $detalle = sanitize_textarea_field($_POST['detalle_reclamacion']);

        // Campos adicionales
        $producto = sanitize_text_field($_POST['producto']);
        $monto_reclamado = sanitize_text_field($_POST['monto_reclamado']);
        $fecha_reclamo = sanitize_text_field($_POST['fecha_reclamo']);

        // Enviar el correo con los datos
        enviar_reclamo_por_correo($nombre, $dni, $direccion, $telefono, $correo, $tipo_reclamo, $detalle, $producto, $monto_reclamado, $fecha_reclamo);

        // Redireccionar o mostrar mensaje de éxito (opcional)
        wp_redirect(home_url('/gracias-por-su-reclamo'));
        exit;
    }
}
add_action('init', 'procesar_reclamo');
