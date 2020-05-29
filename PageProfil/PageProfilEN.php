<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My profile</title>
    <link rel="stylesheet" type="text/css" href="PageProfil\PageProfil.css">
    <link rel="icon" type="image" href="Images\Infinite_measures_1.gif">
</head>

<?php require "headerEN\header.php" ?>

<body>
<div class="contentBlock" id="profileBlock">
    <h3 id="profileTitle">Profile</h3>
    <?php
    echo ("<div id='privateInfos'>");
    echo ("<h4>Personal details: </h4>");
    echo ("<p>Full name: ".$_SESSION['prénom']." ".$_SESSION['nom']."</p>");
    echo ("<p>Date of birth: ".$_SESSION['date_de_naissance']."</p>");
    echo ("</div>");
    echo ("<div id='idInfos'>");
    echo ("<h4>Login details: </h4>");
    echo ("<p>Email address: ".$_SESSION['Adresse mail']."</p>");
    echo ("</div>");
    ?>
    <p><a href="modifprofil" id="linkModifProfile">Modify my profile</a></p>
</div>
</body>

<?php require "footerEN/footer.php"; ?>
</html>
