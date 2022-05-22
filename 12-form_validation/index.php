<?php 
require('user_validator.php');

if(isset($_POST['submit'])){
	// validation inputs
	$validation = new UserValidator($_POST);
	$errors = $validation->validateForm();
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./style.css">
	<title>Form Validation</title>
</head>
<body>
	<div class="new-user">
		<h2>Create new user</h2>
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

			<div class="item">
				<label for="">Username:</label>
				<input type="text" name="username" value="<?php echo $_POST['username'] ?? '' ?>">
			</div>
			<div class="error">
				<?php echo $errors['username'] ?? '' ; ?>
			</div>
			<div class="item">
				<label for="">Email:</label>
				<input type="text" name="email"  value="<?php echo $_POST['email'] ?? '' ?>">
			</div>
			<div class="error">
				<?php echo $errors['email'] ?? '' ; ?>
			</div>
			<div class="item">
				<input type="submit" name="submit" value="submit">
			</div>
		</form>
	</div>
</body>
</html>