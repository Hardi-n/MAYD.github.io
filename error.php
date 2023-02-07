<?php
   $check=$_REQUEST['check'];
   if($check=='0'){
    echo "<div class='text_align_center height440'>";
    echo "<div class=padding10p>";
    echo "<img src='assets/images/cross.png' class='errorimg'>";
    echo "<h2>Message not sent please try again</h2>";
    echo "</div>";
    echo "</div>";
   }
   elseif($check == '1'){
    echo "<div class='text_align_center height440'>";
    echo "<div class='padding10p'>";
    echo "<img src='assets/images/check.jpg' class='errorimg'>";  
    echo "<h2>Message sent</h2>";
    echo "</div>";
    echo "</div>";
    }
   elseif($check =='2'){
    echo "<div class='text_align_center height440'>";
    echo "<div class='padding10p'>";
    echo "<img src='assets/images/cross.png' class='errorimg'>";
    echo "<h2> LOGIN PLEASE</h2>";
    echo "</div>";
    echo "</div>";
    }
    elseif($check == '3'){
        echo "<div class='text_align_center height440'>";
        echo "<div class='padding10p'>";
        echo "<img src='assets/images/cross.png' class='errorimg'>";
        echo "<h2> SIGN UP PLEASE,ACCOUNT ON THIS NUMBER DOESN'T EXISTS</h2>";
        echo "</div>";
        echo "</div>";
    }
    elseif($check == '4'){
        echo "<div class='text_align_center height440'>";
        echo "<div class='padding10p'>";
        echo "<img src='assets/images/cross.png' class='errorimg'>";
        echo "<h2>NUMBER EXISTS PLEASE USE ANOTHER NUMBER</h2>";
        echo "</div>";
        echo "</div>";
    }
    elseif($check == '5'){
        echo "<div class='text_align_center height440'>";
        echo "<div class='padding10p'>";
        echo "<img src='assets/images/cross.png' class='errorimg'>";
        echo "<h2>ERROR PLEASE TRY AGAIN</h2>";
        echo "</div>";
        echo "</div>";
    }
    elseif($check == '6'){
        echo "<div class='text_align_center height440'>";
        echo "<div class='padding10p'>";
        echo "<img src='assets/images/check.jpg' class='errorimg'>";
        echo "<h2>YOUR ACCOUNT REGISTERED SUCCEFULLY</h2> <br>";
        echo "<a href='login.php' class='login_btn marginleft0'>LOGIN</a>";
        echo "</div>";
        echo "</div>";
    }
   include "footer.php";
?>