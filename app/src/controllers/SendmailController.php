<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

//From PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$app = new \Slim\App;


//Function to send mail, 
function sendVerificationEmail($email)
{      
    $mail = new PHPMailer;

    $mail->SMTPDebug=3;
    $mail->isSMTP();

    $mail->Host="smtp.mailtrap.io";
    $mail->Port=587;
    $mail->SMTPSecure="tls";
    $mail->SMTPAuth=true;
    $mail->Username="d0e60e740eb47d";
    $mail->Password="e9ec9c079ce1c5";

    $mail->addAddress($email,"User Name");
    $mail->Subject="Verify Your Email Address For StackOverFlow";
    $mail->isHTML();
    $mail->Body=" Welcome to StackOverFlow.<b><b> Please verify your email adress to continue..";
    $mail->From="lethach150699@gmail.com";
    $mail->FromName="Testslim";

    if($mail->send())
    {
        echo "Email Has Been Sent Your Email Address";
    }
    else
    {
        echo "Failed To Sent An Email To Your Email Address";
    }


}


$app->run();