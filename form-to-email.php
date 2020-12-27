<?php
if(!isset($_POST['submit']))
{
  echo "Error; you need to submit the form.";
}

$name = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

//validate
if(empty($name)||empty($email)){
  echo "Name and email are required.";
}

$email_from = 'jling@scu.edu';
$email_subject = "Website: New Form Submission";
$email_body = "You have received a new message from: $name.\n"."email address: $email\n"."Message:\n $message".

$to = "jling@scu.edu";
$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $email \r\n";

//Send email
mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");
//done

?>
