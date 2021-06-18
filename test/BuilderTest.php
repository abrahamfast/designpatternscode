<?php 

namespace Test;

use PHPUnit\Framework\TestCase;
use App\Creational\Builder\{CarBuilder, TruckBuilder, Truck, Director, Car};

class BuilderTest extends TestCase
{
	public function testCanBuildTruck()
	{
		$truckBuilder = new Director();
		$truck = $truckBuilder->build(new TruckBuilder);

		$this->assertInstanceOf(Truck::class, $truck);
	}

	public function testCanBuildCar()
	{
		$carBuild = new Director;
		$car = $carBuild->build(new CarBuilder);
		$this->assertInstanceOf(Car::class, $car);
	}
}