<?php

class User extends Database18
{
	protected function getUser(string $first_name): false|array
	{
		$query = "SELECT * FROM `users` WHERE `first_name` = ?";
		$result = $this->connect()->prepare($query);
		$result->execute([$first_name]);
		
		return $result->fetchAll();
	}
	
	public function setUser(string $first_name, string $last_name, $date_of_birth): void
	{
		$query = "INSERT INTO `users` (`first_name`, `last_name`, `date_of_birth`) VALUES (?, ?, ?)";
		$result = $this->connect()->prepare($query);
		$result->execute([$first_name, $last_name, $date_of_birth]);
	}
}