<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<title>Accueil</title>

    <link rel="stylesheet" href="VisuTicket/VisuTicket.css">


  <?php require "header/header.php"?>
    <p id="BoxTicket">
    <?php
    $data=GetTicket();
    for ($i=0;$i<sizeof($data);$i++){
        $name=$data[$i][0];
        $date=$data[$i][2];
        echo ($data[$i][0]);
        echo ("  ");
        echo("<a href='detail/$name/$date' id='detail'>Voir Ticket</a>");
        echo "   ";
        echo ("<a href='supprTicket/$name/$date' id='supprimer'>Suppression</a>");
        echo ("</br>");
        echo ("</br>");

    }

    ?>
    </p>
</body>
<?php
require "footer/footer.php"
?>
</html>