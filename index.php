<?php
$name =$email =$password = "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
$name =Validateinput($_POST['name']) ;
$email= Validateinput($_POST['email']);
$password =Validateinput($_POST['password']) ;

$isSuccess = true;
$isUpload = false;
if(empty($name)){
$nameError = 'This field can not be empty';
$isSuccess = false;
}
if(empty($email)){
$emailError = 'This field can not be empty';
$isSuccess = false;
}
if(empty($password)){
$passwordError = 'This field can not be empty';
$isSuccess = false;
}

function Validateinput($data){
	$data = htmlspecialchars($data);//remove  special characters HTML
	$data = trim($data);//remove espace
	$data = stripslashes($data);//remove slach
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<form action="">
	
	name:<input type="text" name="name">
	<span class='error'><?php echo $nameError; ?></span>
	email : <input type="email" name="email" id="">
	<span class='error'><?php echo $emailError; ?></span>
	password :<input type="password" name="password">
	<span class='error'><?php echo $passwordError; ?></span>
	<input type="submit" value="btn">
</form>
</body>
</html>