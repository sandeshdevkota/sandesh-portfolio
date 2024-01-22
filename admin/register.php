<?php
require('connection.php');

if (isset($_POST['register'])) {
    $user_exist_query = "SELECT * FROM registered_users WHERE username ='$_POST[username]' OR email = '$_POST[email]'";
    $result = mysqli_query($con, $user_exist_query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {

            $result_fetch = mysqli_fetch_assoc($result);
            
            if ($result_fetch['username'] == $_POST['username']) {
                echo "<script>alert('$result_fetch[username] - username already taken'); window.location.href='register.php';</script>";
            } else {
                echo "<script>alert('$result_fetch[email] - email already taken'); window.location.href='register.php';</script>";
            }
        } else {
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $query = "INSERT INTO `registered_users`(`fullname`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$password')";
            if (mysqli_query($con, $query)) {
                echo "<script>alert('Registration successful'); window.location.href='login.php';</script>";
            } else {
                echo "<script>alert('Error: " . mysqli_error($con) . "'); window.location.href='login.php';</script>";
            }
        }
    } else {
        echo "<script>alert('Cannot run query'); window.location.href='login.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
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

.register-form {
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
        <form method="POST" class="register-form">
            <h1>Login</h1>
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="register">Register</button>

            <p class="forgot-password"><a href="forgot-password.php">Forgot Password?</a></p>
            <p class="forgot-password"><a href="login.php">Login now</a></p>
        </form>
    </div>
</body>
</html>
