
<?php

//dichiarare la classe Movie e le variabili d'istanza
class Movie
{
    //variabili d'istanza
    public $title;
    public $image;
    public $cast;
    public $duration;
    public $director;
    public $genre;

    //definire il costruttore di Movie
    function __construct($_title, $_image, $_cast, $_duration, $_director, $_genre)
    {
        $this->title = $_title;
        $this->image = $_image;
        $this->cast = $_cast;
        $this->duration = $_duration;
        $this->director = $_director;
        $this->genre = $_genre;
    }

    //definire un metodo per convertire la durata in ore e minuti
    public function getFormatDuration(){
        $hours = floor($this->duration); // ore
        $minutes = ($this->duration - $hours) * 60; // minuti
        return "{$hours} ore e " . round($minutes) . " minuti";
    }

}
