<!DOCTYPE html>
<html>
<title>Conversation</title>

<head>
    <link rel="stylesheet" href="Conversation.css">

</head>
<body>
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
    </div>
    <div id="submit">
        <input type="submit" value="Envoyer" name="envoie">
    </div>

</form>





</body>




</html>


