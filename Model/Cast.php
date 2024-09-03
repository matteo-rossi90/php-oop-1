
<?php

class Cast{

    public $actors = [];

    function __construct($actors){
        $this->actors = $actors; 
    }

    public function getFullActorNames(){
        return $this->actors; 
    }
}