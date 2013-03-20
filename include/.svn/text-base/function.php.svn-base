<?php
function date2datesql ($date) {
	$my_year = substr($date, 6);
	$my_month = substr($date, 3, 2);
	$my_day = substr($date, 0, 2);

	$datesql = "$my_year-$my_month-$my_day";

	return $datesql;
}
function datedatesql ($date) {
    if (strlen($date)>=10)
	{
	$my_year = substr($date, 0, 4);
	$my_month = substr($date, 5, 2);
	$my_day = substr($date, 8, 2);
    $datesql = "$my_day-$my_month-$my_year";
    }else
	{
	$datesql = "";
	}
	return $datesql;
}
?>