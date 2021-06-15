<?php declare(strict_types=1); 

namespace App\Creational\AbstractFactory;

use App\Creational\AbstractFactory\Contracts\WriterFactory;
use App\Creational\AbstractFactory\Writers\{UnixCsvWriter, UnixJsonWriter};
use App\Creational\AbstractFactory\Contracts\{CsvWriter, JsonWriter};

class UnixWriterFactory implements WriterFactory
{
	public function createCsvWriter(): CsvWriter
	{
		return new UnixCsvWriter();
	}

	public function createJsonWriter(): JsonWriter
	{
		return new UnixJsonWriter();
	}
}