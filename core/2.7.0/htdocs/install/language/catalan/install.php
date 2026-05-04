<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: ca
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Mostra/amaga el text d\'ajuda');
// License
//define('LICENSE_NOT_WRITEABLE', 'El fitxer de llicència "%s" NO es pot escriure!');
//define('LICENSE_IS_WRITEABLE', '%s La llicència es pot escriure.');
// Configuration check page
define('SERVER_API', 'API del servidor');
define('PHP_EXTENSION', '%s extensió');
define('CHAR_ENCODING', 'Codificació de caràcters');
define('XML_PARSING', 'Anàlisi XML');
define('REQUIREMENTS', 'Requisits');
define('_PHP_VERSION', 'Versió PHP');
define('RECOMMENDED_SETTINGS', 'Configuració recomanada');
define('RECOMMENDED_EXTENSIONS', 'Extensions recomanades');
define('SETTING_NAME', 'Nom de la configuració');
define('RECOMMENDED', 'Recomanat');
define('CURRENT', 'Actual');
define('RECOMMENDED_EXTENSIONS_MSG', 'Aquestes extensions no són necessàries per a un ús normal, però poden ser necessàries per explorar
 algunes característiques específiques (com ara el suport multi-idioma o RSS). Per tant, es recomana tenir-los instal·lats.');
define('NONE', 'Cap');
define('SUCCESS', 'Èxit');
define('WARNING', 'Avís');
define('FAILED', 'Fallit');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'Assistent d\'instal·lació de XOOPS');
define('LANGUAGE_SELECTION', 'Selecció d\'idioma');
define('LANGUAGE_SELECTION_TITLE', 'Seleccioneu el vostre idioma');        // L128
define('INTRODUCTION', 'Introducció');
define('INTRODUCTION_TITLE', 'Benvingut a l\'Assistent d\'instal·lació de XOOPS');        // L0
define('CONFIGURATION_CHECK', 'Comprovació de la configuració');
define('CONFIGURATION_CHECK_TITLE', 'Comprovació de la configuració del servidor');
define('PATHS_SETTINGS', 'Configuració de rutes');
define('PATHS_SETTINGS_TITLE', 'Configuració de rutes');
define('DATABASE_CONNECTION', 'Connexió a la base de dades');
define('DATABASE_CONNECTION_TITLE', 'Connexió a la base de dades');
define('DATABASE_CONFIG', 'Configuració de la base de dades');
define('DATABASE_CONFIG_TITLE', 'Configuració de la base de dades');
define('CONFIG_SAVE', 'Desar la configuració');
define('CONFIG_SAVE_TITLE', 'Desant la configuració del sistema');
define('TABLES_CREATION', 'Creació de taules');
define('TABLES_CREATION_TITLE', 'Creació de taules de base de dades');
define('INITIAL_SETTINGS', 'Configuració inicial');
define('INITIAL_SETTINGS_TITLE', 'Introduïu la vostra configuració inicial');
define('DATA_INSERTION', 'Inserció de dades');
define('DATA_INSERTION_TITLE', 'Desant la configuració a la base de dades');
define('WELCOME', 'Benvingut');
define('WELCOME_TITLE', 'Benvingut al vostre lloc XOOPS');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'Rutes físiques de XOOPS');
define('XOOPS_URLS', 'Ubicacions web');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS documenta la ruta física arrel');
define('XOOPS_ROOT_PATH_HELP', 'Ruta física al directori de documents XOOPS (publicats) SENSE barra inclinada final');
define('XOOPS_LIB_PATH_LABEL', 'XOOPS directori de la biblioteca');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS directori de fitxers de dades');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_URL_LABEL', 'Ubicació del lloc web (URL)'); // L56
define('XOOPS_URL_HELP', 'URL principal que s\'utilitzarà per accedir a la vostra instal·lació XOOPS'); // L58
define('LEGEND_CONNECTION', 'Connexió al servidor');
define('LEGEND_DATABASE', 'Base de dades'); // L51
define('DB_HOST_LABEL', 'Nom d\'amfitrió del servidor');    // L27
define('DB_HOST_HELP', 'Nom d\'amfitrió del servidor de base de dades. Si no esteu segur, <em>localhost</em> funciona en la majoria dels casos'); // L67
define('DB_USER_LABEL', 'Nom d\'usuari');    // L28
define('DB_USER_HELP', 'Nom del compte d\'usuari que s\'utilitzarà per connectar-se al servidor de bases de dades'); // L65
define('DB_PASS_LABEL', 'Contrasenya');    // L52
define('DB_PASS_HELP', 'Contrasenya del vostre compte d\'usuari de la base de dades'); // L68
define('DB_NAME_LABEL', 'Nom de la base de dades');    // L29
define('DB_NAME_HELP', 'El nom de la base de dades a l\'amfitrió. L\'instal·lador intentarà crear la base de dades si no existeix'); // L64
define('DB_CHARSET_LABEL', 'Joc de caràcters de la base de dades');
define('DB_CHARSET_HELP', 'MySQL inclou suport de jocs de caràcters que us permet emmagatzemar dades mitjançant una varietat de jocs de caràcters i realitzar comparacions segons una varietat de col·lacions.');
define('DB_COLLATION_LABEL', 'Col·lació de la base de dades');
define('DB_COLLATION_HELP', 'Una col·lació és un conjunt de regles per comparar caràcters d\'un conjunt de caràcters.');
define('DB_PREFIX_LABEL', 'Prefix de la taula');    // L30
define('DB_PREFIX_HELP', 'Aquest prefix s\'afegirà a totes les taules noves creades per evitar conflictes de noms a la base de dades. Si no esteu segur, només heu de mantenir el valor predeterminat'); // L63
define('DB_PCONNECT_LABEL', 'Usar connexió persistent');    // L54
define('DB_PCONNECT_HELP', "El valor per defecte és \"No\". Deixeu-lo en blanc si no esteu segurs"); // L69
define('DB_DATABASE_LABEL', 'Base de dades');
define('LEGEND_ADMIN_ACCOUNT', 'Compte d\'administrador');
define('ADMIN_LOGIN_LABEL', 'Inici de sessió d\'administrador'); // L37
define('ADMIN_EMAIL_LABEL', 'Correu electrònic de l\'administrador'); // L38
define('ADMIN_PASS_LABEL', 'Contrasenya d\'administrador'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Confirmar la contrasenya'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'Anterior'); // L42
define('BUTTON_NEXT', 'Continuar'); // L47
// Messages
define('XOOPS_FOUND', '%s trobat');
define('CHECKING_PERMISSIONS', 'Comprovant els permisos de fitxers i directoris...'); // L82
define('IS_NOT_WRITABLE', '%s NO es pot escriure.'); // L83
define('IS_WRITABLE', '%s es pot escriure.'); // L84
define('XOOPS_PATH_FOUND', 'S\'ha trobat el camí.');
//define('READY_CREATE_TABLES', 'No s\'han detectat taules XOOPS.<br>L\'instal·lador ja està preparat per crear les taules del sistema XOOPS.');
define('XOOPS_TABLES_FOUND', 'Les taules del sistema XOOPS ja existeixen a la vostra base de dades.'); // L131
define('XOOPS_TABLES_CREATED', 'XOOPS.');
//define('READY_INSERT_DATA', 'L\'instal·lador ja està preparat per inserir les dades inicials a la vostra base de dades.');
//define('READY_SAVE_MAINFILE', 'L\'instal·lador ja està preparat per desar la configuració especificada a <em>mainfile.php</em>.');
define('SAVED_MAINFILE', 'Configuració desada');
define('SAVED_MAINFILE_MSG', 'L\'instal·lador ha desat la configuració especificada a <em>mainfile.php</em> i <em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'XOOPS dades trobades a la base de dades.');
define('DATA_INSERTED', 'Les dades inicials s\'han inserit a la base de dades.');
// %s is database name
define('DATABASE_CREATED', 'S\'ha creat la base de dades %s!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'No es pot crear la taula %s'); // L118
define('TABLE_CREATED', 'S\'ha creat la taula %s.'); // L45
define('ROWS_INSERTED', '%d entrades inserides a la taula %s.'); // L119
define('ROWS_FAILED', 'No s\'han pogut inserir les entrades %d a la taula %s.'); // L120
define('TABLE_ALTERED', 'Taula %s actualitzada.'); // L133
define('TABLE_NOT_ALTERED', 'No s\'ha pogut actualitzar la taula %s.'); // L134
define('TABLE_DROPPED', 'S\'ha caigut la taula %s.'); // L163
define('TABLE_NOT_DROPPED', 'No s\'ha pogut suprimir la taula %s.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'No s\'ha pogut accedir a la carpeta especificada. Si us plau, verifiqueu que existeix i que el servidor pugui llegir-lo.');
define('ERR_NO_XOOPS_FOUND', 'No s\'ha pogut trobar cap instal·lació de XOOPS a la carpeta especificada.');
define('ERR_INVALID_EMAIL', 'Correu electrònic no vàlid'); // L73
define('ERR_REQUIRED', 'La informació és obligatòria.'); // L41
define('ERR_PASSWORD_MATCH', 'Les dues contrasenyes no coincideixen');
define('ERR_NEED_WRITE_ACCESS', 'S\'ha de donar accés d\'escriptura al servidor als fitxers i carpetes següents<br> (és a dir, <em>chmod 775 directory_name</em> en un servidor UNIX/LINUX)<br>Si no estan disponibles o no es creen correctament, creeu manualment i configureu els permisos adequats.');
define('ERR_NO_DATABASE', 'No s\'ha pogut crear la base de dades. Contacteu amb l\'administrador del servidor per obtenir més informació.'); // L31
define('ERR_NO_DBCONNECTION', 'No s\'ha pogut connectar amb el servidor de base de dades.'); // L106
define('ERR_WRITING_CONSTANT', 'No s\'ha pogut escriure la constant %s.'); // L122
define('ERR_COPY_MAINFILE', 'No s\'ha pogut copiar el fitxer de distribució a %s');
define('ERR_WRITE_MAINFILE', 'No s\'ha pogut escriure a %s. Comproveu el permís del fitxer i torneu-ho a provar.');
define('ERR_READ_MAINFILE', 'No s\'ha pogut obrir %s per llegir-lo');
define('ERR_INVALID_DBCHARSET', "El conjunt de caràcters '%s' no és compatible.");
define('ERR_INVALID_DBCOLLATION', "La intercalació '%s' no és compatible.");
define('ERR_CHARSET_NOT_SET', 'El conjunt de caràcters predeterminat no està establert per a la base de dades XOOPS.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Suport');
define('LOGIN', 'Autenticació');
define('LOGIN_TITLE', 'Autenticació');
define('USER_LOGIN', 'Inici de sessió d\'administrador');
define('USERNAME', 'Nom d\'usuari:');
define('PASSWORD', 'Contrasenya :');
define('ICONV_CONVERSION', 'Conversió del joc de caràcters');
define('ZLIB_COMPRESSION', 'Compressió Zlib');
define('IMAGE_FUNCTIONS', 'Funcions d\'imatge');
define('IMAGE_METAS', 'Metadades de la imatge (exif)');
define('FILTER_FUNCTIONS', 'Funcions de filtre');
define('ADMIN_EXIST', 'El compte d\'administrador ja existeix.');
define('CONFIG_SITE', 'Configuració del lloc');
define('CONFIG_SITE_TITLE', 'Configuració del lloc');
define('MODULES', 'Instal·lació de mòduls');
define('MODULES_TITLE', 'Instal·lació de mòduls');
define('THEME', 'Selecciona un tema');
define('THEME_TITLE', 'Seleccioneu el tema predeterminat');
define('INSTALLED_MODULES', 'S\'han instal·lat els mòduls següents.');
define('NO_MODULES_FOUND', 'No s\'han trobat mòduls.');
define('NO_INSTALLED_MODULES', 'No s\'ha instal·lat cap mòdul.');
define('THEME_NO_SCREENSHOT', 'No s\'ha trobat cap captura de pantalla');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'Fortalesa de la contrasenya');
define('PASSWORD_DESC', 'La contrasenya no s\'ha introduït');
define('PASSWORD_GENERATOR', 'Generador de contrasenyes');
define('PASSWORD_GENERATE', 'Generar');
define('PASSWORD_COPY', 'Copia');
define('PASSWORD_VERY_WEAK', 'Molt feble');
define('PASSWORD_WEAK', 'Feble');
define('PASSWORD_BETTER', 'Millor');
define('PASSWORD_MEDIUM', 'Mitjà');
define('PASSWORD_STRONG', 'Forta');
define('PASSWORD_STRONGEST', 'Més forta');
//2.5.7
define('WRITTEN_LICENSE', 'Va escriure XOOPS %s Clau de llicència: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Reintenta');
define('CHMOD_CHGRP_IGNORE', 'Utilitza igualment');
define('CHMOD_CHGRP_ERROR', 'És possible que l\'instal·lador no pugui escriure el fitxer de configuració %1$s.<p>PHP està escrivint fitxers amb l\'usuari %2$s i el grup %3$s.<p>El directori %4$s/ té l\'usuari %5$s i el grup %6$s');
//2.5.9
define("CURL_HTTP", "Client URL Biblioteca (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Domini de galetes per al lloc web');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Domini per configurar galetes. Pot estar en blanc, l\'amfitrió complet de URL (www.example.com) o el domini registrat sense subdominis (example.com) per compartir entre subdominis (www.example.com i blog.example.com).');
define('INTL_SUPPORT', 'Funcions d\'internacionalització');
define('XOOPS_SOURCE_CODE', "XOOPS a GitHub");
define('XOOPS_INSTALLING', 'Instal·lant');
define('XOOPS_ERROR_ENCOUNTERED', 'Error');
define('XOOPS_ERROR_SEE_BELOW', 'Vegeu a continuació els missatges.');
define('MODULES_AVAILABLE', 'Mòduls disponibles');
define('INSTALL_THIS_MODULE', 'Afegiu %s');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'No s\'ha pogut copiar el fitxer de configuració %s');
//2.7.0
// website name and slogan
define('_WEBSITE_NAME', 'XOOPS Lloc');
define('_WEBSITE_SLOGAN', 'Només cal utilitzar-lo!');
define('_WEBSITE_META_KEYWORDS', 'xoops, marc d\'aplicacions web, cms, sistema de gestió de continguts');
define('_WEBSITE_FOOTER', "Desenvolupat per XOOPS © 2001-{X_YEAR} <a href='https://xoops.org' rel='external' title='The XOOPS Project'>El projecte XOOPS</a>");
define('_WEBSITE_COPYRIGHT', 'Copyright © 2001-{X_YEAR}');
define('_WEBSITE_DESCRIPTION', 'XOOPS és un script de portal de codi obert dinàmic orientat a objectes escrit en PHP.');
define('_WEBSITE_CENSOR_REPLACE', 'OOPS');
