
<?php 

class Fruit{
	public $name;
	public $color;

	public function __construct($name, $color){
		$this->name = $name;
		$this->color = $color;
	}

	public function intro(){
		echo "The fruit is {$this->name} and the color is {$this->color}";
	}
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit{

	public function message(){
		echo "Am I a fruit or a berry? <br>";
		return $this;
	}
}

class Mango extends Fruit{
	public $variance;

	public function __construct($name, $color, $variance){
		$this->variance = $variance;
		// calling parent class constructor
		parent::__construct($name, $color);
	}
}

$strawberry = new Strawberry('Strawberry', 'red');
$mango = new Mango('Mango', 'Yellow', 'Gopalbhog');


$strawberry->message()->intro();

// echo $mango->variance;
// echo $mango->name;
// echo $mango->color;
// $strawberry->intro();

 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Inheritance</title>
 </head>
 <body>
 	
 </body>
 </html>