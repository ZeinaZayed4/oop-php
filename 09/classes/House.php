<?php

class House
{
	public string $houseName;
	public string $houseNr;
	
	public function __construct(string $houseName, string $houseNr)
	{
		$this->houseName = $houseName;
		$this->houseNr = $houseNr;
	}
	
	public function getAddress(): string
	{
		return "Address: $this->houseName $this->houseNr<br/>";
	}
}