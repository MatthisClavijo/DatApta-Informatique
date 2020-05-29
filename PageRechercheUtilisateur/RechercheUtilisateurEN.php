<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>User search</title>
    <link rel="stylesheet" type="text/css" href="PageRechercheUtilisateur\RechercheUtilisateur.css">
    <link rel="icon" type="image" href="Images\Infinite_measures_1.gif">
</head>

<?php require "headerEN\header.php" ?>

<body>
<div class="contentBlock" id="searchBlock">
    <form method="post" action="recherche_users">
        <p><label for="recherche">Search: </label><input type="text" placeholder="Enter a name" name="recherche"
                                                              id="recherche"></p>
        <p><label for="searchUser">Client</label><input type="radio" name="type" value="client" id="searchUser"></p>
        <p><label for="searchAdmin">Administrator</label><input type="radio" name="type" value="admin"
                                                                 id="searchAdmin"></p>
        <input type="submit" value="Search" name="submit" id="searchButton">
    </form>
</div>

<div id="listOfRegistered">
    <?php
    if ($_SESSION['search'] == "vide") {
        echo ("<div class='contentBlock' id='usersBlock'>");
        echo ("<h3>Users</h3>");
        $utilisateur = selectuser();
        $nombre = count($utilisateur);
        for ($i = 0; $i < $nombre; $i++) {
            $ID = $utilisateur[$i]['ID'];
            echo ("<p>".$utilisateur[$i]['prénom']." ".$utilisateur[$i]['nom']."    ".
                "<a href='#' class='message'>Send a message</a></p>");
        }
        echo ("</div>");

        echo ("<div class='contentBlock' id='adminsBlock'>");
        echo ("<h3>Administrators</h3>");
        $administrateur = selectadmin();
        $nombre2 = count($administrateur);
        for ($i = 0; $i < $nombre2; $i++) {
            $ID = $administrateur[$i]['ID'];
            echo("<p>".$administrateur[$i]['prénom']." ".$administrateur[$i]['nom']."    ".
                "<a href='#' class='message'>Send a message</a></p>");
        }
        echo ("</div>");
    }
    if ($_SESSION['search'] != "vide") {
        echo($_SESSION['search'][0]);
        echo("  ");
        echo($_SESSION['search'][1]);
        echo "  ";
        echo("<a href='#' class='message'>Send a message</a>");
        echo("</br>");
        echo("</br>");
        $_SESSION['search'] = "vide";
    }
    ?>
</div>
</body>

<?php require "footerEN/footer.php" ?>
</html>
