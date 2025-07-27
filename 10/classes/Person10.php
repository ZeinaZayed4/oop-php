<?php

class Person10
{
    private string $name;
    private string $eyeColor;
    private int $age;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}