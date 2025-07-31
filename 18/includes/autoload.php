<?php

spl_autoload_register('autoloader');

function autoloader($className): void
{
	$url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	
	if (str_contains($url, 'includes'))
		$path = '../classes';
	else
		$path = 'classes/';
	
	$extension = '.php';
	require_once $path . $className . $extension;
}
