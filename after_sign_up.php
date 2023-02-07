<?php
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$password=$_POST['password'];

include "conn.php";
$sel="select * from sign_up where mobile='$mobile'";
$sel_res=mysqli_query($conn,$sel);
$num = mysqli_num_rows($sel_res);
if($num == 0){
    $sqn="insert into sign_up (name, email,mobile,address,password) values('$name','$email','$mobile','$address','$password')";
    $res=mysqli_query($conn,$sqn);
    if(!$res){
        $check=5;
        header("location:index.php?file=error.php&check=".$check."");
    }
    else{
        $check=6;
        header("location:index.php?file=error.php&check=".$check."");
    }
}
else{
    $check=4;
    header("location:index.php?file=error.php&check=".$check."");
    echo "number exists ,please use another number";
}



?>