<?php
// Archivo: includes/form-handler.php
// Función que procesa el reclamo
function procesar_reclamo() {
    if (isset($_POST['enviar_reclamo'])) {

        // Sanitizar datos recibidos
        $nombre = sanitize_text_field($_POST['nombre']);
        $primer_apellido = sanitize_text_field($_POST['primer_apellido']);
        $segundo_apellido = sanitize_text_field($_POST['segundo_apellido']);
        $tipo_documento = sanitize_text_field($_POST['tipo_documento']);
        $numero_documento = sanitize_text_field($_POST['numero_documento']);
        $celular = sanitize_text_field($_POST['celular']);
        $departamento = sanitize_text_field($_POST['departamento']);
        $provincia = sanitize_text_field($_POST['provincia']);
        $distrito = sanitize_text_field($_POST['distrito']);
        $direccion = sanitize_text_field($_POST['direccion']);
        $referencia = sanitize_text_field($_POST['referencia']);
        $correo = sanitize_email($_POST['correo']);
        $menor_edad = sanitize_text_field($_POST['menor_edad']);

        $tutor_nombre = isset($_POST['tutor_nombre']) ? sanitize_text_field($_POST['tutor_nombre']) : '';
        $tutor_email = isset($_POST['tutor_email']) ? sanitize_email($_POST['tutor_email']) : '';
        $tutor_tipo_documento = isset($_POST['tutor_tipo_documento']) ? sanitize_text_field($_POST['tutor_tipo_documento']) : '';
        $tutor_numero_documento = isset($_POST['tutor_numero_documento']) ? sanitize_text_field($_POST['tutor_numero_documento']) : '';

        $tipo_reclamo = sanitize_text_field($_POST['tipo_reclamo']);
        $tipo_consumo = sanitize_text_field($_POST['tipo_consumo']);
        $numero_pedido = sanitize_text_field($_POST['numero_pedido']);
        $fecha_reclamacion = sanitize_text_field($_POST['fecha_reclamacion']);
        $proveedor = sanitize_text_field($_POST['proveedor']);
        $monto_reclamado = sanitize_text_field($_POST['monto_reclamado']);
        $descripcion_producto = sanitize_text_field($_POST['descripcion_producto']);
        $fecha_compra = sanitize_text_field($_POST['fecha_compra']);
        $fecha_consumo = sanitize_text_field($_POST['fecha_consumo']);
        $fecha_caducidad = sanitize_text_field($_POST['fecha_caducidad']);
        $detalle_reclamacion = sanitize_textarea_field($_POST['detalle_reclamacion']);
        $pedido_cliente = sanitize_textarea_field($_POST['pedido_cliente']);

        // Generar el código de seguimiento
        $codigo_seguimiento = generar_codigo_seguimiento();

        // Envío del correo (usando la función definida en email-functions.php)
        enviar_reclamo_por_correo(
            $nombre, $primer_apellido, $segundo_apellido,
            $tipo_documento, $numero_documento, $celular,
            $departamento, $provincia, $distrito, $direccion, $referencia,
            $correo, $menor_edad,
            $tutor_nombre, $tutor_email, $tutor_tipo_documento, $tutor_numero_documento,
            $tipo_reclamo, $tipo_consumo, $numero_pedido, $fecha_reclamacion, $proveedor,
            $monto_reclamado, $descripcion_producto, $fecha_compra, $fecha_consumo, $fecha_caducidad,
            $detalle_reclamacion, $pedido_cliente, $codigo_seguimiento
        );

        // Guardar los datos en la base de datos para auditoría, incluyendo el código de seguimiento
        global $wpdb;
        $tabla_reclamos = $wpdb->prefix . 'reclamos';
        $wpdb->insert(
            $tabla_reclamos,
            array(
                'codigo_seguimiento'    => $codigo_seguimiento,
                'nombre'                => $nombre,
                'primer_apellido'       => $primer_apellido,
                'segundo_apellido'      => $segundo_apellido,
                'tipo_documento'        => $tipo_documento,
                'numero_documento'      => $numero_documento,
                'celular'               => $celular,
                'departamento'          => $departamento,
                'provincia'             => $provincia,
                'distrito'              => $distrito,
                'direccion'             => $direccion,
                'referencia'            => $referencia,
                'correo'                => $correo,
                'menor_edad'            => $menor_edad,
                'tutor_nombre'          => $tutor_nombre,
                'tutor_email'           => $tutor_email,
                'tutor_tipo_documento'  => $tutor_tipo_documento,
                'tutor_numero_documento'=> $tutor_numero_documento,
                'tipo_reclamo'          => $tipo_reclamo,
                'tipo_consumo'          => $tipo_consumo,
                'numero_pedido'         => $numero_pedido,
                'fecha_reclamacion'     => $fecha_reclamacion,
                'proveedor'             => $proveedor,
                'monto_reclamado'       => $monto_reclamado,
                'descripcion_producto'  => $descripcion_producto,
                'fecha_compra'          => $fecha_compra,
                'fecha_consumo'         => $fecha_consumo,
                'fecha_caducidad'       => $fecha_caducidad,
                'detalle_reclamacion'   => $detalle_reclamacion,
                'pedido_cliente'        => $pedido_cliente
            ),
            array(
                '%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s'
            )
        );

        // Redireccionar o mostrar mensaje de éxito (opcional)
        wp_redirect(home_url('/gracias-por-su-reclamo'));
        exit;
    }
}
