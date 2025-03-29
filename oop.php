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

