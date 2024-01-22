<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Frontend</title>
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
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    background: #6c6c6ce2(61, 57, 57, 0.5);
    background-color: #5d5c5caa;
    backdrop-filter: blur(10px);
        }
    
    .updateskillabout {
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

        .main-insert11 {
            text-align: center;
        }

        .table-head11 {
            margin-bottom: 20px;
            color: #fefefe;
        }

        .formskill {
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 8px;
            margin-top: 1rem;
            color: #292a2b;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            caret-color: #1c9926;
            margin-bottom: 0.4rem;
            border: 2px solid #c3c2c2;
            border-radius: 5px;
            outline: none;
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
        #aboutform input::placeholder {
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
        


</style>
<body>
    <?php
      require('./connection.php');
      session_start();  

      $id = $_GET['skillupdateid'];

      $record = "SELECT * FROM `skills` WHERE id = $id";
      $data = mysqli_query($con, $record);
      
      // Check if the query was successful
      if ($data) {
          $row = mysqli_fetch_array($data);
      } 
     ?>
    <div class="updateskillabout" id="updateskillabout">

      <div class="main-insert11">

      <h1 class="table-head11">Update Frontend Skills </h1>

      <div class="formskill">

      <form action="" method="post" enctype="multipart/form-data" id="aboutskillform">

      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

         <!-- Name -->
         <label for="Skills_desc">Skills Desc:</label>
         <input type="text" id="skills_desc" placeholder="Description here...." name="skills_desc" value="<?php echo $row['skills_desc']; ?>" >

         <!-- Name -->
         <label for="skills_icon">Skills Icon:</label>
         <input type="text" id="skills_icon" placeholder="<i> bx bx-fa-php <i/>" name="skills_icon" value="<?php echo $row['skills_icon']; ?>"  required>

         <label for="skills_title">Skills Title:</label>
         <input type="text" id="skills_title" placeholder="Enter subtitle" name="skills_title" value="<?php echo $row['skills_title']; ?>"  required>

         <label for="skills_level">Skills Level:</label>
         <input type="text" id="skills_level" placeholder="Enter subtitle" name="skills_level" value="<?php echo $row['skills_level']; ?>"  required>

            <div class="home-submit-btn">
                <button type="submit" name="update_skills_box">Update</button>
            </div>

      </form>
      </div>
      </div>
    </div>

    <?php

      if(isset($_POST['update_skills_box'])){
          
        // $id = $_GET['aboutupdateid'];
        // print_r($_POST);
        // print_r($_GET);

        $id = $_GET['skillupdateid'];
  
        // $about_box_icon = $_POST['about_box_icon'];
        // $about_box_title = $_POST['about_box_title'];
        // $about_box_subtitle = $_POST['about_box_subtitle'];

        $skills_desc = mysqli_real_escape_string($con, $_POST['skills_desc']);
        $skills_icon = mysqli_real_escape_string($con, $_POST['skills_icon']);
        $skills_title = mysqli_real_escape_string($con, $_POST['skills_title']);
        $skills_level = mysqli_real_escape_string($con, $_POST['skills_level']);
        
        

        $query = "UPDATE `skills` SET `skills_desc`='$skills_desc',`skills_icon`='$skills_icon',`skills_title`='$skills_title',`skills_level`='$skills_level' WHERE $id = id";
        $run2 = mysqli_query($con, $query);

       if($run2){
          echo "<script>alert('Updated');</script>";
          echo "<script>window.location.href='adminindex.php#abouttableskills';</script>";
        }
        else {
          echo "<script>alert('Sorry Data Not Updated');</script>";
        //   echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
          echo "<script>window.location.href='adminindex.php#abouttableskills';</script>";
        }
      }
        
    ?>
</body>
</html>