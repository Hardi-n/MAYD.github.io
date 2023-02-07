<?php
    session_start();
    include "conn.php";
    if(!isset($_SESSION['user_id']))
    {
        $user_id = '';
    }
    else{
        $user_id = $_SESSION['user_id'];
    }
    
    if($user_id != '')
    {   
        $food_id = $_REQUEST['food_id'];
        $user_id = $_SESSION['user_id'];

        $sq = "INSERT INTO `cart`(`user_id`, `food_id`, `qty`) VALUES ('$user_id','$food_id','1') ";
        $res= mysqli_query($conn,$sq);
        if(!$res)
        {
            echo "error";    
        }
        else
        {
            header("location:index.php?file=menu.php");
        }
    }
    else
    {
        $check=2;
        header("location:index.php?file=error.php&check=".$check."");
    }
?>