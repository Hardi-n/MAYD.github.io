<?php
session_start();
include "chk.php";
?>
<?php
$food_name=$_POST['food_name'];
$food_category=$_POST['category'];
$prize=$_POST['prize'];
$size = $_FILES['product_img']['size'];
$name = $_FILES['product_img']['name'];
$tmp_name = $_FILES['product_img']['tmp_name'];
$ext_array = explode(".",$name);
$ext = $ext_array[1];
$ext = strtoupper($ext);
$size = round($size/1024,0);
$img = $food_name.".".$ext;
$folder = "../uploaded/".$img;
if($ext == "JPG" || $ext == "PNG" || $ext == "GIF") 
{
    if($size < 500)
    {
        if(move_uploaded_file($tmp_name,$folder))
        {
            include "../conn.php";
            $sel="insert into food_items (food_name,price,category,img,added_by) values('$food_name','$prize','$food_category','$img',$user_id)";
            $sel_res=mysqli_query($conn,$sel);
            if(!$sel_res){
                echo "data not inserted";
            }
            else{
                header("location:index.php?file=add_product.php");
            }
        }
        else
        {
            echo "File Uploading Failed";
        }
    }
    else
    {
        echo "Size should be less than 500 KB";
    }
}
else
{
    echo "Only JPG , PNG and GIF is allowed";
}
?>