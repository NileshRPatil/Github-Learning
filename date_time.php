<?php

$date = new DateTime;

// echo $date->format('dS M Y');

// echo $date->getTimeStamp();

// var_dump($date->getTimezone());

// echo $date->getTimezone()->getName();

// $datestring = '2018-03-25';

// $date = DateTime::createFromFormat('Y-m-d',$datestring);

// echo $date->format('dS M Y');

// $date->setDate(1987,11,18);
// $date->setTime(12,30,15);

// echo $date->format('dS M Y H:i:s') , '<br>';

// $date->sub(new DateInterval('P10DT2H'));

$newdate = clone $date;
$newdate = $newdate->modify("+2 day");

var_dump($newdate);
