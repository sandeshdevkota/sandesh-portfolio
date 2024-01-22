<?php
 require('connection.php');
 session_start();

//  SECTION CONTROL UPADTE

  if(isset($_POST['update_section'])){
    //    print_r($_POST);
    $logo = $_POST['logo'] ?? 0;
    $home = $_POST['home'] ?? 0;
    $about = $_POST['about'] ?? 0;
    $portfolio = $_POST['portfolio'] ?? 0;
    $image = $_POST['image'] ?? 0;
    $contact = $_POST['contact'] ?? 0;

    $query = "UPDATE `section_control` SET `Logo_section`='$logo', `home_section`='$home', `about_section`='$about', `portfolio_section`='$portfolio', `image_section`='$image',`contact_section`='$contact' WHERE 1";
    $run2 = mysqli_query($con, $query);

    if($run2)
    {
        echo "<script>alert('Updated');</script>";
        echo "<script>window.location.href='adminindex.php';</script>";
    }
    else 
    {
        echo "<script>alert('Sorry Data Not Updated');</script>";
        echo "<script>window.location.href='adminindex.php';</script>";
    }
  }

// HOME UPDATE

 if(isset($_POST['update-home'])){
    // print_r($_POST);
   

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $home_desc = mysqli_real_escape_string($con, $_POST['home_desc']);
    // $home_image = $_FILES['home_image'];
    $home_desc = mysqli_real_escape_string($con, $_POST['home_desc']);
    $show_home_image = $_POST['show_home_image'] ?? 0;
    $home_download_button = $_POST['home_download_button'] ?? 0;

    // $img_location = $_FILES['home_image']['tmp_name'];
    // $img_name = $_FILES['home_image']['name'];
    // $image_destination = $img_name;

    // move_uploaded_file($img_location, '../img/'.$img_name);

       // Check if a new image is uploaded
    if ($_FILES['home_image']['size'] > 0) {
      $img_location = $_FILES['home_image']['tmp_name'];
      $img_name = $_FILES['home_image']['name'];
      $image_destination = '../img/' . $img_name;

      // Move the uploaded file to the destination
      move_uploaded_file($img_location, $image_destination);
  } else {
      // No new image uploaded, use the existing image name
      $image_destination = mysqli_real_escape_string($con, $_POST['existing_home_image']);
  }


    $query = "UPDATE `home` SET `name`='$name',`home_desc`='$home_desc',`home_image`='$image_destination',`show_home_image`='$show_home_image',`home_download_btn`='$home_download_button'";
    $run2 = mysqli_query($con, $query);

    if($run2){
        echo "<script>alert('Updated');</script>";
        echo "<script>window.location.href='adminindex.php#home';</script>";
    }
    else {
        echo "<script>alert('Sorry Data Not Updated" . mysqli_error($con) . "');</script>";
        
        // echo "<script>window.location.href='admin.php';</script>";
    }
    

 }

//  about info
  if(isset($_POST['update-about-info'])){

    $about_desc = mysqli_real_escape_string($con, $_POST['about_desc']);
    // $about_image = $_FILES['about_image'];
    $show_about_image = $_POST['show_about_image'] ?? 0;
    $show_about_icon = $_POST['show_about_icon'] ?? 0;
    $about_download_btn = $_POST['about_download_btn'] ?? 0;

       // Check if a new image is uploaded
       if ($_FILES['about_image']['size'] > 0) {
        $img_location = $_FILES['about_image']['tmp_name'];
        $img_name = $_FILES['about_image']['name'];
        $image_destination = '../img/' . $img_name;
  
        // Move the uploaded file to the destination
        move_uploaded_file($img_location, $image_destination);
    } else {
        // No new image uploaded, use the existing image name
        $image_destination = mysqli_real_escape_string($con, $_POST['existing_about_image']);
    }

    $query = "UPDATE `about_control` SET `about_image`='$image_destination',`about_desc`='$about_desc',`show_about_image`='$show_about_image',`show_about_icon`='$show_about_icon',`about_download_btn`='$about_download_btn'";
    $result = mysqli_query($con, $query);

    if($result){
      echo "<script>alert('Updated');</script>";
      echo "<script>window.location.href='adminindex.php#aboutform';</script>";
    }
    else {
      echo "<script>alert('Sorry Data Not Updated" . mysqli_error($con) . "');</script>";
      
      echo "<script>window.location.href='adminindex.php#aboutform';</script>";
    }

  }

// Insert About Box
  if(isset($_POST['insert_about_box'])){

    $about_box_icon= mysqli_real_escape_string($con, $_POST['about_box_icon']);
    $about_box_title = mysqli_real_escape_string($con, $_POST['about_box_title']);
    $about_box_subtitle = mysqli_real_escape_string($con, $_POST['about_box_subtitle']);

    $query = "INSERT INTO `about`(`about_box_icon`, `about_box_title`, `about_box_subtitle`) VALUES ('$about_box_icon','$about_box_title','$about_box_subtitle')";
    $run = mysqli_query($con, $query);

    if($run)
    {
      echo "<script>alert('Inserted');</script>";
      echo "<script>window.location.href='adminindex.php#abouttable';</script>";
    }
    else {
      echo "<script>alert('Sorry Data Not Inserted');</script>";
      echo "<script>window.location.href='adminindex.php#aboutboxform';</script>";
    }
  }

// DElete ABOUT BOX
  if(isset($_GET['aboutdeleteid'])){

      $id= $_GET['aboutdeleteid'];

      $query = "DELETE FROM `about` WHERE id = $id";
      $run2 = mysqli_query($con, $query);

      if($run2){
        echo "<script>alert('Deleted');</script>";
            echo "<script>window.location.href='adminindex.php#abouttablecontainer';</script>";
    }
    else {
        echo "<script>alert('Sorry Data Not deleted');</script>";
        echo "<script>window.location.href='adminindex.php#abouttablecontainer';</script>";
    }
  }

// Insert About Skills box frontend
  if(isset($_POST['insert_skills_box'])){

    $skills_desc = mysqli_real_escape_string($con, $_POST['skills_desc']);
    $skills_icon = mysqli_real_escape_string($con, $_POST['skills_icon']);
    $skills_title = mysqli_real_escape_string($con, $_POST['skills_title']);
    $skills_level = mysqli_real_escape_string($con, $_POST['skills_level']);

    $query = "INSERT INTO `skills`(`skills_desc`, `skills_icon`, `skills_title`, `skills_level`) VALUES ('$skills_desc','$skills_icon','$skills_title','$skills_level')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
      {
        echo "<script>alert('Inserted');</script>";
        echo "<script>window.location.href='adminindex.php#abouttableskills';</script>";
      }
      else {
        echo "<script>alert('Sorry Data Not Inserted');</script>";
        echo "<script>window.location.href='adminindex.php#abouttableskills';</script>";
      }
    
  }

// SKILLS delete 
  if(isset($_GET['skilldeleteid'])){

    $id= $_GET['skilldeleteid'];

      $query = "DELETE FROM `skills` WHERE id = $id";
      $run2 = mysqli_query($con, $query);

      if($run2){
        echo "<script>alert('Deleted');</script>";
            echo "<script>window.location.href='adminindex.php#abouttableskills';</script>";
    }
    else {
        echo "<script>alert('Sorry Data Not deleted');</script>";
        echo "<script>window.location.href='adminindex.php#abouttableskills';</script>";
    }
  }


// Insert Backend skills 
 if(isset($_POST['insert_backendskills_box'])){

  $backend_skills_icon = mysqli_real_escape_string($con, $_POST['backend_skills_icon']);
  $backend_skills_title = mysqli_real_escape_string($con, $_POST['backend_skills_title']);
  $backend_skills_level = mysqli_real_escape_string($con, $_POST['backend_skills_level']);

  $query = "INSERT INTO `backendskills` (`backend_skills_icon`, `backend_skills_title`, `backend_skills_level`) VALUES ('$backend_skills_icon','$backend_skills_title','$backend_skills_level')";
  $query_run = mysqli_query($con, $query);

  if($query_run)
    {
      echo "<script>alert('Inserted');</script>";
      echo "<script>window.location.href='adminindex.php#abouttablebackskills';</script>";
    }
    else {
      echo "<script>alert('Sorry Data Not Inserted');</script>";
      echo "<script>window.location.href='adminindex.php#abouttablebackskills';</script>";
    }
  
 }

// Delete backend skills
  if(isset($_GET['backendskilldeleteid'])){

    $id= $_GET['backendskilldeleteid'];

    $query = "DELETE FROM `backendskills` WHERE id = $id";
    $run2 = mysqli_query($con, $query);

    if($run2){
      echo "<script>alert('Deleted');</script>";
          echo "<script>window.location.href='adminindex.php#abouttablebackskills';</script>";
    }
    else {
      echo "<script>alert('Sorry Data Not deleted');</script>";
      echo "<script>window.location.href='adminindex.php#abouttablebackskills';</script>";
    }
  }

// INSERT Summary Details
  if(isset($_POST['insert_summary'])){

    $resume_name = mysqli_real_escape_string($con, $_POST['resume_name']);
    $summary_desc = mysqli_real_escape_string($con, $_POST['summary_desc']);
    $resume_location = mysqli_real_escape_string($con, $_POST['resume_location']);
    $resume_number = mysqli_real_escape_string($con, $_POST['resume_number']);
    $resume_email = mysqli_real_escape_string($con, $_POST['resume_email']);

    $query = "INSERT INTO `resume_summary`(`resume_name`, `summary_desc`, `resume_location`, `resume_number`, `resume_email`) VALUES ('$resume_name','$summary_desc','$resume_location','$resume_number','$resume_email')";
    $run_query = mysqli_query($con, $query);

    if($run_query)
    {
      echo "<script>alert('Inserted');</script>";
      echo "<script>window.location.href='adminindex.php#summary-table';</script>";
    }
    else {
      echo "<script>alert('Sorry Data Not Inserted');</script>";
      echo "<script>window.location.href='adminindex.php#summary-table';</script>";
    }

  }

// delete summary
  if(isset($_GET['summarydeleteid'])){

    $id= $_GET['summarydeleteid'];

    $query = "DELETE FROM `resume_summary` WHERE id = $id";
    $run2 = mysqli_query($con, $query);

    if($run2){
      echo "<script>alert('Deleted');</script>";
          echo "<script>window.location.href='adminindex.php#summary-table';</script>";
    }
    else {
      echo "<script>alert('Sorry Data Not deleted');</script>";
      echo "<script>window.location.href='adminindex.php#summary-table';</script>";
    }
  }

// Insert Education
  if(isset($_POST['insert_education'])){

    $education_title = mysqli_real_escape_string($con, $_POST['education_title']);
    $education_desc = mysqli_real_escape_string($con, $_POST['education_desc']);
    $education_date = mysqli_real_escape_string($con, $_POST['education_date']);
    $education_location = mysqli_real_escape_string($con, $_POST['education_location']);

    $query = "INSERT INTO `education`(`education_title`, `education_date`, `education_location`, `education_desc`) VALUES ('$education_title','$education_date','$education_location','$education_desc')";
    $run_query = mysqli_query($con, $query);

    if($run_query)
    {
      echo "<script>alert('Inserted');</script>";
      echo "<script>window.location.href='adminindex.php#education-table';</script>";
    }
    else {
      echo "<script>alert('Sorry Data Not Inserted');</script>";
      echo "<script>window.location.href='adminindex.php#education-table';</script>";
    }
  }

// Delete Education
  if(isset($_GET['educationdeleteid'])){

    $id = $_GET['educationdeleteid'];

    $query = "DELETE FROM `education` WHERE id = $id";
    $run2 = mysqli_query($con, $query);

    if($run2){
      echo "<script>alert('Deleted');</script>";
          echo "<script>window.location.href='adminindex.php#education-table';</script>";
    }
    else {
      echo "<script>alert('Sorry Data Not deleted');</script>";
      echo "<script>window.location.href='adminindex.php#education-table';</script>";
    }

  }

  // Insert EXperience
  if(isset($_POST['insert_experience'])){

    $experience_title = mysqli_real_escape_string($con, $_POST['experience_title']);
    $experience_date = mysqli_real_escape_string($con, $_POST['experience_date']);
    $experience_location = mysqli_real_escape_string($con, $_POST['experience_location']);
    $experience_desc = mysqli_real_escape_string($con, $_POST['experience_desc']);
    $experience_list = mysqli_real_escape_string($con, $_POST['experience_list']);

    $query = "INSERT INTO `experience`(`experience_title`, `experience_date`, `experience_location`, `experience_desc`, `experience_list`) VALUES ('$experience_title','$experience_date','$experience_location','$experience_desc','$experience_list')";
    $run_query = mysqli_query($con, $query);

    if($run_query)
    {
      echo "<script>alert('Inserted');</script>";
      echo "<script>window.location.href='adminindex.php#experience-table';</script>";
    }
    else {
      echo "<script>alert('Sorry Data Not Inserted');</script>";
      echo "<script>window.location.href='adminindex.php#experience-table';</script>";
    }
  }


  // Delete experience
  if(isset($_GET['experiencedeleteid'])){

    $id = $_GET['experiencedeleteid'];

    $query = "DELETE FROM `experience` WHERE id = $id";
    $run2 = mysqli_query($con, $query);

    if($run2){
      echo "<script>alert('Deleted');</script>";
          echo "<script>window.location.href='adminindex.php#experience-table';</script>";
    }
    else {
      echo "<script>alert('Sorry Data Not deleted');</script>";
      echo "<script>window.location.href='adminindex.php#experience-table';</script>";
    }

  }


// Insert Portfolio
  if(isset($_POST['insert_portfolio'])){

    // $portfolio_image = $_FILES['portfolio_image'];
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

    $query = "INSERT INTO `portfolio`(`portfolio_desc`, `portfolio_image`, `portfolio_title`, `portfolio_subtitle`, `portfolio_date`, `portfolio_details`, `portfolio_link`) VALUES ('$portfolio_desc','$image_destination','$portfolio_title','$portfolio_subtitle','$portfolio_date','$portfolio_details','$portfolio_link')";
    $run_query = mysqli_query($con, $query);

    if($run_query)
    {
      echo "<script>alert('Inserted');</script>";
      echo "<script>window.location.href='adminindex.php#portfolio-table';</script>";
    }
    else {
      echo "<script>alert('Sorry Data Not Inserted');</script>";
      echo "<script>window.location.href='adminindex.php#portfolio-table';</script>";
    }
  }
  
// Delete Portfolio
  if(isset($_GET['portfoliodeleteid'])){

    $id = $_GET['portfoliodeleteid'];

    $query = "DELETE FROM `portfolio` WHERE id = $id";
    $run2 = mysqli_query($con, $query);

    if($run2){
      echo "<script>alert('Deleted');</script>";
          echo "<script>window.location.href='adminindex.php#portfolio-table';</script>";
    }
    else {
      echo "<script>alert('Sorry Data Not deleted');</script>";
      echo "<script>window.location.href='adminindex.php#portfolio-table';</script>";
    }
  }


// INSERT IMAGE 
  if(isset($_POST['upload_image'])){

    // $upload_image = $_FILES(['upload_image']);

    // Check if a new image is uploaded
    if ($_FILES['upload_image']['size'] > 0) {
      $img_location = $_FILES['upload_image']['tmp_name'];
      $img_name = $_FILES['upload_image']['name'];
      $image_destination = '../img/' . $img_name;

      // Move the uploaded file to the destination
      move_uploaded_file($img_location, $image_destination);
    } else {
      // No new image uploaded, use the existing image name
      $image_destination = mysqli_real_escape_string($con, $_POST['existing_upload_image']);
    }

    $query = "INSERT INTO `image`(`upload_image`) VALUES ('$image_destination')";
    $run_query = mysqli_query($con, $query);

    if($run_query)
    {
      echo "<script>alert('Inserted');</script>";
      echo "<script>window.location.href='adminindex.php#image-table';</script>";
    }
    else {
      echo "<script>alert('Sorry Data Not Inserted');</script>";
      echo "<script>window.location.href='adminindex.php#image-table';</script>";
    }

  }

// Delete Image
  if(isset($_GET['imagedeleteid'])){

    $id = $_GET['imagedeleteid'];

    $query = "DELETE FROM `image` WHERE id = $id";
    $run2 = mysqli_query($con, $query);

    if($run2){
      echo "<script>alert('Deleted');</script>";
          echo "<script>window.location.href='adminindex.php#image-table';</script>";
    }
    else {
      echo "<script>alert('Sorry Data Not deleted');</script>";
      echo "<script>window.location.href='adminindex.php#image-table';</script>";
    }
  }


// Delete Image
  if(isset($_GET['contactdeleteid'])){

    $id = $_GET['contactdeleteid'];

    $query = "DELETE FROM `contact` WHERE id = $id";
    $run2 = mysqli_query($con, $query);

    if($run2){
      echo "<script>alert('Deleted');</script>";
          echo "<script>window.location.href='adminindex.php#contact-table';</script>";
    }
    else {
      echo "<script>alert('Sorry Data Not deleted');</script>";
      echo "<script>window.location.href='adminindex.php#contact-table';</script>";
    }
  }




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