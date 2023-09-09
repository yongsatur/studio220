<?php

	/*$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	$name = htmlspecialchars($name);
	$email = htmlspecialchars($email);
	$phone = htmlspecialchars($phone);

	$name = urldecode($name);
	$email = urldecode($email);
	$phone = urldecode($phone);

	$name = trim($name);
	$email = trim($email);
	$phone = trim($phone);

	echo $name;
	echo "<br>";
	echo $email;*/

	$errors = '';
	$my_email = 'aurorainmadtown@gmail.com';
	if(empty($_POST['name'])  || 
	   empty($_POST['email']) || 
	   empty($_POST['message']))
	{
		$errors .= "\n Error: all fields are required";
	}

	$name = $_POST['name']; 
	$email = $_POST['email']; 
	$message = $_POST['message']; 

	if (!preg_match(
	"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email))
	{
		$errors .= "\n Error: Invalid email address";
	}

	if( empty($errors))

	{

		$to = $my_email;

		$email_subject = "Письмо с сайта от: $name";

		$email_body = "You have received a new message. ".

		" Here are the details:\n Name: $name \n ".

		"Email: $email_address\n Message \n $message";

		$headers = "From: $myemail\n";

		$headers .= "Reply-To: $email";

		mail($to,$email_subject,$email_body,$headers);

	}

?>