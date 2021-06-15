<?php 

namespace Test;

use PHPUnit\Framework\TestCase;
use App\Creational\AbstractFactory\UnixWriterFactory;
use App\Creational\AbstractFactory\Contracts\CsvWriter;
use App\Creational\AbstractFactory\Contracts\JsonWriter;
use App\Creational\AbstractFactory\Contracts\WriterFactory;

class AbstractFactoryTest extends TestCase
{

	public function provideFactory()
	{
		return [
			[new UnixWriterFactory],
		];
	}

	/**
	 * @dataProvider provideFactory
	 */

	public function testCanCreateCsvWriterOnUnix(WriterFactory $writerFactory)
	{
		$this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
	}

}