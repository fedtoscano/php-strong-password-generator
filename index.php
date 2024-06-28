<?php
session_start();
require_once __DIR__."/functions.php";

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

if (isset($_SESSION["username"]) && isset($_SESSION["password"])) {
    authenticate($_SESSION["username"], $_SESSION["password"], $utenti);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php if(isset($_SESSION["isLogged"]) && $_SESSION["isLogged"]==true){ ?>
            <h1>Benvenuto <?php echo $_SESSION["username"]?>!</h1>
            <h3>Il tuo nome utente: <?php echo $_SESSION["username"]?></h3>
            <h3>La tua password: <?php echo $_SESSION["password"]?></h3>

            <h3>QUESTE INFORMAZIONI SONO RISERVATE AGLI UTENTI LOGGATI</h3>
            <a href="./logout.php">Logout</a>

    <?php } else { ?>
        <h3 style="color: red;">Accesso negato</h3>
        <p>il tuo username: <?php echo $_SESSION["username"]?> </p>
        <p>la tua password: <?php echo $_SESSION["password"]?> </p>
    <?php }?>

</body>
</html>


