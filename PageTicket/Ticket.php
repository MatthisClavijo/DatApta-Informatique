<!DOCTYPE html>
<html>
<title>Ticket</title>

<html>
    <link rel="stylesheet" href="PageTicket/Ticket.css">

    <?php require "header/header.php"?>

<div id="BoxHelp">
<form method="post" name="EnvoieTicket" action="sendTicket">
    <div>
    <?php
    if ($_SESSION['isConnected'] ==false) {
        echo ("Entrez votre email : <input type='email' name='email'>");
    }
    ?>
    </div>
    <p id="box">Décrivez votre problème :
    </br>
        </br>
        <textarea name='Explication' cols='125' rows='15'></textarea>
    </p>
    <div>
        <input type="submit" value="Envoyer" name="Envoyer" id="submit">
    </div>
</form>
</div>

</body>
<?php
require "footer/footer.php";
?>
</html>
