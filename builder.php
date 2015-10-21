<?php
/**
 * To prove I didn't sit there and type out all those date conversions
 *
 * This generated the $gregToDaveMap variables (apart from The Intermission - 'cos I'm lazy)
 */

include('GorDateTime.php');
$gordate = new GorDateTime();

$month = 1;
$dayOfWeek = 1;
$dayOfMonth = 1;
$weekNumber = 1;

$daysOfWeek = array(
    1 => 'Mon',
    2 => 'Tue',
    3 => 'Wed',
    4 => 'Thu',
    5 => 'Fri',
    6 => 'Sat',
    7 => 'Sun',
);

$daysOfWeekFull = array(
    1 => 'Monday',
    2 => 'Tuesday',
    3 => 'Wednesday',
    4 => 'Thursday',
    5 => 'Friday',
    6 => 'Saturday',
    7 => 'Sunday',
);

for($dayNum = 1; $dayNum <= 365; $dayNum++) {

    $monthConstant = strtoupper($gordate->gorMonths[$month]);
    $twoDigDayOfMonth = str_pad($dayOfMonth, 2, '0', STR_PAD_LEFT);
    $shortDay = $daysOfWeek[$dayOfWeek];
    $longDay = $daysOfWeekFull[$dayOfWeek];

    $monthName = $gordate->gorMonths[$month];
    $shortMonthName = $gordate->shortGorMonths[$month];
    $paddedMonth = str_pad($month, 2, '0', STR_PAD_LEFT);

    $zeroBasedDayOfTheWeek = $dayOfWeek;
    if ($dayOfWeek == 7) {
        $zeroBasedDayOfTheWeek = 0;
    }

    $suffix = 'th';
    switch($dayOfMonth) {
        case 1:
        case 21:
        case 31:
            $suffix = 'st';
            break;
        case 2:
        case 22:
            $suffix = 'nd';
            break;
        case 3:
        case 23:
            $suffix = 'rd';
            break;
        default:
            $suffix = 'th';
            break;
    }

    $zeroBasedDayOfTheYear = $dayNum-1;

    $paddedWeekNum = str_pad($weekNumber, 2, '0', STR_PAD_LEFT);

    echo "
    {$dayNum} => array(
        'd'=>'{$twoDigDayOfMonth}',
        'D'=>'{$shortDay}',
        'j'=>'{$dayOfMonth}',
        'l'=>'{$longDay}',
        'N'=>'{$dayOfWeek}',
        'S'=>'{$suffix}',
        'w'=>'{$zeroBasedDayOfTheWeek}',
        'z'=>'{$zeroBasedDayOfTheYear}',
        'W'=>'{$paddedWeekNum}',
        'F'=>self::{$monthConstant},
        'm'=>'{$paddedMonth}',
        'M'=>self::SHORT_{$monthConstant},
        'n'=>'{$month}',
        't'=>'28',
    ),";

    $dayOfWeek++;
    $dayOfMonth++;

    if ($dayOfMonth == 29) {
        $dayOfMonth = 1;
        $month++;
    }

    if ($dayOfWeek == 8) {
        $dayOfWeek = 1;
        $weekNumber++;
    }
}