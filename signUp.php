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
    <title>Document</title>
    <link rel="stylesheet" href="cssSign/signUp.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>
<body>
<!-- <div class="nav">
   <div class="wrapper">
    <div class="navigation">
      <div class="nav-logo">
        <img src="img/logo-geo1-removebg-preview.png" class="img_logo" alt="">
      </div>
      <div class="ul">
        <ul>
            <li class="list active">
                <a  href="#">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="text">Home </span>
                </a>
            </li>
            <li class="list">
                <a href="profile.html" >
                    <span class="icon"><ion-icon name="people-circle-outline"></ion-icon></span>
                    <span class="text">Profile </span>
                </a>
            </li>
            <li class="list">
                <a href="message.html">
                    <span class="icon"><ion-icon name="chatbubbles-outline"></ion-icon></span>
                    <span class="text">Message</span>
                </a>
            </li>
            <li class="list">
                <a href="topics.html">
                    <span class="icon"><ion-icon name="camera-outline"></ion-icon></span>
                    <span class="text">Topics</span>
                </a>
            </li>
            <li class="list">
                <a href="settings.html" onclick="openTab('Settings')">
                    <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                    <span class="text">Settings</span>
                </a>
            </li>
            <div class="indicator0"></div>
        </ul>
      </div>
        <div class="nav-logo1">
          <div class="registr_zero">
          <div class="before_registr">
          SIGN IN
          
          <div class="button-login center_text"><a class="reaction" href="signIn.html" id="open_signin">Sign In</a></div>
          SIGN UP
          <div class="button center_text"><a class="reaction" href="signUp.html" id="open_pop_up">Sign Up</a></div>
        </div>
      </div>
        <div class="registr_one">
        <div class="after_registr">
          <div class="name_user "><img src="img/Deng.jpg" alt=""> <span>Abdikayr Magzhan</span></div>
          <div class="sign-out "><a href="#">Log out</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
</div> -->
    <div class="pop_up" id="pop_up">
        <div class="pop_up_container">
            <div class="pop_up_body" id="pop_up_body">
                <p>Регистрация</p>
                <form action="toregister.php" method="post">
                    <div class="input-group">
                        <input type="text" required  class="input_t" name="full_name">
                        <label for="name" class="input-label" > Имя</label>
                    </div>
                    
                    <div class="input-group">
                        <input type="text" required  class="input_t" name="email">
                        <label for="email" class="input-label"> e-mail</label>
                    </div>
                    <div class="input-group">
                        <input type="password" required  class="input_t" name="pass1">
                        <label for="password" class="input-label"> пароль</label>
                    </div>
                    <div class="input-group">
                        <input type="password" required  class="input_t" name="pass2">
                        <label for="password" class="input-label"> пароль</label>
                    </div>
                    
                   
                   <button>Отправить
                        <i class="https://icons8.com/icon/2837/sent icon"></i>
                    </button>
                    <div class="footer_regitrs">
                    <span>If you registrated, then go  </span>
                    <a class="to_login" href="signIn.php">Log in</a> 
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="jquery.fancybox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="js/jquery.formstyler.min.js"></script>
<script src="js/list.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/slider.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js'></script>
<script src="js/tabs.js"></script>
<script src="js/topics.js"></script>
<script src="js/like.js"></script>

</html>