<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>FAQ</title>
    <link rel="stylesheet" type="text/css" href="FoireAuxQuestions/FAQ.css">
    <link rel="icon" type="image" href="Images/Infinite_measures_1.gif">
</head>

<?php require "header/header.php" ?>

<body>
<?php
    $faq=selectFAQ();
    $nombre=count($faq);
    for ($i=0;$i <$nombre;$i++){
        $ID=$faq[$i]['ID'];
?>
    <div class="block_question">
        <h3>Q : </h3>
        <p><?php echo ($faq[$i]['Question']); ?></p>
        <h3>R : </h3>
        <p><?php echo ($faq[$i]['Réponse']); ?></p>
    </div>
<?php } ?>
</body>

<?php require "footer/footer.php"; ?>
</html>

