<?php
    session_start();
    include "chk.php";
    include "../conn.php";
	error_reporting(0);
    extract($_REQUEST);
		if($button == "CHECKOUT")
		{
			
			if($payment_method == ''){
				$check=1;
				header("location:index.php?file=error.php&check=".$check."");
			}
			else{
				if($payment_method == "cod")
				{
					$payment_status = "pending";
					$trans_no = "NA";
				}
				else
				{
					$payment_status = "done";
					$trans_no = rand();
				}
				$sq = "INSERT INTO orderlist (`user_id`,`payment_method`,`payment_status`,`trans_no`) VALUES ('$user_id','$payment_method','$payment_status','$trans_no')";
				$res = mysqli_query($conn,$sq);
				if($res)
				{
					$sel = "select max(order_id) as new_order from orderlist";
					$sel_res = mysqli_query($conn,$sel);
					while($row = mysqli_fetch_array($sel_res))
					{
						extract($row);
					}
				
					$i=0;
					foreach ($food_id as $food)
					{
						$quantity = $qty[$i];
						$rate = $price[$i];
						$amount = $quantity*$rate;
						$sq = "insert into order_details (order_id, food_id, qty, rate, price) values ('$new_order','$food','$quantity',		'$rate','$amount')";
						$res = mysqli_query($conn,$sq);
						if(!$res)
						{
							echo "error";
						}
						$i++;
					}
					$sq = "delete from cart where user_id = '$user_id'";
					$res = mysqli_query($conn,$sq);
					if(!$res)
					{
						echo "error";
					}
		        	else
					{
					header("location:index.php?file=placeorder.php");
					}
				}
				else
				{
					echo "error";
				}
			}
		}
		else if($button == "UPDATE")
		{
		
			$i=0;
			foreach ($food_id as $food)
			{ 
				$serial_no = $serial[$i];
				$quantity = $qty[$i];
				$rate = $price[$i];
				$amount = $quantity*$rate;
				$sq = "update cart set qty='$quantity' where serial = '$serial_no'";
				$res = mysqli_query($conn,$sq);
				if(!$res)
				{
					$error++;
				}
				$i++;
			}
		
			header("location:index.php?file=cart.php");
		}
    
?>