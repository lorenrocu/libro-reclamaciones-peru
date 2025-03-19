<?php
function enviar_reclamo_por_correo(
    $nombre = '', $primer_apellido = '', $segundo_apellido = '',
    $tipo_documento = '', $numero_documento = '', $celular = '',
    $departamento = '', $provincia = '', $distrito = '', $direccion = '', $referencia = '',
    $correo = '', $menor_edad = '',
    $tutor_nombre = '', $tutor_email = '', $tutor_tipo_documento = '', $tutor_numero_documento = '',
    $tipo_reclamo = '', $tipo_consumo = '', $numero_pedido = '', $fecha_reclamacion = '', $proveedor = '',
    $monto_reclamado = '', $descripcion_producto = '', $fecha_compra = '', $fecha_consumo = '', $fecha_caducidad = '',
    $detalle_reclamacion = '', $pedido_cliente = '', $codigo_seguimiento = ''
) {
    // Verificar que los valores clave no estén vacíos
    if (empty($nombre) || empty($tipo_documento) || empty($numero_documento) || empty($correo) || empty($tipo_reclamo)) {
        error_log("Error: Falta información clave para enviar el reclamo.");
        return;
    }

    // Obtener datos de la empresa desde las opciones de WordPress
    $empresa_razon_social = get_option('libro_reclamaciones_razon_social', 'Empresa Desconocida');
    $empresa_ruc = get_option('libro_reclamaciones_ruc', '00000000000');
    $empresa_direccion = get_option('libro_reclamaciones_direccion', 'Dirección no disponible');

    // Construir el mensaje del correo en formato HTML
    $mensaje = '<html><head><meta charset="UTF-8">';
    $mensaje .= '<style>
                    body { font-family: Arial, sans-serif; font-size: 14px; color: #333; }
                    .header { background-color: #f5f5f5; padding: 10px; text-align: center; font-size: 18px; }
                    .section { margin: 20px 0; }
                    .section h2 { color: #0073aa; border-bottom: 1px solid #ddd; padding-bottom: 5px; }
                    .section p { margin: 5px 0; }
                 </style>';
    $mensaje .= '</head><body>';
    $mensaje .= '<div class="header">Nuevo Reclamo Recibido</div>';

    // Datos de la empresa
    $mensaje .= '<div class="section">';
    $mensaje .= '<h2>Datos de la Empresa</h2>';
    $mensaje .= "<p><strong>Razón Social:</strong> $empresa_razon_social</p>";
    $mensaje .= "<p><strong>RUC:</strong> $empresa_ruc</p>";
    $mensaje .= "<p><strong>Dirección:</strong> $empresa_direccion</p>";
    // Incluir el código de seguimiento en el mensaje
    $mensaje .= "<p><strong>Código de Seguimiento:</strong> $codigo_seguimiento</p>";
    $mensaje .= '</div>';

    // Datos del consumidor
    $mensaje .= '<div class="section">';
    $mensaje .= '<h2>Datos del Consumidor</h2>';
    $mensaje .= "<p><strong>Nombre:</strong> $nombre $primer_apellido $segundo_apellido</p>";
    $mensaje .= "<p><strong>Documento:</strong> $tipo_documento - $numero_documento</p>";
    $mensaje .= "<p><strong>Celular:</strong> $celular</p>";
    $mensaje .= "<p><strong>Correo:</strong> $correo</p>";
    $mensaje .= "<p><strong>Dirección:</strong> Departamento: $departamento, Provincia: $provincia, Distrito: $distrito, Dirección: $direccion</p>";
    $mensaje .= "<p><strong>Referencia:</strong> $referencia</p>";

    if ($menor_edad === 'si') {
        $mensaje .= "<p><strong>Menor de edad:</strong> Sí</p>";
        $mensaje .= "<p><strong>Datos del Tutor:</strong></p>";
        $mensaje .= "<p><strong>Nombre:</strong> $tutor_nombre</p>";
        $mensaje .= "<p><strong>Correo:</strong> $tutor_email</p>";
        $mensaje .= "<p><strong>Documento:</strong> $tutor_tipo_documento - $tutor_numero_documento</p>";
    } else {
        $mensaje .= "<p><strong>Menor de edad:</strong> No</p>";
    }
    $mensaje .= '</div>';

    // Detalles del reclamo
    $mensaje .= '<div class="section">';
    $mensaje .= '<h2>Detalles del Reclamo</h2>';
    $mensaje .= "<p><strong>Tipo de Reclamo:</strong> $tipo_reclamo</p>";
    $mensaje .= "<p><strong>Tipo de Consumo:</strong> $tipo_consumo</p>";
    $mensaje .= "<p><strong>Número de Pedido:</strong> $numero_pedido</p>";
    $mensaje .= "<p><strong>Fecha de Reclamo:</strong> $fecha_reclamacion</p>";
    $mensaje .= "<p><strong>Proveedor:</strong> $proveedor</p>";
    $mensaje .= "<p><strong>Monto Reclamado:</strong> $monto_reclamado</p>";
    $mensaje .= "<p><strong>Descripción del Producto/Servicio:</strong> $descripcion_producto</p>";
    $mensaje .= "<p><strong>Fecha de Compra:</strong> $fecha_compra</p>";
    $mensaje .= "<p><strong>Fecha de Consumo:</strong> $fecha_consumo</p>";
    $mensaje .= "<p><strong>Fecha de Caducidad:</strong> $fecha_caducidad</p>";
    $mensaje .= "<p><strong>Detalle del Reclamo:</strong> $detalle_reclamacion</p>";
    $mensaje .= "<p><strong>Pedido del Cliente:</strong> $pedido_cliente</p>";
    $mensaje .= '</div>';
    $mensaje .= '</body></html>';

    // Obtener el correo del administrador y del cliente, enviándolos como destinatarios principales
    $admin_email = get_option('admin_email', 'soporte@tudominio.com');
    $para = array($admin_email, $correo);

    $asunto = 'Nuevo Reclamo - ' . $tipo_reclamo;
    $headers = array('Content-Type: text/html; charset=UTF-8');

    // Enviar el correo a ambos destinatarios
    $enviado = wp_mail($para, $asunto, $mensaje, $headers);

    if (!$enviado) {
        error_log("Error al enviar el correo de reclamo.");
    }
}
?>
