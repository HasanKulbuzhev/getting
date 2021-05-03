<?php 
require_once './class/User.php';
require_once './class/Student.php';
require_once './class/Programmer.php';
$hasankulbuzhev = new Student('hasan',18,'30-12-2003');
print_r($hasankulbuzhev->getCalc());
$hasan = new Programmer('User',19);
print_r($hasan->getLangs());


