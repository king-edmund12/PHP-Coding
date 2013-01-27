<?php
/*
* @licence Attribution-NonCommercial , http://creativecommons.org/licenses/by-nc/3.0/deed.en_US
* @author Eddy K.
* @example email_script.php?email_addr=example@example.com&subject=Hello&message=Hi
*/

// Get information from the browser URL
$email_addr = $_GET['email_addr'];
$subject = $_GET['subject'];
$message = $_GET['from'];

//Send the message.
mail ($email_addr , $subject , $message) or die (error_log());;

//Display the outcome.
echo('Message Sent!');

?>