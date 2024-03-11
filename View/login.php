<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
</head>
<body>

    <h2>Connexion</h2>

    <a href="/Ecole/Bloc3/TP_SIO2_login/index.php">Retour</a>

    <form action="../index.php?action=login" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <br>

        <label for="motDePasse">Mot de passe :</label>
        <input type="password" id="motDePasse" name="motDePasse" required>

        <br>

        <input type="submit" value="Se connecter">
    </form>

</body>
</html>
