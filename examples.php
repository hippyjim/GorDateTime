<?php
/**
 * Use GorDateTime in the same way you'd use the PHP DateTime object
 *
 * When you need a sensible date, use gormat() instead of format()
 */

include('GorDateTime.php');

$gordate = new GorDateTime('2015-01-01');
echo $gordate->format('l, jS \o\f F Y')." = ".$gordate->gormat('l, jS \o\f F Y')."\n\n";
//Gives: Thursday, 1st of January 2015 = Monday, 1st of March 2015

$gordate = new GorDateTime('2015-05-01');
echo $gordate->format('l, jS \o\f F Y')." = ".$gordate->gormat('l, jS \o\f F Y')."\n\n";
//Gives: Friday, 1st of May 2015 = Tuesday, 9th of Quintilis 2015

$gordate = new GorDateTime('2015-12-25');
echo $gordate->format('l, jS \o\f F Y')." = ".$gordate->gormat('l, jS \o\f F Y')."\n\n";
//Gives: Friday, 25th of December 2015 = Tuesday, 23rd of Gormanuary 2015

$gordate = new GorDateTime('2015-12-31');
echo $gordate->format('l, jS \o\f F Y')." = ".$gordate->gormat('l, jS \o\f F Y')."\n\n";
//Gives: Thursday, 31st of December 2015 = The Intermission,  of  2015



