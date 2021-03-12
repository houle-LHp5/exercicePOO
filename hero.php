<?php

class Hero{
    private $weapon;
    private  $weaponDamage;
    private $shield;
    private $shieldValue;

function __construct($weapon, $weaponDamage, $shield, $shieldValue)
{
    $this->weapon =  $weapon;
    $this->weaponDamage = $weaponDamage;
    $this->shield =  $shield;
    $this->shieldValue = $shieldValue;
}

}

