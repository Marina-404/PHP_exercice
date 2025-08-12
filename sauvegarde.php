<?php

// tableau php
$cours = [
    ["nom" => "PHP", "heures" => 5, "niveau" => "debutant"],
    ["nom" => "HTML", "heures" => 100, "niveau" => "maitrise"],
];

// convertir php en json standard
$json_data = json_encode($cours, JSON_PRETTY_PRINT);

// ecrire dans un fichier 
file_put_contents("mes_cours.json", $json_data);

echo "Données sauvegardées :";
echo "$json_data";

// relire depuis le fichier
$data_lue = file_get_contents("mes_cours.json");

// text json en tableau php
$cours_recharges = json_decode($data_lue, true);

echo "Données rechargées : ";
foreach ($cours_recharges as $cours) {
    echo "{$cours["nom"]} : {$cours["heures"]}";
}


// json_encode : convertir PHP en TEXT json universel
// JSON_PRETTY_PRINT : rend lisible
// file_put_contents : ecrire dans un fichier un genre "enregistré sous"
// file_get_contents : comme "ouvrir" un fichier
// json_decode : conertir TEXT en PHP