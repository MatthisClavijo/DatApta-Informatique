<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Statistics</title>
    <link rel="stylesheet" type="text/css" href="PageStatistiques/PageStatistiques.css">
    <link rel="icon" type="image" href="Images/Infinite_measures_1.gif">
</head>

<?php require "headerEN/header.php"; ?>

<body>

<aside id="lateralDiv">
    <div id="userInfos">
        <img src="Images/avatar_vide.jpg" alt="Image de profil">
        <p>
            <?php if (isset($_SESSION['prénom'])) { echo ($_SESSION['prénom']); } else { echo ("First name"); } ?><br>
            <?php if (isset($_SESSION['nom'])) { echo ($_SESSION['nom']); } else { echo ("Name"); } ?>
        </p>
    </div>
    <div id="lastData">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mattis massa ac urna tempor sollicitudin. Pellentesque vulputate risus et nisi ultricies rutrum. Maecenas feugiat id elit sollicitudin sagittis. Ut imperdiet malesuada ligula, eu fringilla leo bibendum quis. Donec viverra lacus vitae neque pellentesque, quis pellentesque felis vehicula. Sed ut pulvinar erat, quis sollicitudin risus. Pellentesque eleifend pellentesque velit a scelerisque.</p>
    </div>
    <div id="startTest">
        <a href="">Start a test</a>
    </div>
</aside>

<div id="mainContent">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mattis sodales feugiat. Curabitur finibus nec ligula a volutpat. Nullam ut purus metus. Vivamus condimentum, dolor quis maximus suscipit, magna dolor scelerisque lectus, at congue dolor felis at nisi. Suspendisse ac turpis rhoncus, sodales nisl vel, laoreet nisl. Maecenas nec varius justo. Suspendisse luctus augue ut libero sagittis, sit amet efficitur erat fermentum.

        Aenean quis tempor neque. Integer a pretium nunc, in volutpat purus. Donec justo massa, accumsan eget elit vitae, viverra sodales libero. Maecenas a vulputate mi. In lobortis gravida placerat. Aenean commodo porttitor varius. Proin suscipit dui vitae cursus convallis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam a arcu vel tortor suscipit lobortis.

        Sed viverra ipsum sapien, in tempus felis gravida maximus. Phasellus sit amet ligula accumsan, posuere sapien vitae, imperdiet nunc. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ut sagittis nunc. Nam vel purus magna. Sed vitae nibh vitae ex interdum mattis id at dui. Integer efficitur sit amet metus vel finibus. Fusce in placerat leo.

        Morbi feugiat, elit ac pretium auctor, mauris ex scelerisque mi, accumsan dictum nulla eros eget nisi. Aliquam erat volutpat. Phasellus in eleifend magna. Sed et arcu ac enim sagittis ultricies nec non risus. Donec consectetur a velit nec dignissim. Sed vel orci aliquet, porttitor eros sed, aliquam nisl. Nulla placerat commodo accumsan. Sed nisi nisi, viverra eu luctus et, commodo tempor neque. Donec a porttitor ligula. Cras at justo eu risus hendrerit molestie non et felis. Nullam condimentum augue et venenatis malesuada. Nunc porta enim eu felis rhoncus facilisis.</p>
</div>

</body>

<?php require "footerEN/footer.php"; ?>

</html>
