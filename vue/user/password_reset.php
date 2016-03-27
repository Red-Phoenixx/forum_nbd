<!DOCTYPE html>
<html>

<head>
    <title>Récupération mot de passe</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../all.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div id="bloc_page">
        <div id="formulaire">
            <h2>Récupération</h2>
            <p>Un e-mail va vous être envoyé afin de récupérer votre mot de passe</p>
            <form method="post">
                <label for="pseudo">E-mail</label>
                <br />
                <input type="text" id="email" name="email" autocomplete="off" required/>
                <br />
                <label for="pass">Pseudo</label>
                <br />
                <input type="text" id="pseudo" name="pseudo" autocomplete="off" required/>
                <br />
                <input type="submit" id="submit" value="Envoyer" />
            </form>
        </div>
    </div>
</body>

</html>