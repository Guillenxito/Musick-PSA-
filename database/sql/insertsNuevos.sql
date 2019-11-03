
/* --- authors --- */
INSERT INTO authors (nombre, informacion) VALUES('camaron','Fue un cantaor gitano español considerado una de las principales figuras del flamenco.');
INSERT INTO authors (nombre, informacion) VALUES('la_excepcion', "La excepción que confirma la regla, fue un grupo español de rap originario del barrio de Pan Bendito, en el distrito de Carabanchel, Madrid. Estuvo compuesto por los MC's El Langui y Gitano Antón  y por el DJ La Dako Style . ");
INSERT INTO authors (nombre, informacion) VALUES('los_delinquentes', 'Los Delinqüentes fue un grupo musical andaluz, originario de Jerez de la Frontera (Cádiz), formado en 1998 por Miguel Ángel Benítez Gómez "Er Migue" y Marcos del Ojo "Er Canijo de Jeré", a los que se uniría posteriormente Diego Pozo "Er Ratón".');
INSERT INTO authors (nombre, informacion) VALUES('bad_bunny','Benito Antonio Martínez Ocasio (San Juan, Puerto Rico, 10 de marzo de 1994), más conocido por su nombre artístico Bad Bunny, es un cantante puertorriqueño de trap y reguetón.');
INSERT INTO authors (nombre, informacion) VALUES('arce','Pablo Arce es un rapero gallego nacido en Santiago de Compostela en 1990. Empezó con el rap en el 2002: escribía letras en su casa y las grababa con un mp3, después las bajaba al Parque de Ramírez y a la gente le gustaba porque era un rollo diferente, callejero, con las drogas, el dinero y las chicas como temática. Precisamente por el contenido "salvaje" de sus letras se le ha colgado el cartel de "polémico".');
INSERT INTO authors (nombre, informacion) VALUES('paramore','Paramore es una banda estadounidense de pop punk y rock alternativo​​​​ integrada por Hayley Williams, Taylor York y Zac Farro. Fue formada en Franklin, Tennessee, en 2004, por Williams y Jeremy Davis junto con Josh Farro, Zac Farro ​ y Jason Bynum.​');

/********************************/

/* --- albums --- */
/* camaron */
INSERT INTO albums (nombre) VALUES('caminito_de_totana');
INSERT INTO albums (nombre) VALUES('reencuentro');
INSERT INTO albums (nombre) VALUES('soy_caminante');
/* la_excepcion */
INSERT INTO albums (nombre) VALUES('aguantando_el_tiron');
INSERT INTO albums (nombre) VALUES('la_verdad_mas_verdadera');
/* los_delinquentes */
INSERT INTO albums (nombre) VALUES('arquitectura_del_aire_en_la_calle');
INSERT INTO albums (nombre) VALUES('extras');
/* bad_bunny*/
INSERT INTO albums (nombre) VALUES('x100pre');
/* arce */
INSERT INTO albums (nombre) VALUES('lucifer');
/* paramore */
INSERT INTO albums (nombre) VALUES('after_laughter');

/********************************/

/* --- styles --- */
INSERT INTO styles (nombre) VALUES('flamenco');
INSERT INTO styles (nombre) VALUES('rap');
INSERT INTO styles (nombre) VALUES('rock');
INSERT INTO styles (nombre) VALUES('jazz');
INSERT INTO styles (nombre) VALUES('pop');
INSERT INTO styles (nombre) VALUES('reggaeton');

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
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('los_delinquentes_y_la_banda_del_raton',6,3,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('la_nina_de_la_palmera',6,3,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('caminito_del_almendro',6,3,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('poeta_encadenado',6,3,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('la_ragazza_del_elevatore',6,3,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('medicina_y_mucho_ruido',6,3,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('la_madriguera',6,3,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('el_telescopio_cosmico',6,3,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('amor_plutonico',6,3,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('joaquin_carachapa_y_la_pequena_nube',6,3,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('gato_callejero',6,3,3,CURRENT_DATE);
/* extras */
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('sigo_a_la_luna',7,3,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('macetas_de_colores',7,3,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('apuntate',7,3,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('chinchetas_en_el_aire',7,3,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('la_bamba',7,3,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('el_dia_de_los_bomberos',7,3,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('fumata_del_ladrillo',7,3,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('gato_callejero',7,3,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('tartarichi',7,3,3,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('oh_mare!!',7,3,3,CURRENT_DATE);
/* bad_bunny*/
/* x100pre */
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('caro',8,4,6,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('cuando_perriabas',8,4,6,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('la_romana',8,4,6,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('ni_bien_ni_mal',8,4,6,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('otra_noche_en_miami',8,4,6,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('quien_tu_eres',8,4,6,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('ser_bichote',8,4,6,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('si_estuviesemos_juntos',8,4,6,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('solo_de_mi',8,4,6,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('tenemos_que_hablar',8,4,6,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('tenemos-que-hablar',8,4,6,CURRENT_DATE);
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
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('mi_ruina-que-hablar',9,5,2,CURRENT_DATE);
INSERT INTO songs (titulo,id_album,id_author,id_style,created_at) VALUES('alcoholics',9,5,2,CURRENT_DATE);

/********************************/
