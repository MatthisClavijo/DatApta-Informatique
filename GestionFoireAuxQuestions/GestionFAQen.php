<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Q&A management</title>
    <link rel="stylesheet" type="text/css" href="GestionFoireAuxQuestions/GestionFAQ.css">
    <link rel="icon" type="image" href="Images/Infinite_measures_1.gif">
</head>

<?php require "header/headerEN.php" ?>

<body>
<p>
<form id="Ajouter" method="post" action="add_QR">
    <p>Add : <label for="question">Question</label> : <input type="text" name="Question" id="question">
        <label for="rep">Answer</label> : <input type="text" name="Réponse" id="rep">
        <input type="submit" value="Add" name="submit">
    </p>
</form>
</p>
<?php
$faq=selectFAQ();
$nombre=count($faq);
for ($i=0;$i <$nombre;$i++){
    $ID=$faq[$i]['ID'];
    ?>
    <div class="question_block">
        <h3>Q : </h3>
        <p><?php echo ($faq[$i]['Question']); ?></p>
        <?php
        echo("<form method='post' action='edit_Q/$ID'>
                <input type='text' name='Edit_Q'>
                <input type=\"submit\" value=\"Edit\" name=\"submit\">
            </form>");
        ?>
        <h3>A : </h3>
        <p><?php echo ($faq[$i]['Réponse']); ?></p>
        <?php
        echo ("<form method='post' action='edit_R/$ID'>
                <input type='text' name='Edit_R'>
                <input type=\"submit\" value=\"Edit\" name=\"submit\">
            </form>");
        echo ("</br>");
        echo("<a href='delete_QR/$ID' class='delete'>Delete</a>");
        ?>
    </div>
<?php } ?>
</body>

<?php require "footer/footerEN.php"; ?>
</html>
