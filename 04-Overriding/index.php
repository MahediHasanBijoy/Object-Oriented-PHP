<?php 
/*

Method overriding allows a child class to provide a specific implementation of a method already provided by its parent class.

To override a method, you redefine that method in the child class with the same name, parameters, and return type.

The method in the parent class is called overridden method, while the method in the child class is known as the overriding method.

 */

class Robot
{
	public function greet()
	{
		return 'Hello!';
	}
}

class Android extends Robot
{
	public function greet()
	{
		return 'Hi';
	}
}

$robot = new Robot();

echo $robot->greet().'<br>'; // Hello

$android = new Android();
echo $android->greet(); // Hi!




 ?>