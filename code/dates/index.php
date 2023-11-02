<?php

$date =  time();
$first_date = new DateTime('02/01/1970');
$dateTimeStamp =  $first_date->getTimestamp();
$dateFormat =  $first_date->format('Y');
echo mktime(0, 0, 0, 7, 1, 2021).'<br>'; // 1625090400
echo mktime(0,0,0,0,0,1970).'<br>'; //0
$formateur = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::MEDIUM);
//echo ($formateur->format(time()));
//// Temps relatifs à aujourd'hui :
//echo '<br>';
//echo strtotime('yesterday noon'); // demain midi
//echo '<br>';
//echo date("d-m-Y H:i:s",strtotime('next monday')); // lundi prochain
//echo '<br>';
//echo '<br>';
//echo '<br>';
//echo strtotime('2 days ago'); // il y a 2 jours
//echo '<br>';
//echo strtotime('+3 day'); // dans 3 jours
//echo '<br>';
//echo strtotime('+2 weeks'); // dans 2 semaines
//echo '<br>';
//echo '<br>';
//echo '<br>';
//echo '<br>';
//date_default_timezone_set('Europe/Paris');
//
//echo date_default_timezone_get(), '<br>'; // Europe/Paris
//echo '<br>';
//echo '<br>';
//echo '<br>';
//echo '<br>';
//$formateur = new IntlDateFormatter('fr_FR.utf8',IntlDateFormatter::LONG,
//IntlDateFormatter::MEDIUM);
//echo ($formateur->format(time()));
//
//echo '<br>';
//echo '<br>';
//echo '<br>';
//echo '<br>';
//
//$dateTime = new DateTime('11-05-1983 00:00:00');
//echo $dateTime->format('d/m/Y à G:i:s');
//echo '<br>';
//
//$dateTime2 = new DateTime('13-10-2023 00:00:00');
//echo $dateTime2->format('d/m/Y à G:i:s');
//$diff = $dateTime->diff($dateTime2,true);
//echo '<br>';
//echo '<br>';
//
//print_r($diff);
//echo '<br>';
//echo '<br>';
//echo $diff->format("%Y %M");
//echo '<br>';
//echo '<br>';
//echo '<br>';
//echo '<br>';
//$dateTime3 = new DateTime('now', new DateTimeZone('Europe/paris'));
//
//echo $dateTime3->format("d/m/Y");
//$dateTime3->setTimezone(new DateTimeZone('UTC'));
//echo '<br>';
//echo '<br>';
//echo '<br>';
//echo '<br>';
//echo $dateTime3->format("d/m/Y");
//
//echo '<br>';
//echo '<br>';
//echo '<br>';
//echo '<br>';


$date1 =  new DateTime('today noon');
$date2 =  new DateTime('-12 day -5 hours');

$diff = $date1->diff($date2);
echo '<br>';echo '<br>';echo '<br>';echo '<br>';
echo $diff->format('%d jour %H heures');

$date1 = new DateTime('today noon');
$dans3semaine= $date1->modify("+4 weeks");
echo '<br>';echo '<br>';echo '<br>';echo '<br>';
echo $dans3semaine->format('d/m/y ');

