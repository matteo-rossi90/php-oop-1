<?php

// create un file index.php in cui:
//  - è definita una classe ‘Movie’
//    => all’interno della classe sono dichiarate delle variabili d’istanza
//    => all’interno della classe è definito un costruttore
//    => all’interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

//dichiarare la classe Movie e le variabili d'istanza
class Movie{
    
    public $name;
    public $actors;
    public $duration;
}

//dichiarare le istanze della classe
$ring = new Movie();
$ring->name = "Il Signore degli Anelli - La Compagnia dell'Anello";
$ring->actors = ['Ian McKellen', 'Orlando Bloom', 'Kate Blanchett'];
$ring->duration = 3;

var_dump($movie1->name);
var_dump($movie1->actors);
var_dump($movie1->duration);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    
</body>
</html>