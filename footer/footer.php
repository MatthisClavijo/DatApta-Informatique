<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Footer</title>
    <link rel="stylesheet" type="text/css" href="footer\styleFooter.css">
</head>

<footer id="f">
    <div id="content">
        <div class="contact">
            <h2>Nous contacter</h2>
            <div class="email">
                <img src="Images\noun_Mail_3146799.png" alt="Icône d'email">
                <a href="mailto:datapta.officiel@gmail.com">datapta.officiel@gmail.com</a>
            </div>
            <div class="telephone">
                <img src="Images\noun_Phone_2492736.png" alt="Icône de téléphone">
                <span>+33 6 95 74 75 15</span>
            </div>
        </div>
        <div class="legal">
            <h2>Mentions légales</h2>
            <p><a href="cgu">Conditions générales d'utilisation</a></p>
            <p><a href="help" id="help">Faire remonter un problème</a></p>
        </div>
        <div class="socialNetworks">
            <a href="https://www.facebook.com/InfiniteMeasuresFr/">
                <img src="Images\facebook-3-logo-png-transparent.png" alt="Facebook" id="facebook">
            </a>
            <a href="">
                <img src="Images\twitter.png" alt="Twitter" id="twitter">
            </a>
            <a href="">
                <img src="Images\instagram-Logo-PNG-Transparent-Background-download-1-1.png" alt="Instagram" id="instagram">
            </a>
            <a href="https://www.linkedin.com/in/infinite-measures-8454771a5/">
                <img src="Images\Linkedin_circle.svg.png" alt="LinkedIn" id="linkedin">
            </a>
        </div>
    </div>

    <div id="bottomBlock">
        <form action="english" method="post" id="languageForm">
            <select name="language" onchange="submitForm()">
                <option value="french">Français</option>
                <option value="english">English</option>
            </select>
        </form>
        <p id="copyright">© DatApta - Tous droits réservés</p>
    </div>
    <script type="application/javascript">
        const submitForm = () => document.getElementById("languageForm").submit();
    </script>
</footer>

</html>