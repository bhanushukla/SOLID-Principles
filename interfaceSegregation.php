<?php

/**
 *
 */
interface CarInterface
{
	public function getFuel();

	public function shiftGear();

	public function steer();
}

class Car implements CarInterface {
	public function getFuel() {
		// logic to get fuel
	}

	public function shiftGear() {
		// logic to shift gear
	}

	public function steer() {
		// logic to steer
	}
}

class ElectricCar implements CarInterface {
	public function getFuel() {
		// doesn't require to get fuel
		return null;
	}

	public function shiftGear(){

	}

	public function steer() {

	}
}

class Driver {

	public function operate(Car $car)
	{
		$car->getFuel();

		$car->shiftGear();

		$car->steer();in
	}

}


 ?>
