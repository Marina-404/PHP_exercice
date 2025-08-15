<?php


// Fonction pour lire le fichier .env
function loadEnv($path) {
    if (!file_exists($path)) {
        throw new Exception("Fichier .env introuvable !");
    }
    
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos($line, '=') !== false && strpos($line, '#') !== 0) {
            list($key, $value) = explode('=', $line, 2);
            $_ENV[trim($key)] = trim($value);
        }
    }
}
// Charger le .env
loadEnv('.env');



// class qui gére les techno en bdd
class TechnologieManager {
    // connection bdd à l'objet
    private $pdo;

    // se connecte auto à la bdd avec construct
    public function __construct() {
        $host = $_ENV["DB_HOST"];
        $dbname = $_ENV["DB_NAME"];
        $username = $_ENV["DB_USERNAME"];
        $password = $_ENV["DB_PASSWORD"];
        // PDO = PHP Data Objects, l'outil pour parler à mysql
        $this->pdo = new PDO ("mysql:host=$host;dbname=$dbname", $username,$password);
        
        // si erreur mysql
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // new methode pour récup toutes les techno
    public function getTechnologies() {
        // stmt = statement
        $stmt = $this->pdo->query("SELECT * FROM technologies ORDER BY nom");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

$manager = new TechnologieManager();
$technologies = $manager->getTechnologies();

echo "📚 Mes Technologies : \n";
foreach ($technologies as $tech) {
    echo "- {$tech['nom']} - {$tech['heures_investies']}\n";
}