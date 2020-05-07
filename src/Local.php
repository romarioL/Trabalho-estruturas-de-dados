<?php

namespace Src;

class Local 
{
	private float $latitude;
	private float $longitude;

	public function __construct(float $latitude, float $longitude)
	{
		$this->latitude = $latitude;
		$this->longitude = $longitude;
	}

	public function getLatitude() : float
	{
		return $this->latitude;
	}

	public function setLatitude(float $latitude)
	{
		$this->latitude = $latitude;
	}

	public function getLongitude() : float
	{
		return $this->longitude;
	}

	public function setLongitude(float $longitude)
	{
		$this->longitude = $longitude;
	}
}