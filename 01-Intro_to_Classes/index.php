<?php 
	/* Classes are like blueprints for objects.*/
	class User {
		// Properties
		public $username = 'bijoy';
		public $email = 'bijoy@gmail.com';

		// Methods
		public function addFriend(){
			return $this->username. ' Added a new friend.';
		}

	}

	// creating object of User class
	$userOne = new User();
	$userTwo = new User();

	echo $userOne->username.'<br>';
	echo $userOne->addFriend().'<br>';

	// Updating the properties for a userTwo
	$userTwo->username = 'Tony';
	$userTwo->email = 'tony@gmail.com';

	// Outputting userTwo
	echo $userTwo->username.'<br>';
	echo $userTwo->email.'<br>';
	echo $userTwo->addFriend().'<br>'; 

	// printing the class name 
	// echo 'the class is '. get_class($userOne).'<br>';

	// Getting the properties and methods of a class
/*	print_r(get_class_vars('User'));
	echo '<br>';
	print_r(get_class_methods('User'));*/

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP OOP Tutorials</title>
</head>
<body>

</body>
</html>