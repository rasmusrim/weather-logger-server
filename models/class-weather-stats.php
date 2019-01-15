<?php

class WeatherStats {
	private $temperature;
	private $humidity;
	private $pressure;
	private $cloudiness;

	/**
	 * @return mixed
	 */
	public function get_temperature() {
		return $this->temperature;
	}

	/**
	 * @param mixed $temperature
	 */
	public function set_temperature( $temperature ) {
		$this->temperature = $temperature;
	}

	/**
	 * @return mixed
	 */
	public function get_humidity() {
		return $this->humidity;
	}

	/**
	 * @param mixed $humidity
	 */
	public function set_humidity( $humidity ) {
		$this->humidity = $humidity;
	}

	/**
	 * @return mixed
	 */
	public function get_pressure() {
		return $this->pressure;
	}

	/**
	 * @param mixed $pressure
	 */
	public function set_pressure( $pressure ) {
		$this->pressure = $pressure;
	}

	/**
	 * @return mixed
	 */
	public function get_cloudiness() {
		return $this->cloudiness;
	}

	/**
	 * @param mixed $cloudiness
	 */
	public function set_cloudiness( $cloudiness ) {
		$this->cloudiness = $cloudiness;
	}


}