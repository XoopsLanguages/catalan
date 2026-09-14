<?php

// _LANGCODE: ca
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Migració Smarty4');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Resultats de l\'escàner');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Executeu l\'escaneig');
define('_XOOPS_SMARTY4_SCANNER_END', 'Surt de l\'escàner');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Regla');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Partit');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Fitxer');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Recompte de correccions');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Cal una revisió manual');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'Es pot corregir automàticament: es canviarà el nom de cada variable d\'element afegint "_item" (per exemple, "foo" es converteix en "foo_item").');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'No es pot escriure');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Torna a escanejar les opcions');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Feu clic a la casella de selecció "Sí" de sota i, a continuació, feu clic al botó Executar l\'escaneig per intentar solucionar automàticament els problemes trobats.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Marcar com a complet');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Directori de plantilles (opcional)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Extensió de plantilla (opcional)');


define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 introdueix un canvi important: Smarty 4</h3>

<p>Malauradament, aquest canvi pot alterar alguns temes més antics. Per tant, abans de continuar amb l'actualització, assegureu-vos de seguir aquests passos:

<li>Executeu preflight.php per comprovar si hi ha temes o plantilles de mòduls obsolets.</li>
<li>Si s'identifiquen problemes, consulteu aquest document per entendre les modificacions necessàries abans de continuar amb l'actualització.</li>
<li>Després de fer els canvis necessaris, torneu a executar preflight.php.</li>
<li>Si no hi ha més problemes, podeu començar el procés d'actualització.</li>
</p>
EOT,
);
