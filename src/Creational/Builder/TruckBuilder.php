<?php 

namespace App\Creational\Builder;

use App\Creational\Builder\Contracts\BuilderInterface;
use App\Creational\Builder\Truck;
use App\Creational\Builder\Parts\{Door,Engine,Wheel};

class TruckBuilder implements BuilderInterface
{

	protected Truck $truck;

	public function createVehicle()
	{
		$this->truck = new Truck;
	}

	public function addWheel()
	{
		$this->truck->setPart('wheelLF', new Wheel);
		$this->truck->setPart('wheelRF', new Wheel);
	}

	public function addEngine()
	{
		$this->truck->setPart('engine', new Engine);
	}

	public function addDoors()
	{
		$this->truck->setPart('doorR', new Door);
		$this->truck->setPart('doorL', new Door);
	}

	public function getVehicle(): VehicleAbstract
	{
		return $this->truck;
	}
}