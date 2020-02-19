<?php
// if(!isset($_POST['submit']))
// {
// 	//This page should not be accessed directly. Need to submit the form.
// 	echo "error; you need to submit the form!";
// }
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$visitor_email = $_POST['email'];
$visitor_telephone = $_POST['telephone'];
$message = $_POST['message'];
$from_user = "$first_name $last_name";

// //Validate first
// if(empty($first_name)||empty($last_name)||empty($visitor_email)||empty($visitor_telephone)||empty($message))
// {
//     echo "First name, last name, email, telephone, and a message are all mandatory in order to submit this form. Please enter in all values and re-submit.";
//     exit;
// }
//
// if(IsInjected($visitor_email))
// {
//     echo "Please enter a valid email address.";
//     exit;
// }


$email_from = "$visitor_email";//<== update the email address
$email_subject = "New SatzfydTitles.com Form Submission";
$email_body = "You have received a new message. \r\n\n" .
		"User Name: $first_name $last_name \r\n".
		"User Email: $visitor_email \r\n".
		"User Telephone: $visitor_telephone \r\n".
    "User Message: $message";

$to = "info@satzfydtitles.com";//<== update the email address
$headers = "From: $from_user <$visitor_email>\r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');


// // Function to validate against any email injection attempts
// function IsInjected($str)
// {
//   $injections = array('(\n+)',
//               '(\r+)',
//               '(\t+)',
//               '(%0A+)',
//               '(%0D+)',
//               '(%08+)',
//               '(%09+)'
//               );
//   $inject = join('|', $injections);
//   $inject = "/$inject/i";
//   if(preg_match($inject,$str))
//     {
//     return true;
//   }
//   else
//     {
//     return false;
//   }
// }

?>
