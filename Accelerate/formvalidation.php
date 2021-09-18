<?php
$username = $email = $password = $confirm_password = $country = "";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$country = $_POST['country'];

if (strlen($username) < 6 or strlen($username) > 12) {
	$name_error = "Username should be between 6-12 characters.";
}
if (preg_match("/[!\"#$%&'()\*+,-\./:\\;<=>?@[\]^_`{|}~]/",$username)) {
	$name_error = "Username can only have alphanumeric characters.";
}
if (strlen($password) < 6 ) {
	$password_error = "Password should contain at least 6 characters";
}elseif (!preg_match("/[0-9]+/", $password)) {
	$password_error = "Password should contain at least one number";
}elseif (!preg_match("/[A-Z]+/", $password)) {
	$password_error = "Password should contain at least one uppercase";
}elseif (!preg_match("/[a-z]+/", $password)) {
	$password_error = "Password should contain at least one lowecase";
}elseif (!preg_match("/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:\"\<\>,\.\?\\\]/", $password)) {
	$password_error = "Password should contain at least one special character";
}
if ($password != $confirm_password) {
	$confirm_password_error = "Password doesnot match";
}

if (empty($name_error) and empty($password_error) and empty($confirm_password_error)) {
	include ('table.php');

}else{
	include ('regcode.php');
}
?>
