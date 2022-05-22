<?php 
/*
Code reuse is one of the most important aspects of object-oriented programming. In PHP, you use inheritance to enable code reuse in different classes with the same inheritance hierarchy.

PHP only supports single inheritance: a child class can inherit only from one single parent.

So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.

Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).

A trait is similar to a class, but it is only for grouping methods in a fine-grained and consistent way. PHP does not allow you to create an instance of a Trait like an instance of a class. And there is no such concept of an instance of a trait.
 */

trait message1 {
public function msg1() {
    echo "OOP is fun! ";
  }
}

trait message2 {
	public function msg2(){
		echo 'OOP reduces code duplication';
	}
}

class Welcome {
  use message1;
}

class Welcome2 {
	use message1, message2;
}

$obj = new Welcome();
$obj->msg1();
echo "<br>";

$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2();
 ?>