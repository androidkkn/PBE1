<?php 
require_once "Controle.php";

$c = new Controle();
$c->io();
$c->aumentaV();
$c->aumentaV();
$c->aumentaV();
$c->menu();

echo $c->menu();


?>