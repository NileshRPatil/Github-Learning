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

// $newdate = clone $date;
// $newdate = $newdate->modify("+2 day");



//difference

// $myBirthDay = (new DateTime("18 November 1987"))->setTime(07,30,15);

// $timeUntilBirthDay = $date->diff($myBirthDay);

// echo $timeUntilBirthDay->format("%y years %m months %d days");


//compare

// $date1 = new DateTime("2018-06-19 12:00:00");

// $date2 = new DateTime("2018-06-01");

// if($date1 > $date2)
// {
// 	echo "Yes";
// }


// if((int)$date->format("Y") > 2017 )
// {
// 	echo "Yes";
// }


//set timezone

// $date->setTimezone(new DateTimeZone('Europe/London'));

// $date = new DateTime('Now', new DateTimeZone('Europe/London'));

// var_dump($date);

// var_dump(DateTimeZone::listIdentifiers());


// $timezone = 'Europe/London';

// date_default_timezone_set($timezone);

// $date = new DateTime();

// var_dump($date);

