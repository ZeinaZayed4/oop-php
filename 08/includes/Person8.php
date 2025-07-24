<?php

class Person8
{
	private string $name;
	private string $eyeColor;
	private int $age;
	
	public static int $drivingAge = 18;
	
	public function __construct(string $name, string $eyeColor, int $age)
	{
		$this->name = $name;
		$this->eyeColor = $eyeColor;
		$this->age = $age;
	}
	
	public function getDrivingAge(): int
	{
		return self::$drivingAge;
	}
	
	public static function setDrivingAge(int $drivingAge): void
	{
		self::$drivingAge = $drivingAge;
	}
}