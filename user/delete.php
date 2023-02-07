<?php
include "chk.php";
include "../conn.php";
$serial=$_REQUEST['serial'];
$sq="DELETE from cart where serial='$serial'";
$res=mysqli_query($conn,$sq);
if($res){
    header("location:index.php?file=cart.php");
}
else{
    echo "not deleted";
}
?>