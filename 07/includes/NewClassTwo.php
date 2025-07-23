<?php

class NewClassTwo
{
	private string $data = "I am a property.";
	
	public function __construct()
	{
		echo "This class has been instantiated.<br />";
	}
	
	public function getProperty(): string
	{
		return $this->data;
	}
	
	public function setNewProperty(string $data): void
	{
		$this->data = $data;
	}
	
	public function __destruct()
	{
		echo "<br/>This is the end of the class!<br />";
	}
}