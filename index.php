
<?php

 include('./admin/connection.php');

 $query = "SELECT * FROM `Section_control`, `link_icons`, `home`, `about`, `skills`, `resume_summary`, `portfolio`, `about_control`";
 $run = mysqli_query($con, $query);

 $user_data = mysqli_fetch_array($run);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SANDESH-PORTFOLIO</title>
    <link rel="icon" href="./img/favicon.PNG" type="image/png" sizes="16x16" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    
    <!-- !-- box ICON --> 
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- UNICON -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- CSS LINK -->
    <!-- <link rel="stylesheet" href="./style/hiddencss.css"> -->
    <link rel="stylesheet" href="./style/mainstyle1.css">
     
    <!-- fontawesome icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.8/glider.min.css" integrity="sha512-YM6sLXVMZqkCspZoZeIPGXrhD9wxlxEF7MzniuvegURqrTGV2xTfqq1v9FJnczH+5OGFl5V78RgHZGaK34ylVg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- ASO LIBRARY -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap");
    .active{
    color: #fffafa !important;
    text-shadow: 1px 2px 37px rgba(0, 0, 0, 1) !important;
  }
  .main-class {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(min(30.25rem, 100%), 1fr));
    gap: 20px;
    padding: 10px;
    padding-left: 7rem;
    padding-right: 7rem;
}

.sub-class{
    display: grid;
    place-items: center;
    border-radius: 5px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.skills-txt11 h2{
    text-align: center;
    padding-top: 1.6rem;
    padding-bottom: 2rem;
    color: #333333;
}
.sub-box-class{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    margin: 5px;
    padding: 12px;
    gap: 30px;
    column-gap: 7rem;
    width: fit-content;
}
.child-sub-box11{
   display: flex;
   justify-content: left;
   margin: 5px;
   width: fit-content;
}

.child-sub-box11 i{
    font-size: 1.7rem;
    animation: shiningAnimation 3s ease-in-out infinite;
}
@keyframes shiningAnimation {
    0%, 100% {
      opacity: 0.6;
    }
    50% {
      opacity: 1;
    }
  }
.child-box11 h2{
    font-size: 1.2rem;
    padding-bottom: 0.1rem;
    text-align: start;
    color: #333333;
}
.child-box11 h5{
    text-align:start;
    color: #c3c3c3;
    font-size: 0.8rem;
    padding-top: 0.2rem;
}



@media screen and (max-width:800px) {
    .main-class {
    display: grid;
    gap: 20px;
    padding: 10px;
    padding-left: 1rem;
    padding-right: 1rem;
 }
 .sub-box-class{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    margin: 10px;
    padding: 12px;
    gap: 10px;
    column-gap: 10rem;
 }
}

@media screen and (max-width:500px) {
    .child-sub-box11{
   display: flex;
   justify-content: left;
   margin: 5px;
   margin-left: 0rem;
   width: fit-content;
 }
 .sub-box-class{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    margin: 10px;
    padding: 9px;
    gap: 20px;
    column-gap: 3rem;
 }

}

@media screen and (max-width: 378px) {
   .para-desc{
        font-size: 15px;
        margin-left: -0.5rem ;
        font-weight: 400;
        line-height: 2.2rem;
        text-align: justify;
    }
}
  
  </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
 <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  
 <script src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.8/glider.min.js" integrity="sha512-AZURF+lGBgrV0WM7dsCFwaQEltUV5964wxMv+TSzbb6G1/Poa9sFxaCed8l8CcFRTiP7FsCgCyOm/kf1LARyxA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>


<header>
    <nav>

    <?php
           if($user_data['logo_section'] == 'on')
           {
            ?>
              <div class="logo">
                  <a href="index.php"><img src="./img/mainlogo.svg" alt="my-logo" /></a>
               </div>
            <?php
           }
        ?>

        <ul class="mainmenu">

        <?php
           if($user_data['home_section'] == 'on')
           {
            ?>
              <li class="nav-item">
              <a href="#" class="nav-link ">
                  <i class="nav-icon"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" id="home1"><g fill="#200E32" transform="translate(2.5 2.004)"><path d="M7.92173917,18.2568881 L3.92173915,18.2568881 C2.62561934,18.2521579 1.57473912,17.2051555 1.5652174,15.909062 L1.5652174,7.95254022 C1.56776138,7.51865617 1.76191292,7.1080734 2.09565218,6.83080108 L2.80000001,6.30906195 C3.05714116,6.03509289 3.08328826,5.61704285 2.86228858,5.31316828 C2.6412889,5.00929372 2.23552029,4.90536419 1.89565218,5.06558368 L1.89565218,5.06558368 L1.17391305,5.60471412 C0.445875565,6.16803633 0.0138352771,7.0321169 -7.10542736e-15,7.95254022 L-7.10542736e-15,15.9177576 C0.0047821894,18.0816904 1.75780637,19.8347146 3.92173915,19.8394968 L7.92173917,19.8394968 C8.35396202,19.8394968 8.70434787,19.4891109 8.70434787,19.0568881 C8.70434787,18.6246652 8.35396202,18.2742794 7.92173917,18.2742794 L7.92173917,18.2568881 Z"></path><path d="M18.7913044,7.93514891 C18.7821625,7.02148476 18.3641697,6.15997273 17.652174,5.58732281 L11.6434783,0.796018441 C10.3230761,-0.26533948 8.44214141,-0.26533948 7.12173917,0.796018441 L5.21739133,2.17862714 C4.85960686,2.43555961 4.77785016,2.93388616 5.03478263,3.29167063 C5.29171511,3.6494551 5.79004165,3.7312118 6.14782612,3.47427932 L8.07826091,2.03080106 C8.83595413,1.40700621 9.92926336,1.40700621 10.6869566,2.03080106 L16.6956523,6.82210543 C17.0414821,7.0962427 17.245809,7.51128176 17.252174,7.95254022 L17.252174,15.9177576 C17.252174,17.2144262 16.2010165,18.2655837 14.9043479,18.2655837 L13.1217392,18.2655837 C12.9392451,18.2655837 12.7913044,18.1176431 12.7913044,17.935149 L12.7913044,14.3438446 C12.7913144,13.1994401 11.8661337,12.270372 10.7217392,12.2655837 L8.11304352,12.2655837 C7.56185446,12.2655837 7.03324068,12.4845427 6.64349116,12.8742922 C6.25374164,13.2640418 6.03478264,13.7926555 6.03478264,14.3438446 L6.03478264,15.7177576 C6.03478264,16.1499805 6.38516849,16.5003663 6.81739134,16.5003663 C7.24961419,16.5003663 7.60000004,16.1499805 7.60000004,15.7177576 L7.60000004,14.3438446 C7.59766759,14.208583 7.64977261,14.0780549 7.74461016,13.9815822 C7.83944772,13.8851095 7.96906617,13.830781 8.10434787,13.8308011 L10.7130435,13.8308011 C10.9915871,13.8308011 11.2173914,14.0566053 11.2173914,14.3351489 L11.2173914,14.3351489 L11.2173914,17.935149 C11.2221784,18.9834938 12.0733835,19.8308011 13.1217392,19.8308011 L14.8608696,19.8308011 C17.0267864,19.8308011 18.7826088,18.0749787 18.7826088,15.909062 L18.7913044,7.93514891 Z"></path></g></svg></i>
                  <span>Home</span>
                </a>
            </li>
            <?php
           }
        ?>

        <?php
           if($user_data['about_section'] == 'on')
           {
            ?>
              <li class="nav-item">
              <a href="#about1" class="nav-link ">
                  <i class="nav-icon"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 16 16" id="user"><path fill="#231f20" d="M5.143 2.25A2.896 2.896 0 0 0 2.25 5.143v5.714a2.897 2.897 0 0 0 2.893 2.895h5.714a2.899 2.899 0 0 0 2.893-2.895V5.143a2.896 2.896 0 0 0-2.893-2.893H5.143zm0 .5h5.714a2.397 2.397 0 0 1 2.395 2.393v5.714a2.38 2.38 0 0 1-.764 1.743c-.613-1.961-2.452-3.356-4.535-3.356a4.732 4.732 0 0 0-4.514 3.29 2.385 2.385 0 0 1-.689-1.677V5.143A2.395 2.395 0 0 1 5.143 2.75zm2.841 1.527a2.244 2.244 0 0 0-2.242 2.24A2.246 2.246 0 0 0 7.984 8.76a2.242 2.242 0 0 0 0-4.482zm0 .5a1.742 1.742 0 0 1 0 3.483c-.96 0-1.742-.782-1.742-1.742s.782-1.74 1.742-1.74zm-.03 4.967c1.923 0 3.617 1.324 4.11 3.168-.356.21-.764.34-1.205.34H5.143v-.002c-.475 0-.917-.143-1.29-.383a4.241 4.241 0 0 1 4.1-3.123z"></path></svg></i>
                  <span>About</span>
                </a>
            </li>
            <?php
           }
        ?>

        <?php
           if($user_data['portfolio_section'] == 'on')
           {
            ?>
              <li class="nav-item">
              <a href="#portfolio1" class="nav-link">
                  <i class="nav-icon"><svg xmlns="http://www.w3.org/2000/svg"  enable-background="new 0 0 50 50" viewBox="0 0 50 50" id="portfolio"><path d="M5.7373,45.45483h38.5249c2.5927,0,4.73779-2.10998,4.73779-4.73242V22.84009v-7.96436c0-2.53183-2.08356-4.73389-4.73779-4.73389H32.41797V7.38892c0-1.56787-1.27588-2.84375-2.84375-2.84375h-9.14893 c-1.56787,0-2.84375,1.27588-2.84375,2.84375v2.75293H5.7373C3.12334,10.14185,1,12.27183,1,14.87573v7.96436v17.88232 C1,43.25676,3.11975,45.45483,5.7373,45.45483z M44.26074,43.4519H5.73926c-1.53761,0-2.73779-1.29329-2.73779-2.73291V26.68677 c0.77484,0.55096,1.716,0.88281,2.73779,0.88281h4.14111v1.61768c0,0.55225,0.44775,1,1,1h4.84229c0.55225,0,1-0.44775,1-1 v-1.61768h16.54541v1.61768c0,0.55225,0.44775,1,1,1h4.85156c0.55225,0,1-0.44775,1-1v-1.61768h4.14111 c1.02161,0,1.96252-0.33173,2.7373-0.88245v14.03186C46.99805,42.2097,45.76594,43.4519,44.26074,43.4519z M3.00146,14.87769 c0-1.4556,1.19903-2.73145,2.73779-2.73145h6.56543v10.77832h-1.42432c-0.55225,0-1,0.44775-1,1v1.64502H5.73926 c-1.50531,0-2.72974-1.21698-2.73779-2.71509V14.87769z M46.99805,14.87769v7.98163 c-0.01068,1.49579-1.23364,2.71027-2.7373,2.71027h-4.14111v-1.64502c0-0.55225-0.44775-1-1-1h-1.4248V12.14624h6.56592 C45.76377,12.14624,46.99805,13.36088,46.99805,14.87769z M35.26807,24.92456h2.85156c0,0.10269,0,3.37977,0,3.2627h-2.85156 C35.26807,27.99545,35.26807,24.75924,35.26807,24.92456z M35.69482,22.92456h-1.42676c-0.55225,0-1,0.44775-1,1v1.64502H16.72266 v-1.64502c0-0.55225-0.44775-1-1-1h-1.41797V12.14624h21.39014V22.92456z M11.88037,24.92456h2.84229c0,0.10269,0,3.37977,0,3.2627 h-2.84229C11.88037,27.99545,11.88037,24.75924,11.88037,24.92456z M19.58154,7.38892c0-0.46533,0.37842-0.84375,0.84375-0.84375 h9.14893c0.46533,0,0.84375,0.37842,0.84375,0.84375v2.75293H19.58154V7.38892z"></path></svg></i>
                  <span>Portfolio</span>
                </a>
            </li>
            <?php
           }
        ?>

        <?php
           if($user_data['image_section'] == 'on')
           {
            ?>
              <li class="nav-item">
              <a href="#image1" class="nav-link">
                  <i class="nav-icon"><svg  enable-background="new 0 0 48 48"  id="Layer_1" version="1.1" viewBox="0 0 48 48"  xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path clip-rule="evenodd" d="M43,41H5c-2.209,0-4-1.791-4-4V15c0-2.209,1.791-4,4-4h1l0,0c0-1.104,0.896-2,2-2  h2c1.104,0,2,0.896,2,2h2c0,0,1.125-0.125,2-1l2-2c0,0,0.781-1,2-1h8c1.312,0,2,1,2,1l2,2c0.875,0.875,2,1,2,1h9  c2.209,0,4,1.791,4,4v22C47,39.209,45.209,41,43,41z M45,15c0-1.104-0.896-2-2-2l-9.221-0.013c-0.305-0.033-1.889-0.269-3.193-1.573  l-2.13-2.13l-0.104-0.151C28.351,9.132,28.196,9,28,9h-8c-0.153,0-0.375,0.178-0.424,0.231l-0.075,0.096l-2.087,2.086  c-1.305,1.305-2.889,1.54-3.193,1.573l-4.151,0.006C10.046,12.994,10.023,13,10,13H8c-0.014,0-0.026-0.004-0.04-0.004L5,13  c-1.104,0-2,0.896-2,2v22c0,1.104,0.896,2,2,2h38c1.104,0,2-0.896,2-2V15z M24,37c-6.075,0-11-4.925-11-11s4.925-11,11-11  s11,4.925,11,11S30.075,37,24,37z M24,17c-4.971,0-9,4.029-9,9s4.029,9,9,9s9-4.029,9-9S28.971,17,24,17z M24,31  c-2.762,0-5-2.238-5-5s2.238-5,5-5s5,2.238,5,5S26.762,31,24,31z M24,23c-1.656,0-3,1.344-3,3c0,1.657,1.344,3,3,3  c1.657,0,3-1.343,3-3C27,24.344,25.657,23,24,23z M10,19H6c-0.553,0-1-0.447-1-1v-2c0-0.552,0.447-1,1-1h4c0.553,0,1,0.448,1,1v2  C11,18.553,10.553,19,10,19z" fill-rule="evenodd"/></svg></i>
                  <span>Image</span>
                </a>
            </li>
            <?php
           }
        ?>

        <?php
           if($user_data['contact_section'] == 'on')
           {
            ?>
              <li class="nav-item">
              <a href="#contact1" class="nav-link">
                  <i class="nav-icon"><svg  viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"> <g data-name="1" id="_1"><path d="M291.48,449.94A15,15,0,0,1,278,441.5L207.5,296.57,62.57,226.08a15,15,0,0,1,1-27.41L435.48,49.08A15,15,0,0,1,455,68.6L305.4,440.54A15,15,0,0,1,292,449.93Zm-185.38-236,119.18,58a15,15,0,0,1,6.93,6.93l58,119.18L414,90Z"/><path d="M218.72,300.35a15,15,0,0,1-10.6-25.61L430.47,52.39a15,15,0,1,1,21.21,21.22L229.33,296A15,15,0,0,1,218.72,300.35Z"/></g></svg></i>
                  <span>Contact</span>
                </a>
             </li>
            <?php
           }
        ?>

             <div class="closemenu">
                <i class="fa-regular fa-rectangle-xmark"></i>
             </div>
             <li class="nav-item">
                <a href="#" id="admin-icon" class="nav-link">
                    <i class="fa-solid fa-right-to-bracket "></i>
                  </a>
               </li>
        </ul>

        <div class="admin">
              <div class="openmenu">
                <i class="uil uil-apps " id="nav-icon1"></i>
              </div>
         </div>

    </nav>

    <div class="left-nav" data-aos="fade-left" duration="2000" data-aos-delay="1500">

        <i id="home" class='bx bx-home-alt-2 nav-icon-left '></i>
        <div class="left-hr"></div>

        <i id="about"class='bx bx-user nav-icon-left'></i>
        <div class="left-hr "></div>

       <i id="portfolio" class='bx bx-briefcase-alt nav-icon-left'></i>
        <div class="left-hr"></div>

       <i id="image" class='bx bx-image nav-icon-left'></i>
        <div class="left-hr"></div>

        <i id="contact" class='bx bx-send nav-icon-left'></i>
    </div>
</header>

 <main>
        <section id="home"><br><br><br><br><br><br>

            <div class="home-container">

                <div class="home-left-container">

                    <div class="main-home-text">
                        <h1 class="hey">Hey,</h1>
                        <h1>I'm <span><?= $user_data['name']?></span></h1>
                    </div>

                    <div class="home-hr">
                        <h3 class="typing-txt"><span class="hr-line-home"></span> <p id="elementtxt1"></p> </h3>
                    </div>

                    <script>
                        new TypeIt("#elementtxt1", {
                    speed: 250,
                    startDelay: 3000,
                    loop: true, // Set loop to true
                  })
                    .type("Web Developer ", { delay: 1000 })
                    .pause(500, {delay:2000})
                    .delete(20, {delay:1000})
                    .type("Back-end ", { delay: 1000 })
                    .pause(500, {delay:2000})
                    .delete(20, {delay:1000})
                    .type("Designer ", { delay: 3000 })
                    .pause(500, {delay:2000})
                    .delete(20, {delay:1000})
                  
                    .go();
                    </script>

                    <div class="home-para">
                         <div class="para-icon">
                            <i class='bx bxl-javascript' ></i>
                            <i class='bx bxl-php' ></i>
                            <i class='bx bxl-css3' ></i>
                         </div>
                         <div class="para-desc">
                            <p class="txt-p">
                                <?= $user_data['home_desc']?>
                            </p>
                         </div>
                    </div>

                    <?php

                     if($user_data['home_download_btn']=='on')
                     {
                        ?>
                           <div class="download-home-btn">
                               <a href="cv/Finalcvsandesh.pdf" download="Cv sandesh" class="main-btn">Download CV &nbsp; <i class='bx bx-download'></i></a>
                           </div>
                        <?php
                     }
                    ?>

                </div>
                
                   <div class="home-right-container" >

                <?php
                  if($user_data['show_home_image']== 'on')
                  {
                    ?>
                         <img src="./img/<?= $user_data['home_image']?>">
                    <?php
                  }
                ?>
                   </div>

                    

            </div>

        </section>

        <section id="about" class="about-section">
            <div id="about1">

                <div class="main-about-txt">
                    <h1 data-aos="fade-up">Information About Me</h1>
                    <h3 data-aos="fade-up">About<span>Me</span></h3>
                </div>

                <div class="about-grid-main">

                    <div class="first-about-grid" data-aos="fade-right">

                    <?php
                      if($user_data['show_about_image']=='on')
                      {
                        ?>
                        <img src="./img/<?= $user_data['about_image']?>">
                        <?php
                      }
                    ?>
                       
                    </div>

                    <div class="second-about-grid">

                        <div class="main-left-box" data-aos="fade-left">

                        <!-- DYnamic from the database left boxes -->
                        <?php
                          $about_box = "select * from `about`";
                          $about_box_result = mysqli_query($con, $about_box);
                            
                           if($about_box_result -> num_rows > 0)
                           {
                              while($row = $about_box_result -> fetch_assoc())
                              {
                                ?>
                                  <div class="main-left-box1">
                                     <?= $row['about_box_icon']?>
                                     <h1><?=$row['about_box_title']?></h1>
                                     <h3><?=$row['about_box_subtitle']?></h3>
                                   </div>
                                <?php

                              }
                           }
                        ?>

                        </div>

                        <div class="second-about-box-text" data-aos="fade-left">
                            <p>
                                <?= nl2br($user_data ['about_desc'])?>
                            </p>
                         </div>

                         <?php
                           if($user_data['show_about_icon'] == 'on')
                           {
                            ?>
                            <div class="about-icon" data-aos="fade-left" data-aos-offset="20">
                               <a href="https://www.facebook.com/sandesh.devkota.3" target="_blank"><i class='bx bxl-meta'></i></a>
                               <a href="https://www.snapchat.com/add/sandesh.dkt" target="_blank"><i class="fa-brands fa-snapchat snap1"></i></a>
                               <a href="https://www.instagram.com/sandesh.dkt/?hl=en" target="_blank"><i class='bx bxl-instagram'></i></a>
                               <a href="https://github.com/sandeshdevkota" target="_blank"><i class='bx bxl-github'></i></a>
                            </div>
                            <?php
                           }
                         ?>
                         
                         <?php
                         if($user_data['about_download_btn'] == 'on')
                         {
                          ?>
                            <div class="download-about-btn" data-aos="fade-left" data-aos-offset="20">
                               <a href="cv/Finalcvsandesh.pdf" download="Cv sandesh" class="main-btn">Download CV &nbsp;  <i class='bx bx-cloud-download'></i></a>
                            </div>
                          <?php
                         }
                       ?>

                         

                        
            
                    </div>
                </div>

                <!-- SKILLS SECTION START -->

                <div class="skills-area">

                    <div class="skills-title">
                        <h1 data-aos="fade-up">My Technical Level</h1>
                        <h3 class="skills-txt1" data-aos="fade-up"><span class="hr-line-about"></span>Skills</h3>
                    </div>

                    <p data-aos="fade-up">
                        <?= $user_data['skills_desc']?>
                    </p>

                    <div class="main-class">
                         <div class="sub-class" data-aos="fade-right">
                            <div class="skills-txt11"><h2>Frontend Developer</h2></div>

                               <div class="sub-box-class">

                     <!-- DYnamic from the database Skills boxes -->
                     <?php
                          $skills_about_box_query = "select * from `skills`";
                          $Skills_about_box_result = mysqli_query($con, $skills_about_box_query);
                            
                           if($Skills_about_box_result -> num_rows > 0)
                           {
                              while($row = $Skills_about_box_result -> fetch_assoc())
                              {
                                ?>
                                    <div class="child-sub-box11">
                                      <?= $row['skills_icon']?>
                                      <div class="child-box11">
                                          <h2> <?= $row['skills_title']?></h2>
                                          <h5><?= $row['skills_level']?></h5>
                                      </div>
                                    </div>
                                <?php

                              }
                           }
                        ?>

                           </div>
            
                         </div>



                             <div class="sub-class" data-aos="fade-left">
                                <div class="skills-txt11"><h2>Backend Developer</h2></div>

                                    <div class="sub-box-class">

                             <!-- DYnamic from the database Skills boxes -->
                     <?php
                          $skills_about_box_query2 = "select * from `backendskills`";
                          $Skills_about_box_result2 = mysqli_query($con, $skills_about_box_query2);
                            
                           if($Skills_about_box_result -> num_rows > 0)
                           {
                              while($row = $Skills_about_box_result2 -> fetch_assoc())
                              {
                                ?>
                                    <div class="child-sub-box11">
                                      <?= $row['backend_skills_icon']?>
                                      <div class="child-box11">
                                          <h2> <?= $row['backend_skills_title']?></h2>
                                          <h5><?= $row['backend_skills_level']?></h5>
                                      </div>
                                    </div>
                                <?php

                              }
                           }
                        ?>

                                    </div>
            
                                 </div>

                               </div>


                </div>

                <!-- RESUME AREA MAIN AREA RESUME -->

                <div class="resume-area">
                    <div class="resume-title">
                        <h1 data-aos="fade-up">Path of Accomplishments</h1>
                        <h3 class="resume-txt1" data-aos="fade-up"><span class="hr-line-resume"></span>Resume</h3>
                    </div>

                    <p data-aos="fade-down">
                        I hereby declare that all the details mentioned above are in accordance with the truth and fact as per my knowledge and I hold responsibility for the correctness of the above- mentioned particulars .
                    </p>

                    <div class="resume-main-box" data-aos="fade-up"
                    data-aos-anchor-placement="center-center" data-aos-offset="-20000" >

                        <div class="resume-box1" data-aos="fade-right">

                            <div class="resume-sub-box">

                                <div class="resume-child-box" >

                                    <div class="summary-h1" data-aos="fade-up">
                                        <h1>Summary</h1>
                                    </div>
                                    
                                    <div class="summay-content">
                                         <div class="vertical-line" data-aos="fade-up"></div>
                                         <div class="summary-text" data-aos="fade-up">
                                            <h1><?= $user_data['resume_name']?></h1>
                                            <h5><?= $user_data['summary_desc']?></h5>
                                            <div class="list1">
                                              <ul>
                                                <li> <i class='bx bx-caret-right'></i><?= $user_data['resume_location']?></li>
                                                <li><i class='bx bx-caret-right'></i><?= $user_data['resume_number']?></li>
                                                <li><i class='bx bx-caret-right'></i><?= $user_data['resume_email']?></li>
                                              </ul>
                                            </div>
                                         </div>
                                    </div>
                                </div>

                                <div class="resume-child-box">

                                    <div class="education-h1"  data-aos="fade-up">
                                        <h1>Education</h1>
                                    </div>
                                    
                                    <div class="summay-content">

                                        <div class="vertical-line2" data-aos="fade-up"></div>
                                        <div class="summary-text">

                                        <?php
                                          $education = "Select * from `education`";
                                          $education_result = mysqli_query($con, $education);

                                          if($education_result-> num_rows > 0){
                                            
                                              while($row = $education_result -> fetch_assoc())
                                              {
                                                ?>
                                                 <div class="summary-part1" data-aos="fade-up">
                                                    <h1><?=$row['education_title']?></h1>
                                                    <div class="date-area"><i class='bx bx-calendar-week'></i><?=$row['education_date']?></div>
                                                    <h4><?=$row['education_location']?></h4>
                                                    <h5><?=$row['education_desc']?></h5>
                                                </div><br>
                                                <?php
                                              }
                                          }

                                        ?>
 
                                        </div> 

                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="resume-box1" data-aos="fade-left">

                            <div class="main-experience-box">

                                <div class="sub-experience-box">

                                    <div class="experience-h1" data-aos="fade-up">
                                        <h1>Experience</h1>
                                    </div>
                                     
                                     <div class="summay-content">

                                        <div class="vertical-line3" data-aos="fade-up"></div>
                                        <div class="summary-text">

                                        <?php
                                          $experience = "Select * from `experience`";
                                          $experience_result = mysqli_query($con, $experience);

                                          if($experience_result -> num_rows >0){
                                            while($row = $experience_result -> fetch_assoc())
                                            {
                                              ?>
                                              <div class="summary-part1" data-aos="fade-up">
                                                 <h3><?=$row['experience_title']?></h3>
                                                 <div class="date-area"><i class='bx bx-calendar-week'></i><?=$row['experience_date']?></div>
                                                 <h4><?=$row['experience_location']?></h4>
                                                 <h5>
                                                 <?=$row['experience_desc']?>
                                                </h5>
                                                <div class="list2" data-aos="fade-up">
                                                    <ul>
                                                        <li><?= nl2br($row['experience_list'])?></li>
                                                      </ul>
                                                </div>
                                                <br><br><br>
                                             </div>
                                              <?php
                                            }
                                          }
                                        ?>
                                        </div> 

                                     </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>


           </div>

        </section>

        <section id="portfolio">
            <div id="portfolio1">

                <div class="main-portfolio-txt">
                    <h1 data-aos="fade-up">Visual Chapters Unfolded</h1>
                    <h3 data-aos="fade-up"><span>My </span>Portfolio</h3>
                </div>

                <div class="main-portfolio-desc" data-aos="fade-up">
                     <p>     
                        <?=$user_data['portfolio_desc']?>
                     </p>
                </div>


                <div class="glider-contain" data-aos="zoom-in">
                    <div class="glider">

                      <?php
                        $portfolio_query = "Select * from `portfolio`";
                        $portfolio_result1 = mysqli_query($con, $portfolio_query);

                        if($portfolio_result1->num_rows > 0){
                           while($row = $portfolio_result1-> fetch_assoc())
                           {
                             ?>
                              <div class="main-box">
                                 <div class="portfolio-box">
                                     <img src="./img/<?=$row['portfolio_image']?>">
                                     <div class="portfolio-sub-box">
                                         <h2><?=$row['portfolio_title']?></h2>
                                         <p><span style="color: #c3c3c3;"><?=$row['portfolio_subtitle']?> </span>/ <?=$row['portfolio_date']?></p>
                                         <h5><?=$row['portfolio_details']?></h5>
                                         <div class="more-portfolio-btn">
                                            <a href="<?=$row['portfolio_details']?>" class="main-btn" target="_blank">More &nbsp; <i class='bx bxs-chevrons-right'></i></a>
                                         </div>
                                      </div>
                                  </div>
                              </div>
                             <?php
                           }
                        }
                      ?>
                      </div>
                </div>
           </div>
        </section>


        <section id="image" data-aos="flip-down" data-aos-offset="300" duration="3000">
            <div id="image1">

                <div class="image-section-area">

                    <div class="image-decore">
                        <svg viewBox="0 0 1356 133" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#fafafa" d="M 0 48 C 689 48 0 110 689 110 L 689 110 L 689 0 L 0 0 Z" stroke-width="0"></path> <path fill="#fafafa" d="M 688 110 C 1356 110 688 51 1356 51 L 1356 51 L 1356 0 L 688 0 Z" stroke-width="0"></path> </svg>
                    </div>
                    
                    <div class="main-image-txt" >
                       <h1>Where Every image Tells a Story</h1>
                       <h3><span>Image </span>Collection</h3>
                    </div>
                    <div class="unlock-btn">
                        <a class="button4" id="img-button" onclick="showgrid()">Unlock <i class="fa-solid fa-lock"></i></a>
                    </div>


                    <div class="overlay" id="overlay">
                        <div class="popup" id="popup">
                          <h2>Enter Password</h2>
                          <input type="password" id="passwordinput" placeholder="Password" required onkeydown="handleKeyPress(event)">
                          <button type="submit" onclick="checkpassword()">Enter</button>
                          <span class="close-psw" id="closebtn" onclick="closepopup()">&times;</span>
                        </div>
                    </div>


                    <!-- Swiper -->
                    <div class="swiper mySwiper" id="slider-image">
                        <div class="swiper-wrapper">

                          <?php
                            $image = "Select * from `image`";
                            $image_result = mysqli_query($con, $image);

                            if($image_result-> num_rows > 0)
                            {
                              while($row= $image_result-> fetch_assoc())
                              {
                                ?>
                                  <div class="swiper-slide">
                                    <img src="./img/<?=$row['upload_image']?>" />
                                  </div>
                                <?php
                              }
                            }

                          ?>
                      
                            <div class="swiper-slide">
                                    <img src="./img/image3.jpg" />
                            </div>
                            <div class="swiper-slide">
                                    <img src="./img/pic12345.jpg" />
                            </div>
                            <div class="swiper-slide">
                                    <img src="./img/image10.jpg" />
                            </div>
                            <div class="swiper-slide">
                                    <img src="./img/image9.jpg" />
                            </div> 
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <div class="image-decore-last">
                        <svg viewBox="0 0 1356 133" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" transform="rotate(180)">
                            <path fill="#fafafa" d="M 0 48 C 689 48 0 110 689 110 L 689 110 L 689 0 L 0 0 Z" stroke-width="0"></path>
                            <path fill="#fafafa" d="M 688 110 C 1356 110 688 51 1356 51 L 1356 51 L 1356 0 L 688 0 Z" stroke-width="0"></path>
                          </svg>
                    </div>
                    
        
                </div> 

            </div>
        </section>
        
        <section id="contact-section-main">
            <div id="contact1">

                <div class="main-contact-txt">
                    <h1 data-aos="fade-up">Great Ideas Begin With a Simple Hello</h1>
                    <h3 data-aos="fade-up">Contact<span> ME</span></h3>
                 </div>

                 <div class="main-contact-grid" data-aos="fade-right">
                       <div class="contact-grid">
                           <svg width="431" height="472" viewBox="0 0 431 472" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M76.6468 177H26.3532C25.73 177.001 25.132 176.739 24.6907 176.27C24.2494 175.802 24.0009 175.167 24 174.504C23.9991 173.841 24.2457 173.204 24.6857 172.735C25.1257 172.265 25.7231 172.001 26.3462 172H76.6468C77.27 171.999 77.868 172.261 78.3093 172.73C78.7506 173.198 78.9991 173.833 79 174.496C79.0009 175.159 78.7543 175.796 78.3143 176.265C77.8743 176.735 77.2769 176.999 76.6538 177H76.6468Z" fill="#3C3C3C"/>
                            <path d="M20.6194 274H2.37731C1.74758 274 1.14344 273.79 0.697651 273.416C0.251863 273.041 0.00093316 272.533 2.59744e-06 272.003C-0.000927965 271.473 0.248213 270.964 0.692685 270.588C1.13716 270.213 1.74057 270.001 2.3703 270H20.6194C20.9315 269.999 21.2406 270.051 21.5292 270.151C21.8178 270.251 22.0801 270.398 22.3012 270.583C22.5222 270.769 22.6978 270.989 22.8177 271.232C22.9376 271.474 22.9995 271.734 23 271.997C23.0005 272.26 22.9394 272.52 22.8204 272.763C22.7013 273.006 22.5265 273.227 22.3061 273.413C22.0857 273.599 21.8239 273.746 21.5357 273.847C21.2475 273.948 20.9385 274 20.6264 274H20.6194Z" fill="#3C3C3C"/>
                            <path d="M89.8695 39H69.1304C68.3002 39 67.504 38.6839 66.9169 38.1213C66.3298 37.5587 66 36.7957 66 36C66 35.2043 66.3298 34.4413 66.9169 33.8787C67.504 33.3161 68.3002 33 69.1304 33H89.8695C90.6998 33 91.496 33.3161 92.0831 33.8787C92.6702 34.4413 93 35.2043 93 36C93 36.7957 92.6702 37.5587 92.0831 38.1213C91.496 38.6839 90.6998 39 89.8695 39Z" fill="#3C3C3C"/>
                            <g clip-path="url(#clip0_153_121)">
                            <mask id="mask0_153_121" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="-35" y="46" width="657" height="426">
                            <path d="M621.339 46H-34.5713V472H621.339V46Z" fill="white"/>
                            </mask>
                            <g mask="url(#mask0_153_121)">
                            <path d="M207.522 52.2968C208.37 54.6731 208.252 57.2883 207.195 59.5784C206.138 61.8685 204.227 63.6501 201.874 64.5389C201.353 64.7341 200.816 64.8827 200.269 64.9828L194.829 98.4152L182.066 86.5891L189.189 56.6542C188.926 54.1316 189.662 51.6064 191.238 49.6242C192.815 47.6421 195.106 46.3623 197.615 46.0617C199.727 45.8188 201.858 46.3037 203.657 47.4367C205.458 48.5698 206.821 50.2837 207.522 52.2968Z" fill="#F1D5D5"/>
                            <path d="M113.335 128.051C113.335 128.051 123.241 114.916 159.184 115.276L179.587 107.837L184.25 64.9429L200.569 68.8424L198.237 121.875L163.267 142.152L117.418 151.511L113.335 128.051Z" fill="#E6E7E8"/>
                            <path d="M58.103 451.414L67.5195 455.441L87.4777 420.908L73.5805 414.966L58.103 451.414Z" fill="#F1D5D5"/>
                            <path d="M135.913 460.356H146.148L151.017 420.735L135.911 420.736L135.913 460.356Z" fill="#F1D5D5"/>
                            <path d="M135.553 471.072L167.027 471.07V470.671C167.027 467.41 165.736 464.283 163.439 461.978C161.142 459.672 158.026 458.376 154.776 458.376L149.027 454L138.3 458.377H135.553V471.072Z" fill="#2F2E41"/>
                            <path d="M52.3779 458.274L81.3331 470.657L81.489 470.289C82.7623 467.289 82.7962 463.905 81.584 460.88C80.3708 457.855 78.0103 455.438 75.022 454.159L71.4427 447.87L59.8647 447.676L57.3367 446.595L52.3779 458.274Z" fill="#2F2E41"/>
                            <path d="M145.953 225.871L161.508 320.927L157.275 335.093L162.83 345.125L154.673 433.229L157.984 440.546L148.732 446.272H129.906L128.906 366.51L124.256 354.8V348.346L114.789 299.709L113.046 355.343L110.292 367.072L112.605 375.423L109.583 381.274L83.6811 437.092H62.5708L64.2031 424.469C60.4208 422.547 69.8817 416.93 70.7913 412.775L67.6828 405.755L70.7913 392.497L73.6414 366.591L70.6353 311.906L72.0495 238.266L96.7448 219.314L145.953 225.871Z" fill="#2F2E41"/>
                            <path d="M108.072 100.688C119.854 100.688 129.406 91.1027 129.406 79.2782C129.406 67.4538 119.854 57.8682 108.072 57.8682C96.2903 57.8682 86.7383 67.4538 86.7383 79.2782C86.7383 91.1027 96.2903 100.688 108.072 100.688Z" fill="#F1D5D5"/>
                            <path d="M71.9643 241.614C71.9267 241.614 71.8891 241.609 71.8525 241.599C71.4587 241.489 71.1477 241.402 72.5685 229.067L74.1031 219.317L72.6052 210.708L70.0858 208.18L74.135 204.118L71.6542 185.689L64.909 149.936C63.7495 143.767 64.6506 137.386 67.4725 131.783C70.2945 126.18 74.8792 121.668 80.5165 118.947L93.7954 106.586L118.229 106.403L126.047 116.602L146.729 123.652L143.3 194.851L145.704 200.483L145.499 200.671C145.483 200.685 143.88 202.139 143.161 202.94C142.812 203.436 143.466 207.148 144.274 210.298L145.31 218.078L142.699 219.949L146.093 223.974L147.076 231.369L146.522 231.232C145.897 231.075 83.9737 215.959 72.3919 241.289C72.3627 241.38 72.3064 241.461 72.2293 241.519C72.1532 241.577 72.0602 241.61 71.9643 241.614Z" fill="#E6E7E8"/>
                            <path d="M102.615 99.6396C102.524 99.4382 102.433 99.2362 102.342 99.0334C102.377 99.0346 102.411 99.0396 102.446 99.0405L102.615 99.6396Z" fill="#2F2E41"/>
                            <path d="M86.1451 58.8416C87.1581 57.8825 88.4747 57.3112 89.8645 57.2276C91.2439 57.2722 92.6432 58.5227 92.3575 59.8778C94.8919 55.3753 98.925 51.9123 103.749 50.0967C108.574 48.2812 113.881 48.229 118.74 49.9495C122.169 51.1635 125.532 53.5922 126.319 57.1544C126.396 58.0896 126.673 58.997 127.134 59.8141C127.532 60.2508 128.049 60.561 128.621 60.7065C129.194 60.8519 129.796 60.8263 130.353 60.6327L130.387 60.6227C130.578 60.5572 130.785 60.5508 130.979 60.6043C131.174 60.6576 131.347 60.7683 131.479 60.9222C131.61 61.076 131.692 61.2658 131.715 61.4669C131.737 61.6681 131.699 61.8714 131.605 62.0507L130.635 63.8665C131.858 64.1401 133.129 64.1129 134.339 63.7874C134.541 63.7345 134.753 63.7453 134.947 63.8184C135.142 63.8914 135.309 64.0231 135.427 64.1954C135.543 64.3677 135.604 64.5721 135.601 64.7807C135.599 64.9892 135.531 65.1917 135.409 65.3603C133.796 67.574 131.691 69.3794 129.261 70.6329C126.831 71.8864 124.144 72.5534 121.411 72.5807C117.535 72.557 113.619 71.2163 109.846 72.1109C108.387 72.4569 107.023 73.1266 105.855 74.0706C104.687 75.0145 103.745 76.209 103.097 77.5661C102.449 78.9234 102.112 80.409 102.111 81.914C102.11 83.4189 102.444 84.905 103.09 86.2633C101.931 84.9912 99.6909 85.2924 98.505 86.5397C97.959 87.2074 97.5559 87.9805 97.32 88.811C97.0832 89.6416 97.0203 90.5119 97.1321 91.3682C97.4488 93.9909 98.224 96.5368 99.424 98.8883C94.8402 98.7468 90.4104 97.1968 86.7324 94.4477C83.0545 91.6987 80.3058 87.883 78.8578 83.5161C77.4097 79.1491 77.3326 74.4414 78.6351 70.0288C79.9384 65.6162 82.5602 61.7113 86.1451 58.8416Z" fill="#2F2E41"/>
                            <path d="M212.86 458.624L206.868 448.961L205.672 454.483C205.462 455.45 205.252 456.433 205.058 457.408C203.356 455.95 201.545 454.6 199.774 453.306C194.334 449.344 188.897 445.377 183.462 441.404L185.164 451.309C186.213 457.408 187.309 463.632 189.904 469.207C190.192 469.839 190.503 470.463 190.837 471.072H216.124C216.327 470.506 216.468 469.921 216.544 469.324C216.55 469.286 216.553 469.247 216.551 469.207C216.948 465.425 214.865 461.861 212.86 458.624Z" fill="#F0F0F0"/>
                            <path d="M5.19341 458.624L11.1849 448.961L12.3816 454.483C12.5915 455.45 12.8013 456.433 12.9955 457.408C14.6973 455.95 16.5081 454.6 18.2798 453.306C23.7195 449.344 29.1568 445.377 34.5915 441.404L32.8896 451.309C31.8405 457.408 30.7447 463.632 28.1492 469.207C27.8616 469.839 27.5508 470.463 27.2165 471.072H1.92937C1.72593 470.506 1.58525 469.921 1.5097 469.324C1.5034 469.286 1.50087 469.247 1.50209 469.207C1.10554 465.425 3.18838 461.861 5.19341 458.624Z" fill="#F0F0F0"/>
                            <path d="M270.786 472H-33.6462C-33.768 472 -33.8886 471.976 -34.0012 471.93C-34.1137 471.884 -34.2161 471.815 -34.3023 471.73C-34.3885 471.643 -34.4569 471.54 -34.5035 471.428C-34.5502 471.315 -34.5742 471.193 -34.5742 471.072C-34.5742 470.949 -34.5502 470.829 -34.5035 470.715C-34.4569 470.602 -34.3885 470.501 -34.3023 470.414C-34.2161 470.328 -34.1137 470.259 -34.0012 470.213C-33.8886 470.166 -33.768 470.142 -33.6462 470.143H270.786C271.032 470.143 271.268 470.24 271.44 470.415C271.614 470.589 271.712 470.826 271.712 471.072C271.712 471.318 271.614 471.554 271.44 471.728C271.268 471.902 271.032 472 270.786 472Z" fill="#CACACA"/>
                            <path d="M132.946 243.697C130.431 243.736 128.002 242.781 126.182 241.039C124.363 239.297 123.298 236.907 123.218 234.385C123.201 233.827 123.234 233.269 123.316 232.718L93.5332 216.776L108.801 208.461L134.743 224.875C137.208 225.437 139.352 226.95 140.714 229.087C142.075 231.224 142.544 233.812 142.02 236.294C141.569 238.378 140.424 240.246 138.775 241.59C137.127 242.936 135.071 243.679 132.946 243.697Z" fill="#F1D5D5"/>
                            <path d="M119.737 232.239L69.9655 212.74L62.0532 172.711L64.9917 149.695C65.3901 146.573 66.4087 143.563 67.9865 140.842C69.5642 138.121 71.6692 135.745 74.1772 133.855C76.6862 131.964 79.5467 130.598 82.5903 129.836C85.634 129.074 88.7989 128.932 91.8981 129.418L92.0644 129.445L92.1593 129.585C92.5389 130.149 101.319 143.762 89.5037 177.542L89.9407 199.008L129.079 217.344L119.737 232.239Z" fill="#E6E7E8"/>
                            </g>
                            </g>
                            <path d="M394.593 62H394.524L355.049 77.4151L301.039 98.5063C300.828 98.5875 300.602 98.6298 300.373 98.6309C300.144 98.632 299.917 98.5918 299.705 98.5126L243.982 77.3711L203.538 62.0252L203.476 62H203.407C202.769 62.0006 202.157 62.2328 201.706 62.6454C201.255 63.0581 201.001 63.6176 201 64.2013V159.799C201.001 160.382 201.255 160.942 201.706 161.355C202.157 161.767 202.769 161.999 203.407 162H394.593C395.231 161.999 395.843 161.767 396.294 161.355C396.745 160.942 396.999 160.382 397 159.799V64.2013C396.999 63.6176 396.745 63.0581 396.294 62.6454C395.843 62.2328 395.231 62.0006 394.593 62Z" fill="white"/>
                            <path d="M394.657 62C394.587 62 394.519 61.9802 394.461 61.9432L299.641 0.916344C299.352 0.731492 299.009 0.632701 298.658 0.633254C298.307 0.633807 297.964 0.733674 297.676 0.919434L203.539 61.9426C203.464 61.9905 203.372 62.0092 203.283 61.9945C203.194 61.9799 203.114 61.9331 203.062 61.8644C203.01 61.7958 202.99 61.7109 203.005 61.6283C203.021 61.5456 203.071 61.4721 203.145 61.4237L297.283 0.400551C297.686 0.140528 298.165 0.000749765 298.657 3.00778e-06C299.148 -0.000743749 299.628 0.137577 300.032 0.396374L394.853 61.4231C394.913 61.4616 394.958 61.5169 394.982 61.5807C395.005 61.6446 395.006 61.7137 394.984 61.7781C394.962 61.8425 394.919 61.8987 394.86 61.9386C394.801 61.9785 394.73 62 394.657 62Z" fill="#3F3D56"/>
                            <path d="M209 64.0058L298.66 3L389 68.3465L303.279 115L256.741 105.261L209 64.0058Z" fill="#E6E6E6"/>
                            <path d="M299.85 98C299.51 98.0003 299.173 97.9406 298.859 97.8242L243 76.8482V11.1899C243.001 10.6093 243.256 10.0527 243.71 9.64216C244.163 9.23162 244.778 9.00068 245.42 9H352.58C353.222 9.00068 353.837 9.23162 354.29 9.64216C354.744 10.0527 354.999 10.6093 355 11.1899V76.894L354.895 76.9347L300.872 97.8139C300.549 97.937 300.201 98.0002 299.85 98Z" fill="white"/>
                            <path d="M299.848 98C299.486 98.0004 299.128 97.937 298.793 97.8134L243 76.8707V11.3381C243.001 10.7182 243.273 10.1239 243.758 9.68559C244.242 9.24726 244.899 9.0007 245.585 9H352.415C353.101 9.0007 353.758 9.24726 354.242 9.68559C354.727 10.1239 354.999 10.7182 355 11.3381V76.9151L300.934 97.8021C300.59 97.933 300.221 98.0003 299.848 98ZM243.689 76.4542L299.056 97.2369C299.573 97.4265 300.151 97.4234 300.665 97.2283L354.311 76.5035V11.3381C354.31 10.8835 354.11 10.4477 353.755 10.1263C353.4 9.80488 352.918 9.62407 352.415 9.62353H245.585C245.082 9.62407 244.6 9.80488 244.245 10.1263C243.89 10.4477 243.69 10.8835 243.689 11.3381L243.689 76.4542Z" fill="#3F3D56"/>
                            <g filter="url(#filter0_d_153_121)">
                            <path d="M394.593 62H394.524L355.049 77.4151L301.039 98.5063C300.828 98.5875 300.602 98.6298 300.373 98.6309C300.144 98.632 299.917 98.5918 299.705 98.5126L243.982 77.3711L203.538 62.0252L203.476 62H203.407C202.769 62.0006 202.157 62.2328 201.706 62.6454C201.255 63.0581 201.001 63.6176 201 64.2013V159.799C201.001 160.382 201.255 160.942 201.706 161.355C202.157 161.767 202.769 161.999 203.407 162H394.593C395.231 161.999 395.843 161.767 396.294 161.355C396.745 160.942 396.999 160.382 397 159.799V64.2013C396.999 63.6176 396.745 63.0581 396.294 62.6454C395.843 62.2328 395.231 62.0006 394.593 62ZM396.312 159.799C396.312 160.216 396.131 160.616 395.809 160.91C395.486 161.205 395.049 161.371 394.593 161.371H203.407C202.951 161.371 202.514 161.205 202.191 160.91C201.869 160.616 201.688 160.216 201.688 159.799V64.2013C201.688 63.7947 201.861 63.404 202.169 63.111C202.477 62.818 202.897 62.6452 203.342 62.6289L243.982 78.0503L299.44 99.0943C300.041 99.3177 300.713 99.3143 301.311 99.0849L355.049 78.0975L394.662 62.6289C395.105 62.6464 395.524 62.8197 395.832 63.1125C396.139 63.4054 396.311 63.7953 396.312 64.2013V159.799Z" fill="#3F3D56"/>
                            </g>
                            <path d="M332.498 53H270.502C269.308 52.9985 268.163 52.5764 267.318 51.8264C266.474 51.0764 266 50.0599 266 49C266 47.9401 266.474 46.9236 267.318 46.1736C268.163 45.4236 269.308 45.0015 270.502 45H332.498C333.692 45.0015 334.838 45.4236 335.682 46.1736C336.526 46.9236 337 47.9401 337 49C337 50.0599 336.526 51.0764 335.682 51.8264C334.838 52.5764 333.692 52.9985 332.498 53Z" fill="#3C3C3C"/>
                            <path d="M327.264 58H269.736C269.01 57.9992 268.314 57.7882 267.801 57.4132C267.288 57.0382 267 56.5299 267 56C267 55.4701 267.288 54.9618 267.801 54.5868C268.314 54.2118 269.01 54.0008 269.736 54H327.264C327.99 54.0008 328.686 54.2118 329.199 54.5868C329.712 54.9618 330 55.4701 330 56C330 56.5299 329.712 57.0382 329.199 57.4132C328.686 57.7882 327.99 57.9992 327.264 58Z" fill="#CCCCCC"/>
                            <path d="M327.261 70H269.739C269.013 70 268.316 69.6839 267.802 69.1213C267.289 68.5587 267 67.7957 267 67C267 66.2044 267.289 65.4413 267.802 64.8787C268.316 64.3161 269.013 64 269.739 64H327.261C327.987 64 328.684 64.3161 329.198 64.8787C329.711 65.4413 330 66.2044 330 67C330 67.7957 329.711 68.5587 329.198 69.1213C328.684 69.6839 327.987 70 327.261 70Z" fill="#CCCCCC"/>
                            <path d="M254.979 235.08C254.979 239.18 252.379 242 247.639 242H243.719V228.2H247.719C252.519 228.2 254.979 231.04 254.979 235.08ZM253.039 235.1C253.039 231.64 250.939 229.9 247.779 229.9H245.599V240.3H247.719C251.039 240.3 253.039 238.62 253.039 235.1ZM265.801 237.24C265.801 240.38 263.921 242.2 261.361 242.2C258.821 242.2 256.981 240.38 256.981 237.24C256.981 234.1 258.821 232.26 261.361 232.26C263.921 232.26 265.801 234.1 265.801 237.24ZM264.001 237.24C264.001 235.28 263.081 233.76 261.361 233.76C259.641 233.76 258.781 235.24 258.781 237.24C258.781 239.2 259.681 240.72 261.361 240.72C263.121 240.72 264.001 239.24 264.001 237.24ZM275.848 242H274.068V235.5C274.068 234.52 273.648 233.86 272.608 233.86C271.668 233.86 270.708 234.48 269.848 235.4V242H268.068V232.46H269.488L269.708 233.84C270.608 233.02 271.728 232.26 273.088 232.26C274.888 232.26 275.848 233.34 275.848 235.06V242ZM280.895 228.2L279.255 232.86L278.255 232.62L278.835 228.2H280.895ZM287.726 242.04C287.426 242.1 287.006 242.16 286.386 242.16C284.706 242.16 283.606 241.56 283.606 239.64V233.96H282.166V232.46H283.606V229.28L285.346 229.02V232.46H287.406L287.646 233.96H285.346V239.32C285.346 240.1 285.666 240.58 286.666 240.58C286.986 240.58 287.266 240.56 287.486 240.52L287.726 242.04ZM302.059 242H300.279V235.5C300.279 234.52 299.859 233.86 298.819 233.86C297.879 233.86 296.919 234.48 296.059 235.4V242H294.279V227.84L296.059 227.56V233.72C296.839 233.02 297.939 232.26 299.299 232.26C301.099 232.26 302.059 233.34 302.059 235.06V242ZM312.546 237.04C312.546 237.14 312.546 237.3 312.546 237.42H306.066C306.126 239.64 307.186 240.68 308.846 240.68C310.226 240.68 311.226 240.14 312.266 239.32L312.526 240.92C311.506 241.72 310.286 242.2 308.706 242.2C306.226 242.2 304.286 240.7 304.286 237.2C304.286 234.14 306.086 232.26 308.486 232.26C311.266 232.26 312.546 234.4 312.546 237.04ZM310.746 236.08C310.526 234.54 309.846 233.66 308.466 233.66C307.366 233.66 306.426 234.44 306.146 236.08H310.746ZM321.466 239.34C321.466 241.08 320.166 242.2 317.706 242.2C316.446 242.2 315.046 241.76 314.226 241.3L314.486 239.62C315.386 240.24 316.546 240.72 317.846 240.72C319.066 240.72 319.786 240.26 319.786 239.46C319.786 238.58 319.246 238.26 317.526 237.84C315.286 237.28 314.386 236.6 314.386 234.9C314.386 233.38 315.666 232.26 317.746 232.26C318.926 232.26 319.986 232.5 320.886 232.9L320.606 234.58C319.766 234.1 318.706 233.76 317.706 233.76C316.626 233.76 316.066 234.18 316.066 234.86C316.066 235.5 316.546 235.86 318.046 236.24C320.406 236.84 321.466 237.52 321.466 239.34ZM325.814 229.42C325.814 230.04 325.314 230.54 324.694 230.54C324.074 230.54 323.554 230.04 323.554 229.42C323.554 228.8 324.074 228.28 324.694 228.28C325.314 228.28 325.814 228.8 325.814 229.42ZM325.574 242H323.794V232.46H325.574V242ZM333.097 242.04C332.797 242.1 332.377 242.16 331.757 242.16C330.077 242.16 328.977 241.56 328.977 239.64V233.96H327.537V232.46H328.977V229.28L330.717 229.02V232.46H332.777L333.017 233.96H330.717V239.32C330.717 240.1 331.037 240.58 332.037 240.58C332.357 240.58 332.637 240.56 332.857 240.52L333.097 242.04ZM342.475 242H341.035L340.835 240.72C340.075 241.5 339.035 242.2 337.475 242.2C335.755 242.2 334.675 241.16 334.675 239.54C334.675 237.16 336.715 236.22 340.695 235.8V235.4C340.695 234.2 339.975 233.78 338.875 233.78C337.715 233.78 336.615 234.14 335.575 234.6L335.335 233.06C336.475 232.6 337.555 232.26 339.035 232.26C341.355 232.26 342.475 233.2 342.475 235.32V242ZM340.695 239.38V237.16C337.175 237.5 336.435 238.46 336.435 239.44C336.435 240.22 336.955 240.72 337.855 240.72C338.895 240.72 339.895 240.2 340.695 239.38ZM349.816 242.04C349.516 242.1 349.096 242.16 348.476 242.16C346.796 242.16 345.696 241.56 345.696 239.64V233.96H344.256V232.46H345.696V229.28L347.436 229.02V232.46H349.496L349.736 233.96H347.436V239.32C347.436 240.1 347.756 240.58 348.756 240.58C349.076 240.58 349.356 240.56 349.576 240.52L349.816 242.04ZM359.616 237.04C359.616 237.14 359.616 237.3 359.616 237.42H353.136C353.196 239.64 354.256 240.68 355.916 240.68C357.296 240.68 358.296 240.14 359.336 239.32L359.596 240.92C358.576 241.72 357.356 242.2 355.776 242.2C353.296 242.2 351.356 240.7 351.356 237.2C351.356 234.14 353.156 232.26 355.556 232.26C358.336 232.26 359.616 234.4 359.616 237.04ZM357.816 236.08C357.596 234.54 356.916 233.66 355.536 233.66C354.436 233.66 353.496 234.44 353.216 236.08H357.816ZM370.871 237.18H365.951V235.44H370.871V237.18ZM223.031 264.18C222.051 264.92 221.051 265.2 219.771 265.2C217.211 265.2 215.331 263.42 215.331 260.24C215.331 256.98 217.331 255.26 219.811 255.26C221.211 255.26 222.211 255.62 222.931 256.14L222.671 257.88C221.791 257.16 220.891 256.82 219.791 256.82C218.231 256.82 217.131 258 217.131 260.22C217.131 262.54 218.311 263.64 219.991 263.64C220.951 263.64 221.791 263.42 222.771 262.58L223.031 264.18ZM233.35 260.24C233.35 263.38 231.47 265.2 228.91 265.2C226.37 265.2 224.53 263.38 224.53 260.24C224.53 257.1 226.37 255.26 228.91 255.26C231.47 255.26 233.35 257.1 233.35 260.24ZM231.55 260.24C231.55 258.28 230.63 256.76 228.91 256.76C227.19 256.76 226.33 258.24 226.33 260.24C226.33 262.2 227.23 263.72 228.91 263.72C230.67 263.72 231.55 262.24 231.55 260.24ZM243.397 265H241.617V258.5C241.617 257.52 241.197 256.86 240.157 256.86C239.217 256.86 238.257 257.48 237.397 258.4V265H235.617V255.46H237.037L237.257 256.84C238.157 256.02 239.277 255.26 240.637 255.26C242.437 255.26 243.397 256.34 243.397 258.06V265ZM250.744 265.04C250.444 265.1 250.024 265.16 249.404 265.16C247.724 265.16 246.624 264.56 246.624 262.64V256.96H245.184V255.46H246.624V252.28L248.364 252.02V255.46H250.424L250.664 256.96H248.364V262.32C248.364 263.1 248.684 263.58 249.684 263.58C250.004 263.58 250.284 263.56 250.504 263.52L250.744 265.04ZM260.122 265H258.682L258.482 263.72C257.722 264.5 256.682 265.2 255.122 265.2C253.402 265.2 252.322 264.16 252.322 262.54C252.322 260.16 254.362 259.22 258.342 258.8V258.4C258.342 257.2 257.622 256.78 256.522 256.78C255.362 256.78 254.262 257.14 253.222 257.6L252.982 256.06C254.122 255.6 255.202 255.26 256.682 255.26C259.002 255.26 260.122 256.2 260.122 258.32V265ZM258.342 262.38V260.16C254.822 260.5 254.082 261.46 254.082 262.44C254.082 263.22 254.602 263.72 255.502 263.72C256.542 263.72 257.542 263.2 258.342 262.38ZM270.042 264.18C269.062 264.92 268.062 265.2 266.782 265.2C264.222 265.2 262.342 263.42 262.342 260.24C262.342 256.98 264.342 255.26 266.822 255.26C268.222 255.26 269.222 255.62 269.942 256.14L269.682 257.88C268.802 257.16 267.902 256.82 266.802 256.82C265.242 256.82 264.142 258 264.142 260.22C264.142 262.54 265.322 263.64 267.002 263.64C267.962 263.64 268.802 263.42 269.782 262.58L270.042 264.18ZM276.837 265.04C276.537 265.1 276.117 265.16 275.497 265.16C273.817 265.16 272.717 264.56 272.717 262.64V256.96H271.277V255.46H272.717V252.28L274.457 252.02V255.46H276.517L276.757 256.96H274.457V262.32C274.457 263.1 274.777 263.58 275.777 263.58C276.097 263.58 276.377 263.56 276.597 263.52L276.837 265.04ZM296.93 265H295.15V258.5C295.15 257.52 294.79 256.86 293.75 256.86C292.81 256.86 291.91 257.48 291.05 258.4V265H289.27V258.5C289.27 257.52 288.91 256.86 287.87 256.86C286.93 256.86 286.03 257.48 285.17 258.4V265H283.39V255.46H284.81L285.03 256.84C285.93 256.02 287.01 255.26 288.35 255.26C289.75 255.26 290.51 255.86 290.87 256.84C291.73 256.02 292.89 255.26 294.23 255.26C296.05 255.26 296.93 256.34 296.93 258.06V265ZM307.419 260.04C307.419 260.14 307.419 260.3 307.419 260.42H300.939C300.999 262.64 302.059 263.68 303.719 263.68C305.099 263.68 306.099 263.14 307.139 262.32L307.399 263.92C306.379 264.72 305.159 265.2 303.579 265.2C301.099 265.2 299.159 263.7 299.159 260.2C299.159 257.14 300.959 255.26 303.359 255.26C306.139 255.26 307.419 257.4 307.419 260.04ZM305.619 259.08C305.399 257.54 304.719 256.66 303.339 256.66C302.239 256.66 301.299 257.44 301.019 259.08H305.619ZM318.654 265.04C318.354 265.1 317.934 265.16 317.314 265.16C315.634 265.16 314.534 264.56 314.534 262.64V256.96H313.094V255.46H314.534V252.28L316.274 252.02V255.46H318.334L318.574 256.96H316.274V262.32C316.274 263.1 316.594 263.58 317.594 263.58C317.914 263.58 318.194 263.56 318.414 263.52L318.654 265.04ZM329.014 260.24C329.014 263.38 327.134 265.2 324.574 265.2C322.034 265.2 320.194 263.38 320.194 260.24C320.194 257.1 322.034 255.26 324.574 255.26C327.134 255.26 329.014 257.1 329.014 260.24ZM327.214 260.24C327.214 258.28 326.294 256.76 324.574 256.76C322.854 256.76 321.994 258.24 321.994 260.24C321.994 262.2 322.894 263.72 324.574 263.72C326.334 263.72 327.214 262.24 327.214 260.24ZM339.241 265H337.821L337.601 263.62C336.881 264.48 335.901 265.2 334.501 265.2C332.441 265.2 330.741 263.7 330.741 260.5C330.741 257.02 332.741 255.34 335.061 255.34C336.001 255.34 336.861 255.52 337.461 255.76V250.84L339.241 250.56V265ZM337.461 261.94V257.38C336.721 257 336.141 256.84 335.121 256.84C333.621 256.84 332.541 258.06 332.541 260.42C332.541 262.52 333.481 263.62 334.761 263.62C335.861 263.62 336.701 262.96 337.461 261.94ZM349.263 265H347.823L347.623 263.72C346.863 264.5 345.823 265.2 344.263 265.2C342.543 265.2 341.463 264.16 341.463 262.54C341.463 260.16 343.503 259.22 347.483 258.8V258.4C347.483 257.2 346.763 256.78 345.663 256.78C344.503 256.78 343.403 257.14 342.363 257.6L342.123 256.06C343.263 255.6 344.343 255.26 345.823 255.26C348.143 255.26 349.263 256.2 349.263 258.32V265ZM347.483 262.38V260.16C343.963 260.5 343.223 261.46 343.223 262.44C343.223 263.22 343.743 263.72 344.643 263.72C345.683 263.72 346.683 263.2 347.483 262.38ZM359.647 255.46L355.807 265.84C354.987 268.06 353.967 268.64 352.387 268.64C352.147 268.64 351.947 268.6 351.767 268.56L351.527 267C351.827 267.08 352.187 267.14 352.527 267.14C353.267 267.14 353.767 266.78 354.047 266.02L354.407 265.04L350.927 255.6L352.687 255.32L355.287 262.92L357.827 255.46H359.647ZM362.914 262.62L360.834 267.66L359.854 267.42L360.854 262.62H362.914ZM376.86 265H375.42L375.22 263.72C374.46 264.5 373.42 265.2 371.86 265.2C370.14 265.2 369.06 264.16 369.06 262.54C369.06 260.16 371.1 259.22 375.08 258.8V258.4C375.08 257.2 374.36 256.78 373.26 256.78C372.1 256.78 371 257.14 369.96 257.6L369.72 256.06C370.86 255.6 371.94 255.26 373.42 255.26C375.74 255.26 376.86 256.2 376.86 258.32V265ZM375.08 262.38V260.16C371.56 260.5 370.82 261.46 370.82 262.44C370.82 263.22 371.34 263.72 372.24 263.72C373.28 263.72 374.28 263.2 375.08 262.38ZM387.401 265H385.621V258.5C385.621 257.52 385.201 256.86 384.161 256.86C383.221 256.86 382.261 257.48 381.401 258.4V265H379.621V255.46H381.041L381.261 256.84C382.161 256.02 383.281 255.26 384.641 255.26C386.441 255.26 387.401 256.34 387.401 258.06V265ZM398.128 265H396.708L396.488 263.62C395.768 264.48 394.788 265.2 393.388 265.2C391.328 265.2 389.628 263.7 389.628 260.5C389.628 257.02 391.628 255.34 393.948 255.34C394.888 255.34 395.748 255.52 396.348 255.76V250.84L398.128 250.56V265ZM396.348 261.94V257.38C395.608 257 395.028 256.84 394.008 256.84C392.508 256.84 391.428 258.06 391.428 260.42C391.428 262.52 392.368 263.62 393.648 263.62C394.748 263.62 395.588 262.96 396.348 261.94ZM218.894 288H217.114V273.84L218.894 273.56V288ZM229.558 283.04C229.558 283.14 229.558 283.3 229.558 283.42H223.077C223.138 285.64 224.198 286.68 225.858 286.68C227.238 286.68 228.238 286.14 229.278 285.32L229.538 286.92C228.518 287.72 227.298 288.2 225.717 288.2C223.238 288.2 221.298 286.7 221.298 283.2C221.298 280.14 223.098 278.26 225.498 278.26C228.278 278.26 229.558 280.4 229.558 283.04ZM227.758 282.08C227.538 280.54 226.858 279.66 225.478 279.66C224.378 279.66 223.438 280.44 223.158 282.08H227.758ZM236.398 288.04C236.098 288.1 235.678 288.16 235.058 288.16C233.378 288.16 232.278 287.56 232.278 285.64V279.96H230.838V278.46H232.278V275.28L234.018 275.02V278.46H236.078L236.318 279.96H234.018V285.32C234.018 286.1 234.338 286.58 235.338 286.58C235.658 286.58 235.938 286.56 236.158 286.52L236.398 288.04ZM240.836 274.2L239.196 278.86L238.196 278.62L238.776 274.2H240.836ZM249.142 285.34C249.142 287.08 247.842 288.2 245.382 288.2C244.122 288.2 242.722 287.76 241.902 287.3L242.162 285.62C243.062 286.24 244.222 286.72 245.522 286.72C246.742 286.72 247.462 286.26 247.462 285.46C247.462 284.58 246.922 284.26 245.202 283.84C242.962 283.28 242.062 282.6 242.062 280.9C242.062 279.38 243.342 278.26 245.422 278.26C246.602 278.26 247.662 278.5 248.562 278.9L248.282 280.58C247.442 280.1 246.382 279.76 245.382 279.76C244.302 279.76 243.742 280.18 243.742 280.86C243.742 281.5 244.222 281.86 245.722 282.24C248.082 282.84 249.142 283.52 249.142 285.34ZM260.304 288.04C260.004 288.1 259.584 288.16 258.964 288.16C257.284 288.16 256.184 287.56 256.184 285.64V279.96H254.744V278.46H256.184V275.28L257.924 275.02V278.46H259.984L260.224 279.96H257.924V285.32C257.924 286.1 258.244 286.58 259.244 286.58C259.564 286.58 259.844 286.56 260.064 286.52L260.304 288.04ZM270.203 288H268.783L268.563 286.62C267.663 287.46 266.523 288.2 265.183 288.2C263.363 288.2 262.423 287.12 262.423 285.4V278.46H264.203V284.96C264.203 285.94 264.623 286.6 265.663 286.6C266.603 286.6 267.563 285.98 268.423 285.06V278.46H270.203V288ZM278.349 279.96C276.769 280.04 275.429 281.1 274.789 282.36V288H273.009V278.46H274.429L274.729 280.4C275.409 279.32 276.509 278.34 278.069 278.26L278.349 279.96ZM287.957 288H286.177V281.5C286.177 280.52 285.757 279.86 284.717 279.86C283.777 279.86 282.817 280.48 281.957 281.4V288H280.177V278.46H281.597L281.817 279.84C282.717 279.02 283.837 278.26 285.197 278.26C286.997 278.26 287.957 279.34 287.957 281.06V288ZM302.919 278.46L299.079 288.84C298.259 291.06 297.239 291.64 295.659 291.64C295.419 291.64 295.219 291.6 295.039 291.56L294.799 290C295.099 290.08 295.459 290.14 295.799 290.14C296.539 290.14 297.039 289.78 297.319 289.02L297.679 288.04L294.199 278.6L295.959 278.32L298.559 285.92L301.099 278.46H302.919ZM312.754 283.24C312.754 286.38 310.874 288.2 308.314 288.2C305.774 288.2 303.934 286.38 303.934 283.24C303.934 280.1 305.774 278.26 308.314 278.26C310.874 278.26 312.754 280.1 312.754 283.24ZM310.954 283.24C310.954 281.28 310.034 279.76 308.314 279.76C306.594 279.76 305.734 281.24 305.734 283.24C305.734 285.2 306.634 286.72 308.314 286.72C310.074 286.72 310.954 285.24 310.954 283.24ZM322.761 288H321.341L321.121 286.62C320.221 287.46 319.081 288.2 317.741 288.2C315.921 288.2 314.981 287.12 314.981 285.4V278.46H316.761V284.96C316.761 285.94 317.181 286.6 318.221 286.6C319.161 286.6 320.121 285.98 320.981 285.06V278.46H322.761V288ZM330.908 279.96C329.328 280.04 327.988 281.1 327.348 282.36V288H325.568V278.46H326.988L327.288 280.4C327.968 279.32 329.068 278.34 330.628 278.26L330.908 279.96ZM345.09 288H343.67L343.45 286.62C342.73 287.48 341.75 288.2 340.35 288.2C338.29 288.2 336.59 286.7 336.59 283.5C336.59 280.02 338.59 278.34 340.91 278.34C341.85 278.34 342.71 278.52 343.31 278.76V273.84L345.09 273.56V288ZM343.31 284.94V280.38C342.57 280 341.99 279.84 340.97 279.84C339.47 279.84 338.39 281.06 338.39 283.42C338.39 285.52 339.33 286.62 340.61 286.62C341.71 286.62 342.55 285.96 343.31 284.94ZM353.232 279.96C351.652 280.04 350.312 281.1 349.672 282.36V288H347.892V278.46H349.312L349.612 280.4C350.292 279.32 351.392 278.34 352.952 278.26L353.232 279.96ZM362.429 283.04C362.429 283.14 362.429 283.3 362.429 283.42H355.949C356.009 285.64 357.069 286.68 358.729 286.68C360.109 286.68 361.109 286.14 362.149 285.32L362.409 286.92C361.389 287.72 360.169 288.2 358.589 288.2C356.109 288.2 354.169 286.7 354.169 283.2C354.169 280.14 355.969 278.26 358.369 278.26C361.149 278.26 362.429 280.4 362.429 283.04ZM360.629 282.08C360.409 280.54 359.729 279.66 358.349 279.66C357.249 279.66 356.309 280.44 356.029 282.08H360.629ZM371.909 288H370.469L370.269 286.72C369.509 287.5 368.469 288.2 366.909 288.2C365.189 288.2 364.109 287.16 364.109 285.54C364.109 283.16 366.149 282.22 370.129 281.8V281.4C370.129 280.2 369.409 279.78 368.309 279.78C367.149 279.78 366.049 280.14 365.009 280.6L364.769 279.06C365.909 278.6 366.989 278.26 368.469 278.26C370.789 278.26 371.909 279.2 371.909 281.32V288ZM370.129 285.38V283.16C366.609 283.5 365.869 284.46 365.869 285.44C365.869 286.22 366.389 286.72 367.289 286.72C368.329 286.72 369.329 286.2 370.129 285.38ZM388.21 288H386.43V281.5C386.43 280.52 386.07 279.86 385.03 279.86C384.09 279.86 383.19 280.48 382.33 281.4V288H380.55V281.5C380.55 280.52 380.19 279.86 379.15 279.86C378.21 279.86 377.31 280.48 376.45 281.4V288H374.67V278.46H376.09L376.31 279.84C377.21 279.02 378.29 278.26 379.63 278.26C381.03 278.26 381.79 278.86 382.15 279.84C383.01 279.02 384.17 278.26 385.51 278.26C387.33 278.26 388.21 279.34 388.21 281.06V288ZM397.638 285.34C397.638 287.08 396.338 288.2 393.878 288.2C392.618 288.2 391.218 287.76 390.398 287.3L390.658 285.62C391.558 286.24 392.718 286.72 394.018 286.72C395.238 286.72 395.958 286.26 395.958 285.46C395.958 284.58 395.418 284.26 393.698 283.84C391.458 283.28 390.558 282.6 390.558 280.9C390.558 279.38 391.838 278.26 393.918 278.26C395.098 278.26 396.158 278.5 397.058 278.9L396.778 280.58C395.938 280.1 394.878 279.76 393.878 279.76C392.798 279.76 392.238 280.18 392.238 280.86C392.238 281.5 392.718 281.86 394.218 282.24C396.578 282.84 397.638 283.52 397.638 285.34ZM224.906 298.42C224.906 299.04 224.406 299.54 223.786 299.54C223.166 299.54 222.646 299.04 222.646 298.42C222.646 297.8 223.166 297.28 223.786 297.28C224.406 297.28 224.906 297.8 224.906 298.42ZM224.666 311H222.886V301.46H224.666V311ZM235.389 311H233.609V304.5C233.609 303.52 233.189 302.86 232.149 302.86C231.209 302.86 230.249 303.48 229.389 304.4V311H227.609V301.46H229.029L229.249 302.84C230.149 302.02 231.269 301.26 232.629 301.26C234.429 301.26 235.389 302.34 235.389 304.06V311ZM242.736 311.04C242.436 311.1 242.016 311.16 241.396 311.16C239.716 311.16 238.616 310.56 238.616 308.64V302.96H237.176V301.46H238.616V298.28L240.356 298.02V301.46H242.416L242.656 302.96H240.356V308.32C240.356 309.1 240.676 309.58 241.676 309.58C241.996 309.58 242.276 309.56 242.496 309.52L242.736 311.04ZM253.096 306.24C253.096 309.38 251.216 311.2 248.656 311.2C246.116 311.2 244.276 309.38 244.276 306.24C244.276 303.1 246.116 301.26 248.656 301.26C251.216 301.26 253.096 303.1 253.096 306.24ZM251.296 306.24C251.296 304.28 250.376 302.76 248.656 302.76C246.936 302.76 246.076 304.24 246.076 306.24C246.076 308.2 246.976 309.72 248.656 309.72C250.416 309.72 251.296 308.24 251.296 306.24ZM266.977 311H265.537L265.337 309.72C264.577 310.5 263.537 311.2 261.977 311.2C260.257 311.2 259.177 310.16 259.177 308.54C259.177 306.16 261.217 305.22 265.197 304.8V304.4C265.197 303.2 264.477 302.78 263.377 302.78C262.217 302.78 261.117 303.14 260.077 303.6L259.837 302.06C260.977 301.6 262.057 301.26 263.537 301.26C265.857 301.26 266.977 302.2 266.977 304.32V311ZM265.197 308.38V306.16C261.677 306.5 260.937 307.46 260.937 308.44C260.937 309.22 261.457 309.72 262.357 309.72C263.397 309.72 264.397 309.2 265.197 308.38ZM281.712 301.46L278.312 311.04H276.612L273.232 301.6L275.012 301.32L277.492 308.86L279.892 301.46H281.712ZM285.746 298.42C285.746 299.04 285.246 299.54 284.626 299.54C284.006 299.54 283.486 299.04 283.486 298.42C283.486 297.8 284.006 297.28 284.626 297.28C285.246 297.28 285.746 297.8 285.746 298.42ZM285.506 311H283.726V301.46H285.506V311ZM296.849 305.96C296.849 309.44 294.929 311.12 292.169 311.12C290.729 311.12 289.709 310.9 288.449 310.52V296.84L290.229 296.56V302.58C290.869 301.92 291.789 301.26 293.089 301.26C295.149 301.26 296.849 302.78 296.849 305.96ZM295.049 306.04C295.049 303.96 294.109 302.84 292.829 302.84C291.829 302.84 290.949 303.5 290.229 304.4V309.28C290.829 309.5 291.269 309.6 292.149 309.6C294.009 309.6 295.049 308.5 295.049 306.04ZM304.453 302.96C302.873 303.04 301.533 304.1 300.893 305.36V311H299.113V301.46H300.533L300.833 303.4C301.513 302.32 302.613 301.34 304.173 301.26L304.453 302.96ZM313.149 311H311.709L311.509 309.72C310.749 310.5 309.709 311.2 308.149 311.2C306.429 311.2 305.349 310.16 305.349 308.54C305.349 306.16 307.389 305.22 311.369 304.8V304.4C311.369 303.2 310.649 302.78 309.549 302.78C308.389 302.78 307.289 303.14 306.249 303.6L306.009 302.06C307.149 301.6 308.229 301.26 309.709 301.26C312.029 301.26 313.149 302.2 313.149 304.32V311ZM311.369 308.38V306.16C307.849 306.5 307.109 307.46 307.109 308.44C307.109 309.22 307.629 309.72 308.529 309.72C309.569 309.72 310.569 309.2 311.369 308.38ZM323.69 311H321.91V304.5C321.91 303.52 321.49 302.86 320.45 302.86C319.51 302.86 318.55 303.48 317.69 304.4V311H315.91V301.46H317.33L317.55 302.84C318.45 302.02 319.57 301.26 320.93 301.26C322.73 301.26 323.69 302.34 323.69 304.06V311ZM331.037 311.04C330.737 311.1 330.317 311.16 329.697 311.16C328.017 311.16 326.917 310.56 326.917 308.64V302.96H325.477V301.46H326.917V298.28L328.657 298.02V301.46H330.717L330.957 302.96H328.657V308.32C328.657 309.1 328.977 309.58 329.977 309.58C330.297 309.58 330.577 309.56 330.797 309.52L331.037 311.04ZM342.929 302.96C341.349 303.04 340.009 304.1 339.369 305.36V311H337.589V301.46H339.009L339.309 303.4C339.989 302.32 341.089 301.34 342.649 301.26L342.929 302.96ZM352.126 306.04C352.126 306.14 352.126 306.3 352.126 306.42H345.646C345.706 308.64 346.766 309.68 348.426 309.68C349.806 309.68 350.806 309.14 351.846 308.32L352.106 309.92C351.086 310.72 349.866 311.2 348.286 311.2C345.806 311.2 343.866 309.7 343.866 306.2C343.866 303.14 345.666 301.26 348.066 301.26C350.846 301.26 352.126 303.4 352.126 306.04ZM350.326 305.08C350.106 303.54 349.426 302.66 348.046 302.66C346.946 302.66 346.006 303.44 345.726 305.08H350.326ZM361.606 311H360.166L359.966 309.72C359.206 310.5 358.166 311.2 356.606 311.2C354.886 311.2 353.806 310.16 353.806 308.54C353.806 306.16 355.846 305.22 359.826 304.8V304.4C359.826 303.2 359.106 302.78 358.006 302.78C356.846 302.78 355.746 303.14 354.706 303.6L354.466 302.06C355.606 301.6 356.686 301.26 358.166 301.26C360.486 301.26 361.606 302.2 361.606 304.32V311ZM359.826 308.38V306.16C356.306 306.5 355.566 307.46 355.566 308.44C355.566 309.22 356.086 309.72 356.986 309.72C358.026 309.72 359.026 309.2 359.826 308.38ZM366.287 311H364.507V296.84L366.287 296.56V311ZM371.39 298.42C371.39 299.04 370.89 299.54 370.27 299.54C369.65 299.54 369.13 299.04 369.13 298.42C369.13 297.8 369.65 297.28 370.27 297.28C370.89 297.28 371.39 297.8 371.39 298.42ZM371.15 311H369.37V301.46H371.15V311ZM378.673 311.04C378.373 311.1 377.953 311.16 377.333 311.16C375.653 311.16 374.553 310.56 374.553 308.64V302.96H373.113V301.46H374.553V298.28L376.293 298.02V301.46H378.353L378.593 302.96H376.293V308.32C376.293 309.1 376.613 309.58 377.613 309.58C377.933 309.58 378.213 309.56 378.433 309.52L378.673 311.04ZM388.456 301.46L384.616 311.84C383.796 314.06 382.776 314.64 381.196 314.64C380.956 314.64 380.756 314.6 380.576 314.56L380.336 313C380.636 313.08 380.996 313.14 381.336 313.14C382.076 313.14 382.576 312.78 382.856 312.02L383.216 311.04L379.736 301.6L381.496 301.32L384.096 308.92L386.636 301.46H388.456ZM391.383 311H389.403V308.62H391.383V311Z" fill="#3C3C3C" fill-opacity="0.8"/>
                            <defs>
                            <filter id="filter0_d_153_121" x="171" y="34" width="260" height="164" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dx="2" dy="4"/>
                            <feGaussianBlur stdDeviation="16"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_153_121"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_153_121" result="shape"/>
                            </filter>
                            <clipPath id="clip0_153_121">
                            <rect width="226" height="426" fill="white" transform="translate(30 46)"/>
                            </clipPath>
                            </defs>
                            </svg>  
                       </div>
                       <div class="contact-grid" >
                        
                
          
                             <form method="post" action="contactmessage.php" id="contact-form" data-aos="fade-left" duration="3000">
                                  

                                    <input type="text" id="name" placeholder="Your Name" name="name" required>
        
                
                                    <input type="email" id="email" placeholder="Your E-mail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                            
                                    
                                    <input type="text" id="subject" placeholder="Subject" name="subject" required>
                            
                                    
                                    <textarea id="message" name="message" placeholder="Message..." rows="6" required></textarea>

                                    <div class="contact-btn">
                                        <button type="submit" name="send-message">Send &nbsp;<i class='bx bx-send'></i></button>
                                    </div>
                                    
                             </form>

                             

                       </div>
                 </div>

           </div>
        </section> 

        <section id="footer">

            <div class="footer-wave" data-aos="fade-up">
                <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 190" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop><stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="#e7e7e7" d="M0,95L180,114L360,133L540,38L720,152L900,114L1080,133L1260,95L1440,38L1620,38L1800,171L1980,0L2160,0L2340,95L2520,133L2700,57L2880,95L3060,171L3240,114L3420,76L3600,114L3780,114L3960,19L4140,114L4320,171L4320,190L4140,190L3960,190L3780,190L3600,190L3420,190L3240,190L3060,190L2880,190L2700,190L2520,190L2340,190L2160,190L1980,190L1800,190L1620,190L1440,190L1260,190L1080,190L900,190L720,190L540,190L360,190L180,190L0,190Z"></path></svg>
            </div>

           <div class="main-footer">
                  <div class="footer-area">

                     <div class="footer-content" >
                        <?php
                          if($user_data['logo_section'] == 'on')
                          {
                            ?>
                             <div class="footer-logo" data-aos="fade-up">
                                <img src="./img/mylogofooter.svg" alt="logo">
                             </div>
                            <?php
                            }
                         ?>

                        
                            
                           <div class="footer-nav" data-aos="fade-up">

                           <?php
                             if($user_data['home_section'] == 'on')
                             {
                                ?>
                                    <li><a href="#home">Home</a></li>
                                 <?php
                             }
                            ?>
                            
                            <?php
                            if($user_data['about_section'] == 'on')
                            {
                             ?>
                               <li><a href="#about1">About</a></li>
                             <?php
                            }
                            ?>
                            
                            <?php
                            if($user_data['portfolio_section'] == 'on')
                            {
                             ?>
                               <li><a href="#portfolio1">Portfolio</a></li>
                             <?php
                            }
                         ?>
                         
                         <?php
                         if($user_data['contact_section'] == 'on')
                         {
                          ?>
                            <li><a href="#contact1">Contact</a></li>
                          <?php
                         }
                      ?>
                      
                      <?php
                      if($user_data['home_section'] == 'on')
                      {
                       ?>
                         <li><a href="./admin/login.php" target="_blank">Admin</a></li>
                       <?php
                      }
                      ?>  
                           </div>

                           <div class="footer-icons" >

                               
                               <?php
                                 if($user_data['instra'] == 'on')
                                 {
                                  ?>
                                    <a href="https://www.instagram.com/sandesh.dkt/?hl=en" target="_blank"><i class='bx bxl-instagram-alt'></i></a>
                                  <?php
                                 }
                                ?> 
                                 
                                 <?php
                                   if($user_data['gmail']== 'on')
                                   {
                                    ?>
                                       <a href="mailto:sandesh.devkota90@gmail.com"><i class='bx bxl-gmail'></i></a>
                                    <?php
                                   }
                                 ?>
                                 
                                 <?php
                                 if($user_data['git']== 'on')
                                 {
                                  ?>
                                     <a href="https://github.com/sandeshdevkota" target="_blank"><i class='bx bxl-github'></i></a>
                                  <?php
                                 }
                               ?>
                               
                               <?php
                               if($user_data['snap']== 'on')
                               {
                                ?>
                                   <a href="https://www.snapchat.com/add/sandesh.dkt" target="_blank"><i class='bx bxl-snapchat' ></i></a>
                                <?php
                               }
                             ?>
                             
                             <?php
                             if($user_data['facebook']== 'on')
                             {
                              ?>
                                <a href="https://www.facebook.com/sandesh.devkota.3" target="_blank"><i class='bx bxl-facebook-circle' ></i></a>
                              <?php
                             }
                           ?>
  
                           </div>

                           <div class="footer-thanks">
                                <a href="https://sandeshsubedi7.com.np/" target="_blank">Supported by <img src="./img/logoxandey.svg">
                                </a>     
                           </div>
                           <div class="copyrights">
                              <p>CopyRights <i class='bx bx-copyright' ></i> 2023. All Rights Reserved. </p>
                           </div>
                     </div>

                  </div>

            </div>

        </section>
    </main> 



<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
        AOS.init({
            offset:135,
            duration: 1000,
        });
</script>

<script src="./js/hiddensidenavactive.js"></script>
<script src="./js/hiddenhamburger.js"></script>
<script src="./js/hiddensliderportfolio.js"></script>
<script src="./js/hiddenpaginationgallery.js"></script>
<script src="./js/hiddenpasswordandpopup.js"></script>
</body>
</html>