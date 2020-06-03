<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Modify my profile</title>
    <link rel="stylesheet" type="text/css" href="PageDeModifDeProfil/PageDeModificationDeProfil.css">
    <link rel="icon" type="image" href="Images/Infinite_measures_1.gif">
</head>

<?php require "header/headerEN.php" ?>

<body>
<div class="contentBlock" id="modifBlock">
    <h3>Profile modification</h3>
    <form method="post" action="modif_profil">
        <fieldset id="privateInfos">
            <p><label for="name">Name: </label><input type="text" name="nom" placeholder="Name" id="name"></p>
            <p><label for="firstname">First name: </label><input type="text" name="prénom" placeholder="First name"
                                                              id="firstname"></p>
            <p><label for="birthday">Date of birth: </label><input type="date" name="date" id="birthday"></p>
        </fieldset>
        <fieldset id="idInfos">
            <p><label for="email">Email: </label><input type="email" name="email" placeholder="Email" id="email"></p>
            <p><label for="password">Password: </label><input type="password" name="password"
                                                                   placeholder="Password" id="password"></p>
            <p><label for="confirmPassword">Confirm password: </label><input type="password" name="Cpassword"
                                                                                       placeholder="Password" id="confirmPassword"></p>
        </fieldset>
        <fieldset id="actions">
            <input type="submit" value="Modify" name="submit" id="modifBtn">
            <a href="profil" id="cancelModifBtn">Cancel</a>
        </fieldset>
    </form>
</div>
</body>

<?php require "footer/footerEN.php"; ?>
</html>