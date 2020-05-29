<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<title>Accueil</title>
<head>

<body>
<div id="BoxTicket" >
    <?php
 $data=GetDetailTicket($_GET['name'],$_GET['date']);
 echo $data[0][1];
    echo ("</br>");
    echo ("</br>");
    echo ("<a href=\"retour\">Retour</a>");
    ?>

</div>
</body>
</html>
<style>
    body {
        font-family: Trebuchet MS;
        font-size: 20px;
    }
    #BoxTicket{
        position: absolute;
        background-color: white;
        border-radius: 10px;
        padding: 30px;
        margin-left: 500px;
        margin-top: 125px;
        border: 1px solid #D4AE4C
    }
</style>

