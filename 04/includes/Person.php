<?php

class Person
{
	protected string $first = "Zeina";
	public string $last = "Zayed";
	private int $age = 23;
}

class Pet extends Person
{
	public function owner(): string
	{
		$a = $this->first;
		return $a;
	}
}
