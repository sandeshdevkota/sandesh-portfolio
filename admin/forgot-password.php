<?php
 require('connection.php');

// 
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;
   use PHPMailer\PHPMailer\Exception;

  function sendMail($email, $reset_token)
  {
    require ('PHPMailer/PHPMailer.php');
    require ('PHPMailer/SMTP.php');
    require ('PHPMailer/Exception.php');


    // Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings          
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'sabinbaral949@gmail.com';                     //SMTP username
        $mail->Password   = 'joyr khzj fdfe cydz';                           //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465; 

        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        // $mail->Port       = 587;
        
        //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
       
        //Recipients
        $mail->setFrom('sabinbaral949@gmail.com', 'Sandesh Portfolio');
        $mail->addAddress($email);     //Add a recipient

    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Password Reset Link from Sandesh Portfolio';
        $mail->Body    = "We got a request from you to reset your password !</b> Click the Link  Below: 
             <a href='http://localhost:7882/final portfolio new/admin/updatepassword.php?email=$email & reset_token=$reset_token'>Reset Password</a>";
    
        $mail->send();
        return true;
    } 
    catch (Exception $e) 
    {
        return false;
    }
  }

  if (isset($_POST['send-reset-link'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);

    $query = "SELECT * FROM `registered_users` WHERE `email` = '$email'";
    $result = mysqli_query($con, $query);

    if ($result) {
         if(mysqli_num_rows($result)==1)
         {
            // if  Email FOUND
            $reset_token=bin2hex(random_bytes(16));
            date_default_timezone_set('Asia/Kathmandu');
            $date=date("Y-m-d");

            $query= "UPDATE `registered_users` SET `resettoken`='$reset_token',`resettokenexpire`='$date' WHERE `email` = '$_POST[email]'";

            if(mysqli_query($con, $query) && sendMail($_POST['email'], $reset_token))
            {
                echo "<script>alert('Password Reset Link send to mail'); window.location.href='login.php';</script>"; 
            }
            else
            {
                echo "<script>alert('Server Down! Try again Later'); window.location.href='login.php';</script>"; 
            }
         }
         else
         {
            echo "<script>alert('Email not Found !'); window.location.href='forgot-password.php';</script>"; 
         }
    } else {
        echo "<script>alert('Cannot run !'); window.location.href='login.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
  margin: 0;
  padding: 0;
  font-family: 'Arial', sans-serif;
  background-color: #f2f2f2;
}

  .container {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

.login-form {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  color: #333;
}

label {
  display: block;
  margin-top: 10px;
}

input {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  margin-bottom: 10px;
  box-sizing: border-box;
}

button {
  background-color: #3498db;
  color: #fff;
  padding: 10px;
  border: none;
  width: 100%;
  cursor: pointer;
  border-radius: 5px;
}

button:hover {
  background-color: #2185d0;
}

  .forgot-password {
  text-align: center;
  margin-top: 10px;
}

 a {
  color: #3498db;
  text-decoration: none;
}

 a:hover {
  text-decoration: underline;
}

</style>

<body>
  <div class="container">

    <form method="POST" class="forgotpassword-form">
      <h1>Forget Password</h1>
      <label for="email">email:</label>
      <input type="text" id="email" name="email" placeholder="Email" required>

      <button type="submit" name="send-reset-link">Send Link</button>

      <p class="register"><a href="register.php">Register Now?</a></p>
      <p class="login"><a href="login.php">Login</a></p>
    </form>


  </div>
</body>

</html>
