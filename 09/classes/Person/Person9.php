<?php

namespace Person;

class Person9
{
	public string $name;
	public int $age;
	
	public function __construct(string $name, int $age)
	{
		$this->name = $name;
		$this->age = $age;
	}
	
	public function getPerson(): string
	{
		return "$this->name is $this->age years old!<br/>";
	}
}