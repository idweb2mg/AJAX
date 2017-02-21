<?php
$mysqli = new Mysqli('localhost',  'root', '','contenu_editable')  ;
$mysqli -> set_charset("utf8")  ; // contenu de la BDD en utf8 EN base de donnée, à la crétion de la base, prendre Interclassement=ut8_general_ci