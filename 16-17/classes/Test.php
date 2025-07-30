<?php

class Test extends Database
{
	public function getUsers(): void
	{
		$query = "SELECT * FROM `users`";
		$result = $this->connect()->query($query);
		
		while ($user = $result->fetch()) {
			echo $user['first_name'] . '<br/>';
		}
	}
	
	public function getUsersWithCondition(string $first_name, string $last_name): void
	{
		$query = "SELECT * FROM `users` WHERE `first_name` = ? AND `last_name` = ?";
		$result = $this->connect()->prepare($query);
		$result->execute([$first_name, $last_name]);
		$names = $result->fetchAll();
		
		foreach ($names as $name) {
			echo "Birth date of {$name['first_name']} {$name['last_name']} is: {$name['date_of_birth']}";
		}
	}
	
	public function setUsers(string $first_name, string $last_name, string $date): void
	{
		$query = "INSERT INTO `users`(`first_name`, `last_name`, `date_of_birth`) VALUES(?, ?, ?)";
		$result = $this->connect()->prepare($query);
		$result->execute([$first_name, $last_name, $date]);
	}
}