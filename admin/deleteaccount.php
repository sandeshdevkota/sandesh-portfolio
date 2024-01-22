<?php
 require('connection.php');
 session_start();

 // Delete YOUR ACCOUNT

 if (isset($_POST['delete_account'])) {

    $usernamedel = mysqli_real_escape_string($con, $_POST['usernamedel']);
    $emaildel = mysqli_real_escape_string($con, $_POST['emaildel']);
    $passworddel = mysqli_real_escape_string($con, $_POST['passworddel']);

    // Query the database to check if the provided credentials match
    $query = "SELECT * FROM `registered_users` WHERE `username`='$usernamedel' AND `email`='$emaildel'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_assoc($result);

        // Verify password
        if (password_verify($passworddel, $row['password'])) 

        {
            // Password is correct, delete the user account
            $deleteQuery = "DELETE FROM `registered_users` WHERE `username`='$usernamedel' AND `email`='$emaildel'";
            $deleteResult = mysqli_query($con, $deleteQuery);

            if ($deleteResult) {
                // Account deleted successfully
                echo "<script>alert('Account deleted successfully');</script>";
                // Redirect or perform additional actions as needed
                echo "<script>window.location.href='login.php';</script>";
            } else {
                // Error deleting account
                echo "<script>alert('Error deleting account');</script>";
            }
        } 
        else 
        {
            // Incorrect password
            echo "<script>alert('Incorrect password');</script>";
            echo "<script>window.location.href='adminindex.php';</script>";
        }

        } 
        else 
        {
        // User not found
        echo "<script>alert('User not found');</script>";
        echo "<script>window.location.href='adminindex.php';</script>";
        }

        // Close the database connection
         mysqli_close($con);
      }


?>