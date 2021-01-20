<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
	header("Location:contact.php");
    exit;
}
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$visitor_email = $_POST['semail'];
$subject = $_POST['subject'];
$sweb = $_POST['sweb'];
$message = $_POST['message'];
$name = $fname.$lname;

//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_from = $visitor_email;//<== update the email address
$email_subject = $subject;
$email_body = "You have received a new message from the user $name.\n$sweb".
    "\nHere is the message:\n $message".
    
$to = "albushead4@gmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
//$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 