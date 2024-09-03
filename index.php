<?php

// create un file index.php in cui:
//  - è definita una classe ‘Movie’
//    => all’interno della classe sono dichiarate delle variabili d’istanza
//    => all’interno della classe è definito un costruttore
//    => all’interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

// Bonus 1:
// Modificare la classe Movie in modo che accetti piú di un genere.

// Bonus 2:
// Creare un layout completo per stampare a schermo una lista di movies.
// Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. 
// Possiamo ad esempio organizzare il codice
// - creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
// - mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
// - organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.

require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/Model/Cast.php';
require_once __DIR__ . '/Model/Genre.php';
require_once __DIR__ . '/data/db.php';

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- foglio di stile -->
    <link rel="stylesheet" href="./css/style.css">
    <title>OOP - Movies</title>
</head>

<body>
    <header id="navbar">
        <div class="container py-2 d-flex justify-content-between align-items-center">
            <h2 class="white-text">Noleggio Film</h2>

            <ul class="navlist d-flex align-items-center white-text spacing">
                <li>
                    <a href="#">Chi siamo</a>
                </li>
                <li>
                    <a href="#">Prezzi</a>
                </li>
                <li>
                    <a href="#">Informazioni</a>
                </li>
            </ul>

        </div>
    </header>

    <div class="container spacing-container">

        <div class="row g-3 py-4">

            <?php foreach ($db as $movie): ?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="card card-box shadow-sm h-100">
                        <img src="./img/<?php echo $movie->image ?>" class="card-img-top p-4" alt="...">
                        <div class="card-body p-4">
                            <h4 class="card-title text-center py-2">
                                <?php echo $movie->title; ?>
                            </h4>
                            <div class="d-flex justify-content-between spacing">
                                <div class="col py-2">
                                    <h5 class="text-center">Attori principali</h5>
                                    <ul class="text-center">
                                        <?php foreach ($movie->cast->getFullActorNames() as $actor): ?>
                                            <li>
                                                <?php echo $actor; ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>

                                </div>

                                <div class="col py-2">
                                    <h5 class="text-center">Genere</h5>
                                    <ul class="text-center">
                                        <?php foreach ($movie->genre->getFullGenres() as $genere): ?>
                                            <li>
                                                <?php echo $genere; ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>

                                </div>


                            </div>
                            <h5 class="py-2">Durata: <?php echo $movie->getFormatDuration(); ?></h5>
                            <h5 class="py-2">Regista: <?php echo $movie->director; ?></h5>
                            <div class="btn-container d-flex justify-content-center align-items-center py-3">
                                <a href="#" class="btn-info">Altre informazioni</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>

</body>

</html>