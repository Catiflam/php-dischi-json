<?php


// LEGGO IL JSON
$string = file_get_contents('../data/dischi_json.json');


// AVVISO IL BROWSER CHE STO INVIANDO DEL CONTENUTO DI TIPO JSON
header('Content-Type: application/json');

// LO STAMPO
echo $string;
?>