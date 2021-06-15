<?php 

namespace App\Creational\AbstractFactory\Writers;

use App\Creational\AbstractFactory\Contracts\JsonWriter;

class UnixJsonWriter implements JsonWriter
{
	public function write(array $data, bool $formatted)
	{
		return json_encode($data, $formatted ? JSON_PRETTY_PRINT : 0);
	}
}