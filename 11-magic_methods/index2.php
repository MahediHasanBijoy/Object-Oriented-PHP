<?php 
/*------- PHP __clone magic method --------*/

// The __clone() is a magic method with the following syntax:

// function __clone():void

// If you define the clone() method, PHP will execute it automatically when the cloning completes. The clone() is useful when you want to change the properties of the copied object.


// Shallow copy
class Address
{
	public $street;

	public $city;
}

class Person
{
	public $name;

	public $address;

	public function __construct($name)
	{
		$this->name = $name;
		$this->address = new Address();
	}
}

// The person class has the address property as a reference.
// The following creates a new Person object called $bob and assigns the properties of the address property:

$bob = new Person('Bob');
$bob->address->street = 'North 1st street';
$bob->address->city = 'Dhaka';

// var_dump($bob);

/*
The var_dump() shows two objects Person (#1) and Address(#2). The Person object has the address property that references the Address object.

The following creates a copy of the $bob object and assigns it to $alex. It also changes the value of the $name property to 'Alex':
 */

$alex = clone $bob;
$alex->name = 'Alex';

// var_dump($alex);

// The var_dump() shows the new Person object (#3) which is a copy of the Person object (#1). However, the address property of the new Person object still references the same Address object:

// It means that both Person objects have the address property that references the same Address object. Changing the Address object from $alex will affect $bob:

$alex->address->street = '1 Apple Park Way';
$alex->address->city = 'Cupertino';

var_dump($bob);

 ?>