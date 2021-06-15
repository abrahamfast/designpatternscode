<?php

namespace Creational\Contracts;

interface WriterFactory
{
	public function createCsvWriter(): CsvWriter;
	public function createJsonWriter(): JsonWriter;
}

