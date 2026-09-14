<?php
//
// _LANGCODE: ca
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= "<h3>El vostre lloc</h3>
<p>Ara podeu accedir a <a href='../index.php'>pàgina d'inici del vostre lloc</a>.</p>
<h3>Suport</h3>
<p>Visita <a href='https://xoops.org/' rel='external'>El projecte XOOPS</a></p>
<p><strong>ATENCIÓ:</strong> El vostre lloc conté actualment la funcionalitat mínima. 
Si us plau, visiteu <a href='https://xoops.org/' rel='external' title='XOOPS Web Application System'>xoops.org</a> 
per obtenir més informació sobre com estendre XOOPS per presentar pàgines de text, galeries de fotos, fòrums i molt més, 
amb <em>mòduls</em> així com personalitzar l'aspecte del teu XOOPS amb <em>temes</em>.</p>
";

$content .= "<h3>Configuració de seguretat</h3>
<p>L'instal·lador intentarà configurar el vostre lloc per consideracions de seguretat. Si us plau, torneu a comprovar per assegurar-vos que:
<div class='confirmMsg'>
El <em>mainfile.php</em> és només de lectura.<br>
Elimina la carpeta <em>{$installer_modified}</em> (o <em>install</em> si l'instal·lador no ha canviat el nom automàticament) des del vostre servidor.
</div>
</p>
";
