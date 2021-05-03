<?php
require 'baza.php';
?>
<!DOCTYPE html>
<html>
<head>

<link rel = "stylesheet" href = "izgled.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>RentACar-Webapp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        img {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 200px;
        }
    </style>
</head>
<body>
<ul class="nav nav-tabs">
    <li class="active"><a href = "index.php">Pregled uporabnikov</a></li>
    <li><a href = "PregledOglasov.php">Pregled Oglasov </a></li>
    <li><a href = "Aktivnioglasi.php">Zasedeni časi </a> </li>
    <li><a href = "izpiskrajev.php">Izpis Krajev</a></li>
    <li><a href = "grafi.php">Grafi </a> </li>

</ul>

</body>
</html>