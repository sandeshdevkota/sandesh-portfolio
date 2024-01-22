<?php
require('./admin/connection.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$success = false; // Initialize the success flag


if (isset($_POST['send-message'])) {
    require('./admin/connection.php');
    require_once('./admin/PHPMailer/PHPMailer.php');
    require_once('./admin/PHPMailer/SMTP.php');
    require_once('./admin/PHPMailer/Exception.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'sabinbaral949@gmail.com';
        $mail->Password = 'joyr khzj fdfe cydz';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Removed SMTP debug for clarity

        $mail->setFrom($email, $name);
        $mail->addAddress("sandesh.devkota90@gmail.com");

        $mail->isHTML(true);
        $mail->Subject = "Email from - $email";
        $mail->Body = "
        <html>
        <body>
            <h3>Contact Details:</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong> $message</p>
        </body>
        </html>";

        $mail->send();

        $success = true; // Flag for successful email sending

        $contact = "INSERT INTO `contact` (`contact_name`, `contact_email`, `contact_subject`, `contact_message`) VALUES ( '$name', '$email', '$subject', '$message')";
        $contact_result = mysqli_query($con, $contact);

    } catch (Exception $e) {
        $success = false; // Flag for unsuccessful email sending
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <!-- Your head content here -->
</head>
<body>
    <!-- Your HTML content here -->

    <?php 
    if (isset($success) && $success === true) 
    { ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal({
                title: "Thank you for your concern!",
                text: "Data sent successfully!",
                icon: "success",
                button: "Aww yiss!",
            }).then(function() {
                window.location.href = "index.php#contact1";
            });
        </script>
       <?php 
    } 
    elseif (isset($success) && $success === false)
     { ?>
        <script>
            alert("Data not sent!");
        </script>
       <?php 
     } 
?>
</body>
</html>
