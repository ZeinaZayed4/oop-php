<?php

class UserController extends User
{
	public function createUser(string $first_name, string $last_name, $date_of_birth): void
	{
		$this->setUser($first_name, $last_name, $date_of_birth);
	}
}