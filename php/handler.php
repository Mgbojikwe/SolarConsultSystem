<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
Tested working with PHP5.4 and above (including PHP 7 )
 */

 echo "Start";

require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;

$pp = new FormHandler(); 

$validator = $pp->getValidator();
$validator->fields(['name','email'])->areRequired()->maxLength(50);
$validator->field('email')->isEmail();
$validator->field('message')->maxLength(6000);

$message = $_POST["message"];
$name = $_POST["name"];
$email = $_POST["email"];

$title = $name . " sent you a message";

$body = "Email Address: " . $email . "\nThe message is: " . $message;

echo $title . "\n";
echo $body . "\n";

// $pp = new FormHandler(); 
$pp->sendEmailTo('info@solarconsult.com'); // ← Your email here

$mailer = $pp->getMailer();
$mailer->setFrom('info@solarconsult.com','Website Contact Form');

echo $pp->process($_POST);

echo "End";

// // the message
// $msg = "First line of text\nSecond line of text";

// // use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg,70);

// $headers =  'MIME-Version: 1.0' . "\r\n"; 
// $headers .= 'From: Your name <mgbojikwechukwuebuka@gmail.com>' . "\r\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

// // send email
// mail("mgbojikwechukwuebuka@gmail.com","My subject",$msg, $headers);
?>