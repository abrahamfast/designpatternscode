<?php

namespace App\Creational\AbstractFactory\Contracts;

interface WriterFactory
{
	public function createCsvWriter(): CsvWriter;
	public function createJsonWriter(): JsonWriter;
}
