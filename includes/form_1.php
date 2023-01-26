<?php	
	if (empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['input_819']) && strlen($_POST['input_819']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	
	$name = $_POST['name'];
	$name = $_POST['name'];
	$input_819 = $_POST['input_819'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$to = 'info@turntabl.io'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from turntabl website.";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nName: $name \nInput_819: $input_819 \nEmail: $email \nMessage: $message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\r\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>