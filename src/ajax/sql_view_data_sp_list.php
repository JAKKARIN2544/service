<?php

$sp_list_id = $_POST['id'];
//echo $officer_id;
$view_sp_list = '';
// Create connection
require_once '../../config/ConnectDB/connect.php';
// Check connection
$sql = "SELECT tb_spare_parts_list.*, tb_spare_part.spare_name
        FROM tb_spare_parts_list
        INNER JOIN tb_spare_part
        ON tb_spare_parts_list.spare_part_id = tb_spare_part.spare_id
        WHERE sp_list_id = '{$sp_list_id}'";
$result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        $view_sp_list.= '<div class="text-center">รหัสเบิกอะไหล่ :  <span class="text-danger">'.$row['sp_list_id'].'</span></div><br>';
        $view_sp_list.='<center><table border="1" >';
        $view_sp_list.='<tr><td>&nbsp;วันที่เบิก :&nbsp;</td><td>&nbsp;<span class="text-danger">'.$row['sp_list_date'].'</span>&nbsp;</td></tr>';
        $view_sp_list.='<tr><td>&nbsp;ชื่ออะไหล่ที่เบิก : &nbsp;</td><td>&nbsp;<span class="text-danger">'.$row['spare_name'].'</span>&nbsp;</td></tr>';
        $view_sp_list.='<tr><td>&nbsp;จำนวนอะไหล่ที่เบิก : </td><td>&nbsp;<span class="text-danger">'.$row['sp_list_total'].'</span></td></tr>';
        $view_sp_list.='</center></table>';
    }
    echo $view_sp_list;
?>