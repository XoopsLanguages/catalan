<?php

// _LANGCODE: ca
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>XOOPS Actualitzador</h2>

<p>
<em>Actualitza</em> examinarà aquesta instal·lació XOOPS i aplicarà els pedaços necessaris per fer-la compatible 
amb el nou codi XOOPS. Els pedaços poden incloure canvis a la base de dades, afegint paràmetres predeterminats per a nous
elements de configuració, actualitzacions de fitxers i dades i molt més.
<p>
Després de cada pedaç, l'actualitzador informarà de l'estat i esperarà que la vostra entrada continuï. A la
al final de l'actualització, el control passarà a la funció d'actualització del mòdul del sistema.

<div class="alert alert-warning">
Un cop completada l'actualització, no us oblideu de:
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> suprimiu la carpeta d'actualització</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> actualitzar els mòduls que hagin canviat</li>
</div>

EOT,
);
