<?php 

namespace App\Creational\AbstractFactory\Writers;

use App\Creational\AbstractFactory\Contracts\CsvWriter;

class WinCsvWriter implements CsvWriter
{
	public function write(array $line): string
	{
		return join(',', $line) . "\r\n";
	}
}