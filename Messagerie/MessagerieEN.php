

<!DOCTYPE html>
<html>
<title>Message</title>

<head>
    <link rel="stylesheet" href="Messagerie/Messagerie.css">

    <?php require "header/headerEN.php";?>

</head>
<body>

<p id="MessageBox">
    <?php
    $listeconv=getallconv($_SESSION['nom']);
    $user=$_SESSION["nom"];
    for ($i=0;$i<sizeof($listeconv[0]);$i++){
        for ($j=0;$j<sizeof($listeconv[1]);$j++){
            if ($listeconv[0][$i][0]==$listeconv[1][$j][0]){
                $listeconv[1][$j][0]="";
            }
        }
    }
    for ($i=0;$i<sizeof($listeconv[0]);$i++){
        $user2=$listeconv[0][$i][0];
        echo ($listeconv[0][$i][0]);
        echo ("  ");
        echo ("<a href='conv/$user2/$user'class='conv'>See conversation</a>");
        echo ("</br>");
        echo ("</br>");
    }
    for ($j=0;$j<sizeof($listeconv[1]);$j++){
        if ($listeconv[1][$j][0]==""){

        }
        else{
            $user2=$listeconv[1][$j][0];
            echo ($listeconv[1][$j][0]);
            echo ("  ");
            echo ("<a href='conv/$user/$user2' class='conv'>See conversation</a>");
            echo ("</br>");
            echo ("</br>");
        }
    }

    ?>
</p>
</body>
<?php
require "footer/footerEN.php"
?>
</html>=)
