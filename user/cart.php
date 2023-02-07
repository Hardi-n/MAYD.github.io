<?php
    // session_start();
    // print_r($_SESSION);
    if(isset($_SESSION['user_id'])&&isset($_SESSION['mobile'])){
        $user_id=$_SESSION['user_id'];
        $mobile=$_SESSION['mobile'];
    }
    include "chk.php";
?>
<div class="second" id="cart">
    <form action="order_placed.php" method="post">
        <div class="cart">
            <table class="cart_table">
                <thead class="cart_table_thead">
                    <tr class="cart_table_tr">
                        <th class="cart_table_th">Item</th>
                        <th class="cart_table_th">Prize</th>
                        <th class="cart_table_th">Quantity</th>
                        <th class="cart_table_th">Total</th>
                        <th class="cart_table_th">Remove</th>
                    </tr>
                </thead>
                <tbody class="cart_table_tbody">
                    
                    <?php
                    include "../conn.php";
    
                    $sq = "select * from cart left join food_items on food_items.food_id = cart.food_id where cart.user_id = '$user_id'";
                    $res= mysqli_query($conn,$sq);
                    while($row = mysqli_fetch_array($res))
                    {
                        extract($row);
                        
                    ?>
                    <tr class="cart_table_tr">
                        <td class="cart_table_td"><img src="../uploaded/<?php echo $img; ?>" alt="error"></td>
                        
                        <td class="cart_table_td"><?php echo $price; ?></td>
                        <td class="cart_table_td">
                        <input type="hidden" name="price[]" value="<?php echo $price;?>">
                        <input type="hidden" name="serial[]" value="<?php echo $serial;?>">
                        <input type="hidden" name="food_id[]" value="<?php echo $food_id;?>"> 
                        <select name="qty[]">
                            <?php
                            for($i=1;$i<10;$i++)
                            {
                                if($i == $qty)
                                {
                                    echo "<option selected>".$i."</option>";
                                }
                                else
                                {
                                    echo "<option>".$i."</option>";
                                }
                            }
                            echo $qty; 
                            ?>
                        </select></td>
                        <td class="cart_table_td"><?php echo ($price*$qty); ?></td>
                        <?php
                            echo "<td class='cart_table_td'><a href='delete.php?serial=$serial'>DELETE</a></i></td>";
                        ?>                        
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            
            <div class="cart_buttons">
                <a href="../" class="cart_button1">CONTINUE SHOPPING</a>
                <div>
                    <h3 class="padding1rem">Payment Method <br></h3>
                            <input type="radio" id="payment_method" name="payment_method" value="cod"><label
                                for="payment_method">COD</label><br>
                            <input type="radio" id="card" name="payment_method" value="card"><label for="card">CARD</label>
                            <?php
                                 echo "<input type='submit' name='button' value='CHECKOUT' class='cart_button2'><br>";
                                 echo "<input type='submit' name='button' value='UPDATE' class='cart_button2'";
                            ?>
                </div>
            </div>
        </div>
    </form>
    </div>