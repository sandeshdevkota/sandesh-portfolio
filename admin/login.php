
<?php
require('connection.php');
session_start();

// Check if the form is submitted
if (isset($_POST['login'])) {

    // Retrieve input values
    $usernameoremail = $_POST['username']; // Assuming user enters username or email in the same field
    $password = $_POST['password'];

    // Check if the input looks like an email
    // if (filter_var($usernameoremail, FILTER_VALIDATE_EMAIL)) {
    //     // If it's an email, search using email
    //     $sql = "SELECT * FROM `registered_users` WHERE email = ?";
    // } else {
    //     // If it's not an email, search using username
    //     $sql = "SELECT * FROM `registered_users` WHERE username = ?";
    // }

    // Prepare the SQL statement with a parameter
    // $stmt = $con->prepare($sql);
    // $stmt->bind_param("s", $usernameOrEmail);
    // $stmt->execute();
    // $result = $stmt->get_result();
    $query = "SELECT * FROM `registered_users` WHERE `email` = '$usernameoremail' OR `username` = '$usernameoremail'";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result)== 1) {

        $row = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $row['password'])) {
            // Password is correct, set session variables
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $row['username'];
            // You can add more session variables as needed

            $success = true; // Flag for successful email sending 
            
          
            // echo "   
            // <script>
            //           alert('Password Matched'); 
            //           window.location.href='adminindex.php';
            //       </script>
            //      ";

            // Redirect to a logged-in page or perform any other actions
            
        } else {
            # If incorrect password
            echo "<script>alert('Incorrect Password'); window.location.href='login.php';</script>";
            
        }
    } else {
       # If Email or username not found
       echo "<script>alert('Email or username is not correct!'); window.location.href='login.php';</script>";
       $success = false;
       
    }
}
?>






<!-- //     if ($result) 
//     {
//         if (mysqli_num_rows($result) == 1) {

//           $_SESSION['logged_in']=true;
//           $_SESSION['username']=$result_fetch['username'];

//             $result_fetch = mysqli_fetch_assoc($result);
//             if (password_verify($_POST['password'], $result_fetch['password'])) {
//                 # If password matched

//                 $_SESSION['logged_in']=true;
//                 $_SESSION['username']=$result_fetch['username'];
//                 echo "<script>alert('Password Matched'); window.location.href='adminindex.php';</script>";
//             } else {
//                 # If incorrect password
//                 echo "<script>alert('Incorrect Password'); window.location.href='login.php';</script>";
//             }
//         } else {
//             echo "<script>alert('Email or Username not registered'); window.location.href='login.php';</script>";
//         }
//     } 
//     else 
//     {
//         echo "<script>alert('Cannot run query'); window.location.href='login.php';</script>";
//     }
// } -->



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="styles.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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

    <form method="POST" class="login-form">
      <h1>Login</h1>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <button type="submit" name="login">Login</button>
      <p class="forgot-password"><a href="forgot-password.php">Forgot Password?</a></p>
      <p class="forgot-password"><a href="register.php">Register Now</a></p>
    </form>

  </div>
  <?php 
    if (isset($success) && $success === true) 
    { ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal({
                title: "Password Matched",
                text: "Go to Admin Panel",
                icon: "success",
                button: "Ok",
            }).then(function() {
                // Set a flag or indicator for successful login
                localStorage.setItem('loginSuccess', 'true'); // this code works if the section is logged in then redirect to dashboard

                window.location.href = "adminindex.php#content1";
            });
        </script>
       <?php 
    } 
    elseif (isset($success) && $success === false)
     { ?>
        <script>
            alert("Sorry! You are not logged in !");
        </script>
       <?php 
     } 
?>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
