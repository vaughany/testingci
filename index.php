<?php

//require 'PasswordHash.php';
//$t_hasher = new PasswordHash(8, false);
//$pwd = 'youBastard()';
//echo '<p>Hashed "' . $pwd . '":  ' . $t_hasher->HashPassword( $pwd ) . '</p>';


$now = time();
$istodayaprilfirst = ( date( 'n', $now ) == 4 && date ( 'j', $now ) == 1 ) ? 'yes' : 'no';
echo '<p>Is it April 1st today? '.$istodayaprilfirst.'</p>';


$now    = time();
$year   = date( 'y', $now );
$month  = date( 'm', $now );
if ( $month >= 8 && $month <= 12 ) {
    $acadyear = $year . '/' . ( $year + 1 );
} else {
    $acadyear = ( $year - 1) . '/' . $year;
}

echo '<p>Current academic year: ' . $acadyear . '</p>';

$needle 	= 'ploppy';
$haystack 	= 'Mr Wee Jock Poo Pong McPlop';
$pos = stripos( $haystack, $needle );
if ( $pos === false ) {
	echo '<p>strpos: (false)</p>';
} else {
	echo '<p>strpos: ' . $pos . '</p>';
}
