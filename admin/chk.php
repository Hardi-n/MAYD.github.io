<?php
include "../conn.php";
if(!(isset($_SESSION['user_id']) && isset($_SESSION['mobile']))){
    header("location:../");
}
else
{
    $mobile = $_SESSION['mobile'];
    $sq = "select * from sign_up where mobile = '$mobile'";
    $res= mysqli_query($conn,$sq);
    while($row = mysqli_fetch_array($res))
    {
        extract($row);
    }
}

?>