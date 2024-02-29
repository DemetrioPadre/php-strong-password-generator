<?php
//controllare sempre se il form è stato inviato
$form_sent = !empty($_GET);

if ($form_sent) { //se il form è stato inviato allora
    $password_lenght = $_GET['password-lenght'];
    //per essere valido deve contenere i parametri richiesti e li inseriamo tramite funzione
    if (str_contains($password_lenght, $array_upper) && str_contains($password_lenght, $array_lower) && str_contains($password_lenght, $array_numbers) && str_contains($password_lenght, $array_symboli)) {
        $password_valid = true; // con validità TRUE
    } else {
        $password_valid = false; //altrimenti se non li contiene è false
    }
}






$array_upper = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
$array_lower = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
$array_numbers = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
$array_symboli = array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '{', '}', '[', ']', '|', ':', ';', '"', '\'', '<', '>', ',', '.', '?', '/');


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 mx-5">
        <h1>BENVENUTI NEL GENERATORE DI PASSWORD PIù SICURO AL MONDO</h1>
        <form action="index.php" method="GET" class="row">
            <div class="col-10"><label for="password-lenght" class="form-label">Generiamo la tua password </label>
                <input type="number" class="form-control" id="password-lenght" name="password-lenght" min="1" max="16">
            </div>
            <div class="col-2"> <button type="submit" class="btn btn-primary mt-4">GENERA</button></div>

        </form>
    </div>


</body>

</html>