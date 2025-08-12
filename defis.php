<?php
$mes_cours = [
    ["nom" => "HTML", "difficulte" => 15, "temps" => 200],
    ["nom" => "React", "difficulte" => 90, "temps" => 80],
    ["nom" => "PHP", "difficulte" => 150, "temps" => 60],
    ["nom" => "Algorithmes", "difficulte" => "difficile", "temps" => 5],

];

foreach ($mes_cours as $cours) {
    if ($cours["difficulte"] < 20) {
        $conseil = "Exercice facile";
    } elseif ($cours["difficulte"] < 100) {
        $conseil = "Exercice moyen";
    } else {
        $conseil = "Exercice difficile !";
    }
    echo "{$cours["nom"]} ({$cours["difficulte"]}h) \n";
    echo "$conseil \n";
}

$objectifs = [
    ["techno" => "HTML", "heures_actuelles" => 100, "objectif" => 100 ],
    ["techno" => "React", "heures_actuelles"=> 300, "objectif" => 320],
    ["techno" => "PHP", "heures_actuelles" => 5, "objectif" => 500],
];
$progression_totale = 0;
$nb_techno = count($objectifs);

foreach ($objectifs as $objectif) {
    $heures_restantes = $objectif["objectif"] - $objectif["heures_actuelles"];

    if ($heures_restantes <= 0) {
        $status = "objectif atteint !";
    } elseif ($heures_restantes < 20) {
        $status = "bientôt fini !";
    } elseif ($heures_restantes <= 50) {
        $status = "Parcours moyen";
    } else {
        $status = "Long parcours";
    }
    echo "Technologie :{$objectif["techno"]} \n";
    echo "Heures Restantes : $heures_restantes\n";
    echo "$status \n";
}


$difficulte_cours = [
    ["langage" => "HTML", "niveau_difficulte" => "facile", "temps" => 200],
    ["langage" => "React", "niveau_difficulte" => "difficile", "temps" => 80],
    ["langage" => "PHP", "niveau_difficulte" => "moyen", "temps" => 6],
    ["langage" => "Algorithmes", "niveau_difficulte" => "difficile", "temps" => 5],

];

foreach ($difficulte_cours as $cours) {
    if ($cours["niveau_difficulte"] == "facile" && $cours["temps"]  < 50) {
        $resultat = "Accélére le rythme !";
    } elseif ($cours["niveau_difficulte"] == "difficile" && $cours["temps"]  < 50) {
        $resultat = "Normal, continue ";
    } elseif ($cours["niveau_difficulte"] == "facile" && $cours["temps"]  >= 50) {
        $resultat = "Passe au niveau supérieur ";
    } elseif ($cours["niveau_difficulte"] == "difficile" && $cours["temps"]  >= 50) {
        $resultat = "Tu deviens expert !";
    } else {
        $resultat = "Continue sur ta lancée";
    }
}

