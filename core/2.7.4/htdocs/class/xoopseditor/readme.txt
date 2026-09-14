xoopseditor proporciona un col·lectiu d'editors per a XOOPS

guia d'usuari:

1 comproveu els fitxers xoops_version.php a /xoopseditor/ per assegurar-vos que siguin més nous que els actuals

2 penja /xoopseditor/ a /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/class/xoopseditor/fckeditor
  XOOPS/class/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/class/xoopseditor/tinymce

3 configureu les preferències si escau
3.1 ./dhtmlext(all editors)/language/: feu que el vostre fitxer d'idioma local es basi en english.php
3.3 ./dhtmlext(tots els editors)/editor_registry.php: establir configuracions per a l'editor: order - ordre de visualització en cas que s'utilitzi la selecció de l'editor, 0 per desactivat; nohtml - funciona per a sintaxis no html
3.3 ./FCKeditor/module/: copieu els fitxers a les carpetes dels mòduls en cas que es requereixin permisos específics de càrrega, emmagatzematge i opcions d'editor.
3.3.1 ./FCKeditor/module/fckeditor.config.js: per a les opcions de l'editor, normalment no cal que el canvieu
3.3.2 ./FCKeditor/module/fckeditor.connector.php: per especificar la carpeta per a la navegació de fitxers (i l'emmagatzematge de càrrega) => XOOPS/uploads/XOOPS_FCK_FOLDER/, la carpeta és necessària per crear-la manualment
3.3.3 ./FCKeditor/module/fckeditor.upload.php: especifiqueu el permís de càrrega i l'emmagatzematge de càrrega
3.4 XOOPS/uploads/fckeditor/: per crear la carpeta si FCKeditor està habilitat, s'utilitza per a càrregues des d'on no s'especifica la carpeta de càrrega
3.5 ./tinymce/tinymce/jscripts/: baixa els teus fitxers d'idioma local des de http://tinymce.moxiecode.com/language.php

4 comproveu els noms dels fitxers: per al sistema que distingeix entre majúscules i minúscules, assegureu-vos que els noms dels fitxers són literalment correctes, és a dir, "FCKeditor" no és idèntic a "fckeditor"

5 comproveu /xoopseditor/sampleform.inc.php per a la guia de desenvolupament
