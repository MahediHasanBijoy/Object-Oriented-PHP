<?php 
/*
To clone an object is to create a copy of an object. The clone keyword allows you to perform a shallow copy of an object. By combining the clone keyword and __clone() magic method, you can perform a deep copy of an object.

It’ll be easier to understand the clone, shallow copy, and deep copy concepts via examples.

 */

class Person
{
	public $name;

	public function __construct($name)
	{
		$this->name = $name;

	}
}

$bob = new Person('Bob');
// Copying object via assignment
// assign bob to alex and change the name

$alex = $bob;

$alex->name = 'Alex';

// var_dump($bob);
// var_dump($alex);

// In this example, both $bob and $alex reference the same object in the memory. When we change the property of an object, it reflects in both references.

/*-------- Copying object using the clone keyword ----------*/

$john = new Person('John');
// clone an object
$messi = clone $john;
$messi->name = 'Messi';

// show both objects
var_dump($john);
var_dump($messi);


// In this example, the clone keyword creates a copy of the Person object. There are two objects in the memory. Therefore, changing the property of one object doesn’t affect the other:
 ?>
