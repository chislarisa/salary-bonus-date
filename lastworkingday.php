<?php

//Create an instance of now
$now = new DateTime( 'now', new DateTimeZone( 'America/New_York' ) );

//sets the absolute last day of the month based off $now
$lastdateofthemonth = new DateTime( $now->format("Y-m-t"), new DateTimeZone( 'America/New_York' ) ); 

$monthfromlastday = new DateTime( $now->format("Y-m-t"), new DateTimeZone( 'America/New_York' ) ); 
$monthfromlastday->add(new DateInterval('P12M'));
//echo $monthfromlastday->format( 'd-m-Y' );


//testing last day of month
//echo $lastdateofthemonth->format( 'd-m-Y' );


if($lastdateofthemonth->format('l') == "Saturday") { 
    $lastdateofthemonth->modify( '-1 day' );
}
elseif($lastdateofthemonth->format('l') == "Sunday") { 
    $lastdateofthemonth->modify( '-2 day' );
    //echo $lastworkingday->format( 'l' );
}

//echo $lastdateofthemonth->format( 'd-m-Y' );

if($monthfromlastday->format('l') == "Saturday") { 
    $monthfromlastday->modify( '-1 day' );
}
elseif($monthfromlastday->format('l') == "Sunday") { 
    $monthfromlastday->modify( '-2 day' );
    //echo $lastworkingday->format( 'l' );
}

//echo $monthfromlastday->format( 'd-m-Y' );


//Define our interval (12months)
$interval = new DateInterval('P1M');

//testing date interval setup
//echo $interval->format('%d days');

//Setup a DatePeriod instance to iterate between the start and end date by the interval
$period = new DatePeriod( $now, $interval, $monthfromlastday );

//Iterate over the DatePeriod instance
foreach( $period as $date ){
    //Make sure the day displayed is greater than or equal to todayy.
    //if( ){
    echo $date->format( 't-m-Y' ) . "<br />";

    //}
}



?>