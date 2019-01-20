<?php
require 'vendor/autoload.php';
require 'config.php';

require 'services/class-yr-service.php';

require 'models/class-weather-stats.php';

$firebase = new \Firebase\FirebaseLib( DEFAULT_URL, DEFAULT_TOKEN );

$yr_service = new YrService();

$result = $yr_service->get_weather( 59.942736, 10.849637 );


$dateTime = new DateTime();
$firebase->set( DEFAULT_PATH . '/weather_stats/' . $dateTime->format( 'd-m-Y H:00' ), json_encode((array)$result) );
