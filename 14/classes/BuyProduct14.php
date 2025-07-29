<?php

class BuyProduct14 extends Visa14
{
	public function getPayment(): string
	{
		return $this->visaPayment();
	}
}