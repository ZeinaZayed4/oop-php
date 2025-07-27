<?php

class Person
{
	private string $name;
	public string $eyeColor;
	public int $age;
	
	public function __construct(string $name, string $eyeColor, int $age)
	{
		$this->name = $name;
		$this->eyeColor = $eyeColor;
		$this->age = $age;
	}
	
	public function setName(string $name): void
	{
		$this->name = $name;
	}
	
	public function getName(): string
	{
		return $this->name;
	}
	
	public function __destruct()
	{
		echo "The end.";
	}
}