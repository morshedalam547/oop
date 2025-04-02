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

	class Student{
		public $name;
		public $age;
		public $roll;
		public $department;
	
		public function __construct($name,$age,$roll,$department){
			$this->name=$name;
			$this->age=$age;
			$this->roll=$roll;
			$this->department=$department;
		}
	
		public function showStudentInfo(){
			echo "Name: $this->name <br>";
			echo "Age: $this->age <br>";
			echo "Roll: $this->roll <br>";
			echo "Department: $this->department <br>";
		}
	}
	$student1 = new Student("Morshed", 25, 101, "CSE");
	$student1->showStudentInfo();
	echo "<br>";
	$student2 = new Student("Sakib", 30, 102, "EEE");
	$student2->showStudentInfo();
	echo "<br>";
	
	
	class Student2{
		public $name;
		public $age;
		public $roll;
		public $department;
	
		public function __construct($name,$age,$roll,$department){
			$this->name=$name;
			$this->age=$age;
			$this->roll=$roll;
			$this->department=$department;
		}
	
		public function showStudentInfo(){
			echo "Name: $this->name <br>";
			echo "Age: $this->age <br>";
			echo "Roll: $this->roll <br>";
			echo "Department: $this->department <br>";
		}
	}		
	
	$student3 = new Student2("Shakib", 35, 103, "BBA");




	class Fund{
		private $fund = 0;

		public function getFund(){
			return $this->fund;
		}

		public function addFund($amount){
			$this->fund += $amount;
		}
	}
	$ourFund = new Fund();
	$ourFund->addFund(1000);
	echo $ourFund->getFund();
	echo "<br>";
	$ourFund->addFund(500);
	echo $ourFund->getFund();
	echo "<br>";
	$ourFund->addFund(2000);
	echo $ourFund->getFund();
	echo "<br>";