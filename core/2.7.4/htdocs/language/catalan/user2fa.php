<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', 'Segon pas');
define('_US_2FA_PROMPT', 'Introduïu el codi de la vostra aplicació d\'autenticació');
define('_US_2FA_CODE', 'Codi d\'autenticació');
define('_US_2FA_PROMPT_EMAIL', 'Us hem enviat un codi de sis xifres a %s. Introduïu-lo a continuació.');
define('_US_2FA_CODE_EMAIL', 'Codi del vostre correu electrònic');
define('_US_2FA_SEND', 'Envia un nou codi');
define('_US_2FA_SENT', 'S\'ha enviat un nou codi a %s. És vàlid durant deu minuts.');
define('_US_2FA_SEND_WAIT', 'S\'ha enviat un codi fa menys d\'un minut. Comproveu la safata d\'entrada i la carpeta de correu brossa abans de sol·licitar-ne un altre.');
define('_US_2FA_SEND_FAILED', 'No s\'ha pogut enviar el codi en aquest moment. Torneu-ho a provar d\'aquí a una estona, o utilitzeu un codi de recuperació.');
define('_US_2FA_EMAIL_SUBJECT', '%s: el vostre codi d\'inici de sessió');
define('_US_2FA_EMAIL_BODY', 'El vostre codi d\'inici de sessió per a %s és:

%s

És vàlid durant %d minuts i funciona una sola vegada. Si no l\'heu sol·licitat, ignoreu aquest missatge i considereu canviar la contrasenya.');
define('_US_2FA_RECOVERY', 'Utilitza un codi de recuperació en el seu lloc');
define('_US_2FA_RECOVERY_HINT', 'Cada codi de recuperació funciona una sola vegada. En utilitzar-ne un, se us envia un correu electrònic.');
define('_US_2FA_SUBMIT', 'Continua');
define('_US_2FA_STARTAGAIN', 'Aquest inici de sessió ha caducat o s\'ha interromput. Comenceu de nou.');
define('_US_2FA_BACKTOLOGIN', 'Torna al formulari d\'inici de sessió');
define('_US_2FA_BADCODE', 'Aquest codi no s\'ha acceptat.');
define('_US_2FA_LOCKED', 'Massa intents. El segon pas està bloquejat durant quinze minuts; un codi de recuperació encara funciona.');
define('_US_2FA_UNAVAILABLE', 'El segon pas no està disponible en aquest moment. Un codi de recuperació encara funciona, o contacteu amb l\'administrador del lloc.');
define('_US_2FA_REQUIRED', 'Aquest compte té l\'autenticació de dos factors activada. Inicieu la sessió a través de la pàgina d\'inici de sessió del lloc.');
define('_US_2FA_HTTP_LOGIN', 'Aquesta finestra emergent no pot completar un inici de sessió de dos factors per HTTP perquè la contrasenya s\'enviaria sense xifrar. Utilitzeu l\'inici de sessió del lloc, o demaneu a l\'administrador que activi HTTPS per al lloc.');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: segon pas bloquejat');
define('_US_2FA_LOCKED_MAIL_BODY', 'S\'han introduït cinc codis de segon pas incorrectes per al vostre compte a %s des de %s. El segon pas està bloquejat durant quinze minuts. Si no heu estat vós, canvieu la contrasenya.');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: s\'ha utilitzat un codi de recuperació');
define('_US_2FA_RECOVERY_MAIL_BODY', 'S\'ha utilitzat un codi de recuperació per iniciar sessió al vostre compte a %s des de %s. Aquest codi ja no funciona. Si no heu estat vós, canvieu la contrasenya i reinicieu els vostres codis de recuperació.');
