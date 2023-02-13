<?php
session_start();
include "chk.php";
    if(isset($_REQUEST['file']))
    {
        $file=$_REQUEST['file'];
    }
    else
    {
        $file="add_product.php";
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>MATOZ</title>
    <link rel="icon" href="../assets/images/logo.png">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/54239862b5.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="navbar">
        <div class="navbar_img_div">
            <img src="../assets/images/form123.png" alt="error" class="navbar_img">
        </div>
        <div class="navbar_admin_icon">
            <i class="fa-solid fa-user"></i>
            <h4><?php echo $name; ?></h4>
        </div>
        <div class="navbar_admin_logout">
            <a href="logout.php">LOG OUT</a>
        </div>
    </div>
    <div class="first">
        <div class="first_content" ><a href="index.php?file=add_product.php">ADD PRODUCT</a></div>
        <div class="first_content" ><a href="index.php?file=viewproduct.php">VIEW PRODUCT</a></div>
        <div class="first_content" ><a href="index.php?file=orderlist.php">ORDER LIST</a></div>
        <div class="first_content" ><a href="index.php?file=enquerylist.php">ENQUERY LIST</a></div>
        <div class="first_content" ><a href="index.php?file=registereduser.php">REGISTERED USERS</a></div>
    </div>

    <?php include $file; ?>
</body>

</html>