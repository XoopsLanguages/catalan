<?php
//
// _LANGCODE: ca
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> és un codi obert
    Sistema de publicació web orientat a objectes escrit en PHP. És una eina ideal per
    desenvolupament de petits i grans llocs web dinàmics de comunitats, portals intraempresarials, portals corporatius, weblogs i molt més.
</p>
<p>
    XOOPS es publica sota els termes de la
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU Llicència pública general (GPL)</a>
    versió 2 o superior, i és gratuït d\'utilitzar i modificar.
    La redistribució és gratuïta sempre que compleixi els termes de distribució de la GPL.
</p>
<h3>Requisits</h3>
<ul>
    <li>WWW Servidor (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS, etc.)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 8.2 o superior, 8.4+ recomanat</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7.8 o superior, 8.4.5+ recomanat </li>
</ul>
<h3>Abans de tu install</h3>
<ol>
    <li>Configura correctament el servidor WWW, PHP i el servidor de bases de dades.</li>
    <li>Prepareu una base de dades per al vostre lloc XOOPS.</li>
    <li>Prepareu el compte d\'usuari i concediu l\'accés a la base de dades.</li>
    <li>Feu que aquests directoris i fitxers siguin escrivibles: %s</li>
    <li>Per consideracions de seguretat, us recomanem molt que tregueu els dos directoris següents <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">arrel del document</a> i canvieu els noms de les carpetes: %s</li>
    <li>Creeu (si encara no hi ha) i feu que aquests directoris es puguin escriure: %s</li>
    <li>Activa la galeta i JavaScript del teu navegador.</li>
</ol>
<h3>Notes especials</h3>
<ol>
    <li>Algunes combinacions específiques de programari del sistema poden requerir algunes configuracions addicionals per funcionar
    amb XOOPS. Si algun d\'aquests temes s\'aplica al vostre entorn, consulteu-lo sencer
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS
    manual d\'instal·lació</a> per a més informació.<br><br>

    <li><strong>SELinux</strong> sistemes habilitats (com ara <strong>CentOS</strong>  i <strong>RHEL</strong>) pot requerir canvis en el context de seguretat
    per als directoris XOOPS a més dels permisos de fitxers normals per fer que els directoris es puguin escriure.
    Consulteu la documentació del vostre sistema i/o l\'administrador de sistemes.
</ol>
';

return $content;

