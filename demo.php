<?php


// TANT QUE //
// while ($chiffre !== 10) {
//     $chiffre = (int)readline("Entrez une heure :");
//     break;
// }
// echo "bravo vous avez gagné !";



// POUR //
// for ($i = 1; $i <= 10; $i += 3) {
//     echo "- $i \n";
// }



//  POUR CHAQUE //
// $eleves = [
//     "ce1" => "mathilde", "mathéo",
//     "ce2" => "eliote"
// ];

// foreach ($eleves as $classe => $eleve) {
//     echo "$eleve est dans la classe $classe ";
// };


// tant que l'utilisateur entre une note on continue et on enregistre la notre dans un tablea notes, 
// s'il marque fin on arrete et on affiche les notes

// $notes = [];
// while (true) {
//     $action = readline("Entrez la note (ou 'fin') : ");
//     if ($action === 'fin') {
//         break; 
//     } else {
//         $notes[] = (int)$action;
//     }
// }



// foreach ($notes as $note) {
//     echo "- $note \n";
// }



// On demande à l'utilisateur de rentrer les horaires d'ouverture
// l'utilisateur rentre une heure et ca lui dira si c'est ouvert
// $horaires = [];
// while (true) {
//     $actionDebut = (int)readline("heure d'ouverture :");
//     $actionFin = (int)readline("heure de fermeture :");
//     if ( $actionDebut >= $actionFin) {
//         echo "echo le creaneau ne peut pas être enregistré";
//     } else {
//         $horaires[] = [$actionDebut, $actionFin];
//         $action = readline ("voulez vous enregistrer un nouveau créneau (oui / non)");
//         if ($action === "non") {
//             break;
//         }
//     }
// }

// foreach ($horaires as $horaire) {
//     echo "le magasin est ouvert de {$horaire[0]}h à {$horaire[1]}h";
// }

// DEMANDER L'HORAIRE AUQUEL VEUT VENIR L'UTILISATEUR
// $heures = (int)readline("A quelle heure voulez vous venir en magasin ?");
// $creaneauDisponible = false;

// foreach ($horaires as $horaire) {
//     if ($heures >= $horaire[0]  && $heures <= $horaire[1] ) {
//         $creaneauDisponible = true;
//         break;
//     }
// }
// if ($creaneauDisponible) {
//     echo "le magasin est ouvert";
// } else {
//     echo "le magasin est fermé";
// }


// function bonjour ($name) {
//     return "bonjour $name comment vas tu ? \n";
// }

// $sayHello = bonjour("elise");
// echo $sayHello;

// function repondre_oui_non ($phrase) {
//     while (true) {
//         $response = readline("$phrase (o)ou(n)");
//         if ($response === "o") {
//             return true;
//         } elseif ($response === "n") {
//             return false;
//         }
//     }
// }

// function demander_creneau ($question = "veuillez entrer un creneau") {
//     echo $question;
//     while (true) {
//         $ouverture = readline("heure d'ouverture : ");
//         if ($ouverture >= 0 || $ouverture < 23 ) {
//             break;
//         }
//     };
//     while (true) {
//         $fermeture = readline("heure de fermeture : ");
//         if ($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture) {
//             break;
//         }
//     }
//     return [$ouverture, $fermeture];
// }


function demander_creneaux ($phrase = "veuillez entrer vos creneaux") {
    $creaneaux = [];
    $continuer = true;
    while ($continuer) {
        $creaneau[] = demander_creneau();
        $continuer = repondre_oui_non("Voulez vous continuer ? ");
    }
    return $creaneaux;
}


// $resultat = repondre_oui_non("Voulez vous continuer ?");

$creneau = demander_creneau();
var_dump($creneau);