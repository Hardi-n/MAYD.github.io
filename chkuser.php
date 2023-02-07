<?php
session_start();
include "conn.php";
$mobile=$_POST['mobile'];
$password=$_POST['password'];

$mobsel="select * from sign_up where mobile='$mobile' and password = '$password' and status = 'active'";
$mobsel_res=mysqli_query($conn,$mobsel);
$mobnum=mysqli_num_rows($mobsel_res);
if($mobnum==1){
    while($row = mysqli_fetch_array($mobsel_res))
    {
        $_SESSION['mobile'] = $mobile;
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['category'] = $row['category'];
        if($row['category'] == "Customer")
        {

            header("location:index.php?file=guest_home.php");
        }
        else
        {
            header("location:admin/");
        }
    }
}
else
{
    $check=3;
    header("location:index.php?file=error.php&check=".$check."");
}
?>