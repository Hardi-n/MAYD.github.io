<?php
    include "chk.php";
?>
<?php
    include "../conn.php";
    $mobile = $_SESSION['mobile'];
    $sq = "select * from sign_up where mobile = '$mobile'";
    $res= mysqli_query($conn,$sq);
    while($row = mysqli_fetch_array($res))
    {
        extract($row);
?>
    <div class="profile_div" id="profile_div">
        <div class="profile">
            <div class="profile_img"><img src="../assets/images/user.png" alt="error"></div>
            <div class="profile_content">
                <div class="profile_content_div">
                    <h2>Contact information</h2>
                    <span>NAME:</span> <span class="profile_content_div_span"><?php echo $name ?></span><br>
                    <span>EMAIL:</span><span class="profile_content_div_span"><?php echo $email ?></span>
                    <br>
                    <h2>General information</h2>
                    <span>MOBILE:</span><span class="profile_content_div_span"><?php echo $mobile ?></span><br>
                    <span>ADDRESS:</span><span class="profile_content_div_span"><?php echo $address ?></span>
                </div>
            </div>
        </div>
    </div>
<?php
    }
?>