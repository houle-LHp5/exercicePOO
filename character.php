<?php 

class Character {
    private $health;
    private $rage;

    function __construct($health,$rage)
    {
        $this->health = $health;
        $this->rage = $rage;

    }

    public function getHealth(){return $this ->health;}
    public function setHealth($health){$this ->health = $health;}

    public function getRage(){return $this ->rage;}
    public function setRage($rage){$this ->rage = $rage;}

}

