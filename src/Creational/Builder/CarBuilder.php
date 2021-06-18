<?php 

namespace App\Creational\Builder;

use App\Creational\Builder\Contracts\BuilderInterface;
use App\Creational\Builder\Car;
use App\Creational\Builder\Parts\{Door,Engine,Wheel};

class CarBuilder implements BuilderInterface
{

	protected Car $car;

	public function createVehicle()
	{
		$this->car = new Car;
	}

	public function addWheel()
	{
		$this->car->setPart('wheelLF', new Wheel);
		$this->car->setPart('wheelRF', new Wheel);
	}

	public function addEngine()
	{
		$this->car->setPart('engine', new Engine);
	}

	public function addDoors()
	{
		$this->car->setPart('doorR', new Door);
		$this->car->setPart('doorL', new Door);
	}

	public function getVehicle(): VehicleAbstract
	{
		return $this->car;
	}

}