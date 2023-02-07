<?php
   $status=$_REQUEST['status'];
   $msg = $_REQUEST['msg'];
   if($status == '1'){
    $img = "<img src='assets/images/cross.png' class='errorimg'>";
   }
   else{
    $img = "<img src='assets/images/check.jpg' class='errorimg'>";  
    }

    echo "<div class='text_align_center height440'>";
    echo "<div class=padding10p>";
    echo $img;
    echo "<h2>".$msg."</h2>";
    echo "</div>";
    echo "</div>";
 include "footer.php";
?>