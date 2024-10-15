<?php
// Include PHPMailer library files
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader if installed via Composer
require 'vendor/autoload.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Validate form data (this can be expanded with more robust validation)
    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {

        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                       // Set mailer to use SMTP
            $mail->Host       = 'smtp.gmail.com';                // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                              // Enable SMTP authentication
            $mail->Username   = 'delfinotachi@gmail.com';          // SMTP username
            $mail->Password   = 'lizksslpfyntlida';             // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = 587;                               // TCP port to connect to

            //Recipients
            $mail->setFrom('delfinotachi@gmail.com', 'Delfin Otachi'); // Your email and name
            $mail->addAddress('$email');            // Add the recipient's email address

            // Content
            $mail->isHTML(true);                                   // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = "
                <h2>Contact Request from $name</h2>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Message:</strong><br>$message</p>
            ";
            $mail->AltBody = "Name: $name\nEmail: $email\nMessage: $message"; // Plain text for non-HTML clients

            // Send the email
            if ($mail->send()) {
                echo 'Message sent successfully!';
            } else {
                echo 'Message could not be sent. Please try again later.';
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo 'Please fill in all required fields.';
    }
}
?>
