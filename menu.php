<?php
  include "conn.php";
  $sq="SELECT distinct(category) FROM food_items";
  $sq_res=mysqli_query($conn,$sq);
  $category_array = array();
  $i=0;
  while($row = mysqli_fetch_array($sq_res))
  {
      extract($row);
      $category_array[$i] = $category;
      $i = $i +1;
    }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/54239862b5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/menu.css">
</head>
<body>
<div class="burger">
  <?php
    foreach($category_array as $category)
    {
  ?>
  <h1><?php echo $category." :"; ?></h1>
  <div class="burger_containers">
  <?php
      $sq = "SELECT * FROM food_items where category='$category'";
      $sq_res=mysqli_query($conn,$sq);
      while($row = mysqli_fetch_array($sq_res))
      {
        extract($row);
        ?>
          <div class="burger_container1">
        <div class="burger_container1_div">
          <img src="uploaded/<?php echo $img; ?>" alt="">
          <strong><?php echo $food_name;?></strong>
          <p>PRIZE:<p><?php echo $price;?></p>
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
      echo "</div>";
    }
  ?>  
  </div>
    <?php
      include "footer.php";
    ?>
</body>
</html>