<?php
/**
 * Requires the "PHP Email Form" library
 * The library should be uploaded to: vendor/php-email-form/php-email-form.php
 */

// Replace contact@example.com with your real receiving email address
$receiving_email_address = 'echogeniustechnologies@gmail.com';

if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
    include($php_email_form);
} else {
    die('Unable to load the "PHP Email Form" Library!');
}

$subscribe = new PHP_Email_Form;
$subscribe->ajax = true;

$subscribe->to = $receiving_email_address;
$subscribe->from_email = $_POST['email'];
$subscribe->subject = "New subscription request"; // Change the subject as per your requirement

// Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
/*
$subscribe->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
);
*/

$subscribe->add_message($_POST['email'], 'Email');

echo $subscribe->send();
?>
