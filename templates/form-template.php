<?php
$pagina_privacidad_id = get_option('libro_reclamaciones_politica_privacidad');
$pagina_cookies_id = get_option('libro_reclamaciones_politica_cookies');

$pagina_privacidad_url = get_permalink($pagina_privacidad_id);
$pagina_cookies_url = get_permalink($pagina_cookies_id);
?>
<form method="post" action="" class="libro-reclamaciones-form">
    <h2>Datos de la empresa</h2>
    <div class="libro-reclamaciones-datos-empresa">
        <p><strong>Razón Social:</strong> <?php echo esc_html(get_option('libro_reclamaciones_razon_social')); ?></p>
        <p><strong>RUC:</strong> <?php echo esc_html(get_option('libro_reclamaciones_ruc')); ?></p>
        <p><strong>Dirección:</strong> <?php echo esc_html(get_option('libro_reclamaciones_direccion')); ?></p>
    </div>

    <h2>Identificación del consumidor reclamante</h2>

    <div class="form-grid">
        <div class="form-group">
            <label for="nombre">Nombre *</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>

        <div class="form-group">
            <label for="primer_apellido">Primer apellido *</label>
            <input type="text" name="primer_apellido" id="primer_apellido" required>
        </div>

        <div class="form-group">
            <label for="segundo_apellido">Segundo apellido *</label>
            <input type="text" name="segundo_apellido" id="segundo_apellido" required>
        </div>

        <div class="form-group">
            <label for="tipo_documento">Tipo de documentación *</label>
            <select name="tipo_documento" id="tipo_documento" required>
                <option value="">Seleccionar documentación</option>
                <option value="dni">DNI</option>
                <option value="pasaporte">Pasaporte</option>
                <option value="ce">Carnet de Extranjería</option>
            </select>
        </div>

        <div class="form-group">
            <label for="numero_documento">Número de documentación *</label>
            <input type="text" name="numero_documento" id="numero_documento" required>
        </div>

        <div class="form-group">
            <label for="celular">Celular *</label>
            <input type="text" name="celular" id="celular" required>
        </div>

        <div class="form-group">
            <label for="departamento">Departamento *</label>
            <select name="departamento" id="departamento" required>
                <option value="">Seleccionar departamento</option>
                <?php
                // Obtener los departamentos desde la función
                $departamentos = obtener_departamentos();
                foreach ($departamentos as $departamento) {
                    echo '<option value="' . esc_attr($departamento) . '">' . esc_html($departamento) . '</option>';
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="provincia">Provincia *</label>
            <select name="provincia" id="provincia" required>
                <option value="">Seleccionar provincia</option>
                <!-- Las provincias se cargarán dinámicamente aquí -->
            </select>
        </div>

        <div class="form-group">
            <label for="distrito">Distrito *</label>
            <select name="distrito" id="distrito" required>
                <option value="">Seleccionar distrito</option>
                <!-- Los distritos se cargarán dinámicamente aquí -->
            </select>
        </div>


        <div class="form-group">
            <label for="direccion">Dirección *</label>
            <input type="text" name="direccion" id="direccion" required>
        </div>

        <div class="form-group">
            <label for="referencia">Referencia</label>
            <input type="text" name="referencia" id="referencia">
        </div>

        <div class="form-group">
            <label for="correo">Correo electrónico *</label>
            <input type="email" name="correo" id="correo" required>
        </div>
        <div class="form-group" style="grid-column: span 3;">
            <p>¿Eres menor de edad?</p>
            <label><input type="radio" name="menor_edad" value="si" id="menor_si"> Sí</label>
            <label><input type="radio" name="menor_edad" value="no" id="menor_no" checked> No</label>
        </div>

        <!-- Contenedor del formulario de tutor -->
        <div  class="form-group" id="tutor-form" style="display:none; grid-column: span 3;">
            <h3>Padre / Madre / Tutor</h3>
            <div class="form-grid">
                <div class="form-group">
                    <label for="tutor_nombre">Nombre</label>
                    <input type="text" name="tutor_nombre" id="tutor_nombre">
                </div>

                <div class="form-group">
                    <label for="tutor_email">Correo electrónico</label>
                    <input type="email" name="tutor_email" id="tutor_email">
                </div>

                <div class="form-group">
                    <label for="tutor_tipo_documento">Tipo de documentación</label>
                    <select name="tutor_tipo_documento" id="tutor_tipo_documento">
                        <option value="">Selección de documentación</option>
                        <option value="dni">DNI</option>
                        <option value="pasaporte">Pasaporte</option>
                        <option value="ce">Carnet de extranjería</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tutor_numero_documento">Número de documento</label>
                    <input type="text" name="tutor_numero_documento" id="tutor_numero_documento">
                </div>
            </div>
        </div>
    </div>

    <h2>Detalle del reclamo y orden del consumidor</h2>

    <div class="form-grid">
    <!-- Tipo de reclamo -->
    <div class="form-group">
        <label for="tipo_reclamo">Tipo de reclamo *</label>
        <select name="tipo_reclamo" id="tipo_reclamo" required>
            <option value="">Tipo de reclamo</option>
            <option value="reclamo">Reclamo</option>
            <option value="queja">Queja</option>
        </select>
    </div>

    <!-- Tipo de consumo -->
    <div class="form-group">
        <label for="tipo_consumo">Tipo de consumo *</label>
        <select name="tipo_consumo" id="tipo_consumo" required>
            <option value="">Tipo de consumo</option>
            <option value="producto">Producto</option>
            <option value="servicio">Servicio</option>
        </select>
        <span class="error">Ingrese tipo de reclamo</span>
    </div>

    <!-- Número de pedido -->
    <div class="form-group">
        <label for="numero_pedido">N° de pedido. *</label>
        <input type="text" name="numero_pedido" id="numero_pedido" placeholder="N° Pedido" required>
    </div>

    <!-- Fecha de reclamación / queja -->
    <div class="form-group">
        <label for="fecha_reclamacion">Fecha de reclamación / queja *</label>
        <input type="date" name="fecha_reclamacion" id="fecha_reclamacion" value="03/10/2024" required>
    </div>

    <!-- Proveedor -->
    <div class="form-group">
        <label for="proveedor">Proveedor</label>
        <input type="text" name="proveedor" id="proveedor" placeholder="Proveedor">
    </div>

        <!-- Monto reclamado (S/.) -->
    <div class="form-group">
        <label for="monto_reclamado">Monto reclamado (S/.)</label>
        <input type="text" name="monto_reclamado" id="monto_reclamado" placeholder="Monto reclamado">
    </div>

        <!-- Descripción del producto o servicio -->
    <div class="form-group" style="grid-column: span 3;">
        <label for="descripcion_producto">Descripción del producto o servicio *</label>
        <textarea name="descripcion_producto" id="descripcion_producto" placeholder="Descripción del producto o servicio" required></textarea>
    </div>

        <!-- Fecha de compra -->
    <div class="form-group">
        <label for="fecha_compra">Fecha de compra</label>
        <input type="date" name="fecha_compra" id="fecha_compra" placeholder="dd/mm/aaaa">
    </div>

        <!-- Fecha de consumo -->
    <div class="form-group">
        <label for="fecha_consumo">Fecha de consumo</label>
        <input type="date" name="fecha_consumo" id="fecha_consumo" placeholder="dd/mm/aaaa">
    </div>

        <!-- Fecha de caducidad -->
    <div class="form-group">
        <label for="fecha_caducidad">Fecha de caducidad</label>
        <input type="date" name="fecha_caducidad" id="fecha_caducidad" placeholder="dd/mm/aaaa">
    </div>

    <div class="form-group"  style="grid-column: span 3;">
        <label for="detalle_reclamacion">Detalle de la Reclamación / Queja, según lo indicado por el cliente: *</label>
        <textarea name="detalle_reclamacion" id="detalle_reclamacion" required></textarea>
    </div>

    <!-- Sección: Pedido del Cliente -->
    <div class="form-group"  style="grid-column: span 3;">
        <label for="pedido_cliente">Pedido del Cliente: *</label>
        <textarea name="pedido_cliente" id="pedido_cliente" required></textarea>
    </div>

    <!-- Información adicional y advertencias -->
    <div class="info-adicional"  style="grid-column: span 3;">
        <ul class="notas-adicionales">
            <li>*Presentar un reclamo no impide utilizar otros mecanismos de resolución de disputas, ni es necesario hacerlo antes de acudir al Indecopi.</li>
            <li>*El proveedor está obligado a responder al reclamo en un plazo máximo de treinta (30) días calendario, con la posibilidad de extenderlo hasta un plazo igual.</li>
            <li>*Al firmar este documento, el cliente otorga su consentimiento para ser contactado una vez finalizada la gestión del reclamo, con el fin de evaluar la calidad y satisfacción del proceso de atención.</li>
        </ul>
        <p><strong>Reclamo:</strong> Desacuerdo relacionado con productos y/o servicios.</p>
        <p><strong>Queja:</strong> Desacuerdo no relacionado con productos y/o servicios; o, malestar o insatisfacción con la atención al público.</p>

        <p><input type="checkbox" name="declaracion_jurada" id="declaracion_jurada" required>
        Declaro que soy el dueño del servicio/producto y acepto el contenido de este formulario al declarar bajo Declaración Jurada la veracidad de los hechos descritos.</p>

        <p>
            <input type="checkbox" name="politica_privacidad" id="politica_privacidad" required>
            He leído y acepto la <a href="<?php echo esc_url($pagina_privacidad_url); ?>" target="_blank">Política de privacidad y seguridad</a>
            y la <a href="<?php echo esc_url($pagina_cookies_url); ?>" target="_blank">Política de cookies</a>.
        </p>
    </div>
</div>

    <!-- Aquí puedes agregar más campos o secciones -->
    <p><input type="submit" name="enviar_reclamo" value="Enviar reclamo" class="btn-submit"></p>
</form>
