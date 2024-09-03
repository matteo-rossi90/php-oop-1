<?php

// create un file index.php in cui:
//  - è definita una classe ‘Movie’
//    => all’interno della classe sono dichiarate delle variabili d’istanza
//    => all’interno della classe è definito un costruttore
//    => all’interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

// Bonus 1:
// Modificare la classe Movie in modo che accetti piú di un genere.

//dichiarare la classe Movie e le variabili d'istanza
class Movie
{
    //variabili d'istanza
    public $title;
    public $cast = [];
    public $duration;
    public $director;
    public $genre = [];

    //definire il costruttore di Movie
    function __construct($_title, $_cast, $_duration, $_director, $_genre)
    {
        $this->title = $_title;
        $this->cast = $_cast;
        $this->duration = $_duration;
        $this->director = $_director;
        $this->genre = $_genre;
    }

    //definire un metodo per aggiungere un nuovo attore del cast
    public function addActor(...$actors){
        foreach ($actors as $actor) {
            $this->cast[] = $actor;
        }
    }

    //definire un metodo per convertire la durata in ore e minuti
    public function getFormatDuration()
    {
        $hours = floor($this->duration); // ore
        $minutes = ($this->duration - $hours) * 60; // minuti
        return "{$hours} ore e " . round($minutes) . " minuti";
    }

    //definire un metodo per aggiungere più di un genere
    public function addGenre(...$genres){
        foreach ($genres as $genere) {
            $this->genre[] = $genere;
        }
    }
}

//dichiarare le istanze della classe
$ring = new Movie("Il Signore degli Anelli - Compagnia dell'Anello", ['Elijah Wood', 'Ian McKellen', 'Orlando Bloom', 'Cate Blanchett'], 2.9, 'Peter Jackson', ['Fantasy']);
$ring->addActor('Viggo Mortensen', 'Liv Tyler');
$ring->addGenre('Avventura' , 'Azione' );

$potter = new Movie("Harry Potter e il Principe Mezzosangue", ['Daniel Radcliff', 'Emma Watson', 'Rupert Grint', 'Maggie Smith'], 3.0, 'David Yates', ['Fantasy']);
$potter->addActor('Bonnie Wright', 'Matthew Lewis');
$potter->addGenre('Azione', 'Romantico');

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP - Movies</title>
</head>

<body>

    <h3><?php echo $ring->title; ?></h3>
    <h3>Attori:</h3>
    <ul>
        <!-- estrarre gli attori del cast -->
        <?php foreach ($ring->cast as $attore): ?>
            <li>
                <!-- stampare gli attori in una lista -->
                <?php echo $attore ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <h4>Durata: <?php echo $ring->getFormatDuration(); ?></h4>
    <h4>Regista: <?php echo $ring->director; ?></h4>
    <ul>
        <!-- estrarre i generi del cast -->
        <?php foreach ($ring->genre as $genere): ?>
            <li>
                <!-- stampare gli attori in una lista -->
                <?php echo $genere ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <h3><?php echo $potter->title; ?></h3>
    <h3>Attori:</h3>
    <ul>
        <!-- estrarre gli attori del cast -->
        <?php foreach ($potter->cast as $attore): ?>
            <li>
                <!-- stampare gli attori in una lista -->
                <?php echo $attore ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <h4>Durata: <?php echo $potter->getFormatDuration(); ?></h4>
    <h4>Regista: <?php echo $potter->director; ?></h4>
    <ul>
        <!-- estrarre i generi del cast -->
        <?php foreach ($potter->genre as $genere): ?>
            <li>
                <!-- stampare gli attori in una lista -->
                <?php echo $genere ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>