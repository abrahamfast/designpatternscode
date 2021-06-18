<?php 

namespace App\Creational\Builder;

use App\Creational\Builder\Contracts\BuilderInterface
use App\Creational\Builder\Car;

class CarBuilder implements BuilderInterface
{
	protected Car $car;
	public function addWheel()
	{
		$this->parts
	}

}