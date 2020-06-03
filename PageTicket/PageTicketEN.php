<!DOCTYPE html>
<html>
<title>Ticket</title>

<html>
<link rel="stylesheet" href="PageTicket/Ticket.css">

<?php require "header/headerEN.php"?>

<div id="BoxHelp">
    <form method="post" name="EnvoieTicket" action="sendTicket">
        <div>
            <?php
            if ($_SESSION['isConnected'] ==false) {
                echo ("Enter your email : <input type='email' name='email'>");
            }
            ?>
        </div>
        <p id="box">Describe your problem :
            </br>
            </br>
            <textarea name='Explication' cols='125' rows='15'></textarea>
        </p>
        <div>
            <input type="submit" value="Send" name="Envoyer" id="submit">
        </div>
    </form>
</div>

</body>
<?php
require "footer/footerEN.php";
?>
</html>
