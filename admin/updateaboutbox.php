<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update About Box</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }
    body{
        background-image: url(../img/port1.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    .main-update-field{
        background-color: #5d5c5caa;
        backdrop-filter: blur(6px);
        height: 100vh;
        width: 100%;
        display: grid;
        place-items: center;  
    }
    #aboutboxform{
    display: block;
    margin: auto;
    padding: 20px;
    width: auto;
    height: fit-content !important;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    background: #6c6c6ce2(61, 57, 57, 0.5);
    background-color: #5d5c5caa;
    }
    /* Style for labels */
#aboutboxform label {
    display: block;
    margin-bottom: 5px;
    margin-top: 1rem;
    color: #292a2b;
    font-family: "poppins";
}

 #about_box_icon {
    caret-color: #1c9926;
    width: 100%;
    padding-top: 0.4rem;
    padding-bottom: 0.4rem;
    margin-bottom: 0.4rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;

    /* box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white; */
  }
  #about_box_title {
    caret-color: #1c9926;
    width: 100%;
    padding-top: 0.4rem;
    padding-bottom: 0.4rem;
    margin-bottom: 0.4rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;
    /* box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white; */
  }
  #about_box_subtitle {
    caret-color: #1c9926;
    width: 100%;
    padding-top: 0.4rem;
    padding-bottom: 0.4rem;
    margin-bottom: 1.5rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;

    /* box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white; */
  }
  #aboutboxform input::placeholder {
    color: gray;
  }
  #aboutboxform input::placeholder{
    color: #5d5c5c;
    padding-left: 0.5rem;
}
#aboutboxform input:focus{
    outline: none;
    box-shadow: inset 0px 0px 15px 10px rgba(224, 222, 222, 0.704);
}
.update-submit-btn{
    display: flex;
    justify-content: center;
    padding-top: 1rem;
}
.update-submit-btn button{
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
.update-submit-btn button:hover{
    background-size: 0 100%, 100% 100%;
    color: #ffffff;
    text-decoration: none;   
}
    
</style>
<body>
    <?php
    //   require('./connection.php');
//     $db_host = "localhost";
// $db_name = "testing";
// $db_pass = "";
// $db_user = "root";
$db_host = "sql12.freesqldatabase.com";
$db_name = "sql12678778";
$db_pass = "AwcNvqUyZH";
$db_user = "sql12678778";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    //   session_start();  

      $id = $_GET['aboutupdateid'];

      $record = "SELECT * FROM `about` WHERE id = $id";
      $data = mysqli_query($con, $record);
      
      // Check if the query was successful
      if ($data) {
          $row = mysqli_fetch_array($data);
      } 
     ?>

    <div class="main-update-field">


        <form action="" method="post" enctype="multipart/form-data" id="aboutboxform">

        <h1 class="table-head1" style="color: white; padding-bottom:1.3rem;">Update About Box Details</h1>

        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

         <!-- Name -->
         <label for="about_box_icon">Box icon:</label>
         <input type="text" id="about_box_icon" placeholder="<i>bx bx-users</i>" name="about_box_icon" value="<?php echo $row['about_box_icon']; ?>"  required>

         <!-- Name -->
         <label for="about_box_title">About Box Title:</label>
         <input type="text" id="about_box_title" placeholder="Enter Title" name="about_box_title" value="<?php echo $row['about_box_title']; ?>"  required>

         <label for="about_box_subtitle">About Box Subtitle:</label>
         <input type="text" id="about_box_subtitle" placeholder="Enter subtitle" name="about_box_subtitle" value="<?php echo $row['about_box_subtitle']; ?> " required>

            <div class="update-submit-btn">
                <button type="submit" name="update_about_box">Update</button>
            </div>

      </form>
    </div>

     <?php

      if(isset($_POST['update_about_box'])){
          
        // $id = $_GET['aboutupdateid'];
        // print_r($_POST);
        // print_r($_GET);

        $id = $_GET['aboutupdateid'];
  
        // $about_box_icon = $_POST['about_box_icon'];
        // $about_box_title = $_POST['about_box_title'];
        // $about_box_subtitle = $_POST['about_box_subtitle'];

        $about_box_icon = mysqli_real_escape_string($con, $_POST['about_box_icon']);
        $about_box_title = mysqli_real_escape_string($con, $_POST['about_box_title']);
        $about_box_subtitle = mysqli_real_escape_string($con, $_POST['about_box_subtitle']);
        
        

        // $query = "UPDATE `about` SET `about_box_icon`='$about_box_icon',`about_box_title`='$about_box_title',`about_box_subtitle`='$about_box_subtitle' WHERE id = $id";
        $query1 = "UPDATE `about` SET `about_box_icon`='$about_box_icon', `about_box_title`='$about_box_title', `about_box_subtitle`='$about_box_subtitle' WHERE id=$id";
        $run2 = mysqli_query($con, $query1);

       if($run2){
          echo "<script>alert('Updated');</script>";
          echo "<script>window.location.href='adminindex.php#abouttablecontainer';</script>";
        }
        else {
          echo "<script>alert('Sorry Data Not Updated');</script>";
        //   echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
          echo "<script>window.location.href='adminindex.php#abouttablecontainer';</script>";
        }
      }
        
    ?>
</body>
</html>