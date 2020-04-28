<?php

function encryptionPassword($password){
    $iterations = 1000;
    $salt = openssl_random_pseudo_bytes(16);

    $key = hash_pbkdf2("sha256", $password, $salt, $iterations, 20);
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    
    $encryptedPassword = openssl_encrypt($password, 'aes-256-cbc', $key, 0, $iv);

    $encryptedPasswordInfo = array($encryptedPassword, $salt, $iv);

    return $encryptedPasswordInfo;
}

function encryptionPasswordCheck($password, $salt, $iv, $encryptedPasswordBDD){
    $iterations = 1000;

    $key = hash_pbkdf2("sha256", $password, $salt, $iterations, 20);
    
    $encryptedPassword = openssl_encrypt($password, 'aes-256-cbc', $key, 0, $iv);

    if ($encryptedPassword == $encryptedPasswordBDD){
        $bool = true;
    }
    else{
        $bool = false;
    }

    return $bool;
}

?>