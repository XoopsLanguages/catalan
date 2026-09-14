<?php
/**
 * Two-factor management strings.
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

define('_US_2FAM_TITLE', 'Autenticació de dos factors');
define('_US_2FAM_PASSWORD', 'La vostra contrasenya actual');
define('_US_2FAM_ENABLE', 'Configura un autenticador');
define('_US_2FAM_CONFIRM', 'Confirma l\'autenticador');
define('_US_2FAM_CHOOSE', 'Trieu com voleu rebre el segon pas: una aplicació d\'autenticació, o un codi per correu electrònic.');
define('_US_2FAM_ENABLE_EMAIL', 'Utilitza codis per correu electrònic');
define('_US_2FAM_EMAIL_HELP', 'Codis per correu electrònic: cada vegada que inicieu sessió s\'envia un codi de sis xifres a %s. Menys segur que una aplicació d\'autenticació, perquè qualsevol que pugui llegir el vostre correu pot superar aquest pas.');
define('_US_2FAM_EMAIL_STEP', 'Us hem enviat un codi de sis xifres a %s. Introduïu-lo a continuació per confirmar-ho. És vàlid durant deu minuts.');
define('_US_2FAM_CONFIRM_EMAIL', 'Confirma els codis per correu electrònic');
define('_US_2FAM_CODE_HELP_EMAIL', 'El codi de sis xifres del correu electrònic que us acabem d\'enviar.');
define('_US_2FAM_ENABLED_EMAIL', 'Els codis per correu electrònic estan activats. Per fer un canvi, introduïu la contrasenya actual i el codi que us enviem per correu, o un codi de recuperació. Utilitzeu el botó de sota per sol·licitar un codi.');
define('_US_2FAM_SEND', 'Envia\'m un codi');
define('_US_2FAM_MANUAL', 'Clau de configuració manual');
define('_US_2FAM_SCAN', 'Codi QR per a la vostra aplicació d\'autenticació');
define('_US_2FAM_STEP_APP', 'Necessiteu un autenticador: qualsevol aplicació o gestor de contrasenyes que generi codis d\'un sol ús basats en el temps (TOTP) funcionarà, al vostre telèfon o ordinador. Si encara no en teniu cap, instal·leu primer el que preferiu (p. ex. Google Authenticator, Microsoft Authenticator, Aegis o FreeOTP).');
define('_US_2FAM_STEP_ADD', 'A l\'aplicació, afegiu un compte: escanegeu aquest codi QR, o trieu l\'entrada manual i escriviu la clau de configuració que es mostra a sota.');
define('_US_2FAM_STEP_CODE', 'L\'aplicació ara mostra un codi de sis xifres que canvia cada 30 segons. Escriviu el codi que es mostra ara mateix al camp de sota i confirmeu.');
define('_US_2FAM_CODE_HELP', 'El codi de sis xifres que mostra ara mateix la vostra aplicació d\'autenticació.');
define('_US_2FAM_HTTP', 'Aquesta connexió utilitza HTTP sense xifrar. La vostra contrasenya, sessió, clau de configuració de l\'autenticador i codis de recuperació es poden interceptar. Utilitzeu HTTPS sempre que sigui possible.');
define('_US_2FAM_CODES', 'Deseu aquests codis de recuperació ara');
define('_US_2FAM_CODES_HELP', 'Cada codi funciona una sola vegada. Aquests codis no es tornaran a mostrar. Deseu-los en un lloc segur, separat d\'aquest compte.');
define('_US_2FAM_DISABLE', 'Desactiva l\'autenticació de dos factors');
define('_US_2FAM_REGENERATE', 'Substitueix els codis de recuperació');
define('_US_2FAM_ENABLED', 'Hi ha un autenticador configurat. Introduïu la contrasenya actual i un codi d\'autenticació o de recuperació per fer un canvi.');
define('_US_2FAM_DISABLED', 'L\'autenticació de dos factors està desactivada.');
define('_US_2FAM_PAUSED', 'El lloc ha pausat els desafiaments de dos factors. El vostre factor es conserva, i l\'opció «recorda\'m» segueix no disponible per als comptes configurats.');
define('_US_2FAM_UNAVAILABLE', 'La configuració o gestió de dos factors no està disponible. Contacteu amb l\'administrador del lloc.');
define('_US_2FAM_STARTAGAIN', 'La configuració ha caducat o el compte ha canviat. Introduïu la contrasenya per tornar a començar la configuració.');
define('_US_2FAM_BADPASSWORD', 'La vostra contrasenya actual no s\'ha acceptat.');
define('_US_2FAM_RESET', 'Reinicia l\'autenticació de dos factors d\'aquest usuari');
define('_US_2FAM_STATUS_NONE', 'No configurat');
define('_US_2FAM_STATUS_TOTP', 'Aplicació d\'autenticació configurada');
define('_US_2FAM_STATUS_EMAIL', 'Codis per correu electrònic configurats');
define('_US_2FAM_STATUS_UNAVAILABLE', 'Estat no disponible');
define('_US_2FAM_RESET_HELP', 'Això desactiva el segon factor de l\'usuari, sigui quin sigui el mètode configurat, i revoca els seus codis de recuperació i galetes «recorda\'m». Les sessions ja iniciades romanen actives. Introduïu la vostra pròpia contrasenya d\'administrador per confirmar.');
define('_US_2FAM_RESET_DONE', 'S\'ha reiniciat l\'autenticació de dos factors de l\'usuari.');
define('_US_2FAM_BACK', 'Torna al compte');
define('_US_2FAM_DONE', 'L\'autenticació de dos factors està activada.');
define('_US_2FAM_REPLACED', 'Els codis de recuperació anteriors s\'han revocat.');
define('_US_2FAM_NOTICE_SUBJECT', '%s: l\'autenticació de dos factors ha canviat');
define('_US_2FAM_NOTICE_BODY', 'L\'autenticació de dos factors o els codis de recuperació del vostre compte a %s s\'han canviat des de %s. Si no heu estat vós, contacteu amb l\'administrador del lloc.');
define('_US_2FAM_RESET_SUBJECT', '%s: un administrador ha reiniciat la vostra autenticació de dos factors');
define('_US_2FAM_RESET_BODY', 'Un administrador ha desactivat el vostre segon factor i n\'ha revocat els codis de recuperació a %s des de %s. Les sessions ja iniciades romanen actives. Inicieu sessió i torneu a configurar l\'autenticació de dos factors. Contacteu amb l\'administrador del lloc si això no era esperat.');
