<?php
    include "chk.php";
?>
<div class="order_list" id="orderlist">
        <table cellpadding="15">
            <thead cellspacing="0">
                <tr>
                    <th>order number</th>
                    <th>user id</th>
                    <th>payment method</th>
                    <th>payment status</th>
                    <th>order status</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include "../conn.php";

                $sq = "select * from orderlist";
                $res= mysqli_query($conn,$sq);
                while($row = mysqli_fetch_array($res))
                {
                    extract($row);
            ?>
            <tr class="enquerylist_tr">
                    <td class="enquerylist_td"><?php echo $order_id; ?><a href="index.php?file=order_detail.php &order_id=<?php echo $order_id;?>"><br>MORE DETAILS</a></td>
                    <td class="enquerylist_td"><?php echo $user_id; ?></td>
                    <td class="enquerylist_td"><?php echo $payment_method; ?></td>
                    <td class="enquerylist_td"><?php echo $payment_status; ?></td>
                    <td class="enquerylist_td"><?php echo $status; ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>