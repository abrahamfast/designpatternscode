<?php 

namespace App\Creational\Builder;

abstract class VehicleAbstract
{
	protected array $parts = [];
	public function setPart(string $key, object $value)
	{
		if (!in_array($key, $this->parts)) {
			$this->parts[$key] = $value;
		}
	}
}