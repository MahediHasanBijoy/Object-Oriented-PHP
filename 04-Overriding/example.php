<?php 
/*
Call the overridden method in the overriding method

When you override a method, you will have two versions of the same method: one in the parent class and the other in the child class.

If you call the method of the parent class in the method in the child class, you cannot use $this keyword like this:


 */

class Robot
{
	public function greet()
	{
		return 'Hello!';
	}
}

// class Android extends Robot
// {
// 	public function greet()
// 	{
// 		$greeting = $this->greet();
// 		return $greeting . ' from Android.';
// 	}
// }


/*
The $this->greet() will call itself indefinitely.

To call the greet() method of the Robot class, you need to use the parent with the scope resolution operator (::) like the following:
 */


class Android extends Robot
{
	public function greet()
	{
		$greeting = parent::greet();
		return $greeting . ' from Android.';
	}
}


$android = new Android();

echo $android->greet();

 ?>