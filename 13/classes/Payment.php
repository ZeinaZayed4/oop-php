<?php

interface Payment
{
	public function payNow();
}

interface LoginInterface
{
	public function loginFirst();
}

class Paypal implements Payment, LoginInterface
{
	public function loginFirst() {}
	public function payNow() {}
	
	public function paymentProcess(): void
	{
		$this->loginFirst();
		$this->payNow();
	}
}

class BankTransfer implements Payment, LoginInterface
{
	public function loginFirst() {}
	public function payNow() {}
	
	public function paymentProcess(): void
	{
		$this->loginFirst();
		$this->payNow();
	}
}

class Visa implements Payment
{
	public function payNow() {}
	public function paymentProcess(): void
	{
		$this->payNow();
	}
}

class Cash implements Payment
{
	public function payNow() {}
	public function paymentProcess(): void
	{
		$this->payNow();
	}
}

class BuyProduct
{
	public function pay(Payment $paymentType): void
	{
		$paymentType->paymentProcess();
	}	
}

$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);
