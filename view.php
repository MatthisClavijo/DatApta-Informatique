
<?php
function viewinscription(){
    require "PageInscription/PageDInscription.php";
}
function viewAccueil() {
    require "PageAccueil/PageDAcceuil.php";

}
function viewModif(){
    require "PageDeModifDeProfil/PageDeModificationDeProfil.php";
}
function viewProfil(){
    require"PageProfil/PageProfil.php";
}
function viewAccueilConnexion(){
    require "AcceuilConnexion/AcceuilConnexion.php";
}
function viewAccueilAdmin(){
    require "AcceuilAdmin/AcceuilAdmin.php";
}
function viewgestionutilisateur(){
    require "PageDeGestionUtilisateur/GestionUtilisateur.php";
}
function viewcapteur(){
    require "PageGestionDeCapteur/GestionCapteur.php";
}
function viewtest(){
    require "PageDeGestionDesTests/GestionTest.php";
}