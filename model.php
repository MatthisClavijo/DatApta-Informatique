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

function InsertUser($nom, $prenom, $mot_de_passe,$email,$date_de_naissance, $salt, $iv)
{

    $photo='vide';
    $message='vide';
    $ID=NULL;
    $db = dbConnect();

    $req = $db->prepare("INSERT INTO `client` (`ID`, `photo`, `nom`, `prénom`, `Adresse mail`, `date_de_naissance`, `mot_de_passe`, `salt`, `iv`, `message`) VALUES (:ID, :photo, :nom, :prenom, :email, :date_de_naissance, :mot_de_passe, :salt, :iv, :message);");
    $req->execute(array('nom'=>$nom,
        'prenom'=>$prenom,
        'email'=>$email,
        'date_de_naissance'=>$date_de_naissance,
        'mot_de_passe'=>$mot_de_passe,
        'salt'=>$salt,
        'iv'=>$iv,
        'photo'=>$photo,
        'message'=>$message,
        'ID'=>$ID));

    $req->closeCursor();
}
function testconnexion($email,$password){
    $db=dbConnect();
    $reqClientEmailCheck=$db->prepare("SELECT * FROM `client`  WHERE `Adresse mail`= ?");
    $reqClientEmailCheck->execute(array($email));
    $clientEmailExist=$reqClientEmailCheck->rowCount();

    if($clientEmailExist==1){
        $reqEncrypt=$db->prepare("SELECT `salt`, `iv` FROM `client`  WHERE `Adresse mail`= ?");
        $reqEncrypt->execute(array($email));
        list($salt, $iv)=$reqEncrypt->fetch();
        $password = encryptionPasswordCheck($password, $salt, $iv);
    }

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
        viewAccueil();
    }
    if ($existence!=1){

        $reqAdminEmailCheck=$db->prepare("SELECT * FROM `administrateur`  WHERE `Adresse mail`= ?");
        $reqAdminEmailCheck->execute(array($email));
        $adminEmailExist=$reqAdminEmailCheck->rowCount();

        if($adminEmailExist==1){
            $reqEncrypt=$db->prepare("SELECT `salt`, `iv` FROM `administrateur`  WHERE `Adresse mail`= ?");
            $reqEncrypt->execute(array($email));
            list($salt, $iv)=$reqEncrypt->fetch();
            $password = encryptionPasswordCheck($password, $salt, $iv);
        }


        $reqAdmin=$db->prepare("SELECT * FROM `administrateur` WHERE `Adresse mail`= ? AND `mot_de_passe` = ?");
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
            viewAccueil();
        }
        if($existence2!=1){
            echo ("<script>alert(\"Il y a eu une erreur dans la connexion. Veuillez réessayer.\")</script>");
            viewAccueil();
        }

    }
}
function modificationuser($nom, $prenom, $mot_de_passe, $salt, $iv, $email, $date_de_naissance){
    $ID=$_SESSION['ID'];
    $db=dbConnect();
    $req=$db->prepare("UPDATE `client` SET `nom` = :nom, `prénom` = :prenom, `Adresse mail` = :email, `date_de_naissance` = :date_de_naissance, `mot_de_passe` = :mot_de_passe, `salt` = :salt, `iv` = :iv WHERE `client`.`ID` = :ID ");
    $req->execute(array('nom'=> $nom, 'prenom'=> $prenom, 'email'=>$email, 'mot_de_passe'=> $mot_de_passe, 'salt'=> $salt, 'iv'=> $iv, 'ID'=> $ID,'date_de_naissance'=>$date_de_naissance));
    $req->closeCursor();

}
function modificationadmin($nom, $prenom, $mot_de_passe, $salt, $iv, $email, $date_de_naissance){
    $ID=$_SESSION['ID'];
    $db=dbConnect();
    $req=$db->prepare("UPDATE `administrateur` SET `nom` = :nom, `prénom` = :prenom, `Adresse mail` = :email, `date_de_naissance` = :date_de_naissance, `mot_de_passe` = :mot_de_passe, `salt` = :salt, `iv` = :iv WHERE `administrateur`.`ID` = :ID ");
    $req->execute(array('nom'=> $nom, 'prenom'=> $prenom, 'email'=>$email, 'mot_de_passe'=> $mot_de_passe, 'salt'=> $salt, 'iv'=> $iv, 'ID'=> $ID,'date_de_naissance'=>$date_de_naissance));
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
function deleteadmin($ID){
    $db=dbConnect();
    $req=$db->prepare("DELETE FROM `administrateur` WHERE (`ID`=:ID)");
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
    $salt=$data[0][7];
    $iv=$data[0][8];
    $req->closeCursor();
    $id=NULL;
    $photo='vide';
    $message='vide';
    $req2=$db->prepare("INSERT INTO `administrateur` VALUES (:ID,:photo,:nom,:prenom,:email,:date_de_naissance,:mdp,:salt,:iv,:message)");
    $req2->execute(array('ID'=>$id,'photo'=>$photo,'nom'=>$nom,'prenom'=>$prénom,'email'=>$email,'date_de_naissance'=>$date_de_naissance,'mdp'=>$mdp,'salt'=>$salt,'iv'=>$iv,'message'=>$message));
    $req2->closeCursor();
    deleteuser($ID);
}
function down_user($ID){
    $db=dbConnect();
    $req=$db->prepare("SELECT * FROM `administrateur` WHERE (`ID`=:ID)");
    $req->execute(array('ID'=>$ID));
    $data=$req->fetchAll();
    $nom=$data[0][2];
    $prénom=$data[0][3];
    $email=$data[0][4];
    $date_de_naissance=$data[0][5];
    $mdp=$data[0][6];
    $salt=$data[0][7];
    $iv=$data[0][8];
    $req->closeCursor();
    $id=NULL;
    $photo='vide';
    $message='vide';
    $req2=$db->prepare("INSERT INTO `client` VALUES (:ID,:photo,:nom,:prenom,:email,:date_de_naissance,:mdp,:salt,:iv,:message)");
    $req2->execute(array('ID'=>$id,'photo'=>$photo,'nom'=>$nom,'prenom'=>$prénom,'email'=>$email,'date_de_naissance'=>$date_de_naissance,'mdp'=>$mdp,'salt'=>$salt,'iv'=>$iv,'message'=>$message));
    $req2->closeCursor();
    deleteadmin($ID);

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
function search($user,$type){
    $db=dbConnect();
    if($type=='client'){
        $reqclient=$db->prepare("SELECT `nom`,`prénom`,`ID` FROM `client` WHERE `nom`=:nom");
        $reqclient->execute(array('nom'=>$user));
        $data1=$reqclient->fetchAll();
        if(sizeof($data1)==0){
            echo ("<script>alert(\"Ce client n'existe pas ! \")</script>");
            return("vide");
        }
        else{

            $result1=array($data1[0][0],$data1[0][1],$data1[0][2]);
            return($result1);
        }

    }
    if ($type=='admin'){
        $reqadmin=$db->prepare("SELECT `nom`,`prénom`,`ID` FROM `administrateur` WHERE `nom`=:nom");
        $reqadmin->execute(array('nom'=>$user));
        $data2=$reqadmin->fetchAll();
        if(sizeof($data2)==0){
            echo ("<script>alert(\"Cet administrateur n'existe pas ! \")</script>");
            return ("vide");
        }
        else{
            $result2=array($data2[0][0],$data2[0][1],$data2[0][2]);
            return($result2);
        }


    }

}
function visumessage($destinataire,$expéditeur)
{
    $db = dbConnect();
    $req = $db->prepare("SELECT `Contenu`,`Destinataire`,`Expéditeur` FROM `message` WHERE `Destinataire`=? AND `Expéditeur`=? OR `Destinataire`=? AND `Expéditeur`=?  ORDER BY `Date_et_heure` ");
    $req->execute(array( $destinataire, $expéditeur,$expéditeur,$destinataire));
    $data = $req->fetchAll();
    return ($data);
}
function InsertMessage($date_et_heure,$expediteur,$destinataire,$contenu){
    $db = dbConnect();
    $req = $db->prepare("INSERT INTO `message` (`Date_et_heure`,`Expéditeur`,`Destinataire`,`Contenu`) VALUES (:date_et_heure,:expediteur,:destinataire,:contenu)");
    $req->execute(array('date_et_heure' => $date_et_heure, 'expediteur' => $expediteur, 'destinataire' => $destinataire, 'contenu' => $contenu));
    $req->closeCursor();

}
function modifmessage($contenu,$Id){
    $db=dbConnect();
    $req=$db->prepare("UPDATE `message` SET `Contenu`=:contenu WHERE `ID`=:ID");
    $req->execute(array('contenu'=>$contenu,'ID'=>$Id));
    $req->closeCursor();

}
function getallconv($nom){
    $db=dbConnect();
    $req=$db->prepare("SELECT DISTINCT `Destinataire` FROM `message` WHERE `Expéditeur`=:nom AND `Destinataire`!=:admin ");
    $req->execute(array('nom'=>$nom,'admin'=>"Administrateur"));
    $data=$req->fetchAll();
    $req2=$db->prepare("SELECT DISTINCT `Expéditeur` FROM `message` WHERE `Destinataire`=:nom  ");
    $req2->execute(array('nom'=>$nom));
    $data2=$req2->fetchAll();
    return(array($data,$data2));
}
function InsertTicket($date_et_heure,$nom,$explication){
    $db = dbConnect();
    $req = $db->prepare("INSERT INTO `message` (`Date_et_heure`,`Expéditeur`,`Destinataire`,`Contenu`) VALUES (:date_et_heure,:expediteur,:destinataire,:contenu)");
    $req->execute(array('date_et_heure' => $date_et_heure, 'expediteur' => $nom, 'destinataire' => "Administrateur", 'contenu' => $explication));
    $req->closeCursor();
    echo ("<script>alert('Votre ticket a bien été envoyé ! ')</script>");
}
function GetTicket(){
    $admin="Administrateur";
    $db=dbConnect();
    $req=$db->prepare("SELECT `Expéditeur`,`Contenu`,`Date_et_heure` FROM `message` WHERE `Destinataire`=? ORDER BY `Date_et_heure` ");
    $req->execute(array($admin));
    $data=$req->fetchAll();
    return($data);
}
function GetDetailTicket($name,$date){
    $db=dbConnect();
    $req=$db->prepare("SELECT `Date_et_heure`,`Contenu` FROM `message` WHERE `Date_et_heure`=? AND `Expéditeur`=?  ");
    $req->execute(array($date,$name));
    $data=$req->fetchAll();
    return($data);
}
function DeleteTicket($name,$date){
    $db=dbConnect();
    $req=$db->prepare("DELETE  FROM `message` WHERE `Date_et_heure`=? AND `Expéditeur`=?  ");
    $req->execute(array($date,$name));
}
function SelectResult($ID){
    $db=dbConnect();
    $req=$db->prepare("SELECT * FROM `resultat` WHERE `Id client`=:ID ORDER BY `Date_et_heure` ");
    $req->execute(array("ID"=>$ID));
    $data=$req->fetchAll();
    return($data);
}
function SelectUnit($nom){
    $db=dbConnect();
    $req=$db->prepare("SELECT `unité de mesure`  FROM `capteur` WHERE `Nom`=:nom");
    $req->execute(array("nom"=>$nom));
    $data=$req->fetchAll();
    return($data);
}

