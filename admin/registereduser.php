<?php
    include "chk.php";
?>
    <div class="registereduser" id="registereduser">
        <table class="registereduser_table" cellpadding="15">
            <thead class="registereduser_thead">
                <tr class="registereduser_tr" cellspacing="0">
                    <th class="registereduser_th">Name</th>
                    <th class="registereduser_th">Email</th>
                    <th class="registereduser_th">Mobile</th>
                    <th class="registereduser_th">Address</th>
                    <th class="registereduser_th">Password</th>
                    <th class="registereduser_th">BLOCK</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include "../conn.php";

                $sq = "select * from sign_up where category = 'Customer'";
                $res= mysqli_query($conn,$sq);
                while($row = mysqli_fetch_array($res))
                {
                    extract($row);
            ?>
            <tr class="enquerylist_tr">
                    <td class="enquerylist_td"><?php echo $name; ?></td>
                    <td class="enquerylist_td"><?php echo $email; ?></td>
                    <td class="enquerylist_td"><?php echo $mobile; ?></td>
                    <td class="enqueryist_td"><?php echo $address; ?></td>
                    <td class="enquerylist_td"><?php echo $password; ?></td>
                    <?php
                        if($status =='active'){
                            $var='block';
                        }
                        else{
                            $var='unblock';
                        }
                    ?>
                    <td class="enquerylist_td"><a href="delete_user.php?user_id=<?php echo $user_id?>"><?php echo $var?></a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>