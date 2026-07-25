<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: ca

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'Informe d\'errors i anàlisi de rendiment amb PHP DebugBar');

define('_MI_DEBUGBAR_ENABLE', 'Mostra DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Activa Debug de Smarty');
define('_MI_DEBUGBAR_FILESDEBUG', 'Activa la pestanya de fitxers inclosos');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'Mostra tots els fitxers PHP carregats durant la sol·licitud');
define('_MI_DEBUGBAR_SLOWQUERY', 'Llindar de consulta lenta (segons)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'Les consultes més lentes es ressalten en vermell (p. ex. 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Registre de consultes');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Totes les consultes mostrades, o només les lentes i errors');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Totes les consultes');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Només lentes i errors');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Activa la integració Ray');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Envia dades de depuració a l\'app Ray');

define('_MI_DEBUGBAR_ADMENU1', 'Inici');
define('_MI_DEBUGBAR_MENU_ABOUT', 'Sobre');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Tornar a l\'administració de ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Visió general');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Avís legal');
\define('_MI_DEBUGBAR_LICENSE', 'Llicència');
\define('_MI_DEBUGBAR_SUPPORT', 'Suport');
