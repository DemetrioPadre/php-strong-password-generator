<?php



$password_lenght = (int) $_GET['password-lenght'] ?? 5;

//controllare sempre se il form è vuoto
$form_sent = !empty($_GET);

//funzione
if ($form_sent) {
    $generate_password = "";

    //creiamo un ciclo per la stampa

    for ($i = 0; $i < $password_lenght; $i++) {
        //dichiarazione caratteri in una stringa poichè in array non riesco
        $string_caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_+=';
        //recuperiamo un carattere a caso
        $rand_caratt_ind = rand(0, strlen($string_caratteri) - 1);
        $rand_caratts = $string_caratteri[$rand_caratt_ind];
        // var_dump($rand_caratts); cosi controllo se mi stampa random il carattere
        $generate_password .= $rand_caratts;
    }
    var_dump($generate_password);
};







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
                <input type="number" class="form-control" id="password-lenght" name="password-lenght" value="password-lenght" min="1" max="16">
            </div>
            <div class="col-2"> <button type="submit" class="btn btn-primary mt-4 w-100">GENERA</button></div>

        </form>
    </div>


</body>

</html>