<?php 
// PHP protected method example

class Customer
{
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	protected function format()
	{
		return ucwords($this->name);
	}

	public function getName()
	{
		return $this->format($this->name);
	}
}


class VIP extends Customer
{
	protected function format()
	{
		return strtoupper($this->name);
	}
}


$bob = new Customer('bob allen');
// In this example, the getName() method invokes the format() method of the Customer class and returns the name with the first character of each word converted to uppercase.
echo $bob->getName().'<br>';


$alex = new VIP('alex furguson');
// This time, the getName() method calls the format() of the VIP class instead of the Customer class. Therefore, you see the name is converted uppercase.
echo $alex->getName();




 ?>