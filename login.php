<?php
$utenti = [
    "utente1" => "password1",
    "utente2" => "password2",
    "utente3" => "password3",
    "utente4" => "password4",
    "utente5" => "password5"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <header>
        <h1>
            Login Page
        </h1>
    </header>
    <main>
        <div class="container">
            <form action="./index.php" method="post">
                <label for="username">Inserisci il tuo username</label>
                <input type="text" name="username" id="username">
                <label for="password">Inserisci la tua password</label>
                <input type="text" name="password" id="password">

                <a href="./logout.php">Logout</a>

                <button type="submit">Accedi</button>
            </form>
        </div>
    </main>
</body>
</html>