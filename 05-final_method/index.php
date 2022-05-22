<?php 
/*

The final method

To prevent the method in the child class from overriding the method in the parent class, you can prefix the method with the final keyword:


 */

// public final function methodName(){
// 	//...
// }

class Robot
{
	public function greet()
	{
		return 'Hello!';
	}

	final public function id()
	{
		return uniqid();
	}
}

// If you attempt to override the id() method from the Android class, you’ll get an error. For example:

class Android extends Robot
{
	public function greet()
	{
		$greeting = parent::greet();

		return $greeting . ' from Andoid.';
	}

	public function id()
	{
		return uniqid('Android-');
	}
}

// Error: Cannot override final method Robot::id()
 ?>