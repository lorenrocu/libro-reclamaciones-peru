<?php
// Crear el menú en el panel de administración
function libro_reclamaciones_menu() {
    add_menu_page(
        'Libro de Reclamaciones',
        'Libro de Reclamaciones',
        'manage_options',
        'libro-reclamaciones-options',
        'libro_reclamaciones_options_page',
        'dashicons-admin-settings',
        90
    );
}

add_action('admin_menu', 'libro_reclamaciones_menu');

// Página de opciones del plugin
function libro_reclamaciones_options_page() {
    ?>
    <div class="wrap">
        <h1>Configuración del Libro de Reclamaciones</h1>

        <form method="post" action="options.php">
            <?php settings_fields('libro_reclamaciones'); ?>
            <?php do_settings_sections('libro_reclamaciones'); ?>

            <h2>Datos de la Empresa</h2>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Razón Social</th>
                    <td><input type="text" name="libro_reclamaciones_razon_social" value="<?php echo esc_attr(get_option('libro_reclamaciones_razon_social')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">RUC</th>
                    <td><input type="text" name="libro_reclamaciones_ruc" value="<?php echo esc_attr(get_option('libro_reclamaciones_ruc')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Dirección</th>
                    <td><input type="text" name="libro_reclamaciones_direccion" value="<?php echo esc_attr(get_option('libro_reclamaciones_direccion')); ?>" /></td>
                </tr>
            </table>

            <h2>Páginas de Política</h2>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Página de Política de Privacidad</th>
                    <td>
                        <?php
                        $pagina_privacidad = get_option('libro_reclamaciones_politica_privacidad');
                        wp_dropdown_pages(array(
                            'name' => 'libro_reclamaciones_politica_privacidad',
                            'selected' => $pagina_privacidad,
                            'show_option_none' => 'Seleccionar página'
                        ));
                        ?>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Página de Política de Cookies</th>
                    <td>
                        <?php
                        $pagina_cookies = get_option('libro_reclamaciones_politica_cookies');
                        wp_dropdown_pages(array(
                            'name' => 'libro_reclamaciones_politica_cookies',
                            'selected' => $pagina_cookies,
                            'show_option_none' => 'Seleccionar página'
                        ));
                        ?>
                    </td>
                </tr>
            </table>

            <?php submit_button(); // Deja solo este botón ?>
        </form>
    </div>
    <?php
}
