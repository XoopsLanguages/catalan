<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: ca

define('_MD_DEBUGBAR_DEBUG', 'Depuració');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'Fitxers inclosos');
define('_MD_DEBUGBAR_PHP_VERSION', 'Versió PHP');
define('_MD_DEBUGBAR_NONE', 'Cap');
define('_MD_DEBUGBAR_ERRORS', 'Errors');
define('_MD_DEBUGBAR_DEPRECATED', 'Obsolet');
define('_MD_DEBUGBAR_QUERIES', 'Consultes');
define('_MD_DEBUGBAR_BLOCKS', 'Blocs');
define('_MD_DEBUGBAR_EXTRA', 'Extra
Icones');
define('_MD_DEBUGBAR_TIMERS', 'Temporitzadors');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s ha trigat %s segons a carregar.');
define('_MD_DEBUGBAR_TOTAL', 'Total');
define('_MD_DEBUGBAR_NOT_CACHED', 'No desat a la caché');
define('_MD_DEBUGBAR_CACHED', 'A la caché (es regenera cada %s segons)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(cadena buida)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool TRUE');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool FALSE');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Consultes a la base de dades');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Ús de memòria');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d consultes');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d duplicats)');
define('_MD_DEBUGBAR_BYTES', '%s bytes');
define('_MD_DEBUGBAR_DB_VERSION', '%s versió');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- Número d\'error: %s Missatge d\'error: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Error #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'Excepció');
define('_MD_DEBUGBAR_RAY_QUERY', 'Consulta #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'LENT');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Bloqueig (%ds en memòria cau)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Bloc (no emmagatzemat en memòria cau)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Bolcat');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Context de la plantilla');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(sense variables de plantilla)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d vars)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'No s\'ha creat el directori "modules/debugbar/%s".');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'No s\'ha pogut crear el directori "%s" durant la còpia de recursos');
