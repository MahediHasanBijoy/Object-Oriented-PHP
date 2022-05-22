<?php 
/*
	PHP polymorphism using an interface

	The following example is the same as the above except that it uses an interface instead of an abstract class.

 */


// First, define an interface called Greeting that has the greet() method. The greet() method returns a greeting message:


interface Greeting{
	public function greet();
}

// Second, define the English, German, and French classes that implement the Greeting interface:

class English implements Greeting
{
	public function greet()
	{
		return 'Hello!';
	}
}

class German implements Greeting
{
	public function greet()
	{
		return 'Hallo!';
	}
}

class French implements Greeting
{
	public function greet()
	{
		return 'Bonjour!';
	}
}


// Third, define the greeting() function that accepts an array of objects that implements the Greeting interface:

function greeting($greeters)
{
	foreach ($greeters as $greeter) {
		echo $greeter->greet() . '<br>';
	}
}

// Finally, define an array of the Greeting objects and pass it to the greeting() function:

$greeters = [
	new English(),
	new German(),
	new French(),
];

greeting($greeters);



/*


Summary

	* Polymorphism allows objects of different classes to respond differently to the same message.

	* Use interfaces or abstract classes to implement polymorphism in PHP.
	* 
 */

 ?>