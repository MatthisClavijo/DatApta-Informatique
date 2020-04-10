<?php
function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=site_app;charset=utf8', 'root', '');
        return $db;
    }

    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

function InsertUser($nom, $prenom, $mot_de_passe,$email,$date_de_naissance)
{

    $photo='vide';
    $message='vide';
    $ID=NULL;
    $db = dbConnect();

    $req = $db->prepare("INSERT INTO `client` (`ID`, `photo`, `nom`, `prénom`, `Adresse mail`, `date_de_naissance`, `mot_de_passe`, `message`) VALUES (:ID, :photo, :nom, :prenom, :email, :date_de_naissance, :mot_de_passe, :message);");
    $req->execute(array('nom'=>$nom,
                       'prenom'=>$prenom,
                        'email'=>$email,
                        'date_de_naissance'=>$date_de_naissance,
                        'mot_de_passe'=>$mot_de_passe,
                         'photo'=>$photo,
                        'message'=>$message,
                        'ID'=>$ID));

    $req->closeCursor();
}
function testconnexion($email,$password){
    $db=dbConnect();
    $req=$db->prepare("SELECT * FROM `client` WHERE `Adresse mail`= ? AND `mot_de_passe` = ?");
    $req->execute(array($email,$password));
    $existence=$req->rowCount();
    if($existence==1){
        $data=$req->fetch();
        $_SESSION['ID']=$data['ID'];
        $_SESSION['nom']=$data['nom'];
        $_SESSION['prénom']=$data['prénom'];
        $_SESSION['Adresse mail']=$data['Adresse mail'];
        $_SESSION['date_de_naissance']=$data['date_de_naissance'];
        viewAcceuilConnexion();
    }
    if ($existence!=1){
        echo"Il y a eu une erreur dans la connexion. Veuillez réessayer.";
        viewAcceuil();
    }
}
