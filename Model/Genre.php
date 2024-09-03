
<?php

class Genre{

    public $genres = [];

    function __construct($genres){
        $this->genres = $genres; 
    }

    public function getFullGenres(){
        return $this->genres; 
    }
}