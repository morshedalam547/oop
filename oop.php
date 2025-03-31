<?php

class person {
	public $name;
	public $age;

	public function getPersonInfo($name,$age){
			$this->name=$name;
			$this->age=$age;

	}

public function showPersonInfo(){
	echo "name: $this->name <br>";
	echo "age: $this->age <br>";
}

}


$person1 = new person();
$person1->getPersonInfo("Morshed", 25);
$person1->showPersonInfo();
echo "<br>";
$person2 = new person();
$person2->getPersonInfo("Sakib", 30);
$person2->showPersonInfo();

echo "<br>";
$person3 = new person();	
$person3->getPersonInfo("Shakib", 35);
$person3->showPersonInfo();


echo "<br>";

class Fund{

  public $fund;
	 
	public function __construct($initialFund){
		$this-> fund = $initialFund;

	}

	public function addFund($amount){
		$this->fund += $amount;
	}

	public function deductFund($amount){
		$this->fund -= $amount;
	}

	public function getFund(){
		return "Total fund is $this->fund";
	}

}



$ourFund= new Fund(1000);
$ourFund->addFund(500);
$ourFund->deductFund(200);

echo $ourFund->getFund();
echo "<br>";
$ourFund->addFund(1000);
echo $ourFund->getFund();
echo "<br>";





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