<?php
session_start();
    if(isset($_REQUEST['file']))
    {
        $file=$_REQUEST['file'];
    }
    else
    {
        $file="guest_home.php";
    }

    if(!isset($_SESSION['user_id']))
    {
        $user_id = '';
    }
    else{
        $user_id = $_SESSION['user_id'];
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MATOZ</title>
    <link rel="icon" href="assets/images/logo.png">
    <link rel="stylesheet" href="assets/css/basic17.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/54239862b5.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="navbar">
      <div class="navbar_img_div" >
        <img src="assets/images/form123.png" alt="error"class="navbar_img">
      </div>
      <div class="navbar_content">
        <a href="index.php?file=guest_home.php">HOME </a>
        <a href="index.php?file=about.php">ABOUT US </a>
        <a href="index.php?file=query_page.php">CONTACT US </a>
        <a href="index.php?file=menu.php">MENU </a>
        <?php
          if($user_id == '')
          {
            echo '<a href="login.php" class="login_btn">LOGIN </a>';
            echo '<a href="signup.php" class="signup_btn">SIGN UP</a>';
          }
          else
          {
            echo '<a href="user/?file=profile.php" class="login_btn">PROFILE</a>';
            echo '<a href="user/logout.php" class="signup_btn">LOGOUT</a>';
          }
        ?>
      </div>
    </div>
    
    <?php include $file; ?>
  </body>
</html>