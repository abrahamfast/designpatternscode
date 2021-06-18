<?php 

namespace App\Creational\Builder;


class Director
{
	public function build(Builder $builder): Vehicle
	{
		$builder->createVehicle();
		$builder->addWheel();
		$builder->addDoors();
		return $builder->getVehicle();
	}
}