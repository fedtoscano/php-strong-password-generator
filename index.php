<?php
// require_once __DIR__.'/login.php';
session_start();

if(isset($_POST["username"])){
    $_SESSION["username"] = $_POST["username"];
}

if(isset($_POST["password"])){
    $_SESSION["password"] = $_POST["password"];
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
    <h1>Benvenuto <?php echo $_SESSION["username"]?>!</h1>
    <h3>Il tuo nome utente: <?php echo $_SESSION["username"]?></h3>
    <h3>La tua password: <?php echo $_SESSION["password"]?></h3>
    
</body>
</html>


