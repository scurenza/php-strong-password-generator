<?php
include_once __DIR__ . "/partials/function.php";

session_start();


$chars = [
    "A", "B", "C", "D", "E", "F", "G", "H", "I", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "z"
];
$nums = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
$syms = ["£", "$", "&", "*", "_", "-"];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLE -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Strong Password Generator</title>

</head>

<body>
    <section class="wrapper">
        <h2 class="text-center">Strong Password Generator</h2>
        <div class="form">
            <form action="index.php" method="GET">
                <div class="m-3">
                    <label for="length">Lunghezza Password:</label>
                    <input type="text" name="length" id="length">
                </div>
                <div class="m-3">
                    <button class="btn btn-primary" type="submit">Invia</button>
                    <button class="btn btn-secondary" type="reset">Annulla</button>
                    <a href="index.php">Ritorna alla Home</a>
                </div>
            </form>
            <div class="m-3 p-2 border border-dark d-inline">
                <span>La tua password è: </span>
                <?php include __DIR__ . "/partials/password.php"; ?>
            </div>
        </div>
    </section>
</body>

</html>