<?php 
class Orc extends Character {
    private $_damage;
    

    /**
     * Get the value of _damage
     */ 
    public function get_damage()
    {
        return $this->_damage;
    }

    /**
     * Set the value of _damage
     *
     * @return  self
     */ 
    public function set_damage($_damage)
    {
        $this->_damage = $_damage;

        return $this;
    }
    public function __construct($setHealth,$setRage)
    {
        parent::__construct($setHealth,$setRage);
    }
}