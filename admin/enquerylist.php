<?php
    include "chk.php";
?>
    <div class="enquerylist" id="enquerylist">
        <table class="enquerylist_table" cellpadding="15">
            <thead class="enquerylist_thead">
                <tr class="enquerylist_thead_tr">
                    <th class="enquerylist_th" cellspacing="0">Name</th>
                    <th class="enquerylist_th">Email</th>
                    <th class="enquerylist_th">Mobile</th>
                    <th class="enquerylist_th">Message</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include "../conn.php";

                $sq = "select * from query_form";
                $res= mysqli_query($conn,$sq);
                while($row = mysqli_fetch_array($res))
                {
                    extract($row);
                
            ?>
            <tr class="enquerylist_tr">
                    <td class="enquerylist_td"><?php echo $name; ?></td>
                    <td class="enquerylist_td"><?php echo $email; ?></td>
                    <td class="enquerylist_td"><?php echo $mobile; ?></td>
                    <td class="enquerylist_td"><?php echo $message; ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>