<!DOCTYPE html>
<html>
<title>Conversation</title>

<head>
    <link rel="stylesheet" href="Conversation/Conversation.css">

</head>
<body>
<style>
    .gauche{
        float: left;
    }
    .droite{
        margin-left: 350px;
    }
    #boxConv{
        position: absolute;
        background-color: white;
        border-radius: 10px;
        padding: 30px;
        border: 1px solid #D4AE4C;


    }
    #retour{
        text-decoration: none;
        color: black;
    }
</style>
<div id="boxConv">
    <?php
    $messages=visumessage($_SESSION["destinataire"],$_SESSION["expéditeur"]);
    for($i=0;$i<sizeof($messages);$i++) {
        if ($messages[$i][1] == $_SESSION["nom"]) {
            $mess=$messages[$i]["Contenu"];
            echo("<p class='gauche'>$mess</p>");
            echo("</br>");
            echo("</br>");

        }
        elseif($messages[$i][2] == $_SESSION["nom"]){
            $mess=$messages[$i]["Contenu"];
            echo("<p class='droite'>$mess</p>");
            echo("</br>");
            echo("</br>");
        }
    }


    ?>
    <form id="formevoie" method="post" action="send">
        <div>
            <input type="text"  name="contenu" >
            <input type="submit" value="Send" name="envoie">
        </div>

    </form>

    <a href="retour" id="retour">Go back</a>



</div>


</body>




</html>



