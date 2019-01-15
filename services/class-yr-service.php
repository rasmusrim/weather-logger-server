<?php


class YrService {
	public function get_weather( $lat, $long ) {
		$url = 'https://api.met.no/weatherapi/locationforecastlts/1.3/?lat=' . $lat . '&lon=' . $long;

		$client  = new \GuzzleHttp\Client();
		$request = $client->request( 'GET', $url );

		$body = (string) $request->getBody();
		$xml  = simplexml_load_string( $body );

		foreach ( $xml->product->time as $forecast ) {
			$weather_stats = new WeatherStats();
			$weather_stats->set_cloudiness( $forecast->location->cloudiness );


			$return_value[] = $weather_stats;
		}

		print_r( $weather_stats );
	}
}