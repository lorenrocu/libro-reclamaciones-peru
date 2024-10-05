<?php
function enviar_reclamo_por_correo($nombre, $dni, $direccion, $telefono, $correo, $tipo_reclamo, $detalle, $producto, $monto_reclamado, $fecha_reclamo) {
    // Obtener los datos de la empresa desde las opciones
    $empresa_razon_social = get_option('libro_reclamaciones_razon_social');
    $empresa_ruc = get_option('libro_reclamaciones_ruc');
    $empresa_direccion = get_option('libro_reclamaciones_direccion');

    // Enviar correo al administrador
    $to = get_option('admin_email');
    $subject = 'Nuevo Reclamo - ' . $tipo_reclamo;
    $message = "Datos de la Empresa:\nRazón Social: $empresa_razon_social\nRUC: $empresa_ruc\nDirección: $empresa_direccion\n\n".
               "Detalles del Reclamo:\nNombre: $nombre\nDNI: $dni\nDirección: $direccion\nTeléfono: $telefono\nCorreo: $correo\nTipo de Reclamo: $tipo_reclamo\nDetalle: $detalle\n\n".
               "Información Adicional:\nProducto: $producto\nMonto Reclamado: $monto_reclamado\nFecha del Reclamo: $fecha_reclamo";

    $headers = array('Content-Type: text/plain; charset=UTF-8');

    wp_mail($to, $subject, $message, $headers);
}
