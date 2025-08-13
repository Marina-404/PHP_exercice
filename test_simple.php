<?php
try {
    // Utilise TON MySQL (port 3306, tes identifiants)
    $pdo = new PDO("mysql:host=localhost", "marina", "pompom");
    echo "✅ Connexion avec PHP XAMPP + MySQL perso OK !<br>";
    
} catch (PDOException $e) {
    echo "❌ Erreur : " . $e->getMessage();
}
?>