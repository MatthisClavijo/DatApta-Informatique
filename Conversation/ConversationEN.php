<!DOCTYPE html>
<html>
<title>Chat</title>

<head>
    <link rel="stylesheet" href="Conversation/Conversation.css">

</head>
<body>
<?php
$messages=visumessage($_SESSION["destinataire"],$_SESSION["expéditeur"]); //destinataire anglais ? expéditeur anglais ?
for($i=0;$i<sizeof($messages);$i++){
    echo ($messages[$i]["Content"]);
    echo("</br>");
    echo ("</br>");
}
?>




</body>




</html>


