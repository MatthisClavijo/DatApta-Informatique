<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="PageInscription/PageDInscription.css">
    <link rel="icon" type="image" href="Images/Infinite_measures_1.gif">
</head>

<?php require "header/header.php" ?>

<body>

<div class="contentBlock" id="signUpBlock">
    <h3>Inscription</h3>
    <form method="post" action="add_user">
        <fieldset id="privateInfos">
            <p><label for="name">Nom : </label><input type="text" name="nom" placeholder="Nom" id="name"></p>
            <p><label for="firstname">Prénom : </label><input type="text" name="prénom" placeholder="Prénom"
                                                              id="firstname"></p>
            <p><label for="birthday">Date de naissance : </label><input type="date" name="date" id="birthday"></p>
        </fieldset>

        <fieldset id="idInfos">
            <p><label for="email">Email : </label><input type="email" name="email" placeholder="email" id="email"></p>
            <p><label for="password">Mot de passe : </label><input type="password" name="password"
                                                                   placeholder="Mot de passe" id="password"></p>
            <p><label for="confirmPassword">Confirmer le mot de passe : </label><input type="password" name="Cpassword"
                                                                   placeholder="Mot de passe" id="confirmPassword"></p>
        </fieldset>

        <fieldset id="actions">
            <p><label for="CGU">J'accepte les Conditions Générales d'Utilisation </label><input type="checkbox"
                                                                                                name="cgu" id="CGU"></p>
            <input type="submit" value="S'inscrire" name="submit" id="signUpBtn">
            <a href="accueil" id="cancelRegisBtn">Annuler</a>
        </fieldset>
    </form>
</div>

</body>

<?php require "footer/footer.php"; ?>
</html>