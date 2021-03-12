<?php 
require "model/Character.php";
require "model/Hero.php";
require "model/Orc.php";
$hero = new Hero (2000,0,'hache de guerre de la horde',50000,'bouclier de seigneur de guerre Tauren',600);
var_dump($hero);
$orc = new Orc(500,0);
$hero->attacked(601);