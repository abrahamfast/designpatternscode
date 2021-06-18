<?php 

namespace App\Creational\Builder\Contracts;
use App\Creational\Builder\VehicleAbstract;

interface BuilderInterface
{
	public function addWheel();
	public function addEngine();
	public function addDoors();
	public function createVehicle();
	public function getVehicle(): VehicleAbstract;
}