<?php 

namespace Test;

use PHPUnit\Framework\TestCase;
use App\Creational\Builder\{TruckBuilder, Truck, Director};

class BuilderTest extends TestCase
{
	public function testCanBuildTruck()
		{
			$truckBuilder = new Director();
			$truck = $truckBuilder->build(new TruckBuilder);

			$this->assertInstanceOf(Truck::class, $truck);
		}	
}