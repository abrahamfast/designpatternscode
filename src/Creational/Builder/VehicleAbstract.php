<?php 

namespace App\Creational\Builder;

abstract class VehicleAbstract
{
	protected array $parts;
	protected function setPart(string $key, object $value)
	{
		if (!in_array($key, $this->parts)) {
			$this->parts[$key] = $value;
		}
	}
}