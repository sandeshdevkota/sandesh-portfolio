<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Portfolio</title>
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
     #updateportfolioabout{
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
            margin-top: 0.3rem;
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
  
  /* #aboutportfolioform input{
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
  padding-bottom: 0rem;
 }
 .home-submit-btn{
    display: grid;
    place-items: center;
    padding-top: 1rem;
 }
 #aboutportfolioform input::placeholder {
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

       $id = $_GET['portfolioupdateid'];

       $record = "SELECT * FROM `portfolio` WHERE id = $id";
      $data = mysqli_query($con, $record);
      
      // Check if the query was successful
      if ($data) {
          $row = mysqli_fetch_array($data);
      } 

    ?>
      <div class="updateportfolioabout" id="updateportfolioabout">

      <div class="main-insert12">

      <h1 class="table-head22">Update Activities Details </h1>

      <form action="" method="post" enctype="multipart/form-data" id="aboutportfolioform">

         <!-- Name -->
         <!-- <label for="portfolio_image">Experience Title:</label>
         <input type="text" id="portfolio_image" placeholder="UI designing" name="portfolio_image"  required> -->

         <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

         <label for="portfolio_desc">Portfolio Description:</label>
         <input type="text" id="portfolio_desc" placeholder="Enter description" name="portfolio_desc" value="<?php echo $row['portfolio_desc']; ?>">

         <label for="portfolio_image">Acitivities Image:</label>
         <input type="file" id="portfolio_image" name="portfolio_image" accept="image/*" value="<?php echo $row['portfolio_image']; ?>" >
         <td ><img src="../img/<?php echo $row['portfolio_image']; ?>" height='90' width='100'></td>

         <!-- Hidden input to store existing image name -->
         <input type="hidden" name="existing_portfolio_image" value="<?php echo $row['portfolio_image']; ?>">

         <label for="portfolio_title">Title:</label>
         <input type="text" id="portfolio_title" placeholder="Enter title" name="portfolio_title" value="<?php echo $row['portfolio_title']; ?>" required>

         <label for="portfolio_subtitle">Subtitle:</label>
         <input type="text" id="portfolio_subtitle" placeholder="Enter Subtitle" name="portfolio_subtitle" value="<?php echo $row['portfolio_subtitle']; ?>"  required>

         <label for="portfolio_date">Date:</label>
         <input type="text" id="portfolio_date" placeholder="0ct, 2023" name="portfolio_date" value="<?php echo $row['portfolio_date']; ?>" required>

         <label for="portfolio_details">Acitivities Details:</label>
         <input type="text" id="portfolio_details" placeholder="Enter Details..." name="portfolio_details" value="<?php echo $row['portfolio_details']; ?>" required>

         <label for="portfolio_link">Links:</label>
         <input type="" id="portfolio_link" placeholder="https://www.php.net/" name="portfolio_link" value="<?php echo $row['portfolio_link']; ?>"  required>

            <div class="home-submit-btn">
                <button type="submit" name="update_portfolio">Update</button>
            </div>

      </form>
      </div>
    </div>

    <?php

      if(isset($_POST['update_portfolio'])){
          
        // $id = $_GET['aboutupdateid'];
        // print_r($_POST);
        // print_r($_GET);

        $id = $_GET['portfolioupdateid'];
  
        // $about_box_icon = $_POST['about_box_icon'];
        // $about_box_title = $_POST['about_box_title'];
        // $about_box_subtitle = $_POST['about_box_subtitle'];

        $portfolio_desc = mysqli_real_escape_string($con, $_POST['portfolio_desc']);
        $portfolio_title = mysqli_real_escape_string($con, $_POST['portfolio_title']);
        $portfolio_subtitle = mysqli_real_escape_string($con, $_POST['portfolio_subtitle']);
        $portfolio_date = mysqli_real_escape_string($con, $_POST['portfolio_date']);
        $portfolio_details = mysqli_real_escape_string($con, $_POST['portfolio_details']);
        $portfolio_link = mysqli_real_escape_string($con, $_POST['portfolio_link']);


         // Check if a new image is uploaded
         if ($_FILES['portfolio_image']['size'] > 0) {
          $img_location = $_FILES['portfolio_image']['tmp_name'];
          $img_name = $_FILES['portfolio_image']['name'];
          $image_destination = '../img/' . $img_name;

          // Move the uploaded file to the destination
          move_uploaded_file($img_location, $image_destination);
        } else {
          // No new image uploaded, use the existing image name
          $image_destination = mysqli_real_escape_string($con, $_POST['existing_portfolio_image']);
        }
        
        $query = "UPDATE `portfolio` SET `portfolio_desc`='$portfolio_desc',`portfolio_image`='$image_destination',`portfolio_title`='$portfolio_title',`portfolio_subtitle`='$portfolio_subtitle',`portfolio_date`='$portfolio_date',`portfolio_details`='$portfolio_details',`portfolio_link`='$portfolio_link'  WHERE id = $id";
        $query_run = mysqli_query($con, $query);

        if($query_run)
         {
           echo "<script>alert('Updated');</script>";
           echo "<script>window.location.href='adminindex.php#portfolion-table';</script>";
         }
         else {
           echo "<script>alert('Sorry Data Not Updated');</script>";
           echo "<script>window.location.href='adminindex.php#portfolion-table';</script>";
         }
      }
        
    ?>
</body>
</html>