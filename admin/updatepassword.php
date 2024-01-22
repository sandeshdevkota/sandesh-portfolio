<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<style>
  body{
    font-family: "Poppins";
  }
  form {
    padding: 20px;
    box-shadow: 0 4px 8px rgba(143, 141, 141, 0.521);
            background-color: #e0d2d2e8;
            background: rgba(240, 235, 235, 0.863);
    border-radius: 9px;
  display: grid;
   place-items: center;
   padding-bottom: 4rem;
 
  }
  form h3{
    font-size: 2rem;
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

<?php
  require('connection.php');

  if(isset($_GET['email']) && isset($_GET['reset_token']))
  {
    date_default_timezone_set('Asia/Kathmandu');
    $date = date("Y-m-d");

    $query = "Select * from `registered_users` where `email` = '$_GET[email]' AND `resettoken` = '$_GET[reset_token]' AND `resettokenexpire` = '$date' ";
    $result = mysqli_query($con, $query);

      if($result)
      {
          if(mysqli_num_rows($result)==1)
          {
             echo"
             <div class='container'>
               <form method='POST'>
                  <h3>Create New Password</h3>
                  <input type='password' placeholder='New Password' name='password' required>
                  <button type='submit' name='updatepassword'>UPDATE</button>
                  <input type='hidden' name='email' value='$_GET[email]'>
               </form>
              </div>
             ";
          }
          else
          {
            echo "<script>alert('INvalid OR Expired Link'); window.location.href='login.php';</script>";
          }
      }
      else
      {
        echo "<script>alert('Server Down ! TRy again later'); window.location.href='login.php';</script>";
      }
  }
?>


<?php

  if(isset($_POST['updatepassword']))
  {
       $pass =password_hash($_POST['password'],PASSWORD_BCRYPT);
       $update = "UPDATE `registered_users` SET `password`='$pass',`resettoken`=NUll,`resettokenexpire`=Null WHERE `email` = '$_POST[email]' ";

       if(mysqli_query($con, $update))
       {
          echo"
           <script> 
               alert('Password Updated');
               window.location.href = 'login.php';
           </script>
          ";
       }
       else
       {
        echo"
           <script> 
               alert('Server Downn ! Try again later');
               window.location.href = 'login.php';
           </script>
          ";
       }
  }
  else
  {

  }

?>
    
</body>
</html>