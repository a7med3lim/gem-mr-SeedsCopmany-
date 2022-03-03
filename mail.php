<?php 
if (isset($_POST['send_message_btn'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phonenumber= $_POST['phonenumber'];
	// $subject = $_POST['subject'];
	$subject = "Contact Us";
	$msg = $_POST['msg'];
	// Content-Type helps email client to parse file as HTML 
	// therefore retaining styles
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$message = "<html>
	<head>
	<title>New message from website contact form</title>
	</head>
	<body>
	<h1>" . $subject . "</h1>
	<p>The Clint Name: <strong> ". $name." </strong></p>
	<p>The Clint Mail: <strong> ".$email." </strong></p>
	<p>The Clint Number: <strong> ".$phonenumber." </strong></p>
	<p>Message:</p>
	<p> ".$msg." </p>
	</body>
	</html>";
	if (mail('ahmed.ali@infasme.com', $subject, $message, $headers)) {
		header("Location: contactus.html?mailsend");
	}else{
		echo "Failed to send email. Please try again later";
	}
}
?>