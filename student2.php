<?php
include ("Student1.php");

$stud = new student();

$s = file_get_contents('store.txt');
$stud = unserialize($s);

$stud->getinformation();
