<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Permisos');
define('_MD_A_MYMENU_MYPREFERENCES','Preferències');
// index.php
define('_AM_TH_DATETIME', 'Hora');
define('_AM_TH_USER', 'Usuari');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', 'AGENT');
define('_AM_TH_TYPE', 'Tipus');
define('_AM_TH_DESCRIPTION', 'Descripció');
define('_AM_TH_BADIPS','IPs incorrectes<br><br><span style="font-weight:normal;">Escriu cada IP una línia<br>en blanc vol dir que totes les IP estan permeses</span>');
define('_AM_TH_GROUP1IPS','IPs permeses per al grup=1<br><br><span style="font-weight:normal;">Escriu cada IP una línia.<br>192.168. significa 192.168.*<br>blank significa que totes les IP estan permeses</span>');
define('_AM_LABEL_COMPACTLOG', 'Registre compacte');
define('_AM_BUTTON_COMPACTLOG', 'Compacta-ho!');
define('_AM_JS_COMPACTLOGCONFIRM', 'S\'eliminaran els registres duplicats (IP,Tipus).');
define('_AM_LABEL_REMOVEALL', 'Elimina tots els registres');
define('_AM_BUTTON_REMOVEALL', 'Elimina-ho tot!');
define('_AM_JS_REMOVEALLCONFIRM', 'Tots els registres s\'eliminen absolutament. Esteu realment bé?');
define('_AM_LABEL_REMOVE', 'Elimina els registres marcats:');
define('_AM_BUTTON_REMOVE', 'Elimina!');
define('_AM_JS_REMOVECONFIRM', 'Eliminar d\'acord?');
define('_AM_MSG_IPFILESUPDATED', 'S\'han actualitzat els fitxers per a les IP');
define('_AM_MSG_BADIPSCANTOPEN', 'No es pot obrir el fitxer de IP dolent');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'No es pot obrir el fitxer per permetre el grup=1');
define('_AM_MSG_REMOVED', 'Els registres han estat eliminats');
define('_AM_MSG_DELFAILED', 'No s\'han pogut suprimir els registres');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Gireu el directori de configuració que es pot escriure: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Gestor de prefixos');
define('_AM_MSG_DBUPDATED', 'Base de dades actualitzada correctament!');
define('_AM_CONFIRM_DELETE', 'S\'eliminaran totes les dades. D\'acord?');
define('_AM_TXT_HOWTOCHANGEDB',"Si voleu canviar el prefix,<br> editeu %s/data/secure.php manualment.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'No segur');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Si podeu veure una imatge -NG- o l\'enllaç torna a la pàgina normal, el vostre XOOPS_TRUST_PATH no està col·locat correctament. El millor lloc per a XOOPS_TRUST_PATH és fora de DocumentRoot. Si no podeu fer-ho, heu de posar .htaccess (DENY FROM ALL) just a sota de XOOPS_TRUST_PATH com a segona millor manera.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Comproveu que els fitxers PHP dins de TRUST_PATH estiguin configurats com a només lectura (ha de ser un error 404,403 o 500)');
define('_AM_ADV_REGISTERGLOBALS',"Si està activat, aquesta configuració convida a diversos atacs d'injecció. Si podeu, desactiveu \"register_globals\" a php.ini o, si no és possible, creeu o editeu .htaccess al vostre directori XOOPS:");
define('_AM_ADV_ALLOWURLFOPEN',"Si està activat, aquesta configuració permet als atacants executar scripts arbitraris en servidors remots.<br>Només l'administrador pot canviar aquesta opció.<br>Si sou administrador, editeu php.ini o httpd.conf.<br><b>Mostra de httpd.conf:<br> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br>Si no, reclama-ho als teus administradors.");
define('_AM_ADV_USETRANSSID',"Si està \"ACTIVAT\", el vostre ID de sessió es mostrarà a les etiquetes d'ancoratge, etc.<br>Per evitar l'enganxament de la sessió, afegiu una línia a .htaccess a XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"Aquesta configuració convida a \"Injeccions SQL\".<br>No oblideu activar \"Forçar la desinfecció *\" a les preferències d'aquest mòdul.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Aneu al gestor de prefixos');
define('_AM_ADV_MAINUNPATCHED', 'Hauríeu d\'editar el vostre fitxer principal.php tal com està escrit a README.');
define('_AM_ADV_DBFACTORYPATCHED', 'La vostra fàbrica de bases de dades està preparada per a DBLayer Trapping anti-SQL-Injection');
define('_AM_ADV_DBFACTORYUNPATCHED', 'La vostra fàbrica de bases de dades no està preparada per a DBLayer Trapping anti-SQL-Injection. Calen alguns pedaços.');
define('_AM_ADV_SUBTITLECHECK', 'Comproveu si Protector funciona bé');
define('_AM_ADV_CHECKCONTAMI', 'Contaminació');
define('_AM_ADV_CHECKISOCOM', 'Comentaris aïllats');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'i col·loqueu-hi la línia següent:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Prefix');
define('_AM_PROTECTOR_TABLES', 'Taules');
define('_AM_PROTECTOR_UPDATED', 'Actualitzat');
define('_AM_PROTECTOR_COPY', 'Copia');
define('_AM_PROTECTOR_ACTIONS', 'Accions');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Prohibeu les IP als registres comprovats:');
define('_AM_BUTTON_BAN_BY_IP', 'IP Ban!');
define('_AM_JS_BANCONFIRM', 'IP Bans d\'acord?');
define('_AM_MSG_BANNEDIP', 'Les IP estan prohibides');
define('_AM_ADMINSTATS_TITLE', 'Resum del registre de Protector');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'El mes passat');
define('_AM_ADMINSTATS_LAST_WEEK', 'La setmana passada');
define('_AM_ADMINSTATS_LAST_DAY', 'El darrer dia');
define('_AM_ADMINSTATS_LAST_HOUR', 'L\'última hora');
