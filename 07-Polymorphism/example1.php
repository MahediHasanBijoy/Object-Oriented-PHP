<?php 
/*

What is polymorphism?

Polymorphism is a Greek word that literally means many forms. In object-oriented programming, polymorphism is closely related to inheritance.

Polymorphism allows objects of different classes to respond differently based on the same message.

To implement polymorphism in PHP, you can use either abstract classes or interfaces.

Polymorphism helps you create a generic framework that takes the different object types that share the same interface.

Later, when you add a new object type to the system, you don’t need to change the framework to accommodate the new object type as long as it implements the same interface.

By using polymorphism, you can reduce coupling and increase code reusability.
 */

/*
PHP polymorphism using an abstract class
 */

// First, define an abstract class named Person that has an abstract method called greet().
abstract class Person
{
	abstract public function greet();
}

// Second, define the English, German, and French classes that extend the Person class. The greet() method of each class returns a different greeting message.
class English extends Person
{
	public function greet()
	{
		return 'Hello!';
	}
}

class German extends Person
{
	public function greet()
	{
		return 'Hallo!';
	}
}

class French extends Person
{
	public function greet()
	{
		return 'Bonjour!';
	}
}

// Third, define a function called greeting() that accepts an array of Person objects and calls the greet() method of each object:
function greeting($people){
	foreach($people as $person){
		echo $person->greet(). '<br>';
	}

}

// Fourth, define an array of objects of the English, German, and French classes and pass it to the greeting() function:

$people = [
	new English(),
	new German(),
	new French()
];

greeting($people);

// Due to the specific implementation of the greet() method in each class, these objects return different greeting messages.


 ?>

