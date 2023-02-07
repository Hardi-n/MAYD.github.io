<?php
    $check=$_REQUEST['check'];

    if($check == '1'){
        echo "<div class='text_align_center height440'>";
        echo "<div class=padding10p>";
        echo "<img src='../assets/images/cross.png' class='errorimg'>";
        echo "<h2>PLEASE SELECT PAYMENT METHOD</h2><br>";
        echo "<a href='index.php?file=cart.php' class='login_btn marginleft0'>GO BACK</a>";
        echo "</div>";
        echo "</div>";
    }
?>