<!-- Contact form PHP script -->

<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "wesongaerik@gmail.com"; // Replace xxxx@xxxx.com with your email address (mandatory!) 
    $subject = "Hello"; // Choose a custom subject (not mandatory)

    $body = "You have received a message from " . $name . " (" . $email . "):\n\n" . $message;

    $from = "From: Caroline Cherotich"; //   
    $headers = "From:" . $from . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();    
    
	require '../PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
// Set PHPMailer to use the sendmail transport
$mail->isSendmail();
//Set who the message is to be sent from
$mail->setFrom('me@carolcherotich.com', 'Caroline Cherotich Website');
//Set an alternative reply-to address
$mail->addReplyTo($email, $name);
//Set who the message is to be sent to
$mail->addAddress('cheros88@gmail.com', 'Caroline Cherotich');
//$mail->addAddress('wesongaerik@gmail.com', 'Eric Wesonga');
//Set the subject line
$mail->Subject = 'New Message from carolcherotich.com';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML("You have received a message from " . $name . " (" . $email . "):\n\n" . $message);
//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}


    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($name != '' && $email != '' && $message != '') {
                
            if (mail ($to, $subject, $body, $headers)) { 
                echo '<p style="color:#66A325;">Thanks! Your message has been sent.</p>';
            } else { 
                echo '<p style="color:#F84B3C;">Something went wrong, go back and try again!</p>'; 
            } 

        } else {
            echo '<p style="color:#F84B3C;">You need to fill in all required fields!</p>';
        }
    } else {
        echo '<p style="color:#F84B3C;">Invalid Email, please provide an correct email.</p>';
    }  

    // Use the script below if you want to use HTML emails instead

    /*

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'xxxx@xxxx.com'; // Replace xxxx@xxxx.com with your email address (mandatory!) 
    $subject = 'Hello'; // Choose a custom subject (not mandatory)

    $body = '<html><body>';
    $body .= '<em style="color: #999;">You have received a message from <strong>' . $name . '</strong> (' . $email . '):</em>';
    $body .= '<p>' . $message . '</p>';
    $body .= '</body></html>';

    $from = "From: Beetle Template"; // Replace "Beetle Template" with your site name (not mandatory)   
    $headers = "From:" . $from . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();    
                
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($name != '' && $email != '' && $message != '') {
                
            if (mail ($to, $subject, $body, $headers)) { 
                echo '<p style="color:#66A325;">Thanks! Your message has been sent.</p>';
            } else { 
                echo '<p style="color:#F84B3C;">Something went wrong, go back and try again!</p>'; 
            } 

        } else {
            echo '<p style="color:#F84B3C;">You need to fill in all required fields!</p>';
        }
    } else {
        echo '<p style="color:#F84B3C;">Invalid Email, please provide an correct email.</p>';
    }   

    */  

?>