<?php

$file = __DIR__ . '/../vendor/knuckleswtf/scribe/camel/Output/OutputEndpointData.php';

if (!file_exists($file)) {
    echo "Archivo de Scribe no encontrado. ¿Está instalado?\n";
    exit(0);
}

$contents = file_get_contents($file);

// Línea original que causa error
$search = 'if ($finalParameters["[]"]["example"][0] == [] && !empty($cleanParameters)) {';

// Línea corregida
$replace = 'if (isset($finalParameters["[]"]["example"][0]) 
    && $finalParameters["[]"]["example"][0] == [] 
    && !empty($cleanParameters)) {';

if (strpos($contents, $search) !== false) {
    $contents = str_replace($search, $replace, $contents);
    file_put_contents($file, $contents);
    echo "Parche aplicado a OutputEndpointData.php\n";
} else {
    echo "No se encontró la línea a reemplazar (quizás ya está parcheado o cambió la versión).\n";
}
