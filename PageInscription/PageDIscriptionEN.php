<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="PageInscription\PageDInscription.css">
    <link rel="icon" type="image" href="Images\Infinite_measures_1.gif">
</head>

<?php require "headerEN\header.php" ?>

<body>

<div class="contentBlock" id="signUpBlock">
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
            <p><label for="CGU">I accept the general terms of use </label><input type="checkbox"
                                                                                                name="cgu" id="CGU"></p>
            <input type="submit" value="Register" name="submit" id="signUpBtn">
            <a href="accueil" id="cancelRegisBtn">Cancel</a>
        </fieldset>
    </form>
</div>

</body>

<?php require "footerEN/footer.php"; ?>
</html>
