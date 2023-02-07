<?php
    include "../conn.php";
    $user_id=$_REQUEST['user_id'];
    $sq="SELECT * FROM sign_up WHERE `user_id`='$user_id'";
    $sq_res=mysqli_query($conn,$sq);
    while($row = mysqli_fetch_array($sq_res))
    {
        extract($row);
        if($status=='active'){
            $block="UPDATE sign_up set `status`= 'block' WHERE `user_id`='$user_id'";
            $block_res=mysqli_query($conn,$block);
            header("location:index.php?file=registereduser.php");
        }
        else{
            $block="UPDATE sign_up set `status`='active' WHERE `user_id`='$user_id'";
            $block_res=mysqli_query($conn,$block);
            header("location:index.php?file=registereduser.php");
        }
    }
?>