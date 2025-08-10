<?php
if ($_POST) {
    $nouveau_sujet = $_POST["sujet"] ?? "";
    $nouveau_temps = $_POST["temps"] ?? 0;
    $nouveau_niveau = $_POST["niveau"] ?? "";
    $nouvelle_difficulte = $_POST["difficulte"] ?? "";

    if ($nouveau_sujet && $nouveau_temps && $nouveau_niveau) {
        echo "<div style='background: lightgreen; padding: 15px; margin: 10px 0; border-radius: 5px;'>";
        echo "<h3>✅ Cours ajouté avec succès !</h3>";
        echo "<p><strong>Sujet :</strong> $nouveau_sujet</p>";
        echo "<p><strong>Temps :</strong> {$nouveau_temps}h</p>";
        echo "<p><strong>Niveau :</strong> $nouveau_niveau</p>";
        echo "<p><strong>Difficulté :</strong> $nouvelle_difficulte</p>";
        echo "</div>";
    } else {
        echo "<div style='background: lightcoral; padding: 15px; margin: 10px 0; border-radius: 5px;'>";
        echo "<h3>❌ Erreur : Tous les champs sont requis !</h3>";
        echo "</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un cours</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        .form-container { max-width: 500px; margin: 0 auto; }
        .form-group { margin: 15px 0; }
        label { display: block; font-weight: bold; margin-bottom: 5px; }
        input, select, textarea { width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; }
        button { background: #007cba; color: white; padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #005a87; }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>📚 Ajouter un nouveau cours</h1>
        
        <form method="POST">
            <div class="form-group">
                <label for="sujet">Sujet d'apprentissage :</label>
                <input type="text" id="sujet" name="sujet" placeholder="Ex: Node.js, Python, Docker..." required>
            </div>
            
            <div class="form-group">
                <label for="temps">Temps déjà investi (heures) :</label>
                <input type="number" id="temps" name="temps" min="0" placeholder="0" required>
            </div>
            
            <div class="form-group">
                <label for="niveau">Niveau actuel :</label>
                <select id="niveau" name="niveau" required>
                    <option value="">-- Choisir --</option>
                    <option value="pas commencé">Pas commencé</option>
                    <option value="découverte">Découverte</option>
                    <option value="débutant">Débutant</option>
                    <option value="moyen">Moyen</option>
                    <option value="maîtrisé">Maîtrisé</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="difficulte">Difficulté ressentie :</label>
                <select id="difficulte" name="difficulte" required>
                    <option value="">-- Choisir --</option>
                    <option value="facile">Facile</option>
                    <option value="moyenne">Moyenne</option>
                    <option value="difficile">Difficile</option>
                    <option value="très difficile">Très difficile</option>
                </select>
            </div>
            
            <button type="submit">➕ Ajouter ce cours</button>
        </form>
        
        <p><a href="tracker.php">← Retour au tracker</a></p>
    </div>
</body>