<?php
// require_once __DIR__.'/login.php';
session_start();
$utenti = [
    "utente1" => "password1",
    "utente2" => "password2",
    "utente3" => "password3",
    "utente4" => "password4",
    "utente5" => "password5"
];

if(isset($_POST["username"])){
    $_SESSION["username"] = $_POST["username"];
}

if(isset($_POST["password"])){
    $_SESSION["password"] = $_POST["password"];
}

/**
 * Questa funzione controlla se nell'array di utenti il nome e la psw coincidono
 */
function authenticate($user, $psw, $userList){
    foreach ($userList as $username => $password) {
        if($user==$username && $psw==$password){
            echo "grande fra ti sei loggato";
            return true;
        }else {
            echo "mannaggia non ci siamo";
            return false;
        }
    }
}

authenticate($_SESSION["username"], $_SESSION["password"], $utenti)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Benvenuto <?php echo $_SESSION["username"]?>!</h1>
    <h3>Il tuo nome utente: <?php echo $_SESSION["username"]?></h3>
    <h3>La tua password: <?php echo $_SESSION["password"]?></h3>

    <a href="./logout.php">Logout</a>
    
</body>
</html>


