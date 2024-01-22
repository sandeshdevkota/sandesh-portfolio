<?php

 require('connection.php');
 session_start();

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true )
{
        
//   echo"<h1 style='text-align: center;'>Welcome to Admin Panel. Mrs./Mr. - $_SESSION[username] </h1>";
}else{
    header('location:login.php');
}

// if($_SESSION['username'] == true){
//     header('location:adminindex1.php');
// }else
// {
//  header('location:login.php');
// }
$query = "select * from section_control";
$run = mysqli_query($con, $query);
// // Check for errors in the query
if (!$run) {
  die("Query failed: " . mysqli_error($con));
}

$user_data = mysqli_fetch_array($run);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../img/adminfavicon.png" type="image/png" sizes="16x16" />
  <!-- !-- box ICON --> 
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- UNICON -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="./adminmainstylecss.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- <style>
    .active {
      display: block;
    }

    /* Style for the active button */
    .active-button {
      color: white;
    }
    
#aboutform{
    background: #ecf0f3;
    width: min(100%, 800px);
    display: block;
    margin: auto;
    padding: 20px;
    height: fit-content !important;
    margin-bottom: 1rem;
}
/* Style for labels */
/* Style for labels */
#aboutform label {
    display: block;
    margin-bottom: 5px;
    margin-top: 1rem;
    color: #292a2b;
    opacity: 0.6;
    font-family: "poppins";
}
/* Style for text inputs and textareas */
#aboutform input[type="file"]{
    padding: 0.5rem;
    margin-bottom: 0.4rem;
    /* opacity: 0.8; */
    width: 100%;
    border: 2px solid #c3c2c2;
}
    
#aboutform textarea{
    caret-color: #1c9926;
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 0.4rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;
    color: #494949;
    font-size: 0.9rem;
    /* box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white; */
}

 #name {
    caret-color: #1c9926;
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 0.4rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;
    /* opacity: 0.8; */
    /* box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white; */
  }
  #aboutform input::placeholder {
    color: gray;
  }
  #aboutform textarea::placeholder, input::placeholder{
    color: #5d5c5c;
    opacity: 0.4;
}
#aboutform input:focus{
    outline: none;
    box-shadow: inset 0px 0px 15px 10px rgba(224, 222, 222, 0.704);
}
#aboutform textarea:focus{
    outline: none;
    box-shadow: inset 0px 0px 15px 10px rgba(224, 222, 222, 0.704);
}


/* ABOUT BOX FORM */

#aboutboxform{
    background: #ecf0f3;
    width: min(100%, 800px);
    display: block;
    margin: auto;
    padding: 20px;
    height: fit-content !important;
    margin-bottom: 1rem;
}
/* Style for labels */
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
    padding: 0.5rem;
    margin-bottom: 0.4rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;
    /* box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white; */
  }
  #about_box_title {
    caret-color: #1c9926;
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 0.4rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;
    /* box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white; */
  }
  #about_box_subtitle {
    caret-color: #1c9926;
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 0.4rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;
    /* opacity: 0.8; */
    /* box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white; */
  }
  #aboutboxform input::placeholder {
    color: gray;
  }
  #aboutboxform input::placeholder{
    color: #5d5c5c;
    /* opacity: 0.4; */
}
#aboutboxform input:focus{
    outline: none;
    box-shadow: inset 0px 0px 15px 10px rgba(224, 222, 222, 0.704);
}
#updateboxabout{
  display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    background: #6c6c6ce2(61, 57, 57, 0.5);
    background-color: #5d5c5caa;
    /* backdrop-filter: blur(8px); */
    animation: popup 0.5s ease-in-out;
    width: 100%;
    height: 100vh;
}
@keyframes popup {
    from {
        opacity: 0;
        transform: translate(-50%, -50%) scale(0.8);
    }
    to {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
    }
}
#updateboxabout::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        backdrop-filter: blur(10px);
        z-index: -1;
    }

.close-popup{
  position: absolute;
  top: 0;
  right: 1rem;
  font-size: 2rem;
  cursor: pointer;
}
.close-popup:hover{
  color: red;
}
.main-insert{
  display: grid;
  place-content: center;
  place-items: center;
  position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
    background: #6c6c6ce2(61, 57, 57, 0.5); 
    background-color: #5d5c5caa;
    /* background-color: darkcyan; */
}
.table-head1{
  color: #ecf0f3;
}
.tbl-button-insert{
    background-color: #c2bdbd;
    border: 1px solid #424141;
    padding: 5px;
    transition: all 0.4s ease-in-out;
    cursor: pointer;
    border-radius: 5px;
    color: #323232;
    font-weight: 500;
}
.tbl-button-insert:hover {
    background-color: green;
    color: white;
 }
.tbl-button a{
    color: #323232;
    font-weight: 500;
}



#updateskillabout{
  display: none;
    position: fixed;
    /* position: relative; */
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    background: #6c6c6ce2(61, 57, 57, 0.5);
    background-color: #5d5c5caa;
    /* backdrop-filter: blur(8px); */
    animation: popup 0.5s ease-in-out;
    width: 100%;
    height: 100vh;
}
@keyframes popup {
    from {
        opacity: 0;
        transform: translate(-50%, -50%) scale(0.8);
    }
    to {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
    }
}
#updateskillabout::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        backdrop-filter: blur(7px);
        z-index: -1;
    }
.main-insert1{
  display: grid;
  place-content: center;
  place-items: center;
  position: fixed;
  position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
    background: #6c6c6ce2(61, 57, 57, 0.5); 
    background-color: #5d5c5caa;
    /* background-color: darkcyan; */
}
#aboutskillform{
  background: #ecf0f3;
    width: min(100%, 800px);
    display: block;
    margin: auto;
    padding: 20px;
    height: fit-content !important;
    margin-bottom: 1rem;
}
#skills_desc{
  caret-color: #1c9926;
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 0.4rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;
}
#aboutskillform label {
    display: block;
    margin-bottom: 5px;
    margin-top: 1rem;
    color: #292a2b;
    font-family: "poppins";
}
#skills_icon{
  caret-color: #1c9926;
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 0.4rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;
}
#skills_title{
  caret-color: #1c9926;
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 0.4rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;
}
#skills_level{
  caret-color: #1c9926;
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 0.4rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;
}


/* BACKEND SKILLS */
#updatebackendskillabout{
  display: none;
    position: fixed;
    /* position: relative; */
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    background: #6c6c6ce2(61, 57, 57, 0.5);
    background-color: #5d5c5caa;
    /* backdrop-filter: blur(8px); */
    animation: popup 0.5s ease-in-out;
    width: 100%;
    height: 100vh;
}
#updatebackendskillabout::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        backdrop-filter: blur(7px);
        z-index: -1;
    }
.main-insert12{
  display: grid;
  place-content: center;
  place-items: center;
  position: fixed;
  position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
    background: #6c6c6ce2(61, 57, 57, 0.5); 
    background-color: #5d5c5caa;
    /* background-color: darkcyan; */
}
#aboutbackendskillform{
  background: #ecf0f3;
    width: min(100%, 800px);
    display: block;
    margin: auto;
    padding: 20px;
    height: fit-content !important;
    margin-bottom: 1rem;
}
#backend_skills_icon{
  caret-color: #1c9926;
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 0.4rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;
}
#backend_skills_title{
  caret-color: #1c9926;
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 0.4rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;
}
#backend_skills_level{
  caret-color: #1c9926;
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 0.4rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;
}

#summary-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    #summary-table th, #summary-table td {
        border: 1px solid #dddddd;
        padding: 8px;
        text-align: left;
    }

    #summary-table th {
        background-color: #f2f2f2;
    }

    #summary-table tr:nth-child(even) {
        /* background-color: #f9f9f9; */
        background-color: #c3c2c2;
    }
   

    #updatesummaryabout{
  display: none;
    position: fixed;
    /* position: relative; */
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    background: #6c6c6ce2(61, 57, 57, 0.5);
    background-color: #5d5c5caa;
    /* backdrop-filter: blur(8px); */
    animation: popup 0.5s ease-in-out;
    width: 100%;
    height: 100vh;
}
#updatesummaryabout::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        backdrop-filter: blur(7px);
        z-index: -1;
    }
.main-insert12{
  display: grid;
  place-content: center;
  place-items: center;
  position: fixed;
  position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
    background: #6c6c6ce2(61, 57, 57, 0.5); 
    background-color: #5d5c5caa;
    /* background-color: darkcyan; */
}
#aboutsummaryform{
  background: #ecf0f3;
    width: min(100%, 800px);
    display: block;
    margin: auto;
    padding: 20px;
    height: fit-content !important;
    margin-bottom: 1rem;
    border-radius: 7px;
}
#aboutsummaryform input{
  caret-color: #1c9926;
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 0.4rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;
 }
 .table-head22{
  color: floralwhite;
  padding-bottom: 1rem;
 }

 /* Education Table */

 #education-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    #education-table th, #education-table td {
        border: 1px solid #dddddd;
        padding: 8px;
        text-align: left;
    }

    #education-table th {
        background-color: #f2f2f2;
    }

    #education-table tr:nth-child(even) {
        /* background-color: #f9f9f9; */
        background-color: #c3c2c2;
    }
    #updateeducationabout{
  display: none;
    position: fixed;
    /* position: relative; */
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    background: #6c6c6ce2(61, 57, 57, 0.5);
    background-color: #5d5c5caa;
    /* backdrop-filter: blur(8px); */
    animation: popup 0.5s ease-in-out;
    width: 100%;
    height: 100vh;
}
#updateeducationabout::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        backdrop-filter: blur(7px);
        z-index: -1;
    }
.main-insert12{
  display: grid;
  place-content: center;
  place-items: center;
  position: fixed;
  position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
    background: #6c6c6ce2(61, 57, 57, 0.5); 
    background-color: #5d5c5caa;
    /* background-color: darkcyan; */
}
#abouteducationform{
  background: #ecf0f3;
    width: min(100%, 800px);
    display: block;
    margin: auto;
    padding: 20px;
    height: fit-content !important;
    margin-bottom: 1rem;
    border-radius: 7px;
}
#abouteducationform input{
  caret-color: #1c9926;
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 0.4rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;
 }

  /* experience Table */

  #experience-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    #experience-table th, #experience-table td {
        border: 1px solid #dddddd;
        padding: 8px;
        text-align: left;
    }

    #experience-table th {
        background-color: #f2f2f2;
    }

    #experience-table tr:nth-child(even) {
        /* background-color: #f9f9f9; */
        background-color: #c3c2c2;
    }
    #updateexperienceabout{
  display: none;
    position: fixed;
    /* position: relative; */
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    background: #6c6c6ce2(61, 57, 57, 0.5);
    background-color: #5d5c5caa;
    /* backdrop-filter: blur(8px); */
    animation: popup 0.5s ease-in-out;
    width: 100%;
    height: 100vh;
}
#updateexperienceabout::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        backdrop-filter: blur(7px);
        z-index: -1;
    }
.main-insert12{
  display: grid;
  place-content: center;
  place-items: center;
  position: fixed;
  position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
    background: #6c6c6ce2(61, 57, 57, 0.5); 
    background-color: #5d5c5caa;
    /* background-color: darkcyan; */
}
#aboutexperienceform{
  background: #ecf0f3;
    width: min(100%, 800px);
    display: block;
    margin: auto;
    padding: 20px;
    height: fit-content !important;
    margin-bottom: 1rem;
    border-radius: 7px;
}
#aboutexperienceform input{
  caret-color: #1c9926;
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 0.4rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;
 }
 #aboutexperienceform textarea{
  caret-color: #1c9926;
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 0.4rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;
 }


 /* PORTFOLIO SETION */


#portfolio-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    #portfolio-table th, #portfolio-table td {
        border: 1px solid #dddddd;
        padding: 8px;
        text-align: left;
    }

    #portfolio-table th {
        background-color: #f2f2f2;
    }

    #portfolio-table tr:nth-child(even) {
        /* background-color: #f9f9f9; */
        background-color: #c3c2c2;
    }
    #updateportfolioabout{
  display: none;
    position: fixed;
    /* position: relative; */
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    background: #6c6c6ce2(61, 57, 57, 0.5);
    background-color: #5d5c5caa;
    /* backdrop-filter: blur(8px); */
    animation: popup 0.5s ease-in-out;
    width: 100%;
    height: 100vh;
}
#updateportfolioabout::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        backdrop-filter: blur(7px);
        z-index: -1;
    }
.main-insert12{
  display: grid;
  place-content: center;
  place-items: center;
  position: fixed;
  position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
    background: #6c6c6ce2(61, 57, 57, 0.5); 
    background-color: #5d5c5caa;
    /* background-color: darkcyan; */
}
#aboutportfolioform{
  background: #ecf0f3;
    width: min(100%, 800px);
    display: block;
    margin: auto;
    padding: 20px;
    height: fit-content !important;
    margin-bottom: 1rem;
    border-radius: 7px;
}
#aboutportfolioform input{
  caret-color: #1c9926;
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 0.4rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;
 }
 #aboutportfolioform textarea{
  caret-color: #1c9926;
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 0.4rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;
 }
 .action-btn button{
   margin-top: 1rem;
 }

 /* IMAGE SECTION */

 #image{
  margin-left: 13.6rem;
 }
 #image-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    #image-table th, #image-table td {
        border: 1px solid #dddddd;
        padding: 8px;
        text-align: left;
    }

    #image-table th {
        background-color: #f2f2f2;
    }

    #image-table tr:nth-child(even) {
        /* background-color: #f9f9f9; */
        background-color: #c3c2c2;
    }
    #updateimageabout{
  display: none;
    position: fixed;
    /* position: relative; */
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    background: #6c6c6ce2(61, 57, 57, 0.5);
    background-color: #5d5c5caa;
    /* backdrop-filter: blur(8px); */
    animation: popup 0.5s ease-in-out;
    width: 100%;
    height: 100vh;
}
#updateimageabout::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        backdrop-filter: blur(7px);
        z-index: -1;
    }
.main-insert12{
  display: grid;
  place-content: center;
  place-items: center;
  position: fixed;
  position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
    background: #6c6c6ce2(61, 57, 57, 0.5); 
    background-color: #5d5c5caa;
    /* background-color: darkcyan; */
}
#aboutimageform{
  background: #ecf0f3;
    width: min(100%, 800px);
    display: block;
    margin: auto;
    padding: 20px;
    height: fit-content !important;
    margin-bottom: 1rem;
    border-radius: 7px;
}
#aboutimageform input{
  caret-color: #1c9926;
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 0.4rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;
 }



 /* PROFILE */

 #profile{
  background: url(../img/backcloud.gif);
  object-fit: cover;
  background-size: cover;
  font-family: "Poppins";
 }
 .profile-head1{
  display: grid;
  place-items: center;
  padding-top: 6rem;
  color: #ecf0f3;
  font-size: 3rem;

 }
 .profile-head{
  display: flex;
    justify-content: center;
    justify-items: center;
    color: #c2bdbd;
  /* i {
    display: grid;
    place-items: center;
    margin-left: 0.5rem;
  } */
 }
 .user-profile h3{
  padding-bottom: 1rem;
  font-size: 1.4rem;
 }
 .del-text{
  padding-bottom: 1rem;
  font-size: 1.4rem;
 }
 .profile-main{
  display: grid;
  grid-template-columns: repeat(auto-fit,minmax(min(10rem, 100%), 1fr));
  gap: 2rem !important;
  margin-left: 1rem;
  margin-right: 1rem;
  margin-top: 3rem;
  padding-bottom: 2rem;
 }

 .profileformdiv {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: #c4bfbfe8;
  padding: 20px;
  border-radius: 8px;
}
.profileformdiv h3 {
  display: grid;
  place-items: center;
  color: #1f1e1e;

}
.form-input input{
  width: 100%;
  caret-color: #1c9926;
    padding: 0.5rem;
    margin-bottom: 0.4rem;
    border: 2px solid #c3c2c2;
    border-radius: 5px;
    outline: none;
}
.form-label{
  display: flex;
  justify-items: center;
}
.form-label i{
  display: grid;
  place-items: center;
  place-content: center;
  font-size: 1.5rem;
  padding-left: 0.5rem;
}
.form-input-btn{
    display: flex;
    justify-content: left;
    padding-top: 1rem;
}
.form-input-btn button{
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
.form-input-btn button:hover{
    background-size: 0 100%, 100% 100%;
    color: #ffffff;
    text-decoration: none;   
}
 #message {
            color: green;
        }

  .form-input-btn{
    display: flex;
    justify-content: left;
    padding-top: 1rem;
}
.form-input-btn-del button{
    cursor: pointer;
    padding: 0.6rem;
    font-size: 0.9rem;
    font-weight: bolder;
    border-radius: 7px;
    border: 1px solid #3c3c3c;
    color: red;
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
.form-input-btn-del button:hover{
    background-size: 0 100%, 100% 100%;
    color: red;
    text-decoration: none;   
}


@media screen and (max-width: 800px) {
  .main-insert{
  display: grid;
  place-content: center;
  place-items: center;
  position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    padding: 20px;
    width: 100%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
    background: #6c6c6ce2(61, 57, 57, 0.5); 
    background-color: #5d5c5caa;
    /* background-color: darkcyan; */
 }
 #abouttablecontainerskills{
   overflow: scroll;
 }
 #abouttablecontainerbackskills{
   overflow: scroll;
 }
 #summarytable{
  overflow: scroll;
 }
 #educationtable{
  overflow: scroll;
 }
 #experiencetable{
  overflow: scroll;
 }
 #portfoliotable{
  overflow: scroll;
 }
 #imagetable{
  overflow: scroll;
 }
 #contact-table{
  overflow: scroll;
 }
  #image{
        margin-left: 8.6rem ;
    }
  
}

@media screen and (max-width: 1200px) {

 #abouttablecontainerskills{
   overflow: scroll;
 }
 #abouttablecontainerbackskills{
   overflow: scroll;
 }
 #summarytable{
  overflow: scroll;
 }
 #educationtable{
  overflow: scroll;
 }
 #experiencetable{
  overflow: scroll;
 }
 #portfoliotable{
  overflow: scroll;
 }
}

  </style> -->
  <title>Admin Panel</title>
</head>
<body>
    <header>

        <div class="top-nav">

              <div class="right-bar">
                      <li><a href="#"><img src="../img/adminlogo.svg"></a></li>
              </div>

              
              <div class="hamburger">
                <i class='bx bxs-dashboard'></i>
              </div>

                <div class="left-bar">

                    <div class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></div>

                    <div class="dropdown-notification">
                        <a href="#" class="notify">
                            <i class='bx bxs-bell-ring' id="notifyicon">
                            <!-- <i class='bx bx-bell' id="notifyicon"></i> -->
                                <span class="notification-count">3</span>
                            </i>
                            Notification
                        </a>
                    </div>

                    <div class="dropdown-btn">
                        <a class="drop" href="#">
                            <img src="../img/admin.jpg">
                            <span class="btntext"><?php echo $_SESSION['username']; ?></span>
                            <!-- <i class='bx bxs-caret-down-circle'></i> -->
                            <i class='bx bx-down-arrow'></i>
                        </a>
                        <div class="dropdown-content">
                            <a href="" onclick="showSection('profile')">Profile</a>
                            <a href="./logout.php">Logout</a>
                        </div>
                    </div>
                </div>

        </div>
    </header>

     <nav class="wrapper">
        <div class="buttons-container">
            <!-- Buttons -->
            <button onclick="showSection('dashboard')" id="dashboardButton" class="content-button" ><i class='bx bx-clipboard'></i>Dashboard</button>
            <button onclick="showSection('control')" id="controlButton" class="content-button" ><i class='bx bx-cog' ></i>controls</button>
            <button onclick="showSection('home')" id="homeButton" class="content-button" ><i class='bx bx-home-alt-2'></i>Home</button>
            <button onclick="showSection('about')" id="aboutButton" class="content-button" ><i class='bx bx-user'></i>About</button>
            <button onclick="showSection('portfolio')" id="portfolioButton" class="content-button" ><i class='bx bx-briefcase-alt'></i>Portfolio</button>
            <button onclick="showSection('image')" id="imageButton" class="content-button" ><i class='bx bx-image-alt'></i>image</button>
            <button onclick="showSection('contact')" id="contactButton" class="content-button" ><i class='bx bx-send' ></i>Contact</button>
            <button onclick="showSection('profile')" id="profileButton" class="content-button" ><i class='bx bx-info-circle'></i>Profile</button>
            <hr class="left-nav-hr">
            <a href="https://sandeshdevkota.com.np/" target="_blank">Visit Portfolio</a>
            <!-- <a href="https://sandeshdevkota.com.np/"><img src="../img/logowhiteadmin.svg"></a> -->
        </div>
    </nav>

      <div id="dashboard" class="section">

        <div id="content1" class="content active">
            <Div class="cover-image">
                  <img src="../img/dashboardpic.gif">

                  <div class="dash-content">
                    <!-- <div class="weather">
                        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
                        <div class="elfsight-app-ba3a6726-69fa-483c-800d-398cdab8f4bc" data-elfsight-app-lazy></div>
                    </div> -->
                    
                    <div class="time"><p id="time"></p></div>
    
                    <div class="date"><p id="date"></p></div>
                    <hr class="dash-hr1">

                     <div class="greeting"><h1 id="greeting"></h1></div>
                     <div class="quote"><p>“Excuses are born out of fear. Eliminate your fear and there will be no excuses.”</p></div>
    
                </div>
            </Div>
        </div>
        <script>
            function updateDateTimeGreeting() {
                const currentDate = new Date();
    
                // Update time
                const timeElement = document.getElementById('time');
                const currentTime = currentDate.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
                timeElement.innerText = ` ${currentTime}`;
    
                // Update date-time
                // Update date
                const dateElement = document.getElementById('date');
                const currentDateFormatted = currentDate.toLocaleDateString();
                dateElement.innerText = `${currentDateFormatted}`;
    
                // Update greeting
                const greetingElement = document.getElementById('greeting');
                const hours = currentDate.getHours();
                let greeting;
    
                if (hours >= 5 && hours < 12) {
                    greeting = 'Good morning';
                } else if (hours >= 12 && hours < 18) {
                    greeting = 'Good afternoon';
                } else {
                    greeting = 'Good evening';
                }
    
                greetingElement.innerText = greeting;
    
                // Simulate weather update (replace with actual weather data)
                const weatherDetailElement = document.getElementById('weather-detail');
                weatherDetailElement.innerText = '25°C, Pokhara'; // Replace with actual weather data
            }
    
            // Update every second
            setInterval(updateDateTimeGreeting, 1000);
    
            // Initial update
            updateDateTimeGreeting();
        </script>

      </div>

      <div id="control" class="section">
        <div class="main-section-control">
            <h1>Welcome to Section Control - <?php echo $_SESSION['username']; ?></h1>

          <form method="POST" action="adminsection.php" id="sectioncontrol">

            <div class="switch-container">
                <h2>Logo </h2>
                <label class="switch">
                    <input type="checkbox" name="logo"<?php echo ($user_data['logo_section'] == 'on') ? 'checked' : ''; ?>>
                    <span class="slider"></span>
                </label>
            </div>
            <hr class="sectionhr">

            <div class="switch-container">
                <h2>Home section</h2>
                <label class="switch">
                    <input type="checkbox" name="home" <?php echo ($user_data['home_section'] == 'on') ? 'checked' : ''; ?>>
                    <span class="slider"></span>
                </label>
            </div>
            <hr class="sectionhr">

            <div class="switch-container">
                <h2>About section</h2>
                <label class="switch">
                    <input type="checkbox" name="about" <?php echo ($user_data['about_section'] == 'on') ? 'checked' : ''; ?>>
                    <span class="slider"></span>
                </label>
            </div>
            <hr class="sectionhr">

            <div class="switch-container">
                <h2>Portfolio Section</h2>
                <label class="switch">
                    <input type="checkbox" name="portfolio" <?php echo ($user_data['portfolio_section'] == 'on') ? 'checked' : ''; ?>>
                    <span class="slider"></span>
                </label>
            </div>
            <hr class="sectionhr">

            <div class="switch-container">
                <h2>Image Section</h2>
                <label class="switch">
                    <input type="checkbox" name="image" <?php echo ($user_data['image_section'] == 'on') ? 'checked' : ''; ?>>
                    <span class="slider"></span>
                </label>
            </div>
            <hr class="sectionhr">

            <div class="switch-container">
                <h2>Contact Section</h2>
                <label class="switch">
                    <input type="checkbox" name="contact" <?php echo ($user_data['contact_section'] == 'on') ? 'checked' : ''; ?>>
                    <span class="slider"></span>
                </label>
            </div>
            <hr class="sectionhr">

            <div class="sectioncontrolbtn">
               <input type="submit" name="update_section" value="Update Section">
            </div>

          </form>
        </div>
      </div>

  
  <div id="home" class="section">
       <h1 class="table-head">Welcome to Home Section</h1>

    <div class="table-container">
      <br><br>
        
      <table id="myTable" class="display-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Home Description</th>
                <th>Home Image</th>
                <th>Show Home Image</th>
                <th>Show Download Button</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Your table data goes here -->
          <?php
           $sql = "Select * from `home`";
           $result = mysqli_query($con, $sql);

           if($result){
              while($row=mysqli_fetch_assoc($result))
              {
                $id = $row['id'];
                $name = $row['name'];
                $home_desc = $row['home_desc'];
                $home_image = $row['home_image'];
                $show_home_image = $row['show_home_image'];
                $home_download_btn = $row['home_download_btn'];

                echo'
                  <tr>
                     <td>'.$row['id'].'</td>
                     <td>'.$row['name'].'</td>
                     <td>'.$row['home_desc'].'</td>
                     <td><img src="../img/'.$row['home_image'].'" height="90" width="auto"></td>
                     <td>'.$row['show_home_image'].'</td>
                     <td>'.$row['home_download_btn'].'</td>
                     <td><button class="tbl-button"><a href="adminindex.php#homeform">Update</a></button></td>
                   </tr>
                ';

              }
           }
          ?>
            
            <!-- Add more rows as needed -->
        </tbody>
      </table>
      <br><br>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script>
           $(document).ready(function() {
           $('#myTable').DataTable();
            });
        </script>
    </div>

    <h1 class="table-head1">Update Home Details</h1>

      <?php
           require('connection.php');

         $record = "SELECT * FROM `home`";
         $data = mysqli_query($con, $record);

         // Check if the query was successful
         if ($data) {
                $row = mysqli_fetch_array($data);
        } 
        ?>

      <form action="adminsection.php" method="post" enctype="multipart/form-data" id="homeform">


         <input type="hidden" name="homeupdateid" value="<?php echo $row['id']; ?>">

         <!-- Name -->
         <label for="name">Name:</label>
         <input type="text" id="name" placeholder="Enter Name" name="name" value="<?php echo $row['name']; ?>" required>


         <!-- Home Description -->
         <label for="home_desc">Home Image:</label>
         <textarea type="" id="home_desc" placeholder="Home Description..." name="home_desc" rows="3" required><?php echo $row['home_desc']; ?></textarea>

          <!-- Hidden input to store existing image name -->
          <input type="hidden" name="existing_home_image" value="<?php echo $row['home_image']; ?>">

         <!-- Home Image -->
         <label for="home_image">Home Image:</label>
         <input type="file" id="home_image" name="home_image" accept="image/*" value="<?php echo $row['home_image']; ?>" >
         <td><img src="../img/<?php echo $row['home_image']; ?>" height='90' width='auto'></td>

        <div class="switch-container-home">

                <div class="home-switch-sec">
                         <label>Home Image</label>
                         <label class="switch-home">
                                  <input type="checkbox" name="show_home_image" <?php echo ($row['show_home_image'] == 'on') ? 'checked' : ''; ?>>
                                  <span class="slider-home"></span>
                         </label>
         </div>

         <div class="home-switch-sec">
                <label>Home Download Button</label>
                <label class="switch-home">
                         <input type="checkbox" name="home_download_button" <?php echo ($row['home_download_btn'] == 'on') ? 'checked' : ''; ?>>
                         <span class="slider-home"></span>
                </label>
         </div>

        </div>

                <div class="home-submit-btn">
                         <button type="submit" name="update-home">update</button>
                </div>

      </form>
   <?php
   ?>

    
          


   

  </div>

  <div id="about" class="section">

    <h1 class="table-head">Welcome to About Section</h1>

    <?php
           require('connection.php');

         $record = "SELECT * FROM `about_control`";
         $data = mysqli_query($con, $record);

         // Check if the query was successful
         if ($data) {
                $row = mysqli_fetch_array($data);
        } 
        ?>
        <form action="adminsection.php" method="post" enctype="multipart/form-data" id="aboutform">

         <!-- Hidden input to store existing image name -->
          <input type="hidden" name="existing_about_image" value="<?php echo $row['about_image']; ?>">

         <!-- Home Image -->
         <label for="about_image">About Image:</label>
         <input type="file" id="about_image" name="about_image" accept="image/*" value="<?php echo $row['about_image']; ?>" >
         <td><img src="../img/<?php echo $row['about_image']; ?>" height='90' width='auto'></td>


         <!-- about Description -->
         <label for="about_desc">About Image:</label>
         <textarea type="" id="about_desc" placeholder="about Description..." name="about_desc" rows="6" required><?php echo $row['about_desc']; ?></textarea>

        <div class="switch-container-home">

                <div class="home-switch-sec">
                         <label>Show About Image</label>
                         <label class="switch-home">
                                  <input type="checkbox" name="show_about_image" <?php echo ($row['show_about_image'] == 'on') ? 'checked' : ''; ?>>
                                  <span class="slider-home"></span>
                         </label>
         </div>

         <div class="home-switch-sec">
                <label>Show About Icon</label>
                <label class="switch-home">
                         <input type="checkbox" name="show_about_icon" <?php echo ($row['show_about_icon'] == 'on') ? 'checked' : ''; ?>>
                         <span class="slider-home"></span>
                </label>
         </div>

         <div class="home-switch-sec">
                <label>Show Download Button</label>
                <label class="switch-home">
                         <input type="checkbox" name="about_download_btn" <?php echo ($row['about_download_btn'] == 'on') ? 'checked' : ''; ?>>
                         <span class="slider-home"></span>
                </label>
         </div>

        </div>

                <div class="home-submit-btn">
                         <button type="submit" name="update-about-info">update</button>
                </div>

      </form>
        <?php
    ?>

    

   <div class="table-container1" id="abouttablecontainer">
      <br><br>
      <table id="abouttable" class="display-table1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Box icon</th>
                <th>Box title</th>
                <th>Box subtitle</th>
                <th>Action</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Your table data goes here -->

          <?php
            $sql = "Select * from `about`";
            $result = mysqli_query($con, $sql);

            if($result)
            {
              while($row = mysqli_fetch_assoc($result))
              {
                $id = $row['id'];
                $about_box_icon = $row['about_box_icon'];
                $about_box_title = $row['about_box_title'];
                $about_box_subtitle = $row['about_box_subtitle'];

                echo'
                    <tr>
                      <td>'.$row['id'].'</td>
                      <td>'.$row['about_box_icon'].'</td>
                      <td>'.$row['about_box_title'].'</td>
                      <td>'.$row['about_box_subtitle'].'</td>
                      <td><button class="tbl-button-insert" onclick="confirminsert(' . $id . ')">Insert</button></td>
                      <td><button class="tbl-button update-btn"><a href="updateaboutbox.php?aboutupdateid='.$id.'">Update</a></button></td>
                      <td><button class="tbl-button-del" onclick="confirmDelete(' . $id . ')">Delete</button></td>
                    </tr>
                ';
              }
            }
          ?>
          <!-- <a href="adminsection.php?aboutupdateid='.$id.'">Update</a> -->
          <script>
              
              function confirminsert(id) {
                 var popupupdate = document.getElementById('updateboxabout');

                 if (popupupdate) {
                     popupupdate.style.display = 'flex';
                 }
                 
                }
              function closepopupbox() {
                 var popupupdate = document.getElementById('updateboxabout');

                if (popupupdate) {
                        popupupdate.style.display = 'none';
                }
              }
                 
          </script>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
          <script>
            function confirmDelete(id) {
              Swal.fire({
                  title: "Are you sure?",
                  text: "Once deleted, you will not be able to recover this data!",
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#d33",
                  cancelButtonColor: "#3085d6",
                  confirmButtonText: "Yes, delete it!",
              }).then((result) => {
                  if (result.isConfirmed) {
                      window.location.href = "adminsection.php?aboutdeleteid=" + id;
                  }
              });
            }
        </script>
            
            <!-- Add more rows as needed -->
        </tbody>
      </table>
      <br><br>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script>
           $(document).ready(function() {
           $('#abouttable').DataTable();
            });
        </script>
    </div>

    <div class="updateboxabout" id="updateboxabout">

      <div class="main-insert">

      <span class="close-popup" id="closepopup" onclick="closepopupbox()">&times;</span>

      <h1 class="table-head1">Insert About Box Details</h1>

      <form action="adminsection.php" method="post" enctype="multipart/form-data" id="aboutboxform">

         <!-- Name -->
         <label for="about_box_icon">Box icon:</label>
         <input type="text" id="about_box_icon" placeholder="<i>bx bx-users</i>" name="about_box_icon"  required>

         <!-- Name -->
         <label for="about_box_title">About Box Title:</label>
         <input type="text" id="about_box_title" placeholder="Enter Title" name="about_box_title"  required>

         <label for="about_box_subtitle">About Box subtitle:</label>
         <input type="text" id="about_box_subtitle" placeholder="Enter subtitle" name="about_box_subtitle"  required>

            <div class="home-submit-btn">
                <button type="submit" name="insert_about_box">Insert</button>
            </div>

      </form>
      </div>
    </div>


    <div class="table-container-skills" id="abouttablecontainerskills">
      
       <h1 class="table-head">Frontend Skills Table</h1>
  
      <table id="abouttableskills" class="display-table-skills">
        <thead>
            <tr>
                <th>ID</th>
                <th>Skills Desc</th>
                <th>Skills Icon</th>
                <th>Skills Title</th>
                <th>Skills Level</th>
                <th>Action</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Your table data goes here -->

          <?php
            $sql = "Select * from `Skills`";
            $result = mysqli_query($con, $sql);

            if($result)
            {
              while($row = mysqli_fetch_assoc($result))
              {
                $id = $row['id'];
                $skills_desc = $row['skills_desc'];
                $skills_icon = $row['skills_icon'];
                $skills_title = $row['skills_title'];
                $skills_level = $row['skills_level'];

                echo'
                    <tr>
                      <td>'.$row['id'].'</td>
                      <td>'.$row['skills_desc'].'</td>
                      <td>'.$row['skills_icon'].'</td>
                      <td>'.$row['skills_title'].'</td>
                      <td>'.$row['skills_level'].'</td>
                      <td><button class="tbl-button-insert" onclick="confirmskills(' . $id . ')">Insert</button></td>
                      <td><button class="tbl-button update-btn"><a href="updatefrontendskill.php?skillupdateid='.$id.'">Update</a></button></td>
                      <td><button class="tbl-button-del" onclick="confirmDeleteskills(' . $id . ')">Delete</button></td>
                    </tr>
                ';
              }
            }
          ?>
          <!-- <a href="adminsection.php?aboutupdateid='.$id.'">Update</a> -->
          <script>
              
              function confirmskills(id) {
                 var popupupdate = document.getElementById('updateskillabout');

                 if (popupupdate) {
                     popupupdate.style.display = 'flex';
                 }
                 
                }
              function closepopupboxskills() {
                 var popupupdate = document.getElementById('updateskillabout');

                if (popupupdate) {
                        popupupdate.style.display = 'none';
                }
              }
                 
          </script>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
          <script>
            function confirmDeleteskills(id) {
              Swal.fire({
                  title: "Are you sure?",
                  text: "Once deleted, you will not be able to recover this data!",
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#d33",
                  cancelButtonColor: "#3085d6",
                  confirmButtonText: "Yes, delete it!",
              }).then((result) => {
                  if (result.isConfirmed) {
                      window.location.href = "adminsection.php?skilldeleteid=" + id;
                  }
              });
            }
        </script>
            
            <!-- Add more rows as needed -->
        </tbody>
      </table>
      <br><br>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script>
           $(document).ready(function() {
           $('#abouttableskills').DataTable();
            });
        </script>
    </div>

    <div class="updateskillabout" id="updateskillabout">

      <div class="main-insert1">

      <span class="close-popup" id="closepopup" onclick="closepopupboxskills()">&times;</span>

      <h1 class="table-head1">Insert About Frontend Skills </h1>

      <form action="adminsection.php" method="post" enctype="multipart/form-data" id="aboutskillform">

         <!-- Name -->
         <label for="Skills_desc">Skills Desc:</label>
         <input type="text" id="skills_desc" placeholder="Description here...." name="skills_desc" >

         <!-- Name -->
         <label for="skills_icon">Skills Icon:</label>
         <input type="text" id="skills_icon" placeholder="<i> bx bx-fa-php <i/>" name="skills_icon"  required>

         <label for="skills_title">Skills Title:</label>
         <input type="text" id="skills_title" placeholder="Enter subtitle" name="skills_title"  required>

         <label for="skills_level">Skills Level:</label>
         <input type="text" id="skills_level" placeholder="Enter subtitle" name="skills_level"  required>

            <div class="home-submit-btn">
                <button type="submit" name="insert_skills_box">Insert</button>
            </div>

      </form>
      </div>
    </div>


    <!-- BACK  END TABLE -->


    <div class="table-container-skills" id="abouttablecontainerbackskills">
      
       <h1 class="table-head">Backend Skills Table</h1>
  
      <table id="abouttablebackskills" class="display-table-skills">
        <thead>
            <tr>
                <th>ID</th>
                <th>Skills Icon</th>
                <th>Skills Title</th>
                <th>Skills Level</th>
                <th>Action</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Your table data goes here -->

          <?php
            $sql = "Select * from `backendSkills`";
            $result = mysqli_query($con, $sql);

            if($result)
            {
              while($row = mysqli_fetch_assoc($result))
              {
                $id = $row['id'];
                $backend_skills_icon = $row['backend_skills_icon'];
                $backend_skills_title = $row['backend_skills_title'];
                $backend_skills_level = $row['backend_skills_level'];

                echo'
                    <tr>
                      <td>'.$row['id'].'</td>
                      <td>'.$row['backend_skills_icon'].'</td>
                      <td>'.$row['backend_skills_title'].'</td>
                      <td>'.$row['backend_skills_level'].'</td>
                      <td><button class="tbl-button-insert" onclick="confirmbackendskills(' . $id . ')">Insert</button></td>
                      <td><button class="tbl-button update-btn"><a href="updatebackendskill.php?backskillupdateid='.$id.'">Update</a></button></td>
                      <td><button class="tbl-button-del" onclick="confirmDeletebackendskills(' . $id . ')">Delete</button></td>
                    </tr>
                ';
              }
            }
          ?>
          <!-- <a href="adminsection.php?aboutupdateid='.$id.'">Update</a> -->
          <script>
              
              function confirmbackendskills(id) {
                 var popupupdate = document.getElementById('updatebackendskillabout');

                 if (popupupdate) {
                     popupupdate.style.display = 'flex';
                 }
                 
                }
              function closepopupboxbackendskills() {
                 var popupupdate = document.getElementById('updatebackendskillabout');

                if (popupupdate) {
                        popupupdate.style.display = 'none';
                }
              }
                 
          </script>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
          <script>
            function confirmDeletebackendskills(id) {
              Swal.fire({
                  title: "Are you sure?",
                  text: "Once deleted, you will not be able to recover this data!",
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#d33",
                  cancelButtonColor: "#3085d6",
                  confirmButtonText: "Yes, delete it!",
              }).then((result) => {
                  if (result.isConfirmed) {
                      window.location.href = "adminsection.php?backendskilldeleteid=" + id;
                  }
              });
            }
        </script>
            
            <!-- Add more rows as needed -->
        </tbody>
      </table>
      <br><br>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script>
           $(document).ready(function() {
           $('#abouttablebackskills').DataTable();
            });
        </script>
    </div>

    <div class="updatebackendskillabout" id="updatebackendskillabout">

      <div class="main-insert12">

      <span class="close-popup" id="closepopup" onclick="closepopupboxbackendskills()">&times;</span>

      <h1 class="table-head1">Insert About Backend Skills </h1>

      <form action="adminsection.php" method="post" enctype="multipart/form-data" id="aboutbackendskillform">

         <!-- Name -->
         <label for="backend_skills_icon">Skills Icon:</label>
         <input type="text" id="backend_skills_icon" placeholder="<i> bx bx-fa-php <i/>" name="backend_skills_icon"  required>

         <label for="backend_skills_title">Skills Title:</label>
         <input type="text" id="backend_skills_title" placeholder="Enter subtitle" name="backend_skills_title"  required>

         <label for="backend_skills_level">Skills Level:</label>
         <input type="text" id="backend_skills_level" placeholder="Enter subtitle" name="backend_skills_level"  required>

            <div class="home-submit-btn">
                <button type="submit" name="insert_backendskills_box">Insert</button>
            </div>

      </form>
      </div>
    </div>

   <!-- SUMMARY TABLE -->


    <div class="table-container-summary" id="summarytable">
      
       <h1 class="table-head">Summary Table</h1>
  
      <table id="summary-table" class="display-table-summary">
        <thead>
            <tr>
                <th>ID</th>
                <th>Resume Name</th>
                <th>Resume Desc</th>
                <th>Summary Desc</th>
                <th>Location</th>
                <th>Number</th>
                <th>Email</th>
                <th>Action</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Your table data goes here -->

          <?php
            $sql = "Select * from `resume_summary`";
            $result = mysqli_query($con, $sql);

            if($result)
            {
              while($row = mysqli_fetch_assoc($result))
              {
                $id = $row['id'];
                $resume_name = $row['resume_name'];
                $resume_desc = $row['resume_desc'];
                $summary_desc = $row['summary_desc'];
                $resume_location = $row['resume_location'];
                $resume_number = $row['resume_number'];
                $resume_email = $row['resume_email'];

                echo'
                    <tr>
                      <td>'.$row['id'].'</td>
                      <td>'.$row['resume_name'].'</td>
                      <td>'.$row['resume_desc'].'</td>
                      <td>'.$row['summary_desc'].'</td>
                      <td>'.$row['resume_location'].'</td>
                      <td>'.$row['resume_number'].'</td>
                      <td>'.$row['resume_email'].'</td>
                      <td><button class="tbl-button-insert" onclick="confirmsummary(' . $id . ')">Insert</button></td>
                      <td><button class="tbl-button update-btn"><a href="updatesummary.php?summaryupdateid='.$id.'">Update</a></button></td>
                      <td><button class="tbl-button-del" onclick="confirmDeletesummary(' . $id . ')">Delete</button></td>
                    </tr>
                ';
              }
            }
          ?>
          <!-- <a href="adminsection.php?aboutupdateid='.$id.'">Update</a> -->
          <script>
              
              function confirmsummary(id) {
                 var popupupdate = document.getElementById('updatesummaryabout');

                 if (popupupdate) {
                     popupupdate.style.display = 'flex';
                 }
                 
                }
              function closepopupboxsummary() {
                 var popupupdate = document.getElementById('updatesummaryabout');

                if (popupupdate) {
                        popupupdate.style.display = 'none';
                }
              }
                 
          </script>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
          <script>
            function confirmDeletesummary(id) {
              Swal.fire({
                  title: "Are you sure?",
                  text: "Once deleted, you will not be able to recover this data!",
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#d33",
                  cancelButtonColor: "#3085d6",
                  confirmButtonText: "Yes, delete it!",
              }).then((result) => {
                  if (result.isConfirmed) {
                      window.location.href = "adminsection.php?summarydeleteid=" + id;
                  }
              });
            }
        </script>
            
            <!-- Add more rows as needed -->
        </tbody>
      </table>
      <br><br>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script>
           $(document).ready(function() {
           $('#summary-table').DataTable();
            });

        </script>
    </div>

    <div class="updatesummaryabout" id="updatesummaryabout">

      <div class="main-insert12">

      <span class="close-popup" id="closepopup" onclick="closepopupboxsummary()">&times;</span>

      <h1 class="table-head22">Insert Summary Details </h1>

      <form action="adminsection.php" method="post" enctype="multipart/form-data" id="aboutsummaryform">

        <!-- <label for="resume_desc">Resume Desc:</label>
         <input type="text" id="resume_desc" placeholder="Enter Resume Desc" name="resume_desc"  required> -->

         <!-- Name -->
         <label for="resume_name">Resume Name:</label>
         <input type="text" id="resume_name" placeholder="Enter Name" name="resume_name"  required>

         <label for="summary_desc">Summary Desc:</label>
         <input type="text" id="summary_desc" placeholder="Enter Summary Description..." name="summary_desc"  required>

         <label for="resume_location">Location:</label>
         <input type="text" id="resume_location" placeholder="Pokhara, Nepal" name="resume_location"  required>

         <label for="resume_number">Number:</label>
         <input type="text" id="resume_number" placeholder="9812XXXXX9" name="resume_number"  required>

         <label for="resume_email">E-mail:</label>
         <input type="text" id="resume_email" placeholder="Example@gmail.com" name="resume_email"  required>

            <div class="home-submit-btn">
                <button type="submit" name="insert_summary">Insert</button>
            </div>

      </form>
      </div>
    </div>



    <!-- EDUCATION SECTION HERE STARTED -->

    <div class="table-container-education" id="educationtable">
      
       <h1 class="table-head">Education Table</h1>
  
      <table id="education-table" class="display-table-education">
        <thead>
            <tr>
                <th>ID</th>
                <th>Education Title</th>
                <th>Date</th>
                <th>Location</th>
                <th>Description</th>
                <th>Action</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Your table data goes here -->

          <?php
            $sql = "Select * from `education`";
            $result = mysqli_query($con, $sql);

            if($result)
            {
              while($row = mysqli_fetch_assoc($result))
              {
                $id = $row['id'];
                $education_title = $row['education_title'];
                $education_date = $row['education_date'];
                $education_location = $row['education_location'];
                $education_desc = $row['education_desc'];

                echo'
                    <tr>
                      <td>'.$row['id'].'</td>
                      <td>'.$row['education_title'].'</td>
                      <td>'.$row['education_date'].'</td>
                      <td>'.$row['education_location'].'</td>
                      <td>'.$row['education_desc'].'</td>
                      <td><button class="tbl-button-insert" onclick="confirmeducation(' . $id . ')">Insert</button></td>
                      <td><button class="tbl-button update-btn"><a href="updateeducation.php?educationupdateid='.$id.'">Update</a></button></td>
                      <td><button class="tbl-button-del" onclick="confirmDeleteeducation(' . $id . ')">Delete</button></td>
                    </tr>
                ';
              }
            }
          ?>
          <!-- <a href="adminsection.php?aboutupdateid='.$id.'">Update</a> -->
          <script>
              
              function confirmeducation(id) {
                 var popupupdate = document.getElementById('updateeducationabout');

                 if (popupupdate) {
                     popupupdate.style.display = 'flex';
                 }
                 
                }
              function closepopupboxeducation() {
                 var popupupdate = document.getElementById('updateeducationabout');

                if (popupupdate) {
                        popupupdate.style.display = 'none';
                }
              }
                 
          </script>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
          <script>
            function confirmDeleteeducation(id) {
              Swal.fire({
                  title: "Are you sure?",
                  text: "Once deleted, you will not be able to recover this data!",
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#d33",
                  cancelButtonColor: "#3085d6",
                  confirmButtonText: "Yes, delete it!",
              }).then((result) => {
                  if (result.isConfirmed) {
                      window.location.href = "adminsection.php?educationdeleteid=" + id;
                  }
              });
            }
        </script>
            
            <!-- Add more rows as needed -->
        </tbody>
      </table>
      <br><br>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script>
           $(document).ready(function() {
           $('#education-table').DataTable();
            });

        </script>
    </div>

    <div class="updateeducationabout" id="updateeducationabout">

      <div class="main-insert12">

      <span class="close-popup" id="closepopup" onclick="closepopupboxeducation()">&times;</span>

      <h1 class="table-head22">Insert Education Details </h1>

      <form action="adminsection.php" method="post" enctype="multipart/form-data" id="abouteducationform">

         <!-- Name -->
         <label for="education_title">Education Title:</label>
         <input type="text" id="education_title" placeholder="Master in IT" name="education_title"  required>

         <label for="education_date">Graduates Date:</label>
         <input type="text" id="education_date" placeholder="2022-2023" name="education_date"  required>

         <label for="education_location">University/Location:</label>
         <input type="text" id="education_location" placeholder="Pokhara, Nepal" name="education_location"  required>

         <label for="education_desc">Description:</label>
         <input type="text" id="education_desc" placeholder="Enter Description.." name="education_desc"  required>

            <div class="home-submit-btn">
                <button type="submit" name="insert_education">Insert</button>
            </div>

      </form>
      </div>
    </div>




    <!-- experience SECTION HERE STARTED -->

    <div class="table-container-experience" id="experiencetable">
      
       <h1 class="table-head">Experience Table</h1>
  
      <table id="experience-table" class="display-table-experience">
        <thead>
            <tr>
                <th>ID</th>
                <th>Experience Title</th>
                <th>Date</th>
                <th>Location</th>
                <th>Description</th>
                <th>Desc List</th>
                <th>Action</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Your table data goes here -->

          <?php
            $sql = "Select * from `experience`";
            $result = mysqli_query($con, $sql);

            if($result)
            {
              while($row = mysqli_fetch_assoc($result))
              {
                $id = $row['id'];
                $experience_title = $row['experience_title'];
                $experience_date = $row['experience_date'];
                $experience_location = $row['experience_location'];
                $experience_desc = $row['experience_desc'];
                $experience_list = $row['experience_list'];

                echo'
                    <tr>
                      <td>'.$row['id'].'</td>
                      <td>'.$row['experience_title'].'</td>
                      <td>'.$row['experience_date'].'</td>
                      <td>'.$row['experience_location'].'</td>
                      <td>'.$row['experience_desc'].'</td>
                      <td>'.$row['experience_list'].'</td>
                      <td><button class="tbl-button-insert" onclick="confirmexperience(' . $id . ')">Insert</button></td>
                      <td><button class="tbl-button update-btn"><a href="updateexperience.php?experienceupdateid='.$id.'">Update</a></button></td>
                      <td><button class="tbl-button-del" onclick="confirmDeleteexperience(' . $id . ')">Delete</button></td>
                    </tr>
                ';
              }
            }
          ?>
          <!-- <a href="adminsection.php?aboutupdateid='.$id.'">Update</a> -->
          <script>
              
              function confirmexperience(id) {
                 var popupupdate = document.getElementById('updateexperienceabout');

                 if (popupupdate) {
                     popupupdate.style.display = 'flex';
                 }
                 
                }
              function closepopupboxexperience() {
                 var popupupdate = document.getElementById('updateexperienceabout');

                if (popupupdate) {
                        popupupdate.style.display = 'none';
                }
              }
                 
          </script>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
          <script>
            function confirmDeleteexperience(id) {
              Swal.fire({
                  title: "Are you sure?",
                  text: "Once deleted, you will not be able to recover this data!",
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#d33",
                  cancelButtonColor: "#3085d6",
                  confirmButtonText: "Yes, delete it!",
              }).then((result) => {
                  if (result.isConfirmed) {
                      window.location.href = "adminsection.php?experiencedeleteid=" + id;
                  }
              });
            }
        </script>
            
            <!-- Add more rows as needed -->
        </tbody>
      </table>
      <br><br>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script>
           $(document).ready(function() {
           $('#experience-table').DataTable();
            });

        </script>
    </div>

    <div class="updateexperienceabout" id="updateexperienceabout">

      <div class="main-insert12">

      <span class="close-popup" id="closepopup" onclick="closepopupboxexperience()">&times;</span>

      <h1 class="table-head22">Insert Experience Details </h1>

      <form action="adminsection.php" method="post" enctype="multipart/form-data" id="aboutexperienceform">

         <!-- Name -->
         <label for="experience_title">Experience Title:</label>
         <input type="text" id="experience_title" placeholder="UI designing" name="experience_title"  required>

         <label for="experience_date">Date:</label>
         <input type="text" id="experience_date" placeholder="2022-2023" name="experience_date"  required>

         <label for="experience_location">Location:</label>
         <input type="text" id="experience_location" placeholder="Pokhara, Nepal" name="experience_location"  required>

         <label for="experience_desc">Description:</label>
         <input type="text" id="experience_desc" placeholder="Enter Description.." name="experience_desc"  required>

         <label for="experience_list">Enter list:</label>
         <!-- <input type="" id="experience_list" placeholder="<li> Enter list.. </li>" name="experience_list"  required> -->
         <textarea type="text" id="experience_list" placeholder="<li> Enter list.. </li>" name="experience_list" required >Enter list.. <li> Enter another..</li></textarea>

            <div class="home-submit-btn">
                <button type="submit" name="insert_experience">Insert</button>
            </div>

      </form>
      </div>
    </div>

  </div>


  <!-- PORTFOLIO SETION -->

  <div id="portfolio" style="background-color: transparent;" class="section">

        <h1 class="table-head">Welcome to Portfolio Section</h1>

        <div class="table-container-portfolio" id="portfoliotable">
  
      <table id="portfolio-table" class="display-table-portfolio">
        <thead>
            <tr>
                <th>ID</th>
                <th>Portfolio Desc</th>
                <th>Image</th>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Date</th>
                <th>Details</th>
                <th>Links</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Your table data goes here -->

          <?php
            $sql = "Select * from `portfolio`";
            $result = mysqli_query($con, $sql);

            if($result)
            {
              while($row = mysqli_fetch_assoc($result))
              {
                $id = $row['id'];
                $portfolio_desc = $row['portfolio_desc'];
                $portfolio_image = $row['portfolio_image'];
                $portfolio_title = $row['portfolio_title'];
                $portfolio_subtitle = $row['portfolio_subtitle'];
                $portfolio_date = $row['portfolio_date'];
                $portfolio_details= $row['portfolio_details'];
                $portfolio_link = $row['portfolio_link'];

                echo'
                    <tr>
                      <td>'.$row['id'].'</td>
                      <td>'.$row['portfolio_desc'].'</td>
                      <td><img src="../img/'.$row['portfolio_image'].'" height="90" width="150"></td>
                      <td>'.$row['portfolio_title'].'</td>
                      <td>'.$row['portfolio_subtitle'].'</td>
                      <td>'.$row['portfolio_date'].'</td>
                      <td>'.$row['portfolio_details'].'</td>
                      <td>'.$row['portfolio_link'].'</td>
                      <td class="action-btn">
                         <button class="tbl-button-insert" onclick="confirmportfolio(' . $id . ')">Insert</button>
                         <button class="tbl-button update-btn"><a href="updateportfolio.php?portfolioupdateid='.$id.'">Update</a></button>
                         <button class="tbl-button-del" onclick="confirmDeleteportfolio(' . $id . ')">Delete</button>
                      </td>
                    </tr>
                ';
              }
            }
          ?>
          <!-- <a href="adminsection.php?aboutupdateid='.$id.'">Update</a> -->
          <script>
              
              function confirmportfolio(id) {
                 var popupupdate = document.getElementById('updateportfolioabout');

                 if (popupupdate) {
                     popupupdate.style.display = 'flex';
                 }
                 
                }
              function closepopupboxportfolio() {
                 var popupupdate = document.getElementById('updateportfolioabout');

                if (popupupdate) {
                        popupupdate.style.display = 'none';
                }
              }
                 
          </script>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
          <script>
            function confirmDeleteportfolio(id) {
              Swal.fire({
                  title: "Are you sure?",
                  text: "Once deleted, you will not be able to recover this data!",
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#d33",
                  cancelButtonColor: "#3085d6",
                  confirmButtonText: "Yes, delete it!",
              }).then((result) => {
                  if (result.isConfirmed) {
                      window.location.href = "adminsection.php?portfoliodeleteid=" + id;
                  }
              });
            }
        </script>
            
            <!-- Add more rows as needed -->
        </tbody>
      </table>
      <br><br>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script>
           $(document).ready(function() {
           $('#portfolio-table').DataTable();
            });

        </script>
    </div>

    <div class="updateportfolioabout" id="updateportfolioabout">

      <div class="main-insert12">

      <span class="close-popup" id="closepopup" onclick="closepopupboxportfolio()">&times;</span>

      <h1 class="table-head22">Insert Portfolio Details </h1>

      <form action="adminsection.php" method="post" enctype="multipart/form-data" id="aboutportfolioform">

         <!-- Name -->
         <!-- <label for="portfolio_image">Experience Title:</label>
         <input type="text" id="portfolio_image" placeholder="UI designing" name="portfolio_image"  required> -->

         <label for="portfolio_image">Acitivities Image:</label>
         <input type="file" id="portfolio_image" name="portfolio_image" accept="image/*" >

         <label for="portfolio_title">Title:</label>
         <input type="text" id="portfolio_title" placeholder="Enter title" name="portfolio_title"  required>

         <label for="portfolio_subtitle">Subtitle:</label>
         <input type="text" id="portfolio_subtitle" placeholder="Enter Subtitle" name="portfolio_subtitle"  required>

         <label for="portfolio_date">Date:</label>
         <input type="text" id="portfolio_date" placeholder="0ct, 2023" name="portfolio_date"  required>

         <label for="portfolio_details">Acitivities Details:</label>
         <input type="text" id="portfolio_details" placeholder="Enter Details..." name="portfolio_details"  required>

         <label for="portfolio_link">Links:</label>
         <input type="" id="portfolio_link" placeholder="https://www.php.net/" name="portfolio_link"  required>

            <div class="home-submit-btn">
                <button type="submit" name="insert_portfolio">Insert</button>
            </div>

      </form>
      </div>
    </div>



  </div>


  <!-- IMAGE SECTION -->
  <div id="image" class="section">

      <h1 class="table-head">Welcome to Image Section</h1>

        <div class="table-container-image" id="imagetable">
  
      <table id="image-table" class="display-table-image">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Action</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Your table data goes here -->

          <?php
            $sql = "Select * from `image`";
            $result = mysqli_query($con, $sql);

            if($result)
            {
              while($row = mysqli_fetch_assoc($result))
              {
                $id = $row['id'];
                $upload_image = $row['upload_image'];

                echo'
                    <tr>
                      <td>'.$row['id'].'</td>
                      <td><img src="../img/'.$row['upload_image'].'" height="190" width="200"></td>
                      <td ><button class="tbl-button-insert" onclick="confirmimage(' . $id . ')">Insert</button></td>
                      <td><button class="tbl-button update-btn"><a href="updateimage.php?imageupdateid='.$id.'">Update</a></button></td>
                      <td><button class="tbl-button-del" onclick="confirmDeleteimage(' . $id . ')">Delete</button></td>
                    </tr>
                ';
              }
            }
          ?>
          <!-- <a href="adminsection.php?aboutupdateid='.$id.'">Update</a> -->
          <script>
              
              function confirmimage(id) {
                 var popupupdate = document.getElementById('updateimageabout');

                 if (popupupdate) {
                     popupupdate.style.display = 'flex';
                 }
                 
                }
              function closepopupboximage() {
                 var popupupdate = document.getElementById('updateimageabout');

                if (popupupdate) {
                        popupupdate.style.display = 'none';
                }
              }
                 
          </script>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
          <script>
            function confirmDeleteimage(id) {
              Swal.fire({
                  title: "Are you sure?",
                  text: "Once deleted, you will not be able to recover this data!",
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#d33",
                  cancelButtonColor: "#3085d6",
                  confirmButtonText: "Yes, delete it!",
              }).then((result) => {
                  if (result.isConfirmed) {
                      window.location.href = "adminsection.php?imagedeleteid=" + id;
                  }
              });
            }
        </script>
            
            <!-- Add more rows as needed -->
        </tbody>
      </table>
      <br><br>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script>
           $(document).ready(function() {
           $('#image-table').DataTable();
            });

        </script>
    </div>


    <div class="updateimageabout" id="updateimageabout">

      <div class="main-insert12">

      <span class="close-popup" id="closepopup" onclick="closepopupboximage()">&times;</span>

      <h1 class="table-head22">Insert image Details </h1>

      <form action="adminsection.php" method="post" enctype="multipart/form-data" id="aboutimageform">

         <!-- Name -->
         <!-- <label for="portfolio_image">Experience Title:</label>
         <input type="text" id="portfolio_image" placeholder="UI designing" name="portfolio_image"  required> -->

         <label for="upload_image">Upload Image:</label>
         <input type="file" id="upload_image" name="upload_image" accept="image/*" >

            <div class="home-submit-btn">
                <button type="submit" name="upload_image">Upload</button>
            </div>

      </form>
      </div>
    </div>




  </div>



  <div id="contact" class="section">
       <h1 class="table-head">Welcome To Contact Section</h1>

        <div class="table-container-contact" id="contacttable">
  
      <table id="contact-table" class="display-table-contact">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Your table data goes here -->

          <?php
            $sql = "Select * from `contact`";
            $result = mysqli_query($con, $sql);

            if($result)
            {
              while($row = mysqli_fetch_assoc($result))
              {
                $id = $row['id'];
                $contact_name = $row['contact_name'];
                $contact_email = $row['contact_email'];
                $contact_subject = $row['contact_subject'];
                $contact_message = $row['contact_message'];

                echo'
                    <tr>
                      <td>'.$row['id'].'</td>
                      <td>'.$row['contact_name'].'</td>
                      <td>'.$row['contact_email'].'</td>
                      <td>'.$row['contact_subject'].'</td>
                      <td>'.$row['contact_message'].'</td>
                      <td><button class="tbl-button update-btn"><a href="mailto:' . $row['contact_email'] . '?subject=Reply to -' . $row['contact_subject'] . '">Reply</a></button></td>
                      <td><button class="tbl-button-del" onclick="confirmDeletecontact(' . $id . ')">Delete</button></td>
                    </tr>
                ';
              }
            }
          ?>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
          <script>
            function confirmDeletecontact(id) {
              Swal.fire({
                  title: "Are you sure?",
                  text: "Once deleted, you will not be able to recover this data!",
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#d33",
                  cancelButtonColor: "#3085d6",
                  confirmButtonText: "Yes, delete it!",
              }).then((result) => {
                  if (result.isConfirmed) {
                      window.location.href = "adminsection.php?contactdeleteid=" + id;
                  }
              });
            }
        </script>
            
            <!-- Add more rows as needed -->
        </tbody>
      </table>
      <br><br>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script>
           $(document).ready(function() {
           $('#contact-table').DataTable();
            });

        </script>
    </div>

  </div>



  <!-- PROFILE SECTION -->


  <div id="profile" class="section">

      <H1 class="profile-head1">Hi, <?php echo $_SESSION['username']?></H1>
      <h1 class="profile-head">Welcome to Your Profile !</h1>

      <div class="profile-main">

          <div class="profileformdiv">

            <form action="adminsection.php" id="deleteForm" method="post" enctype="multipart/form-data" >
               
              <h3 class="del-text">Delete Account</h3>
                 
                <div class="form-input">
                   <label for="usernamedel" class="form-label">Username:</label>
                   <input type="text" class="form-control" name="usernamedel" id="usernamedel" value="" placeholder="Enter Username" required>
               </div>

              <div class="form-input">
                <label for="emaildel" class="form-label">Email Address:</label>
                <input type="email" class="form-control" name="emaildel" id="emaildel" value="" placeholder="Enter Email" required>
              </div>

              <div class="form-input">
                <label for="passworddel" class="form-label">Current Password
                </label>
                <input type="password" class="form-control" name="passworddel" id="passworddel" placeholder="Enter Password" required >
              </div>
                
              <div class="form-input-btn-del">
                 <button type="submit" name="delete_account"  onclick="confirmDeleteAccount()">Delete Your Account</button>
                  <!-- <button type="button" name="delete_account" onclick="confirmDeleteAccount( '. $username . ')">Delete Your Account</button> -->
              </div>

            </form>

          </div>  
           <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
           <script>
            function confirmDeleteAccount() {

               Swal.fire({
                  title: "Are you sure?",
                  text: "Once deleted, you will not be able to recover your account!",
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#d33",
                  cancelButtonColor: "#3085d6",
                  confirmButtonText: "Yes, delete my account!",
                 }).then((result) => {
                   if (result.isConfirmed) {
                        window.location.href = "adminsection.php";
                   }
                  });
                }
          </script>


          


        <div class="profileformdiv">
          <?php
            // Assuming you have a valid database connection in connection.php
            require('./connection.php');

             // Fetch and display user details
           if (isset($_SESSION['username'])) {
              $username = $_SESSION['username'];

              // Query the database to get user details
              $query = "SELECT * FROM `registered_users` WHERE `username` = '$username'";
              $result = mysqli_query($con, $query);

              if ($result && mysqli_num_rows($result) == 1) {

                  $userdataprofile = mysqli_fetch_assoc($result);
              }
            }

          ?>

          

          <form action="updateprofile.php" method="post" enctype="multipart/form-data"  class="user-profile">

            <h3>Upadte Details</h3>

              <div class="form-input">
                   <label for="fullname" class="form-label">Fullname:</label>
                   <input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo isset($userdataprofile['fullname']) ? $userdataprofile['fullname'] : ''; ?>" placeholder="Enter fullname">
              </div>

               <div class="form-input">
                   <label for="username" class="form-label">Username:</label>
                   <input type="text" class="form-control" name="username" id="username" value="<?php echo $_SESSION['username']?>" placeholder="Enter Username">
              </div>

              <div class="form-input">
                <label for="email" class="form-label">Email Address:</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $userdataprofile['email'] ?>" placeholder="Enter Email" >
              </div>

              <div class="form-input">
                <label for="password" class="form-label">Old Password
                </label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" >
              </div>

              <div class="form-input">
                <label for="password1" class="form-label">New Password
                  <i class='bx bx-show' onclick="togglePasswordVisibility('password1', true)"></i>
                  <i style='display: none;' class='bx bx-hide' onclick="togglePasswordVisibility('password1', false)"></i>
                </label>
                <input type="password" class="form-control" name="password1" id="password1" placeholder="Enter Password">
              </div>

              <div class="form-input">
                <label for="confirmpassword" class="form-label">Confirm Password
                <i class='bx bx-show' onclick="togglePasswordVisibility('confirmpassword', true)"></i>
                <i style='display: none;' class='bx bx-hide' onclick="togglePasswordVisibility('confirmpassword', false)"></i>
                </label>
                <input type="password" class="form-control" name="confirmpassword" onkeyup="checkPasswordMatch()" id="confirmpassword" placeholder="Enter confirm password">
                <span id="message"></span>
              </div>

              <div class="form-input-btn">
                <button type="submit" name="update_profile">Update</button>
             </div>
          </form>

        </div>



      </div>

  </div>

  <script>
    function showSection(sectionId) {
      // Hide all sections
      var sections = document.querySelectorAll('.section');
      sections.forEach(function(section) {
        section.classList.remove('active');
      });

      // Display the selected section
      var selectedSection = document.getElementById(sectionId);
      selectedSection.classList.add('active');

      // Remove the "active" class from all buttons
      var buttons = document.querySelectorAll('button');
      buttons.forEach(function(button) {
        button.classList.remove('active-button');
      });

      // Add the "active" class to the clicked button
      var clickedButton = document.getElementById(sectionId + 'Button');
      clickedButton.classList.add('active-button');

      // Save the last clicked button to local storage
      localStorage.setItem('lastClickedButton', sectionId);
    }

    document.addEventListener('DOMContentLoaded', function() {
      var lastClickedButton = localStorage.getItem('lastClickedButton') || 'home';
      showSection(lastClickedButton);
    });
  </script>

<script>
        const leftbar = document.querySelector('.left-bar');
        const closebtn = document.querySelector('.close-btn');
        const hamburgers = document.querySelector('.hamburger');

           hamburgers.addEventListener('click', show);
           closebtn.addEventListener('click', close);

          function show() {
              leftbar.style.display = 'block';
              leftbar.style.right = '0%'
            }

          function close() {
              leftbar.style.right = '-200%';
            }

</script>

  <script>

        function checkPasswordMatch() {
            var password = document.getElementById("password1").value;
            var confirmPassword = document.getElementById("confirmpassword").value;
            var message = document.getElementById("message");

            if (password === confirmPassword) {
                message.innerHTML = "Passwords match!";
                message.style.color = "green";
            } else {
                message.innerHTML = "Passwords do not match to New Password!";
                message.style.color = "red";
            }
        }

        function togglePasswordVisibility(inputId, showIcon) {
    var input = document.getElementById(inputId);
    
    // Get the parent form-input div
    var formInputDiv = input.closest('.form-input');

    // Find the show and hide icons within the parent div
    var showIconElement = formInputDiv.querySelector('.bx-show');
    var hideIconElement = formInputDiv.querySelector('.bx-hide');

    if (showIcon) {
        input.type = "text";
        showIconElement.style.display = 'none';
        hideIconElement.style.display = 'inline-block';
    } else {
        input.type = "password";
        showIconElement.style.display = 'inline-block';
        hideIconElement.style.display = 'none';
    }
    }
</script>

<script>
      
    </script>

</body>
</html>
