<?php

// Regular class
require_once 'classes/SimpleClass.php';

$obj = new SimpleClass();

$obj->helloWorld();
echo '<br/>';

// Anonymous class
$newObj = new class()
{
	public function helloWorld(): void
	{
		echo "Hello World from anonymous class!";
	}
};

$newObj->helloWorld();
