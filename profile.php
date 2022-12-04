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
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/main.css">
    
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
                <a  href="index.php">
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
                <a  href="index.php">
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
     <!-- tab pages -->
 <!-- 1 profile tab -->
 <div id="Profile" class="element_menu">

    <div class="wrapper">
      <div class="profile_content">
    <div class="profile_info">
      <ul>
        <li> <img class="profile_logo" src="img/ramazanlogo.jpg" alt=""> </li>
        <li> <span>Ayazbek Ramazan</span></li>
        <li> <span>front developer</span></li>
        <li><span>ramazan.ayazbek.kz@gmail.com</span> </li>
        <li> <span>+7 776 318 7997</span></li>
      </ul>
  
    </div>
    <div class="enter_new_data">
    <div class="profile_update">Profile Update</div>
    <div class="enter_user">
     Username
  <input type="text" placeholder="Enter Username">
  </div>
  <div class="enter_user">
    Specicialization
  <input type="text" placeholder="Enter specicialization">
  </div>
  <div class="enter_user">
    Email 
  <input type="text" placeholder="Enter email">
  </div>
  <div class="enter_user">
    Description 
  <input type="text" placeholder="Enter description">
  </div>
  <div class="change_password">
    <div class="change_password_text">
      Change password
    </div>
    <div class="enter_user">
      Password 
    <input type="text" placeholder="Enter new password">
    </div>
    <div class="enter_user">
      Confirm password 
    <input type="text" placeholder="confirm password">
    </div>
  </div>
    <div class="update_button">
      <input type="button" value="Update" >
    </div>
    </div>
  </div>
  </div>
  </div>
</body>
<script src="js/profile.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script src="js/list.js"></script>
<script src="js/topics.js"></script>
</html>