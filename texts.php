<?php
$text = $_GET['text'];
$censure = $_GET['censure'];
$censured_text = str_replace($censure, '***', $text);
$unce_length = strlen($text);
$cen_length = strlen($censured_text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testi</title>
     <!-- bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <!-- original text -->
        <div class="row">
            <div class="col pt-5">
                <h2>Testo Originale</h2>
                <p> <?= $text ?> </p>
                <p>Il paragrafo è composto da <?= $unce_length ?> caratteri</p>
            </div>
        </div>

        <!-- censored text -->
        <div class="row pt-5">
            <div class="col">
            <h2>Testo Censurato</h2>
                <p> <?= $censured_text ?> </p>
                <p>Il paragrafo è composto da <?= $cen_length ?> caratteri</p>
            </div>
        </div>
    </div>
</body>
</html>