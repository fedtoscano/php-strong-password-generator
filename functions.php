<?php 

/**
 * Questa funzione controlla se nell'array di utenti il nome e la psw coincidono
 */
function authenticate($user, $psw, $userList){
    $_SESSION["isLogged"] = false;
    
    foreach ($userList as $username => $password) {
        if($user == $username && $psw == $password){
            $_SESSION["isLogged"] = true;
            break;
        }
    }
    
    return $_SESSION["isLogged"];
}
