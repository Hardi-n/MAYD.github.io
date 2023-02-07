<div class="front_banner">
      <div class="front_banner1">
          <h1>SUPER DEAL</h1>
          <h2>PURCHASE TODAY. JUST <span>RS.250</span></h2>
          <p>The ourselves suffering the sincerity. Inhabit her manners adapted age certain <br>
              Debating offended at branched striking be subjects.</p>
      </div>
    </div>
<div>
      <div class="first">
      <?php
                include "conn.php";

                $sq = "select * from food_items order by rand() limit 0,6 ";
                $res= mysqli_query($conn,$sq);
                while($row = mysqli_fetch_array($res))
                {
                    extract($row);
            ?>
      
      <div class="first_block1">
          <div>
            <img src="uploaded/<?php echo $img; ?>" alt="" class="first_img1">
          </div>
          <div class="first_content1">
            <strong><?php echo $food_name; ?></strong><br>
            <p>PRIZE: RS.</p><p><?php echo $price; ?></p>
            <?php
              $sq2 = "select * from cart where food_id = '$food_id' and user_id = '$user_id'";
              $res2= mysqli_query($conn,$sq2);
              $num = mysqli_num_rows($res2);
              if($num == 0)
              {
                echo '<a href="add_to_cart.php?food_id='.$food_id.'">ADD TO CART</a>';
              }
              else
              {
                echo '<a href="user/index.php?file=cart.php">Show Cart</a>';
              }
            ?>
            
          
          </div>
        </div>
        
        <?php
                }
        ?>
</div>
   <?php
   include "footer.php";
   ?>