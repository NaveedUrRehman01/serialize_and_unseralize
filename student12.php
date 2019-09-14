<?php
include ("Student1.php");

$stuobj = new student();
$stuobj->name = "naveed ";

$stuobj->id = '1';
$stuobj->address = "peshawar ";
$stuobj->age = '21';

$s = serialize($stuobj);
echo $s;
file_put_contents('store.txt',$s);
