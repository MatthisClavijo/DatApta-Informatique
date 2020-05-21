<!DOCTYPE html>
<html>
<title>Conversation</title>

<head>
    <link rel="stylesheet" href="Conversation/Conversation.css">

</head>
<body>
<?php
$messages=visumessage($_SESSION["destinataire"],$_SESSION["expéditeur"]);
for($i=0;$i<sizeof($messages);$i++){
    echo ($messages[$i]["Contenu"]);
    echo("</br>");
    echo ("</br>");
}
?>




</body>




</html>


