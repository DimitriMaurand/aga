<?php

function chargerClasse($classe)
{
    $classe = str_replace("src", "", $classe);
    $classe = str_replace("\\", "/", $classe);
    $fichier = $classe . '.php';
    if (file_exists(__DIR__ . $fichier)) {
        require_once(__DIR__ . $fichier);
    } else {
        throw new Exception("La classe $classe n'a pas été trouvée.");
    }
}

spl_autoload_register("chargerClasse");
