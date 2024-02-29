<?php
require_once __DIR__ . "/partials/function.php";
require_once __DIR__ . "/partials/init.php"


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
            <div class="col-10"><label for="password-length" class="form-label">Generiamo la tua password </label>
                <input type="number" class="form-control" id="password-length" name="password-length" value="password-length" min="1" max="16">
            </div>
            <div class="col-2"> <button type="submit" class="btn btn-primary mt-4 w-100">GENERA</button></div>

        </form>
    </div>


</body>

</html>