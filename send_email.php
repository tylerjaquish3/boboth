<?php

if(isset($_POST['email'])) {
 
	$email_subject = "New message from bobothvision.com";
	$email_to = "doctors@bobothvision.com";
    // $email_to = "tylerjaquish@gmail.com";

    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
	}
	
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
	$telephone = $_POST['phone']; // not required
	$appt_request = isset($_POST['request-appt']); // not required
	if ($appt_request) {
		$appt_type = $_POST['appointment-type']; // not required
		$appt_date = $_POST['requested-date']; // not required
		$appt_time = $_POST['requested-time']; // not required
	}
    $comments = $_POST['message']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	if(!preg_match($email_exp,$email_from)) {
		$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
	}
	
	$string_exp = "/^[A-Za-z .'-]+$/";
	if(!preg_match($string_exp,$name)) {
		$error_message .= 'The name you entered does not appear to be valid.<br />';
	}
	
	if(strlen($error_message) > 0) {
		died($error_message);
	}
 
    $email_message = "Form details below.\n\n";
   
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
	$email_message .= "Telephone: ".clean_string($telephone)."\n";
	if ($appt_request) {
		$email_message .= "Appointment Requested\n";
		$email_message .= "Appointment Type: ".clean_string($appt_type)."\n";
		$email_message .= "Requested Date: ".clean_string($appt_date)."\n";
		$email_message .= "Requested Time: ".clean_string($appt_time)."\n";
	}
    $email_message .= "Comments: ".clean_string($comments)."\n";

	// create email headers
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	$success = mail($email_to, $email_subject, $email_message, $headers);  

	if ($success) {
		header('Location: index.php?success=true');
	}

}
?>