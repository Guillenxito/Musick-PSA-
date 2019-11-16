-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: MusickBBDD
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

/* --- authors --- */
INSERT INTO authors (nombre, informacion) VALUES('camaron','José Monje Cruz​​, conocido artísticamente como Camarón de la Isla o simplemente Camarón, fue un cantaor gitano español considerado una de las principales figuras del flamenco.​ En el 2000, le fue concedida a título póstumo la Llave de Oro del Cante.');
INSERT INTO authors (nombre, informacion) VALUES('la_excepcion', "La excepción que confirma la regla, fue un grupo español de rap originario del barrio de Pan Bendito, en el distrito de Carabanchel, Madrid. Estuvo compuesto por los MC's El Langui y Gitano Antón  y por el DJ La Dako Style . ");
INSERT INTO authors (nombre, informacion) VALUES('los_delinquentes', 'Los Delinqüentes fue un grupo musical andaluz, originario de Jerez de la Frontera (Cádiz), formado en 1998 por Miguel Ángel Benítez Gómez "Er Migue" y Marcos del Ojo "Er Canijo de Jeré", a los que se uniría posteriormente Diego Pozo "Er Ratón".');
INSERT INTO authors (nombre, informacion) VALUES('bad_bunny','Benito Antonio Martínez Ocasio (San Juan, Puerto Rico, 10 de marzo de 1994), más conocido por su nombre artístico Bad Bunny, es un cantante puertorriqueño de trap y reguetón.');
INSERT INTO authors (nombre, informacion) VALUES('arce','Pablo Arce es un rapero gallego nacido en Santiago de Compostela en 1990. Empezó con el rap en el 2002: escribía letras en su casa y las grababa con un mp3, después las bajaba al Parque de Ramírez y a la gente le gustaba porque era un rollo diferente, callejero, con las drogas, el dinero y las chicas como temática. Precisamente por el contenido "salvaje" de sus letras se le ha colgado el cartel de "polémico".');
INSERT INTO authors (nombre, informacion) VALUES('paramore','Paramore es una banda estadounidense de pop punk y rock alternativo​​​​ integrada por Hayley Williams, Taylor York y Zac Farro. Fue formada en Franklin, Tennessee, en 2004, por Williams y Jeremy Davis junto con Josh Farro, Zac Farro ​ y Jason Bynum.​');
INSERT INTO authors (nombre, informacion) VALUES('el_arrebato','Francisco Javier Labandón Pérez (Sevilla, 1 de septiembre de 1969), más conocido como El Arrebato, es un cantautor español de rumba-pop y flamenco. De familia paterna de Sevilla y familia materna de Barbate, comenzó su carrera artística sobre 1985 y su carrera discográfica en 1988 sacando su primer disco con el grupo Piel morena en el que le acompañaban 2 grandes amigos de su Sevilla natal.​');
INSERT INTO authors (nombre, informacion) VALUES('el_canto_del_loco','(también abreviado ECDL) fue un grupo español de música pop rock. Fue creado en 1994 por Dani Martín e Iván Ganchegui (quien abandonaría el grupo en 2002), y años después terminarían por ser cinco miembros. Influidos principalmente por otros grupos españoles de la década de 1980 y con cinco álbumes de estudio, El Canto del Loco ha conseguido vender más de un millón de copias en el mercado,1​ convirtiéndose en uno de los grupos musicales más importantes del panorama español en su momento.');
INSERT INTO authors (nombre, informacion) VALUES('thirty_seconds_to_mars','es una banda estadounidense de rock alternativo formada en 1998 en Los Ángeles (California). Integrada originalmente por tres miembros: Jared Leto (voz, guitarra), Matt Wachter (bajo, sintetizador) y Shannon Leto (batería), a quienes más tarde se les uniría el guitarrista Solon Bixler. Después de la publicación de su álbum debut, el guitarrista Solon Bixler salió de la banda debido a problemas durante su primera gira, poco después fue sustituido por el guitarrista Tomo Milicevic.11​ Después de la salida de Matt Wachter (ahora en Angels & Airwaves), Jared Leto se convirtió en el bajista de la banda.');
INSERT INTO authors (nombre, informacion) VALUES('linkin_park', 'es una banda estadounidense de rock alternativo procedente de Agoura Hills, California. Formada en 1996, el grupo estuvo inicialmente integrado por Mike Shinoda, Dave Farrell, Joe Hahn, Brad Delson, Rob Bourdon y Mark Wakefield, este último como voz principal. La banda inició en ese mismo año sus primeros trabajos musicales de manera independiente y posterior a esto grabaron su primer material llamado Xero; sin embargo no tuvieron gran éxito en la búsqueda de un sello discográfico ya que nadie mostró interés por su trabajo, lo que ocasionó la renuncia de Mark Wakefield.2​ Poco después, Chester Bennington se incorporó a la banda como vocalista; el grupo realizó su primera presentación en un club de Los Ángeles y siendo respaldados por Jeff Blue, en aquel entonces vicepresidente de Warner Bros. Records, lograron firmar con el sello en 1999. El nombre del grupo es un juego de palabras que hace referencia al Lincoln Park en Santa Mónica.');
-- ids: a partir del 11 estan llibres

/********************************/

/* --- albums --- */
/* camaron */
INSERT INTO albums (nombre,created_at) VALUES('caminito_de_totana',CURRENT_DATE);
INSERT INTO albums (nombre,created_at) VALUES('reencuentro',CURRENT_DATE);
INSERT INTO albums (nombre,created_at) VALUES('soy_caminante',CURRENT_DATE);
/* la_excepcion */
INSERT INTO albums (nombre,created_at) VALUES('aguantando_el_tiron',CURRENT_DATE);
INSERT INTO albums (nombre,created_at) VALUES('la_verdad_mas_verdadera',CURRENT_DATE);
/* los_delinquentes */
INSERT INTO albums (nombre,created_at) VALUES('arquitectura_del_aire_en_la_calle',CURRENT_DATE);
INSERT INTO albums (nombre,created_at) VALUES('extras',CURRENT_DATE);
/* bad_bunny*/
INSERT INTO albums (nombre,created_at) VALUES('x100pre',CURRENT_DATE);
/* arce */
INSERT INTO albums (nombre,created_at) VALUES('lucifer',CURRENT_DATE);
/* after laugther de paramore */
-- borrar id 10
INSERT INTO albums (nombre,created_at) VALUES('after_laughter',CURRENT_DATE);
/* el_arrebato */
INSERT INTO albums (nombre,created_at) VALUES('abrazos',CURRENT_DATE);
/* brand new eyes de paramore*/
-- borrar id 12
INSERT INTO albums (nombre,created_at) VALUES('brand_new_eyes',CURRENT_DATE);
/* el canto del loco */
INSERT INTO albums (nombre,created_at) VALUES('zapatillas',CURRENT_DATE);
INSERT INTO albums (nombre,created_at) VALUES('estados_de_animo',CURRENT_DATE);
/* thirty seconds to mars */
INSERT INTO albums (nombre,created_at) VALUES('a_beautiful_lie',CURRENT_DATE);
INSERT INTO albums (nombre,created_at) VALUES('love_lust_faith_+_dreams',CURRENT_DATE);
/* linkin park */
INSERT INTO albums (nombre,created_at) VALUES('minutes_to_midnight',CURRENT_DATE);
INSERT INTO albums (nombre,created_at) VALUES('living_things',CURRENT_DATE);
-- ids: a patir del 19 estan libres
/********************************/

/* --- styles --- */
INSERT INTO styles (nombre,descripcion) VALUES('flamenco','Lo más flamenco');
INSERT INTO styles (nombre,descripcion) VALUES('rap','Disfruta del rap más callejero.');
INSERT INTO styles (nombre,descripcion) VALUES('rock','El rock más cañero.');
INSERT INTO styles (nombre,descripcion) VALUES('reggaeton','Lo más reggaetonero.');
-- INSERT INTO styles (nombre) VALUES('jazz');
-- INSERT INTO styles (nombre) VALUES('pop');

/********************************/

/* --- songs --- */
/* camaron */
/* caminito_de_totana */
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('caminito_de_totana',1,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('hermanito_mio',1,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('que_no_se_quita_con_na',1,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('dame_un_poquito_de_agua',1,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('la_jaca_que_yo_tenia',1,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('a_la_sombra_de_un_laurel',1,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('quisiera_volverme_pulga',1,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('salud_antes_que_dinero',1,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('busco_yo_mi_solea',1,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('a_un_sabio_le_oi_decir',1,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('las_espinas_de_una_flor',1,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('las_doce_acaban_de_dar',1,1,1,CURRENT_DATE);
/* reencuentro */
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('por_tangos',2,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('la_saeta',2,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('solea_del_chaqueta',2,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('hombre_terrestre',2,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('la_virgen_hizo_una_sopa',2,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('a_dibujar_esta_rosa',2,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('soy_fraguero',2,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('las_12_acaban_de_dar',2,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('la_vibora_rabiosa',2,1,1,CURRENT_DATE);
/* soy_caminante */
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('el_caminante',3,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('reniego_haberte_encontrado',3,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('la_vida_es_una_ilusion',3,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('las_penas_de_mi_mare',3,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('me_olvidaste,_te_olvide',3,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('que_desgraciaitos_son',3,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('que_camina_noche_y_dia',3,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('se_pelean_en_mi_mente',3,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('me_dieron_una_ocasion',3,1,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('mira_que_bonitas_son',3,1,1,CURRENT_DATE);
/* la_excepcion */
/* aguantando_el_tiron */
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('intro',4,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('la_puerta_abierta',4,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('jeeesus',4,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('el_tio_aquiles',4,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('interludio_te_vendo_una_guitarrinchi',4,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('sin_escaleras_era_mi_escuela',4,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('aguantando_el_tiron',4,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('flow_y_al_kompas',4,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('jambo_loco',4,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('cachitos,_scratches_y_toallitas',4,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('gambas_al_pil-pil',4,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('es_lo_que_queda',4,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('interludio_peludo',4,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('besolla_f.s.',4,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('tai-tabu',4,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('rap_peludo',4,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('pukaboom',4,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('no_a_la_tala',4,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('marcao_pa_to_la_vida',4,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('rapin_pan_ben',4,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('el_outro',4,2,2,CURRENT_DATE);
/* la_verdad_mas_verdadera */
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('la_verdad_mas_verdadera',5,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('en_fuerza_fisica',5,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('ruina',5,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('asintiendo_la_perdicion',5,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('interludio_peludo',5,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('carmela_pasteles',5,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('santo_devoto',5,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('no_es_la_solucion',5,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('su_suerte',5,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('asin_ke',5,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('interludio_peludo_2',5,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('la_misma_istoria,_sin_h',5,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('azoteas',5,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('siempre_sostenerse',5,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('perfil_blanco_payo',5,2,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('interludio_peludo_3',5,2,2,CURRENT_DATE);
/* los_delinquentes */
/* arquitectura_del_aire_de_la_calle */
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('los_delinquentes_y_la_banda_del_raton',6,3,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('la_nina_de_la_palmera',6,3,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('caminito_del_almendro',6,3,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('poeta_encadenado',6,3,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('la_ragazza_del_elevatore',6,3,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('medicina_y_mucho_ruido',6,3,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('la_madriguera',6,3,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('el_telescopio_cosmico',6,3,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('amor_plutonico',6,3,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('joaquin_carachapa_y_la_pequena_nube',6,3,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('gato_callejero',6,3,1,CURRENT_DATE);
/* extras */
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('sigo_a_la_luna',7,3,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('macetas_de_colores',7,3,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('apuntate',7,3,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('chinchetas_en_el_aire',7,3,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('la_bamba',7,3,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('el_dia_de_los_bomberos',7,3,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('fumata_del_ladrillo',7,3,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('gato_callejero',7,3,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('tartarichi',7,3,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('oh_mare!!',7,3,1,CURRENT_DATE);
/* bad_bunny*/
/* x100pre */
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('caro',8,4,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('cuando_perriabas',8,4,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('la_romana',8,4,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('ni_bien_ni_mal',8,4,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('otra_noche_en_miami',8,4,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('quien_tu_eres',8,4,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('ser_bichote',8,4,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('si_estuviesemos_juntos',8,4,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('solo_de_mi',8,4,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('tenemos_que_hablar',8,4,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('tenemos-que-hablar',8,4,4,CURRENT_DATE);
/* arce */
/* lucifer */
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('all_starts',9,5,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('ayer',9,5,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('bitch',9,5,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('carpe_diem',9,5,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('eros',9,5,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('luciffer',9,5,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('luzbel',9,5,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('manicomio',9,5,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('matusalem',9,5,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('mirame_a_los_ojos',9,5,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('mi_ruina_que_hablar',9,5,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('alcoholics',9,5,2,CURRENT_DATE);
/* el_arrebato */
/* abrazos */
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('aqui_me_tienes',11,7,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('que_salga_el_sol_por_donde_quiera',11,7,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('primaveras_en_el_pelo',11,7,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('si_la_hubieras_visto',11,7,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('en_el_ultimo_minuto',11,7,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('pequeneces',11,7,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('en_el_numero_14',11,7,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('buscate_un_hombre_que_te_quiera',11,7,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('a_mi_na_ma',11,7,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('una_noche_con_arte',11,7,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('un_amor_tan_grande',11,7,1,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('cuando_quieras_quiero',11,7,1,CURRENT_DATE);

/* after_laughter */
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('hard_times',10,6,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('rose_colored_boy',10,6,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('told_you_so',10,6,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('forgiveness',10,6,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('fake_happy',10,6,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('26',10,6,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('pool',10,6,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('grudges',10,6,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('caught_in_the_middle',10,6,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('idle_worship',10,6,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('no_friend',10,6,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('tell_me_how',10,6,3,CURRENT_DATE);

/* brand_new_eyes */
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('careful',12,6,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('ignorance',12,6,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('playing god',12,6,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('brick by boring brick',12,6,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('turn if off',12,6,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('the only exception',12,6,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('feeling sorry',12,6,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('looking up',12,6,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('where the lines overlap',12,6,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('misguided ghosts',12,6,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('all i wanted',12,6,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('decode',12,6,3,CURRENT_DATE);

/* zapatillas */
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('canciones',13,8,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('volverá',13,8,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('zapatillas',13,8,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('será',13,8,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('besos',13,8,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('vuelve',13,8,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('despiértame',13,8,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('úsanos',13,8,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('el_pescao',13,8,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('qué_raro_es_el_tiempo',13,8,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('desaparece',13,8,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('tal_como_eres',13,8,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('por_ti',13,8,3,CURRENT_DATE);

/* estados de animo */
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('volver_a_disfrutar',14,8,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('la_madre_de_jose',14,8,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('ya_nada_volvera_a_ser_como_antes',14,8,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('insoportable',14,8,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('dentro_de_mi',14,8,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('otra_vez',14,8,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('siempre_cerca',14,8,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('como_un_perro_ladrando',14,8,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('ekix',14,8,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('una_foto_en_blanco_y_negro',14,8,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('no_voy_a_parar',14,8,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('te_recuerdo',14,8,3,CURRENT_DATE);

/* a beautiful lie*/
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('attack',15,9,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('a beautiful lie',15,9,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('the_kill',15,9,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('was_it_a_dream',15,9,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('the_fantasy',15,9,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('savior',15,9,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('from_yesterday',15,9,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('the_story',15,9,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('r_evolve',15,9,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('a_modern_myth',15,9,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('battle_of_one',15,9,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('hunter',15,9,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('the_kill_(rebirth)',15,9,3,CURRENT_DATE);

/* love lust faith + dreams*/
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('birth',16,9,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('conquistador',16,9,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('up_in_the_air',16,9,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('city_of_angels',16,9,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('the_race',16,9,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('end_of_all_days',16,9,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('pyres_of_varanasi',16,9,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('bright_lights',16,9,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('do_or_die',16,9,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('convergence',16,9,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('northern_lights',16,9,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('depuis_le_debut',16,9,3,CURRENT_DATE);

/* minutes to midnight */
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('wake',17,10,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('given_up',17,10,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('leave_out_all_the_rest',17,10,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('bleed_it_out',17,10,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('shadow_of_the_day',17,10,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('what_ive_done',17,10,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('hands_held_high',17,10,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('no_more_sorrow',17,10,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('valentines_day',17,10,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('in_between',17,10,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('in_pieces',17,10,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('the_little_things_give_you_away',17,10,4,CURRENT_DATE);

/* living things */
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('lost_in_the_echo',18,10,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('in_my_remains',18,10,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('burn_it_down',18,10,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('lies_greed_misery',18,10,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('ill_be_gone',18,10,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('castle_of_glass',18,10,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('victimized',18,10,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('roads_untraveled',18,10,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('skin_to_bone',18,10,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('until_it_breaks',18,10,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('tinfoil',18,10,4,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('powerless',18,10,4,CURRENT_DATE);

/* --- journals --- */
/* id_user 1 */
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,37,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,29,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,25,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,21,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,23,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,33,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,53,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,72,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,62,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,42,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,33,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,63,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,83,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,102,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,10,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,32,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,23,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,13,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,3,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,72,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,82,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,72,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,63,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,35,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,36,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,27,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,82,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,92,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,33,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,23,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,13,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,2,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,23,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,23,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,5,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,53,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,34,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,23,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,22,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,21,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,73,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,83,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,73,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,82,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,52,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,24,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,33,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,22,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,12,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,112,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,31,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (1,13,CURRENT_DATE);

/* id_user 2 */
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,5,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,53,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,34,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,23,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,22,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,22,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,73,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,83,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,73,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,82,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,52,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,24,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,33,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,32,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,24,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,2,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,32,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,37,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,29,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,25,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,22,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,23,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,33,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,53,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,72,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,62,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,42,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,33,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,63,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,83,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,2,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,20,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,32,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,23,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,23,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,3,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,72,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,82,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,72,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,63,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,35,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,36,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,27,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,82,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,92,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,33,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,23,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,23,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,2,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,23,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,23,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,23,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,23,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,23,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,3,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,72,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,82,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,72,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,63,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,35,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,36,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,27,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,100,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,100,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,100,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,100,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,100,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,100,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,100,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,102,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,102,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,102,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,102,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,102,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,102,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,102,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,102,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,102,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,102,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (2,102,CURRENT_DATE);

/* id_user 3 */
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,83,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,63,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,53,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,93,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,73,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,63,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,43,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,33,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,63,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,83,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,3,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,30,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,33,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,33,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,33,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,3,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,73,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,5,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,53,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,34,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,33,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,33,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,33,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,73,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,83,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,73,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,83,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,53,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,34,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,33,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,33,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,34,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,3,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,33,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,37,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,39,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,35,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,83,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,73,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,63,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,35,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,36,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,37,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,83,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,93,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,33,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,33,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,33,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,3,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,53,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,133,CURRENT_DATE);
INSERT INTO journals(id_user, id_song, created_at) VALUES (3,13,CURRENT_DATE);

/********************************/
=======
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `albums`
--

DROP TABLE IF EXISTS `albums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albums` (
  `id_album` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_album`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authors` (
  `id_author` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `informacion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_author`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `journals`
--

DROP TABLE IF EXISTS `journals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `journals` (
  `id_journal` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) unsigned NOT NULL,
  `id_song` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_journal`),
  KEY `journals_id_user_foreign` (`id_user`),
  KEY `journals_id_song_foreign` (`id_song`),
  CONSTRAINT `journals_id_song_foreign` FOREIGN KEY (`id_song`) REFERENCES `songs` (`id_song`) ON DELETE CASCADE,
  CONSTRAINT `journals_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profiles` (
  `id_profile` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `styles_fav` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_profile`),
  KEY `profiles_id_user_foreign` (`id_user`),
  CONSTRAINT `profiles_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `songs`
--

DROP TABLE IF EXISTS `songs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `songs` (
  `id_song` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_album` bigint(20) unsigned NOT NULL,
  `id_author` bigint(20) unsigned NOT NULL,
  `id_style` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_song`),
  KEY `songs_id_album_foreign` (`id_album`),
  KEY `songs_id_author_foreign` (`id_author`),
  KEY `songs_id_style_foreign` (`id_style`),
  CONSTRAINT `songs_id_album_foreign` FOREIGN KEY (`id_album`) REFERENCES `albums` (`id_album`) ON DELETE CASCADE,
  CONSTRAINT `songs_id_author_foreign` FOREIGN KEY (`id_author`) REFERENCES `authors` (`id_author`) ON DELETE CASCADE,
  CONSTRAINT `songs_id_style_foreign` FOREIGN KEY (`id_style`) REFERENCES `styles` (`id_style`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `styles`
--

DROP TABLE IF EXISTS `styles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `styles` (
  `id_style` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_style`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-04 20:31:49
