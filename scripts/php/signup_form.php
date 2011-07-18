<?php
include('functions.php');
$success = FALSE;

// ---------------------------- $_POST ---------------------------- \\
if(isset($_POST['do']) && $_POST['do']=='get_info') {
	//---> First Name
	$fname = stripslashes($_POST['fname']);
	if(!validateDataByType($fname, 'name') || $fname=='First Name') { $error_parts['fname'] = true; $error_message_text[] = 'First Name'; }

	//---> Last Name
	$lname = stripslashes($_POST['lname']);
	if(!validateDataByType($lname, 'name') || $lname=='Last Name' ) { $error_parts['lname'] = true; $error_message_text[] = 'Last Name'; }

	//---> Email
	$email = stripslashes($_POST['email']);
	if(!validateDataByType($email,'email')) { $error_parts['email'] = true; $error_message_text[] = 'Email'; }

	//---> Report Errors
	if(is_array($error_parts)) {
		$message = '<p class="error">Please correct the following error'.( count($error_message_text) > 1 ? 's':'' ).':<br><b>'.( is_array($error_message_text) ? implode('</b>, <b>', $error_message_text) : $error_message_text ).'</b></p>';
	} else {
		$mailto = 'webdev@sq1agency.com'; # Dev testing
// 		$mailto = 'info@guzman23foundation.org'; # Live/Production
		$mailfrom = "FROM: Guzman23Foundation.org <info@guzman23foundation.org>";
		$mailsubject = "[Guzman23Foundation.org] Information Request";
		$mailbody = ucfirst(strtolower($fname)) . " would like to receive more information about the Guzman 23 Foundation." . "\n";
		$mailbody .= "--------------------------------\n";
		$mailbody .= "First Name: " . $fname . "\n";
		$mailbody .= "Last Name: " . $lname . "\n";
		$mailbody .= "Email Address: " . $email . "\n";
		$send_mail = mail($mailto, $mailsubject, $mailbody, $mailfrom);
		
		if(!$send_mail) { 
			$message = '<p class="error">There was an error sending your request. Please try again.</p>';
		} else {
			$success = TRUE;
			$message = '<p class="message">Thank you for your interest!<br>We will respond to your request soon.</p>';
		}
	} # end success
}
// ---------------------------- end $_POST ---------------------------- \\
?>
