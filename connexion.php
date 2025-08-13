<?php

$host = "localhost";
$dbname = "apprentissage_db";
$username = "marina";
$password = "pompom";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "✅ Connexion MySQL réussie !<br>";
    
    $stmt = $pdo->query("SHOW TABLES");
    $tables = $stmt->fetchAll();
    echo "Tables trouvées : " . count($tables);
    
} catch (PDOException $e) {
    echo "❌ Erreur de connexion : " . $e->getMessage();
}
?>