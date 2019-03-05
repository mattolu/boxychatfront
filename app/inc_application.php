<?php


use PHPMailer\PHPMailer\PHPMailer;

require_once __DIR__.'/../vendor/autoload.php';

session_start();

define('APP_URL','localhost/cloudsea/app');
define('APP_DIR',__DIR__);

$mail = new PHPMailer(true);  // Passing `true` enables exceptions
//Server settings
//$mail->SMTPDebug = 2;                                 // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.verde-atlantic.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'solutions@verde-atlantic.com';                 // SMTP username
$mail->Password = 'zDjxfnbm/';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25 ;                                    // TCP port to connect to
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

//Recipients
$mail->setFrom('solutions@verde-atlantic.com', 'CLOUDSEA');

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="boxychat_db"; // Database name

// Connect to server and select databse.
$conn = mysqli_connect("$host", "$username", "$password",$db_name)or die("cannot connect");