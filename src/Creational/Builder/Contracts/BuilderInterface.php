<?php 

namespace App\Creational\Builder\Contracts;

interface BuilderInterface
{
	public function addWheel();
	public function addEngine();
	public function addDoors();
	public function createVehicle();
	public function getVehicle(): Vehicle;
}