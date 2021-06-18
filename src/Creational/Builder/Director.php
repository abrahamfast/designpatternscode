<?php 

namespace App\Creational\Builder;

use App\Creational\Builder\VehicleAbstract;
use App\Creational\Builder\Contracts\BuilderInterface;


class Director
{
	public function build(BuilderInterface $builder): VehicleAbstract
	{
		$builder->createVehicle();
		$builder->addWheel();
		$builder->addDoors();
		return $builder->getVehicle();
	}
}