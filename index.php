<?php

class Animal{
	public $name;
	public $age;
	public $species;

	public function __construct($name, $age, $species){
		$this->name = $name;
		$this->age = $age;
		$this->species = $species;
	}

	public function showAnimalInfo(){
		echo "Name: $this->name <br>";
		echo "Age: $this->age <br>";
		echo "Species: $this->species <br>";
	}
	// Method to make the animal sound
	public function makeSound(){
		echo "$this->name makes a sound! <br>";
	}
}



$Lion = new Animal("Simba", 5, "Lion");
	Lion->showAnimalInfo();
	Lion->makeSound();

	echo "<br>";

	$elephant = new Animal("Dumbo", 10, "Elephant");
	$elephant->showAnimalInfo();
	$elephant->makeSound();

	echo "<br>";

	$parrot = new Animal("Polly", 2, "Parrot");
	$parrot->showAnimalInfo();
	$parrot->makeSound();	


	class Dog extends Animal{
	public function makeSound(){
		echo "$this->name barks! <br>";
	}
	}

	$dog = new Dog("Buddy", 3, "Dog");
	$dog->showAnimalInfo();
	$dog->makeSound();
	echo "<br>";
