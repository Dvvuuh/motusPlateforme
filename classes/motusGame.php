<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motus</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <div class="game-container">
        <h1>Motus</h1>
        <div id="grid-container">
            <!-- Grille de jeu -->
        </div>
        <input type="text" id="guess-input" maxlength="6">
        <button id="guess-button">Valider</button>
        <div id="message"></div>
        <button id="new-game-button" style="display: none;">Nouvelle partie</button>

    </div>

    <script src="script/script.js"></script>
</body>

</html>