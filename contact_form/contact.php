<?php

try {
	if (isset($_POST['name']) && !empty($_POST["name"])) {
	    $name = $_POST['name'];
	}
	if (isset($_POST['email']) && !empty($_POST["email"])) {
	    $email = $_POST['email'];
	}
	if (isset($_POST['subject']) && !empty($_POST["subject"])) {
	    $subject = $_POST['subject'];
	}
	if (isset($_POST['message']) && !empty($_POST["message"])) {
	    $message = $_POST['message'];
	}


	//Send information to my email
	$masteremail = "bama@bamamagassa.com";
	$mastersuject = "From Contact Page on Website";
	$mastermsg1 = " Hey Bama, $name used the contact form on your website. Here is the information about $name.
	Name: $name
	E-mail: $email
	Subject: $subject
	Message: $message "; 
	mail($masteremail, $mastersuject, $mastermsg1) /* Send the message using mail() function */


	//Send email notification to person who's contacting me
	$headers = "From Bama Magassa the Realtor";
	$msg2 = "Hello! $name Thank you for contacting us. This is a contact confirmation email to let you know that your message has been sent and we will contact you as soon we read it. Thank you very much for you message. Can't wait to talk!";
	$msg3 = wordwrap($msg2, 70);
	mail($email, $headers, $msg3) /* Send the message using mail() function */

	
	/* echo "New contact was sent successfully"; */
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }

?>