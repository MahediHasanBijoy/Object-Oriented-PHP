<?php 
/*
The protected properties and methods can be accessed from the inside of the class and any class that extends the class.

 */

// PHP protected property example

class Customer {
	protected $name;

	public function __construct($name){
		$this->name = $name;
	}

}

class VIP extends Customer {

	public function getFormattedName(){
		// ucwords() convert the first character of each word to uppercase
		return ucwords($this->name);
	}
}

$alex = new VIP('alex ferguson');
echo $alex->getFormattedName();

 ?>