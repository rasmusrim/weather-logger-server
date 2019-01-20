<?php

class WeatherStats {
	private $temperature;
	private $humidity;
	private $pressure;
	private $cloudiness;
	private $low_clouds;
	private $medium_clouds;
	private $high_clouds;

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




    /**
     * Get the value of Low Clouds
     *
     * @return mixed
     */
    public function get_low_clouds()
    {
        return $this->low_clouds;
    }

    /**
     * Set the value of Low Clouds
     *
     * @param mixed low_clouds
     *
     * @return self
     */
    public function set_low_clouds($low_clouds)
    {
        $this->low_clouds = $low_clouds;

        return $this;
    }

    /**
     * Get the value of Medium Clouds
     *
     * @return mixed
     */
    public function get_medium_clouds()
    {
        return $this->medium_clouds;
    }

    /**
     * Set the value of Medium Clouds
     *
     * @param mixed medium_clouds
     *
     * @return self
     */
    public function set_medium_clouds($medium_clouds)
    {
        $this->medium_clouds = $medium_clouds;

        return $this;
    }

    /**
     * Get the value of High Clouds
     *
     * @return mixed
     */
    public function get_high_clouds()
    {
        return $this->high_clouds;
    }

    /**
     * Set the value of High Clouds
     *
     * @param mixed high_clouds
     * 
     * @return self
     */
    public function set_high_clouds($high_clouds)
    {
        $this->high_clouds = $high_clouds;

        return $this;
    }

}
