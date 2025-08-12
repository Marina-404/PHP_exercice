<?php

class Technologie {
    public $nom;
    public $heures_investies;
    public $niveau;
    public $objectif_heures;

    public function __construct($nom, $heures_investies, $niveau, $objectif_heures) {
    $this->nom = $nom;
    $this->heures_investies = $heures_investies;
    $this->niveau = $niveau;
    $this->objectif_heures = $objectif_heures;
}

public function calculerProgression() {
    $pourcentage_progression = ($this->heures_investies /$this->objectif_heures) * 100;
    return $pourcentage_progression;
}

public function estMaitrisee() {
    $pourcentage = $this->calculerProgression();
    if ($pourcentage >= 80) {
    return true;
} else {
    return false;
}
}
public function ajouterHeures($nouvelles_heures) {
    $this->heures_investies += $nouvelles_heures;
    return "ajouté $nouvelles_heures h ! Total : {$this->heures_investies}h";
}
}

$symfony = new Technologie("Symfony", 0, "débutant", 100);
echo "Progression initiale : " . $symfony->calculerProgression() . "%;\n";

echo "" . $symfony->ajouterHeures(20) . "; \n";
echo "Progression après : " . $symfony->calculerProgression() . "%; \n";

if ($symfony->estMaitrisee()) {
    echo "Symfony maîtrisé !";
} else {
    echo "Continue l'apprentissage !";
}