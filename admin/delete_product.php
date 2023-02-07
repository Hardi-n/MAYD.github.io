<?php
    include "../conn.php";
    $food_id =$_REQUEST['food_id'];
    $sq="DELETE FROM food_items WHERE food_id= $food_id";
    $sq_res=mysqli_query($conn,$sq);
    if($sq_res){
        header("location:index.php?file=viewproduct.php");
    }
    else{
        echo "ITEM NOT DELETED";
    }
?>