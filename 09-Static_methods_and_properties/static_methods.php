<?php 
/*
Static methods can be called directly - without creating an instance of the class first.

Static methods are declared with the static keyword:
 */

/*

Since a static method is bound to a class, not an individual instance of the class, you cannot access $this inside the method. However, you can access a special variable called self. The self variable means the current class.

 */

// The following shows how to call a static method from the inside of the class:
// self::staticMethod(arguments); 

// To call a static method from the outside of the class, you use the following syntax:
// className::staticMethod(arguments);

class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

// Call static method
// greeting::welcome();


// A class can have both static and non-static methods. A static method can be accessed from a method in the same class using the self keyword and double colon (::)
class Greeting2{
	public static function welcome(){
		echo 'Hello world';
	}

	public function __construct(){
		self::welcome();
	}
} 

// new Greeting2();


// Static methods can also be called from methods in other classes. To do this, the static method should be public:
class SomeOtherClass {
	public function message(){
		greeting::welcome();
	}
}

$obj = new SomeOtherClass();
$obj->message();


// To call a static method from a child class, use the parent keyword inside the child class. Here, the static method can be public or protected.

class domain {
  protected static function getWebsiteName() {
    return "W3Schools.com";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
 ?>