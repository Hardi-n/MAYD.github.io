<?php
    include "chk.php";
?>
<div class="addproduct_div" id="addproduct_div">
    <div class="addproduct" id="addproduct">
        <form action="after_addproduct.php" method="post" class="addproduct_form" enctype="multipart/form-data">
            <div class="img"><img src="../assets/images/first.png" alt="error"></div>
            <input type="text" placeholder="ITEM NAME" name="food_name">
            <input type="text" placeholder="Category" name="category">
            <input type="number" placeholder="ITEM PRIZE" name="prize">
            <input type="file" placeholder="item image" name="product_img">
            <input type="submit" value="ADD ITEM">
        </form>
    </div>
</div>