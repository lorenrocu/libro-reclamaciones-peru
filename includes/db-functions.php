<?php
// Función para crear la tabla en la base de datos al activar el plugin
function libro_reclamaciones_crear_tabla() {
    global $wpdb;
    $tabla = $wpdb->prefix . 'libro_reclamaciones'; // Nombre de la tabla con prefijo

    $charset_collate = $wpdb->get_charset_collate();

    // SQL para crear la tabla
    $sql = "CREATE TABLE IF NOT EXISTS $tabla (
        id INT(11) NOT NULL AUTO_INCREMENT,
        nombre VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        telefono VARCHAR(20),
        direccion TEXT,
        departamento VARCHAR(100),
        provincia VARCHAR(100),
        distrito VARCHAR(100),
        detalle_reclamo TEXT,
        fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset_collate;";

    // Incluir la función dbDelta para gestionar la creación/actualización de la tabla
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

// Registrar el gancho de activación del plugin para crear la tabla
register_activation_hook(__FILE__, 'libro_reclamaciones_crear_tabla');
