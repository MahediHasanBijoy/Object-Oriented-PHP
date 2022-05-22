<?php 

class User{

	public $username;
	private $email;

	public function __construct($username, $email){
		$this->username = $username;
		$this->email = $email;

	}

	public function addFriend(){
		echo $this->username.' added a new user';
	}

	// Getter
	public function getEmail(){
		return $this->email;
	}

	// Setters
	public function setEmail($email){
		if(strpos($email, '@') > -1){
			$this->email = $email;
		}else{
			echo 'Entered email is invalid! <br>';
		}
	}
}

$userOne = new User('Mahedi', 'mahedi@gmail.com');
$userTwo = new User('John', 'john@gmail.com');

// echo $userOne->username.'<br>';
// echo $userTwo->username.'<br>';

$userOne->setEmail('hasangmail.com');

echo $userOne->getEmail().'<br>';
echo $userTwo->getEmail().'<br>';



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Constructor</title>
</head>
<body>
	
</body>
</html>