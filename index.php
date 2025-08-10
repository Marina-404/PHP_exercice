<?php
$prenom = "Marina";
$frameworks = ["Symfony","Laravel", "React"];

echo "Salut mon prénom est : $prenom, ";
echo "je vais apprendre :" . implode (",", $frameworks) . ", ";

$age = 32;
if ($age >= 18) {
    echo "je peux postuler à un job de dev !";
}

$experience_html = 1;
$objectif_mois = 3;

echo "avec $experience_html an d'expérience en HTML, mon objectif pour apprendre PHP est de $objectif_mois mois";