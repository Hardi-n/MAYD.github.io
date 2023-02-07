<?php
    include "chk.php";
?>
<div class="viewproduct" id="viewproduct">
        <table>
            <thead>
            <tr>
                <th>Sno.</th>
                <th class="product_image">PRODUCT image</th>
                <th>PRODUCT name</th>
                <th>prize</th>
                <th>Delete</th>
            </tr>
            </thead>
            <?php
                include "../conn.php";

                $sq = "select * from food_items";
                $res= mysqli_query($conn,$sq);
                while($row = mysqli_fetch_array($res))
                {
                    extract($row);
            ?>

            <tr class="enquerylist_tr">
                    <td class="enquerylist_td"><?php echo $food_id; ?></td>
                    <td class="enquerylist_td"><img src="../uploaded/<?php echo $img; ?>"></td>
                    <td class="enquerylist_td"><?php echo $food_name; ?></td>
                    <td class="enquerylist_td"><?php echo $price; ?></td>
                    <td><a href="delete_product.php?food_id=<?php echo $food_id; ?>" class="a">DELETE</a></td>
                </tr>
                <?php
                }
                ?>
        </table>
    </div>