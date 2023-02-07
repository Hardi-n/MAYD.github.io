<?php
include "chk.php";
include "../conn.php";
$order_id=$_REQUEST['order_id'];
$sq="SELECT * FROM orderlist WHERE `order_id`='$order_id'";
$sq_res=mysqli_query($conn,$sq);
while($row=mysqli_fetch_array($sq_res)){
    extract($row);

?>
<center>
    <div class="orderdetails_div">
        <div><h2><?php echo $order_id; ?></h2></div>
        <div><h2><?php echo $order_timestamp; ?></h2></div>
    </div>
</center>
<?php
}
?>


<div class="orderdetails">
    <table class="orderdetails_table">
        <thead class="orderdetails_thead">
            <tr class="orderdetails_tr">
                <th class="orderdetails_th">sno</th>
                <th class="orderdetails_th">ITEM</th>
                <th class="orderdetails_th">PRIZE</th>
                <th class="orderdetails_th">QUANTITY</th>
                <th class="orderdetails_th">TOTAL AMOUNT</th>
            </tr>
        </thead>
        <tbody  class="orderdetails_tbody">
        <?php

                include "../conn.php";

                $sq = "SELECT *,order_details.price FROM order_details LEFT JOIN food_items ON order_details.food_id=food_items.food_id WHERE order_id='$order_id'";
                $res= mysqli_query($conn,$sq);
                while($row = mysqli_fetch_array($res))
                {
                    extract($row);
                
            ?>
                <tr>
                    <td class="orderdetails_td"><?php echo $sno; ?></td>
                    <td class="orderdetails_td"><img src="../uploaded/<?php echo $img; ?>"></td>
                    <td class="orderdetails_td"><?php echo $rate;?></td>
                    <td class="orderdetails_td"><?php echo $qty;?></td>
                    <td class="orderdetails_td"><?php echo ($price);?></td>
                </tr>
            </tr>
                <?php
                }
                ?>
        </tbody>
    </table>
</div>