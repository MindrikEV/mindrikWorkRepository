<?php

include 'Flat.php';
include 'Room.php';
include 'Human.php';

$flat1 = new Flat();

$room1 = new Room();
$room2 = new Room();
$room3 = new Room();

$flat1->addRoom($room1);
$flat1->addRoom($room2);
$flat1->addRoom($room3);

$human1 = new Human('Vasili', male);
$human2 = new Human('Irene', female);
$human3 = new Human('Niko', male);
$human4 = new Human('Julia', female);
$human5 = new Human('Deby', female);
$human6 = new Human('Kate', female);
