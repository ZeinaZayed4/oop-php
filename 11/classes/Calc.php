<?php

class Calc
{
	public string $operator;
	public int $num1;
	public int $num2;
	
	public function __construct(string $operator, int $num1, int $num2)
	{
		$this->operator = $operator;
		$this->num1 = $num1;
		$this->num2 = $num2;
	}
	
	public function calculate(): string|int|float
	{
		match ($this->operator) {
			'add' => $result = $this->num1 + $this->num2,
			'sub' => $result = $this->num1 - $this->num2,
			'mul' => $result = $this->num1 * $this->num2,
			'div' => $result = $this->num1 / $this->num2,
			default => $result = 'Error!'
		};
		return $result;
	}
}