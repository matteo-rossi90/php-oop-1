<?php

require_once __DIR__ . '/../Model/Movie.php';
require_once __DIR__ . '/../Model/Cast.php';
require_once __DIR__ . '/../Model/Genre.php';

//dichiarare le istanze della classe

$db = [
    
    new Movie("Il Signore degli Anelli - Compagnia dell'Anello", "ring_fellowship.jpg", new Cast(['Elijah Wood', 'Ian McKellen', 'Orlando Bloom', 'Cate Blanchett']), 2.9, 'Peter Jackson', new Genre(['Fantasy', 'Azione', 'Avventura'])),
    new Movie("Harry Potter e il Principe Mezzosangue", "potter_halfblood.jpg", new Cast(['Daniel Radcliff', 'Emma Watson', 'Rupert Grint', 'Maggie Smith']), 3.0, 'David Yates', new Genre(['Fantasy', 'Azione', 'Commedia'])),
    new Movie("Inception","inception.jpg", new Cast (['Leonardo DiCaprio', 'Joseph Gordon-Levitt', 'Elliot Page', 'Tom Hardy']), 2.5, 'Christopher Nolan', new Genre(['Sci-Fi', 'Thriller', 'Azione'])),
    new Movie("Titanic","titanic.jpg", new Cast (['Leonardo DiCaprio', 'Kate Winslet', 'Billy Zane', 'Kathy Bates']), 3.2, 'James Cameron', new Genre(['Drammatico', 'Romantico', 'Storico'])),
    new Movie("La La Land","lalaland.jpg", new Cast (['Ryan Gosling', 'Emma Stone', 'John Legend', 'Rosemarie DeWitt']), 2.1, 'Damien Chazelle', new Genre(['Musical', 'Romantico', 'Drammatico'])),
    new Movie("Il Padrino","padrino.jpg",  new Cast (['Marlon Brando', 'Al Pacino', 'James Caan', 'Diane Keaton']), 2.9, 'Francis Ford Coppola', new Genre(['Crime', 'Drammatico']))

];