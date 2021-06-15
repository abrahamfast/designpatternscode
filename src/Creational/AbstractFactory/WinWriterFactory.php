<?php 

namespace App\Creational\AbstractFactory;

use App\Creational\AbstractFactory\Contracts\WriterFactory;
use App\Creational\AbstractFactory\Writers\{WinCsvWriter, WinJsonWriter};
use App\Creational\AbstractFactory\Contracts\{CsvWriter, JsonWriter};


class WinWriterFactory implements WriterFactory
{
	public function createCsvWriter(): CsvWriter
	{
		return new WinCsvWriter();
	}

	public function createJsonWriter(): JsonWriter
	{
		return new WinJsonWriter();
	}
}