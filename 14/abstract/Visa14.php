<?php

abstract class Visa14
{
	public function visaPayment(): string
	{
		return "Perform a payment";
	}
	
	public abstract function getPayment();
}