<?php
include "conn.php";
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$message=$_POST['message'];
$tab="INSERT INTO `query_form` (`name`, `mobile` , `email` ,`message`) VALUES ('$name','$mobile','$email','$message')";
$tab_res=mysqli_query($conn,$tab);
if(!$tab_res){
    $check=0;
    header("location:index.php?file=error.php&check=".$check."");
}
else{
    $check=1;
    header("location:index.php?file=error.php&check=".$check."");
}
?>