<?php

use PHPMailer\PHPMailer\PHPMailer;

if(!empty($_POST["send"])) {
    require_once ('phpmailer/class.phpmailer.php');
    
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = TRUE;
    
    $mail->Port = 587;
    
    $mail->Username = "kepsticker.customerservice@gmail.com";
    $mail->Password = "zwxdsyagajxqpgiy";
    
    $mail->Mailer = "smtp";
    
    if (isset($_POST["email"])) {
        $email = $_POST["email"];
    }
    if (isset($_POST["name"])) {
        $name = $_POST["name"];
    }
    if (isset($_POST["subject"])) {
        $subject = $_POST["subject"];
    }
    if (isset($_POST["message"])) {
        $message = $_POST["message"];
    }
    $mail->SetFrom($email, $name);
    $mail->AddReplyTo($email, $name);
    $mail->AddAddress("kepsticker.customerservice@gmail.com"); // set recipient email address
    
    $mail->Subject = $subject;
    $mail->WordWrap = 80;
    $mail->MsgHTML($message);
    
    $mail->IsHTML(true);
    
    $mail->SMTPSecure = 'tls';
    $mail->Host = 'smtp.gmail.com';
    
    if (! empty($_FILES['attachment'])) {
        $count = count($_FILES['attachment']['name']);
        if ($count > 0) {
            // Attaching multiple files with the email
            for ($i = 0; $i < $count; $i ++) {
                if (! empty($_FILES["attachment"]["name"])) {
                    
                    $tempFileName = $_FILES["attachment"]["tmp_name"][$i];
                    $fileName = $_FILES["attachment"]["name"][$i];
                    $mail->AddAttachment($tempFileName, $fileName);
                }
            }
        }
    }
    if (! $mail->Send()) {
        $message = "Problem in sending email";
        $type = "error";
    } else {
        $message = "Mail sent successfully";
        $type = "success";
    }
}
