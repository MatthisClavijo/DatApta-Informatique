<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Modifier mon profil</title>
    <link rel="stylesheet" type="text/css" href="PageDeModifDeProfil\PageDeModificationDeProfil.css">
    <link rel="icon" type="image" href="Images\Infinite_measures_1.gif">
</head>

<?php require "header\header.php" ?>

<body>
<div class="contentBlock" id="modifBlock">
    <h3>Modification du profil</h3>
    <form method="post" action="modif_profil">
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
            <input type="submit" value="Modifier" name="submit" id="modifBtn">
            <a href="profil" id="cancelModifBtn">Annuler</a>
        </fieldset>
    </form>
</div>
</body>

<?php require "footer/footer.php"; ?>
</html>