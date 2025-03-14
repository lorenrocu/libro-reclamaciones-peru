<?php
// Array de provincias por departamento
function obtener_provincias($departamento) {
    $provincias = array(
        'Amazonas' => array('Bagua', 'Bongará', 'Chachapoyas', 'Condorcanqui', 'Luya', 'Rodríguez de Mendoza', 'Utcubamba'),
        'Áncash' => array('Aija', 'Antonio Raymondi', 'Asunción', 'Bolognesi', 'Carhuaz', 'Carlos Fermín Fitzcarrald', 'Casma', 'Corongo', 'Huaraz', 'Huari', 'Huarmey', 'Huaylas', 'Mariscal Luzuriaga', 'Ocros', 'Pallasca', 'Pomabamba', 'Recuay', 'Santa', 'Sihuas', 'Yungay'),
        'Apurímac' => array('Abancay', 'Andahuaylas', 'Antabamba', 'Aymaraes', 'Cotabambas', 'Chincheros', 'Grau'),
        'Arequipa' => array('Arequipa', 'Camana', 'Caraveli', 'Castilla', 'Caylloma', 'Condesuyos', 'Islay', 'La Unión'),
        'Ayacucho' => array('Huamanga', 'Cangallo', 'Huanca Sancos', 'Huanta', 'La Mar', 'Lucanas', 'Parinacochas', 'Páucar del Sara Sara', 'Sucre', 'Víctor Fajardo', 'Vilcas Huamán'),
        'Cajamarca' => array('Cajamarca', 'Cajabamba', 'Celendín', 'Chota', 'Contumazá', 'Cutervo', 'Hualgayoc', 'Jaén', 'San Ignacio', 'San Marcos', 'San Miguel', 'San Pablo', 'Santa Cruz'),
        'Callao' => array('Callao'),
        'Cusco' => array('Cusco', 'Acomayo', 'Anta', 'Calca', 'Canas', 'Canchis', 'Chumbivilcas', 'Espinar', 'La Convención', 'Paruro', 'Paucartambo', 'Quispicanchi', 'Urubamba'),
        'Huancavelica' => array('Huancavelica', 'Acobamba', 'Angaraes', 'Castrovirreyna', 'Churcampa', 'Huaytará', 'Tayacaja'),
        'Huánuco' => array('Huánuco', 'Ambo', 'Dos de Mayo', 'Huacaybamba', 'Huamalíes', 'Leoncio Prado', 'Marañón', 'Pachitea', 'Puerto Inca', 'Lauricocha', 'Yarowilca'),
        'Ica' => array('Ica', 'Chincha', 'Nasca', 'Palpa', 'Pisco'),
        'Junín' => array('Huancayo', 'Chanchamayo', 'Chupaca', 'Concepción', 'Jauja', 'Junín', 'Satipo', 'Tarma', 'Yauli'),
        'La Libertad' => array('Trujillo', 'Ascope', 'Bolívar', 'Chepén', 'Gran Chimú', 'Julcán', 'Otuzco', 'Pacasmayo', 'Pataz', 'Sánchez Carrión', 'Santiago de Chuco', 'Virú'),
        'Lambayeque' => array('Chiclayo', 'Ferreñafe', 'Lambayeque'),
        'Lima' => array('Lima', 'Barranca', 'Cajatambo', 'Canta', 'Cañete', 'Huaral', 'Huarochirí', 'Huaura', 'Oyón', 'Yauyos'),
        'Loreto' => array('Maynas', 'Alto Amazonas', 'Datem del Marañón', 'Loreto', 'Mariscal Ramón Castilla', 'Putumayo', 'Requena', 'Ucayali'),
        'Madre de Dios' => array('Tambopata', 'Manu', 'Tahuamanu'),
        'Moquegua' => array('Mariscal Nieto', 'General Sánchez Cerro', 'Ilo'),
        'Pasco' => array('Pasco', 'Daniel Alcides Carrión', 'Oxapampa'),
        'Piura' => array('Piura', 'Ayabaca', 'Huancabamba', 'Morropón', 'Paita', 'Sechura', 'Sullana', 'Talara'),
        'Puno' => array('Puno', 'Azángaro', 'Carabaya', 'Chucuito', 'El Collao', 'Huancané', 'Lampa', 'Melgar', 'Moho', 'San Antonio de Putina', 'San Román', 'Sandia', 'Yunguyo'),
        'San Martín' => array('Moyobamba', 'Bellavista', 'El Dorado', 'Huallaga', 'Lamas', 'Mariscal Cáceres', 'Picota', 'Rioja', 'San Martín', 'Tocache'),
        'Tacna' => array('Tacna', 'Candarave', 'Jorge Basadre', 'Tarata'),
        'Tumbes' => array('Tumbes', 'Contralmirante Villar', 'Zarumilla'),
        'Ucayali' => array('Coronel Portillo', 'Atalaya', 'Padre Abad', 'Purús')

    );

    return isset($provincias[$departamento]) ? $provincias[$departamento] : array();
}

function obtener_distritos($provincia) {
    $distritos = array(
        // Distritos de Amazonas
        'Bagua' => array('Aramango', 'Bagua', 'Copallín', 'El Parco', 'Imaza', 'La Peca'),
        'Bongará' => array('Chisquilla', 'Churuja', 'Corosha', 'Cuispes', 'Florida', 'Jazan', 'Jumbilla', 'Recta', 'San Carlos', 'Shipasbamba', 'Valera', 'Yambrasbamba'),
        'Chachapoyas' => array('Asunción', 'Balsas', 'Chachapoyas', 'Cheto', 'Chiliquín', 'Chuquibamba', 'Granada', 'Huancas', 'La Jalca', 'Leimebamba', 'Levanto', 'Magdalena', 'Mariscal Castilla', 'Molinopampa', 'Montevideo', 'Olleros', 'Quinjalca', 'San Francisco de Daguas', 'San Isidro de Maino', 'Soloco', 'Sonche'),
        'Condorcanqui' => array('Nieva', 'Río Santiago', 'El Cenepa'),
        'Luya' => array('Camporredondo', 'Cocabamba', 'Colcamar', 'Conila', 'Inguilpata', 'Lamud', 'Longuita', 'Lonya Chico', 'Luya', 'Luya Viejo', 'María', 'Ocalli', 'Ocumal', 'Pisuquia', 'Providencia', 'San Cristóbal', 'San Francisco del Yeso', 'San Jerónimo', 'San Juan de Lopecancha', 'Santa Catalina', 'Santo Tomás', 'Tingo', 'Trita'),
        'Rodríguez de Mendoza' => array('Chirimoto', 'Cochamal', 'Huambo', 'Limabamba', 'Longar', 'Mariscal Benavides', 'Milpuc', 'Omia', 'Santa Rosa', 'Soloco', 'Totora', 'Vista Alegre'),
        'Utcubamba' => array('Bagua Grande', 'Cajaruro', 'Cumba', 'El Milagro', 'Jamalca', 'Lonya Grande', 'Yamón'),

        // Distritos de Áncash
        'Aija' => array('Aija', 'Coris', 'Huacllán', 'La Merced', 'Succha'), 
        'Antonio Raymondi' => array('Llamellín', 'Aczo', 'Chaccho', 'Chingas', 'Mirgas', 'San Juan de Rontoy'), 
        'Asunción' => array('Chacas', 'Acochaca'), 
        'Bolognesi' => array('Chiquián', 'Abelardo Pardo Lezameta', 'Antonio Raymondi', 'Aquia', 'Cajacay', 'Canis', 'Colquioc', 'Huallanca', 'Huasta', 'Huayllacayán', 'La Primavera', 'Mangas', 'Pacllón', 'San Miguel de Corpanqui', 'Ticllos'),
        'Carhuaz' => array('Carhuaz', 'Acopampa', 'Amashca', 'Anta', 'Ataquero', 'Marcara', 'Pariahuanca', 'San Miguel de Aco', 'Shilla', 'Tinco', 'Yungar'), 
        'Carlos Fermín Fitzcarrald' => array('San Luis', 'San Nicolás', 'Yauya'), 
        'Casma' => array('Casma', 'Buena Vista Alta', 'Comandante Noel', 'Yaután'), 
        'Corongo' => array('Corongo', 'Aco', 'Bambas', 'Cusca', 'La Pampa', 'Yanac', 'Yupan'),        
        'Huaraz' => array('Huaraz', 'Cochabamba', 'Colcabamba', 'Huanchay', 'Independencia', 'Jangas', 'La Libertad', 'Olleros', 'Pampas', 'Pariacoto', 'Pira', 'Tarica'),
        'Huari' => array('Huari', 'Anra', 'Cajay', 'Chavín de Huantar', 'Huacachi', 'Huacchis', 'Huachis', 'Huántar', 'Masin', 'Paucas', 'Ponto', 'Rahuapampa', 'Rapayán', 'San Marcos', 'San Pedro de Chaná', 'Uco'), 
        'Huarmey' => array('Huarmey', 'Cochapeti', 'Culebras', 'Huayan', 'Malvas'), 
        'Huaylas' => array('Caraz', 'Huallanca', 'Huata', 'Huaylas', 'Mato', 'Pamparomas', 'Pueblo Libre', 'Santa Cruz', 'Santo Toribio', 'Yuracmarca'), 
        'Mariscal Luzuriaga' => array('Piscobamba', 'Casca', 'Eleazar Guzmán Barrón', 'Fidel Olivas Escudero', 'Llama', 'Llumpa', 'Lucma', 'Musga'), 
        'Ocros' => array('Ocros', 'Acas', 'Cajamarquilla', 'Carhuapampa', 'Cochas', 'Congas', 'Llipa', 'San Cristóbal de Raján', 'San Pedro', 'Santiago de Chilcas'), 
        'Pallasca' => array('Cabana', 'Bolognesi', 'Conchucos', 'Huacaschuque', 'Huandoval', 'Lacabamba', 'Llapo', 'Pallasca', 'Santa Rosa', 'Tauca'), 
        'Pomabamba' => array('Pomabamba', 'Huayllán', 'Parobamba', 'Quinuabamba'), 
        'Recuay' => array('Recuay', 'Catac', 'Cotaparaco', 'Huayllapampa', 'Llacllín', 'Marca', 'Pampas Chico', 'Pararín', 'Tapacocha', 'Ticapampa'), 
        'Santa' => array('Chimbote', 'Cáceres del Perú', 'Coishco', 'Macate', 'Moro', 'Nepeña', 'Samanco', 'Santa'),
        'Sihuas' => array('Sihuas', 'Acobamba', 'Alfonso Ugarte', 'Cashapampa', 'Chingalpo', 'Huayllabamba', 'Quiches', 'Ragash', 'San Juan', 'Sicsibamba'), 
        'Yungay' => array('Yungay', 'Cascapara', 'Mancos', 'Matacoto', 'Quillo', 'Ranrahirca', 'Shupluy', 'Yanama'),

        // Distritos de Apurímac
        'Abancay' => array('Abancay', 'Chacoche', 'Circa', 'Curahuasi', 'Huanipaca', 'Lambrama', 'Pichirhua', 'San Pedro de Cachora', 'Tamburco'),
        'Andahuaylas' => array('Andahuaylas', 'Andarapa', 'Chiara', 'Huancarama', 'Huancaray', 'Huayana', 'Kishuara', 'Pacobamba', 'Pacucha', 'Pampachiri', 'Pomacocha', 'San Antonio de Cachi', 'San Jerónimo', 'San Miguel de Chaccrampa', 'Santa María de Chicmo', 'Talavera', 'Tumay Huaraca', 'Turpo', 'Kaquiabamba', 'José María Arguedas'),
        'Antabamba' => array('Antabamba', 'El Oro', 'Huaquirca', 'Juan Espinoza Medrano', 'Oropesa', 'Pachaconas', 'Sabaino'),
        'Aymaraes' => array('Chalhuanca', 'Capaya', 'Caraybamba', 'Chapimarca', 'Colcabamba', 'Cotaruse', 'Ihuayllo', 'Justo Apu Sahuaraura', 'Lucre', 'Pocohuanca', 'San Juan de Chacña', 'Sañayca', 'Soraya', 'Tapairihua', 'Tintay', 'Toraya', 'Yanaca'),
        'Cotabambas' => array('Tambobamba', 'Cotabambas', 'Coyllurqui', 'Haquira', 'Mara', 'Challhuahuacho'),
        'Chincheros' => array('Chincheros', 'Anco-Huallo', 'Cocharcas', 'Huaccana', 'Ocobamba', 'Ongoy', 'Uranmarca', 'Ranracancha', 'Rocchacc', 'El Porvenir', 'Los Chankas', 'Ahuayro'),
        'Grau' => array('Chuquibambilla', 'Curpahuasi', 'Gamarra', 'Huayllati', 'Mamara', 'Micaela Bastidas', 'Pataypampa', 'Progreso', 'San Antonio', 'Santa Rosa', 'Turpay', 'Vilcabamba', 'Virundo', 'Curasco'),

        // Distritos de Arequipa
        'Arequipa'    => array('Alto Selva Alegre', 'Arequipa', 'Cayma', 'Cerro Colorado', 'Characato', 'Chiguata', 'Jacobo Hunter', 'José Luis Bustamante y Rivero', 'La Joya', 'Mariano Melgar', 'Miraflores', 'Mollebaya', 'Paucarpata', 'Pocsi', 'Polobaya', 'Quequeña', 'Sabandía', 'Sachaca', 'San Juan de Siguas', 'San Juan de Tarucani', 'Santa Isabel de Siguas', 'Santa Rita de Siguas', 'Socabaya', 'Tiabaya', 'Uchumayo', 'Vítor', 'Yanahuara', 'Yarabamba', 'Yura'),
        'Camaná'      => array('Camaná', 'José María Quimper', 'Mariano Nicolás Valcárcel', 'Mariscal Cáceres', 'Nicolás de Piérola', 'Ocoña', 'Quilca', 'Samuel Pastor'),
        'Caravelí'    => array('Acarí', 'Atico', 'Atiquipa', 'Bella Unión', 'Cahuacho', 'Caravelí', 'Chala', 'Chaparra', 'Huanuhuanu', 'Jaqui', 'Lomas', 'Quicacha', 'Yauca'),
        'Castilla'    => array('Aplao', 'Andagua', 'Ayo', 'Chachas', 'Chilcaymarca', 'Choco', 'Huancarqui', 'Machaguay', 'Orcopampa', 'Pampacolca', 'Tipán', 'Uñón', 'Uraca', 'Viraco'),
        'Caylloma'    => array('Achoma', 'Cabanaconde', 'Callalli', 'Caylloma', 'Chivay', 'Coporaque', 'Huambo', 'Huanca', 'Ichupampa', 'Lari', 'Lluta', 'Maca', 'Madrigal', 'San Antonio de Chuca', 'Sibayo', 'Tapay', 'Tisco', 'Tuti', 'Yanque'),
        'Condesuyos'  => array('Andaray', 'Cayarani', 'Chichas', 'Chuquibamba', 'Iray', 'Río Grande', 'Salamanca', 'Yanaquihua'),
        'Islay'       => array('Cocachacra', 'Dean Valdivia', 'Islay', 'Mejía', 'Mollendo', 'Punta de Bombón'),
        'La Unión'    => array('Alca', 'Charcana', 'Cotahuasi', 'Huaynacotas', 'Pampamarca', 'Puyca', 'Quechualla', 'Sayla', 'Tauría', 'Tomepampa', 'Toro'),

        //Distritos de Ayacucho
        'Huamanga'           => array('Ayacucho', 'Acocro', 'Acos Vinchos', 'Andrés Avelino Cáceres Dorregaray', 'Carmen Alto', 'Chiara', 'Jesús Nazareno', 'Ocros', 'Pacaycasa', 'Quinua', 'San José de Ticllas', 'San Juan Bautista', 'Santiago de Pischa', 'Socos', 'Tambillo', 'Vinchos'),
        'Cangallo'           => array('Cangallo', 'Chuschi', 'Los Morochucos', 'María Parado de Bellido', 'Paras', 'Totos'),
        'Huanca Sancos'      => array('Sancos', 'Carapo', 'Sacsamarca', 'Santiago de Lucanamarca'),
        'Huanta'             => array('Huanta', 'Ayahuanco', 'Huamanguilla', 'Iguain', 'Luricocha', 'Santillana', 'Sivia', 'Llochegua', 'Canayre', 'Uchuraccay', 'Pucacolpa', 'Chaca', 'Putis'),
        'La Mar'             => array('San Miguel', 'Anco', 'Ayna', 'Chilcas', 'Chungui', 'Luis Carranza', 'Santa Rosa', 'Tambo', 'Samugari', 'Anchihuay', 'Oronccoy', 'Unión Progreso', 'Río Magdalena', 'Ninabamba', 'Patibamba'),
        'Lucanas'            => array('Puquio', 'Aucará', 'Cabana', 'Carmen Salcedo', 'Chaviña', 'Chipao', 'Huac-Huas', 'Laramate', 'Leoncio Prado', 'Llauta', 'Lucanas', 'Ocaña', 'Otoca', 'Saisa', 'San Cristóbal', 'San Juan', 'San Pedro', 'San Pedro de Palco', 'Sancos', 'Santa Ana de Huaycahuacho', 'Santa Lucía'),
        'Parinacochas'       => array('Coracora', 'Chumpi', 'Coronel Castañeda', 'Pacapausa', 'Pullo', 'Puyusca', 'San Francisco de Ravacayco', 'Upahuacho'),
        'Páucar del Sara Sara' => array('Pausa', 'Colta', 'Corculla', 'Lampa', 'Marcabamba', 'Oyolo', 'Pararca', 'San Javier de Alpabamba', 'San José de Ushua', 'Sara Sara'),
        'Sucre'              => array('Querobamba', 'Belén', 'Chalcos', 'Chilcayoc', 'Huacaña', 'Morcolla', 'Paico', 'San Pedro de Larcay', 'San Salvador de Quije', 'Santiago de Paucaray', 'Soras'),
        'Víctor Fajardo'     => array('Huancapi', 'Alcamenca', 'Apongo', 'Asquipata', 'Canaria', 'Cayara', 'Colca', 'Huamanquiquia', 'Huancaraylla', 'Hualla', 'Sarhua', 'Vilcanchos'),
        'Vilcas Huamán'      => array('Vilcas Huamán', 'Accomarca', 'Carhuanca', 'Concepción', 'Huambalpa', 'Independencia', 'Saurama', 'Vischongo'),

        // Distritos de Cajamarca
        'Cajamarca'   => array('Cajamarca', 'Asunción', 'Chetilla', 'Cospán', 'Encañada', 'Jesús', 'Llacanora', 'Los Baños del Inca', 'Magdalena', 'Matara', 'Namora', 'San Juan'),
        'Cajabamba'   => array('Cajabamba', 'Cachachi', 'Condebamba', 'Sitacocha'),
        'Celendín'    => array('Celendín', 'Chumuch', 'Cortegana', 'Huasmin', 'José Gálvez', 'La Libertad de Pallán', 'Miguel Iglesias', 'Oxamarca', 'Sorochuco', 'Sucre', 'Utco', 'Jorge Chávez'),
        'Chota'       => array('Chota', 'Anguía', 'Chadín', 'Chalamarca', 'Chiguirip', 'Chimban', 'Choropampa', 'Cochabamba', 'Conchán', 'Huambos', 'Lajas', 'Llama', 'Miracosta', 'Paccha', 'Pion', 'Querocoto', 'San Juan de Licupis', 'Tacabamba', 'Tocmoche'),
        'Contumazá'   => array('Contumazá', 'Chilete', 'Cupisnique', 'Guzmango', 'San Benito', 'Santa Cruz de Toledo', 'Tantarica', 'Yonan'),
        'Cutervo'     => array('Cutervo', 'Callayuc', 'Choros', 'Cujillo', 'La Ramada', 'Pimpingos', 'Querocotillo', 'San Andrés de Cutervo', 'San Juan de Cutervo', 'San Luis de Lucma', 'Santa Cruz', 'Santo Domingo de la Capilla', 'Santo Tomás', 'Socota', 'Toribio Casanova'),
        'Hualgayoc'   => array('Bambamarca', 'Chugur', 'Hualgayoc'),
        'Jaén'        => array('Jaén', 'Bellavista', 'Chontali', 'Colasay', 'Huabal', 'Las Pirias', 'Pomahuaca', 'Pucara', 'Sallique', 'San Felipe', 'San José del Alto', 'Santa Rosa'),
        'San Ignacio' => array('San Ignacio', 'Chirinos', 'Huarango', 'La Coipa', 'Namballe', 'San José de Lourdes', 'Tabaconas'),
        'San Marcos'  => array('San Marcos', 'Chancay', 'Eduardo Villanueva', 'Gregorio Pita', 'Ichocan', 'José Manuel Quiroz', 'Pedro Gálvez'),
        'San Miguel'  => array('San Miguel', 'Bolívar', 'Calquis', 'Catilluc', 'El Prado', 'La Florida', 'Llapa', 'Nanchoc', 'Niepos', 'San Gregorio', 'San Silvestre de Cochan', 'Tongod', 'Unión Agua Blanca'),
        'San Pablo'   => array('San Pablo', 'San Bernardino', 'San Luis', 'Tumbaden'),
        'Santa Cruz'  => array('Santa Cruz', 'Andabamba', 'Catache', 'Chancaybaños', 'La Esperanza', 'Ninabamba', 'Pulan', 'Saucepampa', 'Sexi', 'Uticyacu', 'Yauyucan'),

        // Distritos de Callao
        'Callao' => array('Callao', 'Bellavista', 'Carmen de La Legua-Reynoso', 'La Perla', 'La Punta', 'Ventanilla', 'Mi Perú'),

        // Distritos de Cusco
        'Cusco'          => array('Cusco', 'Ccorca', 'Poroy', 'San Jerónimo', 'San Sebastián', 'Santiago', 'Saylla', 'Wanchaq'),
        'Acomayo'        => array('Acomayo', 'Acopia', 'Acos', 'Mosoc Llacta', 'Pomacanchi', 'Rondocan', 'Sangarará'),
        'Anta'           => array('Anta', 'Ancahuasi', 'Cachimayo', 'Chinchaypujio', 'Huarocondo', 'Limatambo', 'Mollepata', 'Pucyura', 'Zurite'),
        'Calca'          => array('Calca', 'Coya', 'Lamay', 'Lares', 'Pisac', 'San Salvador', 'Taray', 'Yanatile'),
        'Canas'          => array('Yanaoca', 'Checca', 'Kunturkanki', 'Langui', 'Layo', 'Pampamarca', 'Quehue', 'Tupac Amaru'),
        'Canchis'        => array('Sicuani', 'Checacupe', 'Combapata', 'Marangani', 'Pitumarca', 'San Pablo', 'San Pedro', 'Tinta'),
        'Chumbivilcas'   => array('Santo Tomás', 'Capacmarca', 'Chamaca', 'Colquemarca', 'Livitaca', 'Llusco', 'Quiñota', 'Velille'),
        'Espinar'        => array('Espinar', 'Condoroma', 'Coporaque', 'Ocoruro', 'Pallpata', 'Pichigua', 'Suyckutambo', 'Alto Pichigua'),
        'La Convención'  => array('Santa Ana', 'Echarate', 'Huayopata', 'Maranura', 'Ocobamba', 'Quellouno', 'Kimbiri', 'Pichari', 'Vilcabamba', 'Inkawasi', 'Villa Virgen', 'Villa Kintiarina', 'Megantoni'),
        'Paruro'         => array('Paruro', 'Accha', 'Ccapi', 'Colcha', 'Huanoquite', 'Omacha', 'Paccaritambo', 'Pillpinto', 'Yaurisque'),
        'Paucartambo'    => array('Paucartambo', 'Caicay', 'Challabamba', 'Colquepata', 'Huancarani', 'Kosñipata'),
        'Quispicanchi'   => array('Urcos', 'Andahuaylillas', 'Camanti', 'Ccarhuayo', 'Ccatca', 'Cusipata', 'Huaro', 'Lucre', 'Marcapata', 'Ocongate', 'Oropesa', 'Quiquijana'),
        'Urubamba'       => array('Urubamba', 'Chinchero', 'Huayllabamba', 'Machupicchu', 'Maras', 'Ollantaytambo', 'Yucay'),

        // Distritos de Huancavelica
        'Huancavelica'    => array('Huancavelica', 'Acobambilla', 'Acoria', 'Conayca', 'Cuenca', 'Huachocolpa', 'Huayllahuara', 'Izcuchaca', 'Laria', 'Manta', 'Mariscal Cáceres', 'Moya', 'Nuevo Occoro', 'Palca', 'Pilchaca', 'Vilca', 'Yauli', 'Ascensión', 'Huando'),
        'Acobamba'        => array('Acobamba', 'Andabamba', 'Anta', 'Caja', 'Marcas', 'Paucara', 'Pomacocha', 'Rosario'),
        'Angaraes'        => array('Lircay', 'Anchonga', 'Callanmarca', 'Ccochaccasa', 'Chincho', 'Congalla', 'Huanca-Huanca', 'Huayllay Grande', 'Julcamarca', 'San Antonio de Antaparco', 'Santo Tomás de Pata', 'Secclla'),
        'Castrovirreyna'  => array('Castrovirreyna', 'Arma', 'Aurahua', 'Capillas', 'Chupamarca', 'Cocas', 'Huachos', 'Huamatambo', 'Mollepampa', 'San Juan', 'Santa Ana', 'Tantara', 'Ticrapo'),
        'Churcampa'       => array('Churcampa', 'Anco', 'Chinchihuasi', 'El Carmen', 'La Merced', 'Locroja', 'Pachamarca', 'Paucarbamba', 'San Miguel de Mayocc', 'San Pedro de Coris', 'Pachacútec', 'Cosme'),
        'Huaytará'        => array('Huaytará', 'Ayaví', 'Córdova', 'Huayacundo Arma', 'Laramarca', 'Ocoyo', 'Pilpichaca', 'Querco', 'Quito-Arma', 'San Antonio de Cusicancha', 'San Francisco de Sangayaico', 'San Isidro', 'Santiago de Chocorvos', 'Santiago de Quirahuara', 'Santo Domingo de Capillas', 'Tambo'),
        'Tayacaja'        => array('Pampas', 'Acostambo', 'Acraquia', 'Ahuaycha', 'Colcabamba', 'Daniel Hernández', 'Huachocolpa', 'Huaribamba', 'Ñahuimpuquio', 'Pazos', 'Quichuas', 'Quichuay', 'Salcabamba', 'Salcahuasi', 'San Marcos de Rocchac', 'Surcubamba', 'Tintay Puncu', 'Andaymarca', 'Roble', 'Quichuas', 'Pichos', 'Santiago de Tucuma', 'Quichuas'),

        //Distritos de Huanuco
        'Huánuco' => array('Amarilis', 'Chinchao', 'Churubamba', 'Huánuco', 'Margos', 'Pillco Marca', 'Quisqui', 'San Francisco de Cayrán', 'San Pedro de Chaulán', 'Santa María del Valle', 'Yarumayo'),
        'Ambo' => array('Ambo', 'Cayna', 'Colpas', 'Conchamarca', 'Huácar', 'San Francisco', 'San Rafael', 'Tomay Kichwa'),
        'Dos de Mayo' => array('La Unión', 'Chuquis', 'Marías', 'Pachas', 'Quivilla', 'Ripan', 'Shunqui', 'Sillapata', 'Yanas'),
        'Huacaybamba' => array('Huacaybamba', 'Canchabamba', 'Cochabamba', 'Pinra'),
        'Huamalíes' => array('Llata', 'Arancay', 'Chavín de Pariarca', 'Jacas Grande', 'Jircan', 'Miraflores', 'Monzón', 'Punchao', 'Puños', 'Singa'),
        'Leoncio Prado' => array('Rupa-Rupa', 'Daniel Alomía Robles', 'Hermilio Valdizán', 'José Crespo y Castillo', 'Luyando', 'Mariano Dámaso Beraún', 'Pucayacu', 'Santo Domingo de Anda'),
        'Marañón' => array('Huacrachuco', 'Cholon', 'San Buenaventura'),
        'Pachitea' => array('Panao', 'Chaglla', 'Molino', 'Umari'),
        'Puerto Inca' => array('Puerto Inca', 'Codo del Pozuzo', 'Honoria', 'Tournavista', 'Yuyapichis'),
        'Lauricocha' => array('Jesús', 'Baños', 'Jivia', 'Queropalca', 'Rondos', 'San Francisco de Asís', 'San Miguel de Cauri'),
        'Yarowilca' => array('Chavinillo', 'Cahuac', 'Chacabamba', 'Aparicio Pomares', 'Jacas Chico', 'Obas', 'Pampamarca', 'Choras'),

        // Distritos de Ica
        'Ica' => array('Ica', 'La Tinguiña', 'Los Aquijes', 'Ocucaje', 'Pachacutec', 'Parcona', 'Pueblo Nuevo', 'Salas', 'San José de Los Molinos', 'San Juan Bautista', 'Santiago', 'Subtanjalla', 'Tate', 'Yauca del Rosario'),
        'Chincha' => array('Chincha Alta', 'Alto Larán', 'Chavín', 'Chincha Baja', 'El Carmen', 'Grocio Prado', 'Pueblo Nuevo', 'San Juan de Yanac', 'San Pedro de Huacarpana', 'Sunampe', 'Tambo de Mora'),
        'Nasca' => array('Nasca', 'Changuillo', 'El Ingenio', 'Marcona', 'Vista Alegre'),
        'Palpa' => array('Palpa', 'Llipata', 'Río Grande', 'Santa Cruz', 'Tibillo'),
        'Pisco' => array('Pisco', 'Huancano', 'Humay', 'Independencia', 'Paracas', 'San Andrés', 'San Clemente', 'Túpac Amaru Inca'),

        // Distritos de Junín
        'Huancayo' => array('Huancayo', 'Carhuacallanga', 'Chacapampa', 'Chicche', 'Chilca', 'Chongos Alto', 'Chupuro', 'Colca', 'Cullhuas', 'El Tambo', 'Huacrapuquio', 'Hualhuas', 'Huancán', 'Huasicancha', 'Huayucachi', 'Ingenio', 'Pariahuanca', 'Pilcomayo', 'Pucará', 'Quichuay', 'Quilcas', 'San Agustín de Cajas', 'San Jerónimo de Tunán', 'Saño', 'Sapallanga', 'Sicaya', 'Santo Domingo de Acobamba', 'Viques'),
        'Chanchamayo' => array('Chanchamayo', 'Perene', 'Pichanaqui', 'San Luis de Shuaro', 'San Ramón', 'Vitoc'),
        'Chupaca' => array('Chupaca', 'Ahuac', 'Chongos Bajo', 'Huachac', 'Huamancaca Chico', 'San Juan de Iscos', 'San Juan de Jarpa', 'Tres de Diciembre', 'Yanacancha'),
        'Concepción' => array('Concepción', 'Aco', 'Andamarca', 'Chambara', 'Cochas', 'Comas', 'Heroínas Toledo', 'Manzanares', 'Mariscal Castilla', 'Matahuasi', 'Mito', 'Nueve de Julio', 'Orcotuna', 'San José de Quero', 'Santa Rosa de Ocopa'),
        'Jauja' => array('Jauja', 'Acolla', 'Apata', 'Ataura', 'Canchayllo', 'Curicaca', 'El Mantaro', 'Huamali', 'Huaripampa', 'Huertas', 'Janjaillo', 'Julcán', 'Leonor Ordóñez', 'Llocllapampa', 'Marco', 'Masma', 'Masma Chicche', 'Molinos', 'Monobamba', 'Muqui', 'Muquiyauyo', 'Paca', 'Paccha', 'Pancán', 'Parco', 'Pomacancha', 'Ricrán', 'San Lorenzo', 'San Pedro de Chunan', 'Sausa', 'Sincos', 'Tunan Marca', 'Yauli', 'Yauyos'),
        'Junín' => array('Junín', 'Carhuamayo', 'Ondores', 'Ulcumayo'),
        'Satipo' => array('Satipo', 'Coviriali', 'Llaylla', 'Mazamari', 'Pampa Hermosa', 'Pangoa', 'Río Negro', 'Río Tambo', 'Vizcatán del Ene'),
        'Tarma'  => array('Tarma', 'Acobamba', 'Huaricolca', 'Huasahuasi', 'La Unión', 'Palca', 'Palcamayo', 'San Pedro de Cajas', 'Tapo'),
        'Yauli'  => array('La Oroya', 'Chacapalpa', 'Huayhuay', 'Marcapomacocha', 'Morococha', 'Paccha', 'Santa Bárbara de Carhuacayán', 'Santa Rosa de Sacco', 'Suitucancha', 'Yauli'),

        //Distritos de La Libertad
        'Trujillo'           => array('Trujillo', 'El Porvenir', 'Florencia de Mora', 'Huanchaco', 'La Esperanza', 'Laredo', 'Moche', 'Poroto', 'Salaverry', 'Simbal', 'Víctor Larco Herrera'),
        'Ascope'             => array('Ascope', 'Casa Grande', 'Chicama', 'Chocope', 'Magdalena de Cao', 'Paiján', 'Rázuri', 'Santiago de Cao'),
        'Bolívar'            => array('Bolívar', 'Bambamarca', 'Condormarca', 'Longotea', 'Uchumarca', 'Ucuncha'),
        'Chepén'             => array('Chepén', 'Pacanga', 'Pueblo Nuevo'),
        'Gran Chimú'         => array('Cascas', 'Lucma', 'Marmot', 'Sayapullo'),
        'Julcán'             => array('Julcán', 'Calamarca', 'Carabamba', 'Huaso'),
        'Otuzco'             => array('Otuzco', 'Agallpampa', 'Charat', 'Huaranchal', 'La Cuesta', 'Mache', 'Paranday', 'Salpo', 'Sinsicap', 'Usquil'),
        'Pacasmayo'          => array('San Pedro de Lloc', 'Guadalupe', 'Jequetepeque', 'Pacasmayo', 'San José'),
        'Pataz'              => array('Tayabamba', 'Buldibuyo', 'Chillia', 'Huancaspata', 'Huaylillas', 'Huayo', 'Ongón', 'Parcoy', 'Pataz', 'Pías', 'Santiago de Challas', 'Taurija', 'Urpay'),
        'Sánchez Carrión'    => array('Huamachuco', 'Chugay', 'Cochorco', 'Curgos', 'Marcabal', 'Sanagorán', 'Sarin', 'Sartimbamba'),
        'Santiago de Chuco'  => array('Santiago de Chuco', 'Angasmarca', 'Cachicadán', 'Mollebamba', 'Mollepata', 'Quiruvilca', 'Santa Cruz de Chuca', 'Sitabamba'),
        'Virú'               => array('Virú', 'Chao', 'Guadalupito'),

        // Distritos de Lambayeque
        'Chiclayo'    => array('Chiclayo', 'Chongoyape', 'Eten', 'Eten Puerto', 'José Leonardo Ortiz', 'La Victoria', 'Lagunas', 'Monsefú', 'Nueva Arica', 'Oyotún', 'Picsi', 'Pimentel', 'Pomalca', 'Pucalá', 'Reque', 'Santa Rosa', 'Saña', 'Cayaltí', 'Patapo', 'Pomalca', 'Tumán'),
        'Ferreñafe'   => array('Ferreñafe', 'Cañaris', 'Incahuasi', 'Manuel Antonio Mesones Muro', 'Pitipo', 'Pueblo Nuevo'),
        'Lambayeque'  => array('Lambayeque', 'Chochope', 'Illimo', 'Jayanca', 'Mochumí', 'Mórrope', 'Motupe', 'Olmos', 'Pacora', 'Salas', 'San José', 'Túcume'),

        // Distritos de Lima
        'Lima'             => array('Lima', 'Ancón', 'Ate', 'Barranco', 'Breña', 'Carabayllo', 'Chaclacayo', 'Chorrillos', 'Cieneguilla', 'Comas', 'El Agustino', 'Independencia', 'Jesús María', 'La Molina', 'La Victoria', 'Lince', 'Los Olivos', 'Lurigancho', 'Lurín', 'Magdalena del Mar', 'Miraflores', 'Pachacámac', 'Pucusana', 'Pueblo Libre', 'Puente Piedra', 'Punta Hermosa', 'Punta Negra', 'Rímac', 'San Bartolo', 'San Borja', 'San Isidro', 'San Juan de Lurigancho', 'San Juan de Miraflores', 'San Luis', 'San Martín de Porres', 'San Miguel', 'Santa Anita', 'Santa María del Mar', 'Santa Rosa', 'Santiago de Surco', 'Surquillo', 'Villa El Salvador', 'Villa María del Triunfo'),
        'Barranca'         => array('Barranca', 'Paramonga', 'Pativilca', 'Supe', 'Supe Puerto'),
        'Cajatambo'        => array('Cajatambo', 'Copa', 'Gorgor', 'Huancapón', 'Manás'),
        'Canta'            => array('Canta', 'Arahuay', 'Huamantanga', 'Huaros', 'Lachaqui', 'San Buenaventura', 'Santa Rosa de Quives'),
        'Cañete'           => array('San Vicente de Cañete', 'Asia', 'Calango', 'Cerro Azul', 'Chilca', 'Coayllo', 'Imperial', 'Lunahuaná', 'Mala', 'Nuevo Imperial', 'Pacarán', 'Quilmana', 'San Antonio', 'San Luis', 'Santa Cruz de Flores', 'Zúñiga'),
        'Huaral'           => array('Huaral', 'Atavillos Alto', 'Atavillos Bajo', 'Aucallama', 'Chancay', 'Ihuarí', 'Lampian', 'Pacaraos', 'San Miguel de Acos', 'Santa Cruz de Andamarca', 'Sumbilca', 'Veintisiete de Noviembre'),
        'Huarochirí'       => array('Matucana', 'Antioquía', 'Callahuanca', 'Carampoma', 'Chicla', 'Cuenca', 'Huachupampa', 'Huanza', 'Huarochirí', 'Lahuaytambo', 'Langa', 'Laraos', 'Mariatana', 'Ricardo Palma', 'San Andrés de Tupicocha', 'San Antonio', 'San Bartolomé', 'San Damian', 'San Juan de Iris', 'San Juan de Tantaranche', 'San Lorenzo de Quinti', 'San Mateo', 'San Mateo de Otao', 'San Pedro de Casta', 'San Pedro de Huancayre', 'Sangallaya', 'Santa Cruz de Cocachacra', 'Santa Eulalia', 'Santiago de Anchucaya', 'Santiago de Tuna', 'Santo Domingo de los Olleros', 'Surco'),
        'Huaura'           => array('Huacho', 'Ámbar', 'Caleta de Carquín', 'Checras', 'Hualmay', 'Huaura', 'Leoncio Prado', 'Paccho', 'Santa Leonor', 'Santa María', 'Sayán', 'Végueta'),
        'Oyón'             => array('Oyón', 'Andajes', 'Caujul', 'Cochamarca', 'Naván', 'Pachangara'),
        'Yauyos'           => array('Yauyos', 'Alis', 'Ayauca', 'Ayavirí', 'Azángaro', 'Cacra', 'Carania', 'Catahuasi', 'Chocos', 'Cochas', 'Colonia', 'Hongos', 'Huampara', 'Huancaya', 'Huangáscar', 'Huantán', 'Huañec', 'Laraos', 'Lincha', 'Madeán', 'Miraflores', 'Omas', 'Putinza', 'Quinches', 'Quinocay', 'San Joaquín', 'San Pedro de Pilas', 'Tanta', 'Tauripampa', 'Tomas', 'Tupe', 'Viñac', 'Vitis'),

        //Distritos de Loreto
        'Maynas'                 => array('Iquitos', 'Alto Nanay', 'Fernando Lores', 'Indiana', 'Las Amazonas', 'Mazán', 'Napo', 'Punchana', 'Putumayo', 'San Juan Bautista', 'Torres Causana'),
        'Alto Amazonas'          => array('Yurimaguas', 'Balsapuerto', 'Jeberos', 'Lagunas', 'Santa Cruz', 'Teniente César López Rojas'),
        'Datem del Marañón'      => array('Barranca', 'Cahuapanas', 'Manseriche', 'Morona', 'Pastaza', 'Andoas'),
        'Loreto'                 => array('Nauta', 'Parinari', 'Tigre', 'Trompeteros', 'Urarinas'),
        'Mariscal Ramón Castilla'=> array('Ramón Castilla', 'Pebas', 'Yavari', 'San Pablo'),
        'Putumayo'               => array('Putumayo', 'Rosa Panduro', 'Teniente Manuel Clavero', 'Yaguas'),
        'Requena'                => array('Requena', 'Alto Tapiche', 'Capelo', 'Emilio San Martín', 'Maquía', 'Puinahua', 'Saquena', 'Soplin', 'Tapiche', 'Jenaro Herrera', 'Yaquerana'),
        'Ucayali'                => array('Contamana', 'Inahuaya', 'Padre Márquez', 'Pampa Hermosa', 'Sarayacu', 'Vargas Guerra'),

        // Distritos de Madre de Dios
        'Tambopata'  => array('Tambopata', 'Inambari', 'Las Piedras', 'Laberinto'),
        'Manu'       => array('Manu', 'Fitzcarrald', 'Madre de Dios', 'Huepetuhe'),
        'Tahuamanu'  => array('Iñapari', 'Iberia', 'Tahuamanu'),

        // Distritos de Moquegua
        'Mariscal Nieto'          => array('Moquegua', 'Carumas', 'Cuchumbaya', 'Samegua', 'San Cristóbal', 'Torata'),
        'General Sánchez Cerro'   => array('Omate', 'Chojata', 'Coalaque', 'Ichuña', 'La Capilla', 'Lloque', 'Matalaque', 'Puquina', 'Quinistaquillas', 'Ubinas', 'Yunga'),
        'Ilo'                     => array('Ilo', 'El Algarrobal', 'Pacocha'),

        //Distritos de Pasco
        'Pasco'                 => array('Chaupimarca', 'Huachón', 'Huariaca', 'Huayllay', 'Ninacaca', 'Pallanchacra', 'Paucartambo', 'San Francisco de Asís de Yarusyacán', 'Simón Bolívar', 'Ticlacayán', 'Tinyahuarco', 'Vicco', 'Yanacancha'),
        'Daniel Alcides Carrión'=> array('Chacayán', 'Goyllarisquizga', 'Páucar', 'San Pedro de Pillao', 'Santa Ana de Tusi', 'Tápuc', 'Vilcabamba', 'Yanahuanca'),
        'Oxapampa'              => array('Chontabamba', 'Constitución', 'Huancabamba', 'Oxapampa', 'Palcazú', 'Pozuzo', 'Puerto Bermúdez', 'Villa Rica'),

        // Distritos de Piura
        'Piura'       => array('Castilla', 'Catacaos', 'Cura Mori', 'El Tallán', 'La Arena', 'La Unión', 'Las Lomas', 'Piura', 'Tambo Grande', 'Veintiséis de Octubre'),
        'Ayabaca'     => array('Ayabaca', 'Frías', 'Jililí', 'Lagunas', 'Montero', 'Pacaipampa', 'Paimas', 'Sapillica', 'Sicchez', 'Suyo'),
        'Huancabamba' => array('Canchaque', 'El Carmen de la Frontera', 'Huancabamba', 'Huarmaca', 'Lalaquiz', 'San Miguel de El Faique', 'Sondor', 'Sondorillo'),
        'Morropón'    => array('Buenos Aires', 'Chalaco', 'Chulucanas', 'La Matanza', 'Morropon', 'Salitral', 'San Juan de Bigote', 'Santa Catalina de Mossa', 'Santo Domingo', 'Yamango'),
        'Paita'       => array('Amotape', 'Arenal', 'Colán', 'El Tallán', 'La Huaca', 'Paita', 'Tamarindo', 'Vichayal'),
        'Sechura'     => array('Bellavista de la Unión', 'Bernal', 'Cristo Nos Valga', 'Rinconada Llícuar', 'Sechura', 'Vice'),
        'Sullana'     => array('Bellavista', 'Ignacio Escudero', 'Lancones', 'Marcavelica', 'Miguel Checa', 'Querecotillo', 'Salitral', 'Sullana'),
        'Talara'      => array('El Alto', 'La Brea', 'Lobitos', 'Los Órganos', 'Máncora', 'Pariñas'),

        // Distritos de Puno
        'Puno'                    => array('Acora', 'Amantani', 'Atuncolla', 'Capachica', 'Chucuito', 'Coata', 'Huata', 'Mañazo', 'Paucarcolla', 'Pichacani', 'Platería', 'Puno', 'San Antonio', 'Tiquillaca', 'Vilque'),
        'Azángaro'                => array('Achaya', 'Arapa', 'Asillo', 'Azángaro', 'Caminaca', 'Chupa', 'José Domingo Choquehuanca', 'Muñani', 'Potoni', 'Saman', 'San Antón', 'San José', 'San Juan de Salinas', 'Santiago de Pupuja', 'Tirapata'),
        'Carabaya'                => array('Ajoyani', 'Ayapata', 'Coasa', 'Corani', 'Crucero', 'Ituata', 'Macusani', 'Ollachea', 'San Gabán', 'Usicayos'),
        'Chucuito'                => array('Desaguadero', 'Huacullani', 'Juli', 'Kelluyo', 'Pisacoma', 'Pomata', 'Zepita'),
        'El Collao'               => array('Capazo', 'Conduriri', 'Ilave', 'Pilcuyo', 'Santa Rosa'),
        'Huancané'                => array('Cojata', 'Huancané', 'Huatasani', 'Inchupalla', 'Pusi', 'Rosaspata', 'Taraco', 'Vilque Chico'),
        'Lampa'                   => array('Cabanilla', 'Calapuja', 'Lampa', 'Nicasio', 'Ocuviri', 'Palca', 'Paratia', 'Pucará', 'Santa Lucía', 'Vilavila'),
        'Melgar'                  => array('Antauta', 'Ayaviri', 'Cupi', 'Llalli', 'Macari', 'Nuñoa', 'Orurillo', 'Santa Rosa', 'Umachiri'),
        'Moho'                    => array('Conima', 'Huayrapata', 'Moho', 'Tilali'),
        'San Antonio de Putina'   => array('Ananea', 'Pedro Vilca Apaza', 'Putina', 'Quilcapuncu', 'Sina'),
        'San Román'               => array('Cabana', 'Cabanillas', 'Caracoto', 'Juliaca'),
        'Sandia'                  => array('Alto Inambari', 'Cuyocuyo', 'Limbani', 'Patambuco', 'Phara', 'Quiaca', 'San Juan del Oro', 'Sandia', 'Yanahuaya'),
        'Yunguyo'                 => array('Anapia', 'Copani', 'Cuturapi', 'Ollaraya', 'Tinicachi', 'Unicachi', 'Yunguyo'),

        //Distritos de San Martín
        'Moyobamba'           => array('Moyobamba', 'Calzada', 'Habana', 'Jepelacio', 'Soritor', 'Yantalo'),
        'Bellavista'          => array('Bellavista', 'Alto Biavo', 'Bajo Biavo', 'Huallaga', 'San Pablo', 'San Rafael'),
        'El Dorado'           => array('San José de Sisa', 'Agua Blanca', 'San Martín', 'Santa Rosa', 'Shatoja'),
        'Huallaga'            => array('Saposoa', 'Alto Saposoa', 'El Eslabón', 'Piscoyacu', 'Sacanche', 'Tingo de Saposoa'),
        'Lamas'               => array('Lamas', 'Alonso de Alvarado', 'Barranquita', 'Caynarachi', 'Cuñumbuqui', 'Pinto Recodo', 'Rumisapa', 'San Roque de Cumbaza', 'Shanao', 'Tabalosos', 'Zapatero'),
        'Mariscal Cáceres'    => array('Juanjuí', 'Campanilla', 'Huicungo', 'Pachiza', 'Pajarillo'),
        'Picota'              => array('Picota', 'Buenos Aires', 'Caspisapa', 'Pilluana', 'Pucacaca', 'San Cristóbal', 'San Hilarión', 'Shamboyacu', 'Tingo de Ponasa', 'Tres Unidos'),
        'Rioja'               => array('Rioja', 'Awajún', 'Elías Soplin Vargas', 'Nueva Cajamarca', 'Pardo Miguel', 'Posic', 'San Fernando', 'Yorongos', 'Yuracyacu'),
        'San Martín'          => array('Tarapoto', 'Alberto Leveau', 'Cacatachi', 'Chazuta', 'Chipurana', 'El Porvenir', 'Huimbayoc', 'Juan Guerra', 'La Banda de Shilcayo', 'Morales', 'Papaplaya', 'San Antonio', 'Sauce', 'Shapaja'),
        'Tocache'             => array('Tocache', 'Nuevo Progreso', 'Polvora', 'Shunte', 'Uchiza'),

        // Distritos de Tacna
        'Tacna'               => array('Tacna', 'Alto de la Alianza', 'Calana', 'Ciudad Nueva', 'Inclán', 'Pachía', 'Palca', 'Pocollay', 'Sama', 'Coronel Gregorio Albarracín Lanchipa', 'La Yarada-Los Palos'),
        'Candarave'           => array('Candarave', 'Cairani', 'Camilaca', 'Curibaya', 'Huanuara', 'Quilahuani'),
        'Jorge Basadre'       => array('Locumba', 'Ilabaya', 'Ite'),
        'Tarata'              => array('Tarata', 'Chucatamani', 'Estique', 'Estique-Pampa', 'Sitajara', 'Susapaya', 'Tarucachi', 'Ticaco'),

        // Distritos de Tumbes
        'Tumbes'              => array('Tumbes', 'Corrales', 'La Cruz', 'Pampas de Hospital', 'San Jacinto', 'San Juan de la Virgen'),
        'Contralmirante Villar'=> array('Zorritos', 'Casitas'),
        'Zarumilla'           => array('Zarumilla', 'Aguas Verdes', 'Matapalo', 'Papayal'),

        //Distritos de Ucayali
        'Coronel Portillo'    => array('Callería', 'Campoverde', 'Iparía', 'Manantay', 'Masisea', 'Yarinacocha', 'Nueva Requena'),
        'Atalaya'             => array('Raymondi', 'Sepahua', 'Tahuanía', 'Yurúa'),
        'Padre Abad'          => array('Padre Abad', 'Irázola', 'Curimaná'),
        'Purús'               => array('Purús'),

    );

    return isset($distritos[$provincia]) ? $distritos[$provincia] : array();
}