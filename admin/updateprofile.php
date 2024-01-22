<?php
 require('./connection.php');
 session_start(); // Start the session
 
 // Check if the form is submitted
 if (isset($_POST['update_profile'])) {
     // Retrieve input values
     $username = $_POST['username']; // Assuming user enters username or email in the same field
     $oldPassword = mysqli_real_escape_string($con, $_POST['password']);
     $newPassword = mysqli_real_escape_string($con, $_POST['password1']);
     $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
     $email = mysqli_real_escape_string($con, $_POST['email']);
 
     $query = "SELECT * FROM `registered_users` WHERE `username` = '$username'";
     $result = mysqli_query($con, $query);
 
     if(mysqli_num_rows($result) == 1) {
         $row = $result->fetch_assoc();
 
         // Verify old password
         if (password_verify($oldPassword, $row['password'])) {
             // Password is correct, set session variables
 
             // Hash the new password
             $hashedNewPassword = password_hash($newPassword, PASSWORD_BCRYPT);
 
             // Update the user details in the database
             $updateQuery = "UPDATE `registered_users` SET `fullname`='$fullname', `email`='$email', `password`='$hashedNewPassword' WHERE `username`='$username'";
             $run_query = mysqli_query($con, $updateQuery);
 
             if ($run_query) {
                 echo "<script>alert('Updated');</script>";
                 echo "<script>window.location.href='adminindex.php#profile';</script>";
             } else {
                 echo "<script>alert('Sorry Data Not Updated');</script>";
                 echo "<script>window.location.href='adminindex.php#profile';</script>";
             }
         } else {
             // If incorrect old password
             echo "<script>alert('Incorrect Old Password'); window.location.href='adminindex.php#profile';</script>";
         }
     } else {
         // If Email or username not found
         echo "<script>alert('Email or username is not correct!'); window.location.href='adminindex.php#profile';</script>";
     }
 }
 
 
?>

<?php 
    if (isset($success) && $success === true) 
    { ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal({
                title: "Password Matched",
                text: "Updated Sucessfully",
                icon: "success",
                button: "Ok",
            }).then(function() {
                // Set a flag or indicator for successful login
                localStorage.setItem('loginSuccess', 'true'); // this code works if the section is logged in then redirect to dashboard

                window.location.href = "adminindex.php";
            });
        </script>
       <?php 
    } 
    elseif (isset($success) && $success === false)
     { ?>
        <script>
            alert("Sorry! You are not Updated !");
        </script>
       <?php 
     } 
?>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
