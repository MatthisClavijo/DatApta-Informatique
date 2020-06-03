
<?php
function viewinscription(){
    if ($_SESSION["langue"]=="french"){
        require "PageInscription/PageDInscription.php";
    }
    if ($_SESSION["langue"]=="english"){
        require "PageInscription/PageDIscriptionEN.php";
    }
}
function viewAccueil() {
    if ($_SESSION["langue"]=="french") {
        require "PageAccueil/PageDAcceuil.php";
    }
    if ($_SESSION["langue"]=="english"){
        require "PageAccueil/PageDAcceuilEN.php";
    }

}
function viewModif(){
    if ($_SESSION["langue"]=="french") {
        require "PageDeModifDeProfil/PageDeModificationDeProfil.php";
    }
    if ($_SESSION["langue"]=="english"){
        require "PageDeModifDeProfil/PageDeModificationDeProfilEN.php";
    }

}
function viewProfil(){
    if ($_SESSION["langue"]=="french") {
        require "PageProfil/PageProfil.php";
    }
    if ($_SESSION["langue"]=="english"){
        require "PageProfil/PageProfilEN.php";
    }

}
function viewgestionutilisateur(){
    if ($_SESSION["langue"]=="french") {
        require "PageDeGestionUtilisateur/GestionUtilisateur.php";
    }
    if ($_SESSION["langue"]=="english"){
        require "PageDeGestionUtilisateur/GestionUtilisateurEN.php";
    }

}
function viewcapteur(){
    if ($_SESSION["langue"]=="french") {
        require "PageGestionDeCapteur/GestionCapteur.php";
    }
    if ($_SESSION["langue"]=="english"){
        require "PageGestionDeCapteur/GestionCapteurEN.php";
    }
}
function viewtest(){
    if ($_SESSION["langue"]=="french") {
        require "PageDeGestionDesTests/GestionTest.php";
    }
    if ($_SESSION["langue"]=="english"){
        require "PageDeGestionDesTests/GestionTestEN.php";
    }

}
function viewFAQ(){
    if ($_SESSION["langue"]=="french") {
        require "FoireAuxQuestions/FAQ.php";
    }
    if ($_SESSION["langue"]=="english"){
        require "FoireAuxQuestions/FAQen.php";
    }

}
function viewgestionfaq(){
    if ($_SESSION["langue"]=="french") {
        require "GestionFoireAuxQuestions/GestionFAQ.php";
    }
    if ($_SESSION["langue"]=="english"){
        require "GestionFoireAuxQuestions/GestionFAQen.php";
    }
}
function viewStatistique(){
    if ($_SESSION["langue"]=="french") {
        require "PageStatistiques/PageStatistiques.php";
    }
    if ($_SESSION["langue"]=="english"){
        require "PageStatistiques/PageStatistiquesEN.php";
    }
}
function viewCGU(){
    if ($_SESSION["langue"]=="french") {
        require "ConditionsDUtilisation/CGU.php";
    }
    if ($_SESSION["langue"]=="english"){
        require "ConditionsDUtilisation/CGUen.php";
    }
}
function viewRecherche(){
    if ($_SESSION["langue"]=="french") {
        require "PageRechercheUtilisateur/RechercheUtilisateur.php";
    }
    if ($_SESSION["langue"]=="english"){
        require "PageRechercheUtilisateur/RechercheUtilisateurEN.php";
    }
}
function viewMessage(){
    if ($_SESSION["langue"]=="french") {
        require "Messagerie/Messagerie.php";
    }
    if ($_SESSION["langue"]=="english"){
        require "Messagerie/MessagerieEN.php";
    }
}
function viewConversation(){
    if ($_SESSION["langue"]=="french") {
        require "Conversation/Conversation.php";
    }
    if ($_SESSION["langue"]=="english"){
        require "Conversation/ConversationEN.php";
    }
}
function viewTicket(){
    if ($_SESSION["langue"]=="french") {
        require "PageTicket/Ticket.php";
    }
    if ($_SESSION["langue"]=="english"){
        require "PageTicket/PageTicketEN.php";
    }

}
function viewVisuTicket(){
    if ($_SESSION["langue"]=="french") {
        require "VisuTicket/VisuTicket.php";
    }
    if ($_SESSION["langue"]=="english"){
        require "VisuTicket/VisuTicketEN.php";
    }
}
function viewContenuTicket(){
    if ($_SESSION["langue"]=="french") {
        require "ContenuTicket/ContenuTicket.php";
    }
    if ($_SESSION["langue"]=="english"){
        require "ContenuTicket/ContenuTicketEN.php";
    }

}
