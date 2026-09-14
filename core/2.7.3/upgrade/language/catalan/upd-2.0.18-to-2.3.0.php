<?php
// _LANGCODE: ca
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'Rutes físiques de XOOPS');
define('LEGEND_DATABASE', 'Conjunt de caràcters de la base de dades');

define('XOOPS_LIB_PATH_LABEL', 'XOOPS directori de la biblioteca');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS directori de fitxers de dades');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS datafiles (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');

define('DB_COLLATION_LABEL', 'Conjunt de caràcters i intercalació de la base de dades');
define('DB_COLLATION_HELP', "A partir de 4.12 MySQL admet conjunts de caràcters personalitzats i intercalació. Tanmateix, és més complex del que s'esperava, així que NO feu cap canvi tret que tingueu confiança en la vostra elecció.");
define('DB_COLLATION_NOCHANGE', 'No canvieu');

define('XOOPS_PATH_FOUND', 'S\'ha trobat el camí.');
define('ERR_COULD_NOT_ACCESS', 'No s\'ha pogut accedir a la carpeta especificada. Si us plau, verifiqueu que existeix i que el servidor pugui llegir-lo.');
define('CHECKING_PERMISSIONS', 'Comprovant els permisos de fitxers i directoris...');
define('ERR_NEED_WRITE_ACCESS', 'El servidor ha de tenir accés d\'escriptura als fitxers i carpeta següents<br> (és a dir, <em>nom_directori__chmod 777</em> en un servidor UNIX/LINUX)');
define('IS_NOT_WRITABLE', '%s NO es pot escriure.');
define('IS_WRITABLE', '%s es pot escriure.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'S\'ha produït un error en escriure contingut a mainfile.php, escriu el contingut a mainfile.php manualment.');
