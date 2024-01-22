<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Summary </title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<style>
    body {
            font-family: "Poppins";
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); */
    background: #6c6c6ce2(61, 57, 57, 0.5);
    background-color: #5d5c5caa;
    backdrop-filter: blur(10px);
        }
     #updatesummaryabout{
        width: 100%;
            max-width: 600px; /* Adjust the maximum width as needed */
            padding: 20px;
            box-sizing: border-box;
            /* background-color: #ecf0f3; */
            border-radius: 7px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
            background: #6c6c6ce2(61, 57, 57, 0.5); 
             background-color: #5d5c5caa;
 }
 label {
            display: block;
            margin-bottom: 4px;
            margin-top: 0.5rem;
            color: #292a2b;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 0px;
            box-sizing: border-box;
            caret-color: #1c9926;
            margin-bottom: 0.2rem;
            border: 2px solid #c3c2c2;
            border-radius: 5px;
            outline: none;
        }
  
  /* #aboutsummaryform input{
  caret-color: #1c9926;
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 0.4rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;
 } */
 .table-head22{
  color: floralwhite;
  display: grid;
  place-items: center;
  padding-bottom: 0.1rem;
 }
 .home-submit-btn{
    display: grid;
    place-items: center;
    padding-top: 1rem;
 }
 #aboutsummaryform input::placeholder {
    color: gray;
  }

 input::placeholder{
    color: #5d5c5c;
    opacity: 0.4;
  }
  input:focus{
    outline: none;
    box-shadow: inset 0px 0px 15px 10px rgba(224, 222, 222, 0.704);
 }
.home-submit-btn{
    display: flex;
    justify-content: center;
    padding-top: 1rem;
}
.home-submit-btn button{
    cursor: pointer;
    padding: 0.6rem;
    font-size: 0.9rem;
    font-weight: bolder;
    border-radius: 7px;
    border: 1px solid #3c3c3c;
    color: #1f1e1e;
    background:
          linear-gradient(
            to right,
            #f1f1f1,
            #f1f1f1
          ),
          linear-gradient(
            to right,
            #323232,
            #323232,
            #323232
        );
        background-size: 100% 100%, 100% 100%;
        background-position: 100% 100%, 100% 100%;
        background-repeat: no-repeat;
        transition: background-size 400ms ease-in-out;
}
.home-submit-btn button:hover{
    background-size: 0 100%, 100% 100%;
    color: #ffffff;
    text-decoration: none;   
}
</style>
<body>

    <?php
      require('./connection.php');
      session_start();  

      $id = $_GET['summaryupdateid'];

      $record = "SELECT * FROM `resume_summary` WHERE id = $id";
      $data = mysqli_query($con, $record);
      
      // Check if the query was successful
      if ($data) {
          $row = mysqli_fetch_array($data);
      } 
    ?>
     
    <div class="updatesummaryabout" id="updatesummaryabout">

      <div class="main-insert12">

      <!-- <span class="close-popup" id="closepopup" onclick="closepopupboxsummary()">&times;</span> -->

      <h1 class="table-head22">Update Summary Details </h1>

      <form action="" method="post" enctype="multipart/form-data" id="aboutsummaryform">

      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label for="resume_desc">Resume Desc:</label>
         <input type="text" id="resume_desc" placeholder="Enter Resume Desc" name="resume_desc" value="<?php echo $row['resume_desc']; ?>"   required>

         <!-- Name -->
         <label for="resume_name">Resume Name:</label>
         <input type="text" id="resume_name" placeholder="Enter Name" name="resume_name" value="<?php echo $row['resume_name']; ?>"   required>

         <label for="summary_desc">Summary Desc:</label>
         <input type="text" id="summary_desc" placeholder="Enter Summary Description..." name="summary_desc" value="<?php echo $row['summary_desc']; ?>"  required>

         <label for="resume_location">Location:</label>
         <input type="text" id="resume_location" placeholder="Pokhara, Nepal" name="resume_location" value="<?php echo $row['resume_location']; ?>"   required>

         <label for="resume_number">Number:</label>
         <input type="text" id="resume_number" placeholder="9812XXXXX9" name="resume_number" value="<?php echo $row['resume_number']; ?>"   required>

         <label for="resume_email">E-mail:</label>
         <input type="text" id="resume_email" placeholder="Example@gmail.com" name="resume_email" value="<?php echo $row['resume_email']; ?>"   required>

            <div class="home-submit-btn">
                <button type="submit" name="update_summary">Update</button>
            </div>

      </form>
      </div>
    </div>

    <?php

      if(isset($_POST['update_summary'])){
          
        // $id = $_GET['aboutupdateid'];
        // print_r($_POST);
        // print_r($_GET);

        $id = $_GET['summaryupdateid'];
  
        // $about_box_icon = $_POST['about_box_icon'];
        // $about_box_title = $_POST['about_box_title'];
        // $about_box_subtitle = $_POST['about_box_subtitle'];

        $resume_desc = mysqli_real_escape_string($con, $_POST['resume_desc']);
        $resume_name = mysqli_real_escape_string($con, $_POST['resume_name']);
        $summary_desc = mysqli_real_escape_string($con, $_POST['summary_desc']);
        $resume_location = mysqli_real_escape_string($con, $_POST['resume_location']);
        $resume_number = mysqli_real_escape_string($con, $_POST['resume_number']);
        $resume_email = mysqli_real_escape_string($con, $_POST['resume_email']);
        
        $query = "UPDATE `resume_summary` SET `resume_name`='$resume_name',`resume_desc`='$resume_desc',`summary_desc`='$summary_desc',`resume_location`='$resume_location',`resume_number`='$resume_number',`resume_email`='$resume_email' WHERE id = $id";
        $query_run = mysqli_query($con, $query);

        if($query_run)
         {
           echo "<script>alert('Updated');</script>";
           echo "<script>window.location.href='adminindex.php#summary-table';</script>";
         }
         else {
           echo "<script>alert('Sorry Data Not Updated');</script>";
           echo "<script>window.location.href='adminindex.php#summary-table';</script>";
         }
      }
        
    ?>
</body>
</html>