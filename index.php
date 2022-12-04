<?php 

  require_once 'db.php';
  require_once 'user.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/jquery.formstyler.theme.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
 </head>
<body>
  <div class="nav">
   <div class="wrapper">
    <div class="navigation">
      <div class="nav-logo">
        <img src="img/logo-geo1-removebg-preview.png" class="img_logo" alt="">
      </div>
      <div class="ul">
        <ul>

          <?php 
            if(ONLINE){

          ?>

          <li class="list active">
                <a  href="#">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="text">Home </span>
                </a>
            </li>
            <li class="list">
                <a href="profile.php" >
                    <span class="icon"><ion-icon name="people-circle-outline"></ion-icon></span>
                    <span class="text">Profile </span>
                </a>
            </li>
            <li class="list">
                <a href="message.php">
                    <span class="icon"><ion-icon name="chatbubbles-outline"></ion-icon></span>
                    <span class="text">Message</span>
                </a>
            </li>
            <li class="list">
                <a href="topics.php">
                    <span class="icon"><ion-icon name="camera-outline"></ion-icon></span>
                    <span class="text">Topics</span>
                </a>
            </li>
            <li class="list">
                <a href="settings.php" onclick="openTab('Settings')">
                    <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                    <span class="text">Settings</span>
                </a>
            </li>
            <div class="indicator0"></div>

          <?php 
            }else{

          ?>

          <li class="list active">
                <a  href="#">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="text">Home </span>
                </a>
            </li>
            
            <li class="list">
                <a href="message.php">
                    <span class="icon"><ion-icon name="chatbubbles-outline"></ion-icon></span>
                    <span class="text">Message</span>
                </a>
            </li>
            
            <li class="list">
                <a href="settings.php" onclick="openTab('Settings')">
                    <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                    <span class="text">Settings</span>
                </a>
            </li>
            <div class="indicator0"></div>

          <?php 
            }
          ?>
            
        </ul>
      </div>

      <?php 
        if(ONLINE){
      ?>

        <div class="registr_one">
        <div class="after_registr">
          <div class="name_user "><img src="img/Deng.jpg" alt=""> <span><?php echo $_SESSION['CURRENT_USER']['full_name'];?></span></div>
          <div class="sign-out "><a href="logout.php">Log out</a></div>
        </div>
      </div>
        
       


        </div>

      <?php 
        }else{
      ?>

      <div class="nav-logo1">
          <div class="registr_zero">
          <div class="before_registr">
          <!-- SIGN IN -->
          
          <div class="button-login center_text"><a class="reaction" href="signIn.php" id="open_signin">Sign In</a></div>
          <!-- SIGN UP-->
          <div class="button center_text"><a class="reaction" href="signUp.php" id="open_pop_up">Sign Up</a></div>
        </div>
      </div>
       
        </div>

      <?php 
        }
      ?>
        
    </div>
  </div>

  </div>
  <div id="Home" class="element_menu">
    <!-- Hello world ! -->
<div class="main-body">
  <div class="wrapper">
    <div class="container">
      <a href="open_card.php">
        <div class="card rgb" data-tilt data-tilt-scale="1.2">
          <div class="card-image2"></div>
          <div class="card-text">
            <span class="date">4 days ago</span>
            <h2>Post One</h2>
            <p>Lorem ipsum dolor sit amet consectetur, Ducimus, repudiandae temporibus omnis illum maxime quod deserunt eligendi dolor</p>
          </div>
       
        </div>
      </a>
        <a href="open_card.php">
        <div class="card rgb" data-tilt data-tilt-scale="1.2">
          <div class="card-image2"></div>
          <div class="card-text">
            <span class="date">4 days ago</span>
            <h2>Post One</h2>
            <p>Lorem ipsum dolor sit amet consectetur, Ducimus, repudiandae temporibus omnis illum maxime quod deserunt eligendi dolor</p>
          </div>
       
        </div>
      </a>
      <a href="open_card.php">
        <div class="card rgb" data-tilt data-tilt-scale="1.2">
          <div class="card-image2"></div>
          <div class="card-text">
            <span class="date">4 days ago</span>
            <h2>Post One</h2>
            <p>Lorem ipsum dolor sit amet consectetur, Ducimus, repudiandae temporibus omnis illum maxime quod deserunt eligendi dolor</p>
          </div>
       
        </div>
      </a>
        
  </div>
  <div class="container">
    <a href="open_card.php">
      <div class="card rgb" data-tilt data-tilt-scale="1.2">
        <div class="card-image2"></div>
        <div class="card-text">
          <span class="date">4 days ago</span>
          <h2>Post One</h2>
          <p>Lorem ipsum dolor sit amet consectetur, Ducimus, repudiandae temporibus omnis illum maxime quod deserunt eligendi dolor</p>
        </div>
     
      </div>
    </a>
      <a href="open_card.php">
      <div class="card rgb" data-tilt data-tilt-scale="1.2">
        <div class="card-image2"></div>
        <div class="card-text">
          <span class="date">4 days ago</span>
          <h2>Post One</h2>
          <p>Lorem ipsum dolor sit amet consectetur, Ducimus, repudiandae temporibus omnis illum maxime quod deserunt eligendi dolor</p>
        </div>
     
      </div>
    </a>
    <a href="open_card.php">
      <div class="card rgb" data-tilt data-tilt-scale="1.2">
        <div class="card-image2"></div>
        <div class="card-text">
          <span class="date">4 days ago</span>
          <h2>Post One</h2>
          <p>Lorem ipsum dolor sit amet consectetur, Ducimus, repudiandae temporibus omnis illum maxime quod deserunt eligendi dolor</p>
        </div>
     
      </div>
    </a>
      
</div>


</div>
</div>


<!-- slider  -->

<section class="slider">
  <div class="wrapper">
  <div class="container1">
      <div class="slider__inner">
          <div class="slider__item">
              <div class="slider__item-content">
                  <div class="slider__title">
                      ХАКІМ АБАЙ
                  </div>
                  <div class="slider__text">
                      Тегінде адам баласы адам баласынан ақыл, ғылым, ар, мінез деген нәрселермен озады.
                    <br>
                      Pascal ды оқыңдар қазақтар !
                  </div>
                  <a href="#" class="slider__btn default-btn">
                    Абайға звондау
                  </a>
              </div>
          </div>
          <div class="slider__item">
              <div class="slider__item-content">
                  <div class="slider__title">
                      МҰХТАР ӘУЕЗОВ
                  </div>
                  <div class="slider__text">
                      Халықпен халықты, адам мен адамды теңестіретін білім. <br>
                      Java ертеңгі қазақтың нәпақасы !

                  </div>
                  <a href="#" class="slider__btn default-btn">
                      Мұхтарға звондау
                  </a>
              </div>
          </div>
          <div class="slider__item">
              <div class="slider__item-content">
                  <div class="slider__title">
                      АЯЗБЕК РАМАЗАН
                  </div>
                  <div class="slider__text">
                    Тек маған көрінетін жұлдыз көктегі.
                    Сүйемін деген сөзің жанға оттегі.
                    Әлемнің ең сұлу арулары өзіне жетпеді.
                    Үйретті бағалауды өмір мектебі.
                    Бітпесін махаббаттың мәңгі көктемі.
                    Алғашқы кездесу менің әлі есімнен кетпеді !
                  </div>
                  <a href="#" class="slider__btn default-btn">
                      Рамазан занят
                  </a>

              </div>
          </div>

      </div>
  </div>
</div>
</section>
</div>


<div id="Message" class="element_menu" style="display:none; color:white;">
  <div class="Message_page">
   <div class="Message_topics">
     
   </div>
  </div>
  <h1>Message</h1> 
</div>


  

<div id="Settings" class="element_menu" style="display:none; color:white;"> <h1>Settings</h1> </div>

<footer class="footer">
  <div class="wrapper">

  
  <div class="container_footer">
   <div class="row">
     <div class="footer-col">
       <h4>company</h4>
       <ul>
         <li><a href="#">about us</a></li>
         <li><a href="#">our services</a></li>
         <li><a href="#">privacy policy</a></li>
         <li><a href="#">affiliate program</a></li>
       </ul>
     </div>
     <div class="footer-col">
       <h4>get help</h4>
       <ul>
         <li><a href="#">FAQ</a></li>
         <li><a href="#">shipping</a></li>
         <li><a href="#">returns</a></li>
         <li><a href="#">order status</a></li>
         <li><a href="#">payment options</a></li>
       </ul>
     </div>
     <div class="footer-col">
       <h4>online shop</h4>
       <ul>
         <li><a href="#">watch</a></li>
         <li><a href="#">bag</a></li>
         <li><a href="#">shoes</a></li>
         <li><a href="#">dress</a></li>
       </ul>
     </div>
     <div class="footer-col">
       <h4>follow us</h4>
       <div class="social-links">
         <a href="#"><i class="fab fa-facebook-f"></i></a>
         <a href="#"><i class="fab fa-twitter"></i></a>
         <a href="#"><i class="fab fa-instagram"></i></a>
         <a href="#"><i class="fab fa-linkedin-in"></i></a>
       </div>
       <div class="bars-container">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
       </div>
       <audio controls autoplay class="audio">
        <source src="#" type="audio/mpeg">
    
      </audio>
     </div>
   </div>
  </div>
</div>
</footer>




 
</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="jquery.fancybox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script src="js/jquery.formstyler.min.js"></script>
<script src="js/list.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/slider.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js'></script>
</html>