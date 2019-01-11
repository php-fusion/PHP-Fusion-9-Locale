<?php
/**
 * Spanish Locale
 *
 * @locale charset           ISO 639-1 - http://www.loc.gov/standards/iso639-2/php/code_list.php
 * @locale region            ISO-3166 (2 Alpha numeric) - https://www.iso.org/obp/ui/#search
 * @locale tinymce           refer to path includes/jscripts/tinymce/langs/{value}.js
 * @locale select2           refer to path includes/dynamics/select2/select2_locale_{value}.js
 * @locale phpmailer         refer to path includes/classes/PHPMailer/language/phpmailer.lang-{value}.php
 * @locale password_strength refer to path includes/dynamics/password/lang/{value}.js
 * @package locale/Spanish
 */
setlocale(LC_TIME, "es_ES.utf8"); // Linux Server (Windows may differ)
$locale['charset'] = "utf-8";
$locale['region'] = "ES";
$locale['xml_lang'] = "es";
$locale['short_lang_name'] = "es";
$locale['tinymce'] = "es";
$locale['select2'] = "es";
$locale['phpmailer'] = "es";
$locale['datepicker'] = "es-es";
$locale['datepicker_js'] = "DD-M-YYYY H:mm:ss";
$locale['datepicker_php'] = "d-m-Y H:i:s";
$locale['password_strength'] = "es";
// Full & Short Months
$locale['months'] = "&nbsp|Enero|Febrero|Marzo|Abril|Mayo|Junio|Julio|Agosto|Septiembre|Octubre|Noviembre|Diciembre";
$locale['shortmonths'] = "&nbsp|Ene|Feb|Mar|Abr|May|Jun|Jul|Ago|Sep|Oct|Nov|Dic";
$locale['weekdays'] = "Domingo|Lunes|Martes|Miercoles|Jueves|Viernes|Sabado";
// Timers
$locale['year'] = "año";
$locale['year_a'] = "años";
$locale['month'] = "mes";
$locale['month_a'] = "meses";
$locale['day'] = "dia";
$locale['day_a'] = "dias";
$locale['hour'] = "hora";
$locale['hour_a'] = "horas";
$locale['minute'] = "minuto";
$locale['minute_a'] = "minutos";
$locale['second'] = "segundo";
$locale['second_a'] = "segundos";
$locale['just_now'] = "En este momento";
$locale['ago'] = "hace";
// Geo
$locale['street1'] = "Dirección calle 1";
$locale['street2'] = "Dirección calle 2";
$locale['city'] = "Ciudad";
$locale['postcode'] = "código postal";
$locale['sel_country'] = "Seleccione su País";
$locale['sel_state'] = "Seleccione Estado";
$locale['sel_user'] = "Por favor, escriba un nombre de usuario";
$locale['add_language'] = "Agregar Traducciones de idioma";
$locale['add_lang'] = "Agregar %s";
$locale['other_states'] = "Otros estados";
// Name
$locale['name'] = "Nombre completo";
$locale['username_pretext'] = "Tu nombre de usuario público también es el mismo que su dirección del perfil de usuario se encuentra en: %s %s";
$locale['first_name'] = "Nombre de pila";
$locale['middle_name'] = "Segundo nombre";
$locale['last_name'] = "con Apellido";
// Documents
$locale['doc_type'] = "Tipo de documento";
$locale['doc_series'] = "Series";
$locale['doc_number'] = "Número";
$locale['doc_authority'] = "Autoridad";
$locale['doc_date_issue'] = "Fecha de Emisión";
$locale['doc_date_expire'] = "Fecha de Caducidad";
// Standard User Levels
$locale['user0'] = "Público";
$locale['user1'] = "Miembro";
$locale['user2'] = "Administrador";
$locale['user3'] = "Super Administrador";
$locale['user_na'] = "N/A";
$locale['user_guest'] = "Invitado";
$locale['user_anonymous'] = "Usuario Anónimo";
$locale['genitive'] = "%s's %s";
// Standard User Status
$locale['status0'] = "Activo";
$locale['status1'] = "Expulsado";
$locale['status2'] = "No Activado";
$locale['status3'] = "Suspendido";
$locale['status4'] = "Expulsión de Seguridad";
$locale['status5'] = "Cancelado";
$locale['status6'] = "Anónimo";
$locale['status7'] = "Desactivado";
$locale['status8'] = "Inactivo";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderador";
// Navigation
$locale['global_001'] = "Navegación";
$locale['global_002'] = "No se han creado enlaces\n";
$locale['global_003'] = "Nada que ver";
// Users Online
$locale['global_010'] = "Usuarios Conectados";
$locale['global_011'] = "Invitados";
$locale['global_012'] = "Miembros";
$locale['global_013'] = "Ninguno";
$locale['global_014'] = "Total Miembros";
$locale['global_015'] = "Miembros Sin Activar";
$locale['global_016'] = "Último Miembro";
$locale['global_017'] = "Alternar la navegación";
// Forum Side panel
$locale['global_020'] = "Temas del Foro";
$locale['global_021'] = "Últimos Temas";
$locale['global_022'] = "Temas Populares";
$locale['global_023'] = "No se han creado temas";
$locale['global_024'] = "Participaron de las discusiones";
$locale['global_027'] = "Temas sin respuestas";
$locale['global_028'] = "Preguntas sin resolver";
// Comments Side panel
$locale['global_025'] = "Últimos Comentarios";
$locale['global_026'] = "No hay comentarios";
// Articles Side panel
$locale['global_030'] = "Últimos Artículos";
$locale['global_031'] = "No hay artículos";
// Downloads Side panel
$locale['global_032'] = "Últimas Descargas";
$locale['global_033'] = "No hay descargas";
// Welcome panel
$locale['global_035'] = "Bienvenida";
// Latest Active Forum Threads panel
$locale['global_040'] = "Últimos Temas Activos del Foro";
$locale['global_041'] = "Mis Temas Recientes";
$locale['global_042'] = "Mis Mensajes Recientes";
$locale['global_043'] = "Nuevos Mensajes";
$locale['global_044'] = "Tema";
$locale['global_045'] = "Visitas";
$locale['global_046'] = "Respuestas";
$locale['global_047'] = "Último Mensaje";
$locale['global_048'] = "Foro";
$locale['global_049'] = "Publicado el";
$locale['global_050'] = "Autor";
$locale['global_051'] = "Encuesta";
$locale['global_052'] = "Movido";
$locale['global_053'] = "No has iniciado temas en el foro.";
$locale['global_054'] = "No has publicado mensajes en el foro.";
$locale['global_055'] = "Desde tu última visita hay %u nuevo(s) mensaje(s) en %u diferente(s) tema(s).";
$locale['global_056'] = "Mis Suscripciones";
$locale['global_057'] = "Opciones";
$locale['global_058'] = "Detener";
$locale['global_059'] = "No estás suscrito a ningún tema.";
$locale['global_060'] = "¿Cancelar la suscripción a este tema?";
// Blog, News & Articles
$locale['global_070'] = "Publicado por ";
$locale['global_070b'] = "Ver todos los mensajes por %s";
$locale['global_071'] = "el ";
$locale['global_071b'] = "Autor";
$locale['global_072'] = "Leer más";
$locale['global_073'] = " Comentarios";
$locale['global_073b'] = " Comentario";
$locale['global_074'] = " Lecturas";
$locale['global_074b'] = " Leer";
$locale['global_075'] = "Imprimir";
$locale['print'] = "Imprimir";
$locale['global_076'] = "Editar";
$locale['global_077'] = "Noticias";
$locale['global_078'] = "No hay noticias";
$locale['global_079'] = "En ";
$locale['global_080'] = "Otras Noticias";
$locale['global_081'] = "Noticias Inicio";
$locale['global_082'] = "Noticias";
$locale['global_083'] = "Última actualización";
$locale['global_084'] = "Categoría Noticias";
$locale['global_085'] = "Todas las demás categorías";
$locale['global_086'] = "Noticias más recientes";
$locale['global_087'] = "Noticias más comentadas";
$locale['global_088'] = "Más alta Votación Noticias";
$locale['global_089'] = "¡Sé el primero en comentar sobre %s";
$locale['global_089a'] = "¡Sé el primero en evaluar en esta %s";
$locale['global_089b'] = "vista del pulgar";
$locale['global_089c'] = "Vista de lista";
// Page Navigation
$locale['global_090'] = "Anterior";
$locale['global_091'] = "Siguiente";
$locale['global_092'] = "Página ";
$locale['global_093'] = " de ";
$locale['global_094'] = " fuera de ";
// Guest User Menu
$locale['global_100'] = "Iniciar Sesión";
$locale['global_101'] = "Nombre de Usuario";
$locale['global_101a'] = "Ingrese nombre de usuario";
$locale['global_101b'] = "Introduzca correo electrónico";
$locale['global_101c'] = "Ingrese correo electrónico o nombre de usuario";
$locale['global_102'] = "Contraseña";
$locale['global_103'] = "Recordar";
$locale['global_104'] = "Iniciar Sesión";
$locale['global_105'] = "¿No eres miembro? [LINK]Regístrate aquí[/LINK].";
$locale['global_106'] = "¿Contraseña olvidada? [LINK]Recupera tu contraseña[/LINK].";
$locale['global_107'] = "Registro";
$locale['global_108'] = "Contraseña Olvidada";
$locale['global_109'] = "Únete";
// Member User Menu
$locale['global_120'] = "Personaliza tu página de perfil";
$locale['global_121'] = "Mensajes Privados";
$locale['global_122'] = "Lista de miembros";
$locale['global_123'] = "Panel de administración";
$locale['global_124'] = "Cierre de sesión";
$locale['global_125'] = "Tienes %u nuevo ";
$locale['global_126'] = "Mensaje";
$locale['global_127'] = "Mensajes";
$locale['global_128'] = "Presentación";
$locale['global_129'] = "Presentaciones";
// User Menu
$locale['UM060'] = "Entrar";
$locale['UM061'] = "Nombre de usuario";
$locale['UM061a'] = "Email";
$locale['UM061b'] = "Nombre de usuario o correo electrónico";
$locale['UM062'] = "Contraseña";
$locale['UM063'] = "Acuérdate de mí";
$locale['UM064'] = "Entrar";
$locale['UM065'] = "¿No eres miembro todavía? [LINK]haga clic aquí[/LINK] para registrarse.";
$locale['UM066'] = "¿Olvidó su contraseña?\n[LINK]Solicitar una nueva aquí[/LINK].";
$locale['UM067'] = "(No recomendado en el ordenador público o compartido)";
$locale['UM080'] = "Editar Perfil";
$locale['UM081'] = "Mensajes Privados";
$locale['UM082'] = "Lista de Miembros";
$locale['UM083'] = "Panel de Administración";
$locale['UM084'] = "Cerrar sesión";
$locale['UM085'] = "Usted tiene %u nuevo ";
$locale['UM086'] = "mensaje";
$locale['UM087'] = "mensajes";
$locale['UM088'] = "Temas segidos";
// Submit (news, link, article)
$locale['UM089'] = "Presentar...";
$locale['UM090'] = "Enviar Noticias";
$locale['UM091'] = "Enviar Enlace";
$locale['UM092'] = "Enviar Articulo";
$locale['UM093'] = "Enviar Foto";
$locale['UM094'] = "Enviar Descarga";
$locale['UM095'] = "Enviar Blog";
$locale['UM102'] = "Enviar FAQ";
// User Panel
$locale['UM096'] = "BIENVENIDA: ";
$locale['UM097'] = "Menú Personal";
$locale['UM101'] = "Cambiar Idioma";
// Gauges
$locale['UM098'] = "Mensajes Bandeja de entrada:";
$locale['UM099'] = "Mensajes Bandeja de salida:";
$locale['UM100'] = "Archivo de mensajes:";
// Keywords and Meta
$locale['tags'] = "Tags";
// Captcha
$locale['global_150'] = "Código de Validación:";
$locale['global_151'] = "Introduce el Código de Validación:";
// Footer Counter
$locale['global_170'] = "Visita única";
$locale['global_171'] = "Visitas Únicas";
$locale['global_172'] = "Generado en %s segundos";
$locale['global_173'] = "Consultas";
$locale['global_174'] = "Memoria utilizada";
$locale['global_175'] = "Promedio: %s segundos";
$locale['global_176'] = "Política de privacidad";
// Admin Navigation
$locale['global_180'] = "Inicio Administración";
$locale['global_181'] = "Volver al Sitio";
$locale['global_182'] = "Contraseña de Administración no introducida o incorrecta.";
// Miscellaneous
$locale['global_190'] = "Modo de mantenimiento activado";
$locale['global_191'] = "Tu dirección IP está expulsada.";
$locale['global_192'] = "Tu cookie de usuario ha caducado. Vuelve a iniciar sesión para continuar.";
$locale['global_193'] = "No se ha podido establecer la cookie de usuario. Para poder iniciar sesión correctamente, asegúrate de que tu navegador acepta cookies.";
$locale['global_194'] = "Esta cuenta está suspendida.";
$locale['global_195'] = "Esta cuenta no está activada.";
$locale['global_196'] = "El nombre de usuario o la contraseña no son válidos.";
$locale['global_197'] = "Espera mientras eres transferido...\n\n[ [LINK]o pulsa aquí si no quieres esperar[/LINK] ]";
$locale['global_198'] = "ADVERTENCIA: INSTALADOR DETECTADO, POR FAVOR ELIMINE EL ARCHIVO INSTALL-PHP INMEDIATAMENTE.";
$locale['global_199'] = "ADVERTENCIA: No está configurada la contraseña de administrador. Pulsa [LINK]Editar Perfil[/LINK] para configurarla.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = " - Buscar";
$locale['global_203'] = " - FAQ";
$locale['global_204'] = " - Foro";
//Themes
$locale['global_210'] = "Ir al Contenido";
$locale['global_300'] = "No se han encontrado temas";
$locale['global_301'] = "Lo sentimos, pero esta página no se puede mostrar. Debido a algunas circunstancias no se puede encontrar ningún tema del sitio.
  Si usted es un Administrador del Sitio, por favor utilice su cliente FTP para cargar cualquier tema diseñado para PHP-Fusion 9 a la carpeta de temas.
  Después de cargar comprobar en Configuración de tema para ver si el tema seleccionado se subió correctamente a su directorio de temas.
  Tenga en cuenta que la carpeta de temas cargados tiene que tener exactamente el mismo nombre (incluido el caso de caracteres, que es importante en los servidores basados en Unix)
  Como se elige en la página Configuración del tema. \n \nSi eres miembro habitual de este sitio, ponte en contacto con el administrador del sitio a través de [SITE_EMAIL] correo electrónico e informa de este problema.";
$locale['global_302'] = "El Tema (Theme) elegido en la Configuración Principal no existe o está incompleto.";
// JavaScript Not Enabled
$locale['global_303'] = "¡Oh no! ¿Dónde está el JavaScript? \n El navegador Web no tiene JavaScript activado o no es compatible con JavaScript.
Active JavaScript en su explorador Web para ver correctamente este sitio Web o actualizar a un navegador Web que admita JavaScript.";
// User Management
$locale['global_400'] = "suspendido";
$locale['global_401'] = "expulsado";
$locale['global_402'] = "desactivado";
$locale['global_403'] = "cuenta finalizada";
$locale['global_404'] = "cuenta anonimizada";
$locale['global_405'] = "usuario anonimizado";
$locale['global_406'] = "Esta cuenta ha sido expulsada por lo siguiente:";
$locale['global_407'] = "Esta cuenta ha sido suspendida hasta ";
$locale['global_408'] = " por lo siguiente:";
$locale['global_409'] = "Esta cuenta ha sido expulsada por motivos de seguridad.";
$locale['global_410'] = "El motivo es: ";
$locale['global_411'] = "Esta cuenta ha sido cancelada.";
$locale['global_412'] = "Esta cuenta ha sido anonimizada debido, probablemente, a su inactividad.";
// Control de inundaciones
$locale['global_440'] = "Prohibición automática por control de inundación";
$locale['global_441'] = "Tu cuenta en [SITENAME] ha sido prohibida";
$locale['global_442'] = "Hola [USER_NAME], \n
Su cuenta en [SITENAME] fue detectada al publicar demasiados elementos en el sistema en muy poco tiempo desde la IP [USER_IP], y por lo tanto se han prohibido. Esto se hace para evitar que los robots envíen mensajes de spam en rápida sucesión. \norte
Póngase en contacto con el administrador del sitio en [SITE_EMAIL] para que su cuenta se restablezca o informe si no fue esta la causa de esta prohibición de seguridad. \n \n
Recuerdos, \n [SITEUSERNAME] ";
// Authenticate Class
$locale['global_450'] = "Suspensión automáticamente levantada por el sistema";
$locale['global_451'] = "Suspensión levantada en [SITENAME]";
$locale['global_452'] = "Hola USER_NAME, \n
La suspensión de su cuenta en [SITEURL] se ha levantado. Estos son los datos de acceso: \n
Nombre de usuario: USER_NAME \n Contraseña: ocultada por razones de seguridad \n
Si ha olvidado su contraseña, puede restablecerla a través del siguiente enlace: LOST_PASSWORD \n \n
Recuerdos, \n [SITEUSERNAME] ";
$locale['global_453'] = "Hola USER_NAME, \n Se ha levantado la suspensión de su cuenta en [SITEURL]. \n \n
Recuerdos, \n [SITEUSERNAME] ";
$locale['global_454'] = "Cuenta reactivada en [SITENAME]";
$locale['global_455'] = "Hola USER_NAME, \n
La última vez que ingresaste tu cuenta se reactivó en [SITEURL] y tu cuenta ya no está marcada como inactiva. \n \n
Recuerdos, \n [SITEUSERNAME] ";
$locale['global_456'] = "Nueva notificación de contraseña para [SITENAME]";
$locale['global_457'] = "Hola USER_NAME,
 \n \n Se ha establecido una nueva contraseña para su cuenta en [SITENAME]. Encuentre los nuevos detalles de acceso incluidos: \n \n
Nombre de usuario: USER_NAME \n Contraseña: [PASSWORD] \n \n Saludos, \n [SITEUSERNAME] ";
$locale['global_458'] = "Se ha establecido una nueva contraseña para USER_NAME";
$locale['global_459'] = "Se ha establecido una nueva contraseña para USER_NAME y no se ha enviado correo electrónico. Asegúrese de informar al usuario de los nuevos detalles.";
// Funcion parsebytesize ()
$locale['global_460'] = "Vacío";
$locale['global_461'] = "Bytes";
$locale['global_462'] = "KB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "Espera... Estás siendo redirigido a %s. Si no eres redirigido, pulsa aquí.";
// Captcha Locales
$locale['global_600'] = "Código de Validación";
$locale['global_601'] = "Debe introducir un código de validación correcto";
$locale['recaptcha'] = "es";
// Site links
$locale['global_700'] = "Mostrar más";
//Miscellaneous
$locale['global_900'] = "No se puede convertir HEX a DEC";
$locale['global_901'] = "Insertar medios";
//Language Selection
$locale['global_ML100'] = "Idioma:";
$locale['global_ML101'] = "- Seleccione Idioma -";
$locale['global_ML102'] = "idioma del sitio";
$locale['global_ML103'] = "Cambiar idioma";
// Flood Control
$locale['flood'] = "Se le prohibirá a publicar hasta que el período de tiempo de reutilización de inundación ha terminado. Por favor, espere a que %t";
$locale['no_image'] = "No Imagen";
$locale['send_message'] = "Enviar mensaje";
$locale['go_profile'] = "Ir a %s Página de perfil";
// Global one word locales
$locale['hello'] = "Hola!";
$locale['goodbye'] = "¡Adiós!";
$locale['welcome'] = "Bienvenido de vuelta";
$locale['home'] = "Inicio";
// Status
$locale['error'] = "Error!";
$locale['success'] = "éxito!";
$locale['enable'] = "Habilitar";
$locale['disable'] = "Desactivar";
$locale['can'] = "puede";
$locale['cannot'] = "no puede";
$locale['no'] = "No";
$locale['yes'] = "Sí";
$locale['off'] = "Off";
$locale['on'] = "On";
$locale['or'] = "o";
$locale['by'] = "por";
$locale['in'] = "en";
$locale['of'] = "de";
$locale['and'] = "y";
$locale['na'] = "No disponible";
$locale['joined'] = "Registrado desde: ";
// Navigation
$locale['next'] = "Siguiente";
$locale['previous'] = "Anterior";
$locale['back'] = "Atrás";
$locale['forward'] = "Adelante";
$locale['go'] = "Ir";
$locale['cancel'] = "Cancelar";
$locale['clear'] = "Claro";
$locale['move'] = "Mover";
$locale['move_up'] = "Mover arriba";
$locale['move_down'] = "Mover abajo";
$locale['load_more'] = "Cargar más artículos";
$locale['load_end'] = "Cargar desde Comienzo";
// Actions
$locale['add'] = "Añadir";
$locale['save'] = "Guardar";
$locale['save_changes'] = "Guardar Cambios";
$locale['save_and_close'] = "Guardar y Salir";
$locale['confirm'] = "Confirmar";
$locale['update'] = "Actualización";
$locale['updated'] = "Actualizado";
$locale['remove'] = "Eliminar";
$locale['delete'] = "Borrar";
$locale['search'] = "Buscar";
$locale['help'] = "Ayuda";
$locale['register'] = "Registro";
$locale['ban'] = "Prohibición";
$locale['reactivate'] = "Reactivar";
$locale['user'] = "Usuario";
$locale['promote'] = "Promover";
$locale['show'] = "Mostrar";
$locale['actions'] = "Acciones";
$locale['language'] = "Idioma";
// Persons & Identifiers
$locale['you'] = "Tú";
$locale['me'] = "Yo";
$locale['they'] = "Ellos";
$locale['we'] = "Nosotras";
$locale['us'] = "Nos";
$locale['he'] = "Él";
$locale['she'] = "Ella";
$locale['it'] = "Ello";
//Tables
$locale['order'] = "Orden";
$locale['sort'] = "Tipo";
$locale['id'] = "ID";
$locale['title'] = "Título";
$locale['rights'] = "Derechos";
$locale['info'] = "Información";
$locale['image'] = "Imagen";
// Forms
$locale['choose'] = "Por favor escoja uno...";
$locale['no_opts'] = "Sin selección";
$locale['root'] = "Como padre";
$locale['choose-user'] = "Por favor, elija un usuario...";
$locale['choose-location'] = "Por favor, elija una ubicación";
$locale['parent'] = "Crear como nuevo padre...";
$locale['item_order'] = "Artículo pedido";
$locale['status'] = "Estado";
$locale['note'] = "Tome nota de este artículo";
$locale['publish'] = "Publicado";
$locale['unpublish'] = "No publicados";
$locale['sticky'] = "Sticky";
$locale['unsticky'] = "Unsticky";
$locale['draft'] = "borrador";
$locale['settings'] = "Ajustes";
$locale['posted'] = "publicado";
$locale['profile'] = "Perfil";
$locale['edit'] = "Editar";
$locale['qedit'] = "Edición rápida";
$locale['view'] = "Ver";
$locale['login'] = "Iniciar sesión";
$locale['logout'] = "Cerrar sesión";
$locale['admin-logout'] = "Administrador Salir";
$locale['message'] = "Mensajes privados";
$locale['logged'] = "Conectado como ";
$locale['version'] = "Versión ";
$locale['browse'] = "Ver ...";
$locale['close'] = "Cerrar";
$locale['nopreview'] = "No hay nada para una vista previa";
$locale['mark_as'] = "Marcado como";
$locale['preview'] = "Vista previa";
$locale['custom'] = "Personalizado";
$locale['submit'] = "Enviar";
// Alignment
$locale['left'] = "Izquierda";
$locale['center'] = "Centro";
$locale['right'] = "Derecha";
// Comments and ratings
$locale['comments'] = "Comentarios";
$locale['ratings'] = "Valoraciones";
$locale['comments_ratings'] = "Comentarios y Valoraciones";
$locale['user_account'] = "Cuenta de usuario";
$locale['about'] = "Acerca de";
// User status
$locale['online'] = "En línea";
$locale['offline'] = "Fuera de línea";
// Words for formatting to single and plural forms. Count of forms is language-dependent
$locale['fmt_submission'] = "presentaciones|presentación";
$locale['fmt_article'] = "articulos|articulo";
$locale['fmt_blog'] = "blogs|blog";
$locale['fmt_comment'] = "comentarios|comentario";
$locale['fmt_vote'] = "votos|voto";
$locale['fmt_rating'] = "calificaciones|calificación";
$locale['fmt_day'] = "días|día";
$locale['fmt_download'] = "descargas|descarga";
$locale['fmt_follower'] = "seguidores|seguidor";
$locale['fmt_forum'] = "foros|foro";
$locale['fmt_guest'] = "invitados|invitado";
$locale['fmt_hour'] = "horas|hora";
$locale['fmt_item'] = "artículos|artículo";
$locale['fmt_member'] = "miembros|miembro";
$locale['fmt_message'] = "mensajes|mensajes";
$locale['fmt_minute'] = "minutos|minuto";
$locale['fmt_month'] = "meses|mes";
$locale['fmt_news'] = "noticias|noticia";
$locale['fmt_photo'] = "fotos|foto";
$locale['fmt_post'] = "mensajes|mensaje";
$locale['fmt_question'] = "preguntas|pregunta";
$locale['fmt_read'] = "leén|lee";
$locale['fmt_second'] = "segundos|segundo";
$locale['fmt_shouts'] = "mensajes|mensaje";
$locale['fmt_thread'] = "Temas|Tema";
$locale['fmt_user'] = "usuarios|usuario";
$locale['fmt_views'] = "vistas|vista";
$locale['fmt_weblink'] = "enlaces|enlace";
$locale['fmt_week'] = "semanas|semana";
$locale['fmt_year'] = "años|año";
$locale['fmt_points'] = "puntos|punto";
$locale['fmt_admin'] = "admins|admin";
$locale['fmt_group'] = "grupos|grupo";
$locale['fmt_category'] = "categorías|categoría";
// include Defender locales
include_once __DIR__."/defender.php";
