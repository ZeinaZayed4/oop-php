<?php

class Database
{
	private string $host = 'localhost';
	private string $username = 'root';
	private string $password = '';
	private string $dbname = 'oop';
	
	protected function connect(): PDO
	{
		$dsn = "mysql:host=$this->host;dbname=$this->dbname";
		$pdo = new PDO($dsn, $this->username, $this->password);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		
		return $pdo;
	}
}