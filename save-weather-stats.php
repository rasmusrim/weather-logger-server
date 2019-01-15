<?php
require 'vendor/autoload.php';
require 'config.php';

require 'services/class-yr-service.php';

require 'models/class-weather-stats.php';

$firebase = new \Firebase\FirebaseLib( DEFAULT_URL, DEFAULT_TOKEN );

$yr_service = new YrService();

$result = $yr_service->get_weather( 59.942736, 10.849637 );

print_r( $result->getBody() );

// --- storing an array ---
$test     = [
	'foo'    => 'bar',
	'i_love' => 'lamp',
	'id'     => 42
];
$dateTime = new DateTime();
$firebase->set( DEFAULT_PATH . '/' . $dateTime->format( 'c' ), $test );

// --- storing a string ---
$firebase->set( DEFAULT_PATH . '/name/contact001', 'John Doe' );

// --- reading the stored string ---
$name = $firebase->get( DEFAULT_PATH . '/name/contact001' );

print( $name );