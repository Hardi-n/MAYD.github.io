<?php
    include "chk.php";
    if(!isset($_SESSION['user_id']))
    {
        $user_id = '';
    }
    else{
        $user_id = $_SESSION['user_id'];
    }
?>
    <div class="orderhistory" id="orderhistory">
        <table class="orderhistory_table">
            <thead class="orderhistory_thead">
                <tr class="orderhistory_tr">
                    <th class="orderhistory_th">Order number</th>
                    <th class="orderhistory_th">Order date</th>
                    <th class="orderhistory_th">PAYMENT STATUS</th>
                    <th class="orderhistory_th">Status</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include "../conn.php";

                $sq = "select * from orderlist where user_id='$user_id'";
                $res= mysqli_query($conn,$sq);
                while($row = mysqli_fetch_array($res))
                {
                    extract($row);
                
            ?>
                <tr class="orderhistory_tr">
                    <td class="orderhistory_td"><?php echo $order_id?><a href="index.php?file=orderdetails.php &order_id=<?php echo $order_id;?>"><br>MORE DETAILS</a></td>
                    <td class="orderhistory_td"><?php echo $order_timestamp?></td>
                    <td class="orderhistory_td"><?php echo $payment_status?></td>
                    <td class="orderhistory_td"><?php echo $status?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>