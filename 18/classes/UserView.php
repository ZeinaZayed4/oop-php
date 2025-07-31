<?php

class UserView extends User
{
	public function showUser(string $first_name): void
	{
		$user = $this->getUser($first_name);
		echo "Full name: {$user[0]['first_name']} {$user[0]['last_name']}<br/>";
		echo "Date of birth: {$user[0]['date_of_birth']}";
	}
}