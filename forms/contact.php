<?php

// ini_set('display_errors', 1);
// error_reporting(E_ALL);

require '../include/Exception.php';
require '../include/PHPMailer.php';
require '../include/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// terima request
$email = $_POST['email'];
$location = $_POST['location'];
$budget = $_POST['budget'];
$no_hp = $_POST['phone'];
$msg = $_POST['message'];

try {
$mail = new PHPMailer();
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
// $email->ajax = true;
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
// $mail->SMTPSecure = 'tls';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 465;
$mail->Password = 'vollaspss';
$mail->Username = 'noreplyvollaspss@gmail.com';
$mail->Subject = 'Pesanan Baru';
$mail->setFrom($email);
// $mail->addAddress('yepiaprianus@gmail.com');
$mail->addAddress('violaconsultant17@gmail.com');
// include html
$mail->isHTML(true);  
$filename = "../include/email.html";
$file_contents = file_get_contents($filename);
$file_contents = str_replace("no_telp", "$no_hp", $file_contents);
$file_contents = str_replace("email_nya", "$email", $file_contents);
$file_contents = str_replace("budget_nya", "$budget", $file_contents);
$file_contents = str_replace("location_nya", "$location", $file_contents);
$file_contents = str_replace("msg_nya", "$msg", $file_contents);

// $test = $file_contents->getElementsByTagId();

$mail->Body = $file_contents;

/**
 * Requires the "PHP Email Form" library
 * The "PHP Email Form" library is available only in the pro version of the template
 * The library should be uploaded to: vendor/php-email-form/php-email-form.php
 * For more info and help: https://bootstrapmade.com/php-email-form/
 */
// Replace contact@example.com with your real receiving email address
// $receiving_email_address = 'abitegar69@gmail.com';

// if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
//   include( $php_email_form );
// } else {
//   die( 'Unable to load the "PHP Email Form" Library!');
// }

// $contact = new PHP_Email_Form;
// $contact->ajax = true;

// $contact->to = $receiving_email_address;
// $contact->from_name = $_POST['phone'];
// $contact->from_email = $_POST['email'];
// $contact->subject = $_POST['budget'].' - '.$_POST['location'];

// // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
// /*

// $contact->smtp = array(
//   'host' => 'smtp.gmail.com',
//   'username' => 'akuntsaya01@gmail.com',
//   'password' => '',
//   'port' => '465'
// );
// */

// $contact->add_message( $_POST['name'], 'From');
// $contact->add_message( $_POST['email'], 'Email');
// $contact->add_message( $_POST['message'], 'Message', 10);

// echo $contact->send();
  if ($mail->send()) {
    echo "OK";
  }else{
    echo "failed";
  }
} catch (Exception $th) { 
  echo $th;
}
$mail->smtpClose();