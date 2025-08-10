<?php

$apprentissage = [
    ["sujet" => "HTML/CSS", "temps_total" => 200, "niveau" => "maîtrisé", "difficulté" => "facile", "derniere_session" => "20/03/2025"],
    ["sujet" => "JavaScript", "temps_total" => 80, "niveau" => "débutant", "difficulté" => "moyenne/difficile", "derniere_session" => "15/04/2025"],
    ["sujet" => "React", "temps_total" => 800, "niveau" => "moyen", "difficulté" => "moyenne", "derniere_session" => "03/08/2025"],
    ["sujet" => "PHP", "temps_total" => 6, "niveau" => "découverte", "difficulté" => "moyenne", "derniere_session" => "10/08/2025"],
    ["sujet" => "Symfony", "temps_total" => 0, "niveau" => "pas commencé", "difficulté" => "?", "derniere_session" => ""],
];

echo "<h1>Mon Tracker d'apprentissage Dev</h1>";

foreach ($apprentissage as $cours) {
    if ($cours["niveau"] === "maîtrisé") {
        $couleur = "green";
        $emoji = "🏆";
    } elseif ($cours["niveau"] === "moyenne") {
        $couleur = "orange";
        $emoji = "📖";
    } elseif ($cours["niveau"] === "débutant") {
        $couleur = "red";
        $emoji = "📖";
    } elseif ($cours["niveau"] === "découverte") {
        $couleur = "blue";
        $emoji = "🔍";
    } else {
        $couleur = "gray";
        $emoji = "⏳";
    }

    echo "<div style='border: 2px solid $couleur; padding: 15px; margin: 15px 0; border-radius: 8px;'>";
    echo "<h3>$emoji {$cours["sujet"]} </h3>";
    echo "<p>Temps investi : {$cours["temps_total"]} </p>";
    echo "<p>Niveau : <span style='color: $couleur; font-weight: bold;'>{$cours["niveau"]}</span></p>";
    echo "<p>Difficulté : {$cours["difficulté"]}</p>";

    if ($cours["derniere_session"]) {
        echo "<p>Derniere session : {$cours["derniere_session"]}</p>";
    } else {
        echo "<p>pas encore commencé</p>";
    }
}

$total_heures = 0;
$sujets_maitrises = 0;

foreach ($apprentissage as $cours) {
    $total_heures += $cours ["temps_total"];
    if ($cours["niveau"] == "maîtrisé") {
        $sujets_maitrises++;
    }
}

echo "<div style='background: lightblue; padding: 20px; border-radius: 10px; margin-top: 20px;'>";
echo "<h2>📊Mes Stats : </h2>";
echo "<p>Temps total investi : $total_heures heures</p>";
echo "<p>Technologies maîtrisées : $sujets_maitrises</p>";
echo "<p>Objectif : Ajouter Symfony dans maîtrisé dans 10 semaines !</p>";