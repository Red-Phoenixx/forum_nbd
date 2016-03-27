<!DOCTYPE html>
<html>

<head>
    <title>Authentification</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../all.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div id="bloc_page">
        <div id="formulaire">
            <h2>Connexion</h2>
            <form method="post">
                <label for="pseudo">Pseudo</label>
                <br />
                <input type="text" id="pseudo" name="pseudo" autocomplete="off" required/>
                <br />
                <label for="pass">Mot de passe</label>
                <br />
                <input type="password" id="pass" name="pass" autocomplete="off" required/>
                <br />
                <input type="checkbox" id="check_pseudo" name="check_pseudo" />
                <label for="check_pseudo">Se souvenir de moi</label>
                <br />
                <input type="submit" id="submit" value="Connexion" />
                <br />
                <a href="password_reset.php">Mot de passe oublié ?</a>
            </form>
        </div>
    </div>
</body>

</html>