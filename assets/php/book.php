<?php
require_once "databae.php";
session_start();
if(isset($_SESSION['user_id'])){
    if($_SESSION['verify'] == 1){
        if(isset($_GET['book'])){
            $getmail = mysqli_query($conn, "SELECT * FROM `tutors` WHERE `USERID`='".$_GET['book']."'");
            if(mysqli_num_rows($getmail)){
                $data = mysqli_fetch_assoc($getmail);
                send_mail($data['MAIL'], $data['CONTACT']);
            }
        }
    }    
}

function send_mail($email, $cont){
    require '../../assets/mail/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    
    //$mail->SMTPDebug = 3;                               // Enable verbose debug output
    
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'ujwal.ediify@gmail.com';                 // SMTP username
    $mail->Password = 'Ujwal@1234';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    
    $mail->setFrom('ujwal.ediify@gmail.com');
    $mail->addAddress($_SESSION['EMAIL']);     // Add a recipient
    $mail->addAddress($email);               // Name is optional
    $mail->addReplyTo('kujwal147@gmail.com');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');
    
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML
    
    $mail->Subject = 'Mail For Making Connection';
    $mail->Body    = ' <p style="text-align: center;">CONNECTING MAIL</p>
    <p>
    Tutor Email &Contact : '.$email." ".$cont.'
    Learner Email : '.$_SESSION['EMAIL'].'
    Now You can Start your Session on any platform<br>
    can communicate and decide<br>
    in case you are nearby you can also have offline sessions.
    </p> 
    <p>
    Thanks & Regards
    ONLINE TUTORS.
    </p>
    ';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        header("Location: ../../index.php?commailsent");
    }    
}
?>