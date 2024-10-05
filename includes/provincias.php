<?php
// Array de provincias por departamento
function obtener_provincias($departamento) {
    $provincias = array(
        'Amazonas' => array('Bagua', 'Bongará', 'Chachapoyas', 'Condorcanqui', 'Luya', 'Rodríguez de Mendoza', 'Utcubamba'),
        'Áncash' => array('Aija', 'Antonio Raymondi', 'Asunción', 'Bolognesi', 'Carhuaz', 'Carlos Fermín Fitzcarrald', 'Casma', 'Corongo', 'Huaraz', 'Huari', 'Huarmey', 'Huaylas', 'Mariscal Luzuriaga', 'Ocros', 'Pallasca', 'Pomabamba', 'Recuay', 'Santa', 'Sihuas', 'Yungay'),
        // Agrega los demás departamentos y provincias
    );

    return isset($provincias[$departamento]) ? $provincias[$departamento] : array();
}

function obtener_distritos($provincia) {
    $distritos = array(
        'Bagua' => array('Aramango', 'Bagua', 'Copallín', 'El Parco', 'Imaza', 'La Peca'),
        'Chachapoyas' => array('Asunción', 'Balsas', 'Chachapoyas', 'Cheto', 'Chiliquín', 'Chuquibamba', 'Granada', 'Huancas', 'La Jalca', 'Leimebamba', 'Levanto', 'Magdalena', 'Mariscal Castilla', 'Molinopampa', 'Montevideo', 'Olleros', 'Quinjalca', 'San Francisco de Daguas', 'San Isidro de Maino', 'Soloco', 'Sonche'),
        'Huaraz' => array('Cochabamba', 'Colcabamba', 'Huaraz', 'Independencia', 'Jangas', 'La Libertad', 'Olleros', 'Pampas', 'Pariacoto', 'Pira', 'Tarica'),
        // Agrega más distritos según las provincias
    );

    return isset($distritos[$provincia]) ? $distritos[$provincia] : array();
}