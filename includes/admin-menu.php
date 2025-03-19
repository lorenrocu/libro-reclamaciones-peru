<?php
// Crear el menú en el panel de administración
function libro_reclamaciones_menu() {
    add_menu_page(
        'Libro de Reclamaciones',           // Título de la página
        'Libro de Reclamaciones',           // Título del menú
        'manage_options',                   // Capacidad necesaria
        'libro_reclamaciones',              // Slug del menú (debe coincidir con el usado en settings.php)
        'libro_reclamaciones_options_page', // Función que muestra la página de opciones
        'dashicons-admin-settings',         // Icono del menú
        90                                  // Posición en el menú
    );
}
add_action('admin_menu', 'libro_reclamaciones_menu');

// Página de opciones del plugin
function libro_reclamaciones_options_page() {
    ?>
    <div class="wrap">
        <h1>Configuración del Libro de Reclamaciones</h1>
        <form method="post" action="options.php">
            <?php
                // Se utiliza el mismo grupo de ajustes registrado en settings.php
                settings_fields('libro_reclamaciones');
                do_settings_sections('libro_reclamaciones');
                submit_button();
            ?>
        </form>
    </div>
    <?php
}
?>
