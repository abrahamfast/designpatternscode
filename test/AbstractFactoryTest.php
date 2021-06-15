<?php 

namespace Test;

use PHPUnit\Framework\TestCase;
use App\Creational\AbstractFactory\{UnixWriterFactory, WinWriterFactory};
use App\Creational\AbstractFactory\Contracts\{CsvWriter, JsonWriter};
use App\Creational\AbstractFactory\Contracts\WriterFactory;

class AbstractFactoryTest extends TestCase
{

	public function provideFactory()
	{
		return [
			[new UnixWriterFactory],
			[new WinWriterFactory]
		];
	}

	/**
	 * @dataProvider provideFactory
	 */

	public function testCanCreateCsvWriterOnUnix(WriterFactory $writerFactory)
	{
		$this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
		$this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
	}

}