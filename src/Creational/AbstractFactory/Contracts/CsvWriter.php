<?php 

namespace App\Creational\AbstractFactory\Contracts;

interface CsvWriter
{
	public function write(array $line): string;
}