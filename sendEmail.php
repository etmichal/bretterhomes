<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST["firstName"]) && isset($_POST["email"])) {

    
    //Variables from form
    $firstName = trim(htmlspecialchars($_POST["firstName"]));
    $lastName = trim(htmlspecialchars($_POST["lastName"]));
    $email = trim(htmlspecialchars($_POST["email"]));
    $message = trim(htmlspecialchars($_POST["message"]));
    $tele = trim(htmlspecialchars($_POST["tele"]));
    $emailSubject = $firstName . " " . $lastName . " inquery";
    $from = "BretterHomesMailer@gmail.com"; //email account it's sending from
    $to = "schornack0707@gmail.com"; //email account it will send out to

    $message = "Message from: " . $firstName . " " . $lastName  .  nl2br("\nContact email: ") . $email . nl2br("\nContact number: ") . $tele . nl2br("\n\nMessage: ") . $message;

    require_once("plug-ins/PHPmailer/src/PHPMailer.php");
    require_once("plug-ins/PHPmailer/src/SMTP.php");
    require_once("plug-ins/PHPmailer/src/Exception.php");

    //create new mail action
    $mail = new PHPMailer(TRUE);

    //SMTP Settings
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure= "ssl";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = "465";
    $mail->Username = "BretterHomesMailer@gmail.com";
    $mail->Password = "skwwfdalqivdxrek";
    $mail->SMTPDebug = 4;


    //Email Settings
    $mail->isHTML(true); //from isHTML(isHtml: true)
    $mail->setFrom($from);
    $mail->addAddress($to); //from AddAddress(address: $email);
    $mail->Subject = $emailSubject;
    $mail->Body = $message;

    if($mail->send()) {
        $response =  "Successs!";
    } else {
        $response = "Error Occured: " . $mail->ErrorInfo;
    }
    exit(json_encode(array("response" => $response)));
}


?>