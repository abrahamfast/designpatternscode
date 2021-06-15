<?php 

namespace App\Creational\AbstractFactory\Contracts;

interface JsonWriter
{
	public function write(array $data, bool $formatted): string;
}