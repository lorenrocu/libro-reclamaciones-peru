jQuery(document).ready(function($) {
    // Manejar cambio de departamento y cargar provincias
    $('#departamento').on('change', function() {
        var departamento = $(this).val();

        if (departamento !== '') {
            $.ajax({
                url: libro_reclamaciones.ajaxurl,
                type: 'POST',
                data: {
                    action: 'obtener_provincias',
                    departamento: departamento,
                    nonce: libro_reclamaciones.provincias_nonce
                },
                success: function(response) {
                    if (response.success) {
                        $('#provincia').empty();
                        $('#provincia').append('<option value="">Seleccionar provincia</option>');

                        $.each(response.data, function(index, provincia) {
                            $('#provincia').append('<option value="' + provincia + '">' + provincia + '</option>');
                        });
                    } else {
                        alert(response.data || 'No se encontraron provincias para el departamento seleccionado.');
                    }
                },
                error: function() {
                    alert('Ocurrió un error al obtener las provincias.');
                }
            });
        } else {
            $('#provincia').empty();
            $('#provincia').append('<option value="">Seleccionar provincia</option>');
        }
    });

    // Manejar cambio de provincia y cargar distritos
    $('#provincia').on('change', function() {
        var provincia = $(this).val();

        if (provincia !== '') {
            $.ajax({
                url: libro_reclamaciones.ajaxurl,
                type: 'POST',
                data: {
                    action: 'obtener_distritos',
                    provincia: provincia,
                    nonce: libro_reclamaciones.distritos_nonce
                },
                success: function(response) {
                    if (response.success) {
                        $('#distrito').empty();
                        $('#distrito').append('<option value="">Seleccionar distrito</option>');

                        $.each(response.data, function(index, distrito) {
                            $('#distrito').append('<option value="' + distrito + '">' + distrito + '</option>');
                        });
                    } else {
                        alert(response.data || 'No se encontraron distritos para la provincia seleccionada.');
                    }
                },
                error: function() {
                    alert('Ocurrió un error al obtener los distritos.');
                }
            });
        } else {
            $('#distrito').empty();
            $('#distrito').append('<option value="">Seleccionar distrito</option>');
        }
    });
});

jQuery(document).ready(function($) {
    // Función para mostrar/ocultar el formulario del tutor según la selección de menor de edad
    $('input[name="menor_edad"]').on('change', function() {
        if ($('#menor_si').is(':checked')) {
            $('#tutor-form').slideDown(300); // Mostrar el formulario si selecciona "Sí"
        } else {
            $('#tutor-form').slideUp(300); // Ocultar el formulario si selecciona "No"
        }
    });
    
    // Ejecutar cuando la página se carga para verificar si se seleccionó previamente "Sí"
    if ($('#menor_si').is(':checked')) {
        $('#tutor-form').show();
    }
});
