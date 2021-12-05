<?php

// Définit le fuseau horaire par défaut à utiliser.
date_default_timezone_set('UTC');

// Constante
define('LEGAL_AGE', 18);

//var
$name = "Dujardin";
$first_name = "Cédric";
$birth_date = mktime($month=10, $day=23, $year=1980);
$date_now = strtotime(mktime(date('m-d-Y')));
$date_on = mktime($month=02, $day=15, $year=2022);
$age_then = (date('Y',strtotime($date_on)) - date('Y',strtotime($birth_date)));
$age = (date('Y') - date('Y', strtotime($birth_date)));
$str_b = "Je m'appelle .$first_name. .$name. et j'ai .$age. ans";
$str_c = "Le 15/02/2022, j'aurai .$age_then. ans";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ex_variables</title>
</head>
<body>
    <h1>EXERCICE SUR LES VARIABLES</h1>
    <h2>EX 1B</h2>
    <p><?=htmlentities($str_b)?></p>
    <h2>EX 1C</h2>
    <p><?=htmlentities($str_c)?></p>
</body>
</html>
