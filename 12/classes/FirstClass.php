<?php

class FirstClass
{
	const EXAMPLE = "You can't change this!";
	
	public static function test(): string
	{
		return "This is a test!";
	}
}

$a = FirstClass::EXAMPLE;
echo $a . '<br/>';

$b = FirstClass::test();
echo $b . '<br/>';
echo '<hr/>';

class SecondClass extends FirstClass
{
	public static string $staticProperty = "A static property!";
	
	public static function anotherTest(): void
	{
		echo parent::EXAMPLE . ' ';
		echo self::$staticProperty;
	}
}

$c = SecondClass::$staticProperty;
echo $c . '<br/>';

SecondClass::anotherTest();
