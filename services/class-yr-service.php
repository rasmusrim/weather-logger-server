<?php


class YrService {
	public function get_weather( $lat, $long ) {
		$url = 'https://api.met.no/weatherapi/locationforecastlts/1.3/?lat=' . $lat . '&lon=' . $long;

		$client  = new \GuzzleHttp\Client();
		$request = $client->request( 'GET', $url );

		$body = $request->getBody()->getContents();

		$xml  = simplexml_load_string( $body );
		$now = $xml->product->time[0];
		$weather_stats = new WeatherStats();
		$weather_stats->set_cloudiness((string)$now->location->cloudiness['percent'][0] );
		$weather_stats->set_pressure((string)$now->location->pressure['value'][0] );
		$weather_stats->set_humidity((string)$now->location->humidity['value'][0] );
		$weather_stats->set_temperature((string)$now->location->temperature['value'][0] );
		$weather_stats->set_low_clouds((string)$now->location->lowClouds['percent'][0] );
		$weather_stats->set_medium_clouds((string)$now->location->mediumClouds['percent'][0] );
		$weather_stats->set_high_clouds((string)$now->location->highClouds['percent'][0] );
		print_r($now);
		print_r($weather_stats);

		die();
	}
}
