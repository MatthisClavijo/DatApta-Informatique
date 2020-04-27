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
    $req=$db->prepare("SELECT * FROM `client`  WHERE `Adresse mail`= ? AND `mot_de_passe` = ?");
    $req->execute(array($email,$password));
    $existence=$req->rowCount();
    if($existence==1){
        $data=$req->fetch();
        $_SESSION['ID']=$data['ID'];
        $_SESSION['nom']=$data['nom'];
        $_SESSION['prénom']=$data['prénom'];
        $_SESSION['Adresse mail']=$data['Adresse mail'];
        $_SESSION['date_de_naissance']=$data['date_de_naissance'];
        $_SESSION['type']="client";
        $_SESSION['isConnected']=true;
       viewAccueilConnexion();
    }
    if ($existence!=1){
        $reqAdmin=$db->prepare("SELECT * FROM `administrateur` WHERE `Adresse mail`= ? AND `mot de passe` = ?");
        $reqAdmin->execute(array($email,$password));
        $existence2=$reqAdmin->rowCount();
        if($existence2==1){
            $data2=$reqAdmin->fetch();
            $_SESSION['ID']=$data2['ID'];
            $_SESSION['nom']=$data2['nom'];
            $_SESSION['prénom']=$data2['prénom'];
            $_SESSION['Adresse mail']=$data2['Adresse mail'];
            $_SESSION['date_de_naissance']=$data2['date_de_naissance'];
            $_SESSION['type']="admin";
            $_SESSION['isConnected']=true;
            viewAccueilAdmin();
        }
        if($existence2!=1){
            echo "Il y a eu une erreur dans la connexion. Veuillez réessayer.";
            viewAccueil();
        }

    }
}
function modificationuser($nom, $prenom, $mot_de_passe,$email,$date_de_naissance){
    $ID=$_SESSION['ID'];
    $db=dbConnect();
    $req=$db->prepare("UPDATE `client` SET `nom` = :nom, `prénom` = :prenom, `Adresse mail` = :email, `date_de_naissance` = :date_de_naissance, `mot_de_passe` = :mot_de_passe WHERE `client`.`ID` = :ID ");
    $req->execute(array('nom'=> $nom, 'prenom'=> $prenom, 'email'=>$email, 'mot_de_passe'=> $mot_de_passe, 'ID'=> $ID,'date_de_naissance'=>$date_de_naissance));
    $req->closeCursor();

}
function selectuser(){
    $db=dbConnect();
    $req=$db->prepare("SELECT * FROM `client` ");
    $req->execute();
    $data=$req->fetchAll();
    return $data;
}
function deleteuser($ID){
    $db=dbConnect();
    $req=$db->prepare("DELETE FROM `client` WHERE (`ID`=:ID)");
    $req->execute(array('ID'=>$ID));

}
function selectcapteur(){
    $db=dbConnect();
    $req=$db->prepare("SELECT * FROM `capteur` ");
    $req->execute();
    $data=$req->fetchAll();
    return $data;
}
function InsertCapteur($nom,$unité){
    $db=dbConnect();
    $req=$db->prepare("INSERT INTO `capteur` (`Nom`,`unité de mesure`) VALUES (?,?)");
    $req->execute(array($nom,$unité));
    $req->closeCursor();
}
function deletecapteur($ID){
    $db=dbConnect();
    $req=$db->prepare("DELETE FROM `capteur` WHERE (`ID`=:ID)");
    $req->execute(array('ID'=>$ID));
}
function selecttest(){
    $db=dbConnect();
    $req=$db->prepare("SELECT * FROM `test` ");
    $req->execute();
    $data=$req->fetchAll();
    return $data;

}
function InsertTest($nom,$idcapteur){
    $db=dbConnect();
    $req=$db->prepare("INSERT INTO `test` (`Nom`,`id capteurs`) VALUES (:nom,:ids)");
    $req->execute(array('nom'=>$nom,'ids'=>$idcapteur));
    $req->closeCursor();
}
function deletetest($ID){
    $db=dbConnect();
    $req=$db->prepare("DELETE FROM `test` WHERE (`id`=:ID)");
    $req->execute(array('ID'=>$ID));
}
function selectadmin(){
    $db=dbConnect();
    $req=$db->prepare("SELECT * FROM `administrateur` ");
    $req->execute();
    $data=$req->fetchAll();
    return $data;

}
function up_user($ID){
    $db=dbConnect();
    $req=$db->prepare("SELECT * FROM `client` WHERE (`ID`=:ID)");
    $req->execute(array('ID'=>$ID));
    $data=$req->fetchAll();
    $nom=$data[0][2];
    $prénom=$data[0][3];
    $email=$data[0][4];
    $date_de_naissance=$data[0][5];
    $mdp=$data[0][6];
    $req->closeCursor();
    $id=NULL;
    $photo='vide';
    $message='vide';
    $req2=$db->prepare("INSERT INTO `administrateur` VALUES (:ID,:photo,:nom,:prenom,:email,:date_de_naissance,:mdp,:message)");
    $req2->execute(array('ID'=>$id,'photo'=>$photo,'nom'=>$nom,'prenom'=>$prénom,'email'=>$email,'date_de_naissance'=>$date_de_naissance,'mdp'=>$mdp,'message'=>$message));
    $req2->closeCursor();
    deleteuser($ID);
}
function down_user($ID){
    $db=dbConnect();
    $req=$db->prepare("SELECT * FROM `administrateur` WHERE (`ID`=:ID)");
    $req->execute(array('ID'=>$ID));
    $data=$req->fetchAll();
    var_dump($data);
    $nom=$data[0][2];
    $prénom=$data[0][3];
    $email=$data[0][4];
    $date_de_naissance=$data[0][5];
    $mdp=$data[0][6];
    $req->closeCursor();
    $id=NULL;
    $photo='vide';
    $message='vide';
    $req2=$db->prepare("INSERT INTO `client` VALUES (:ID,:photo,:nom,:prenom,:email,:date_de_naissance,:mdp,:message)");
    $req2->execute(array('ID'=>$id,'photo'=>$photo,'nom'=>$nom,'prenom'=>$prénom,'email'=>$email,'date_de_naissance'=>$date_de_naissance,'mdp'=>$mdp,'message'=>$message));
    $req2->closeCursor();
    deleteuser($ID);

}
function selectFAQ(){
    $db=dbConnect();
    $req=$db->prepare("SELECT * FROM `faq` ");
    $req->execute();
    $data=$req->fetchAll();
    return $data;
}
function delete_QR($ID){
    $db=dbConnect();
    $req=$db->prepare("DELETE FROM `faq` WHERE (`id`=:ID)");
    $req->execute(array('ID'=>$ID));

}
function InsertQR($question,$reponse){
    $db=dbConnect();
    $req=$db->prepare("INSERT INTO `faq` (`Question`,`Réponse`) VALUES (:question,:reponse) ");
    $req->execute(array('question'=>$question,'reponse'=>$reponse));
    $req->closeCursor();
}
function EditQ($question,$ID){
    $db=dbConnect();
    $req=$db->prepare("UPDATE `faq` SET `Question` = :question WHERE `faq`.`ID` = :ID");
    $req->execute(array('question'=>$question,'ID'=>$ID));
    $req->closeCursor();
}
function EditR($reponse,$ID){
    $db=dbConnect();
    $req=$db->prepare("UPDATE `faq` SET `Réponse` = :reponse WHERE `faq`.`ID` = :ID");
    $req->execute(array('reponse'=>$reponse,'ID'=>$ID));
    $req->closeCursor();
}