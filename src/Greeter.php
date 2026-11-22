<?php
declare(strict_types=1);

class Greeter
{
    public function greet(string $name): string
    {
        $name = trim($name) !== '' ? trim($name) : 'World';
        return "Hello, {$name}!";
    }
}
