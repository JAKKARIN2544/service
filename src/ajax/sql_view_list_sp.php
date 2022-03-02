<?php

$sp_list_id = $_POST['id'];
//echo $sp_list_id;
$detail_sp_list = '';
// Create connection
require_once '../../config/ConnectDB/connect.php';
// Check connection
$sql = "SELECT tb_spare_parts_list.sp_list_id, tb_spare_parts_list.sp_list_date, 
        tb_spare_part.spare_name, tb_officer.officer_fristname, tb_officer.officer_lastname, tb_spare_parts_list.sp_list_total
        FROM tb_spare_parts_list
        INNER JOIN tb_spare_part
        ON tb_spare_parts_list.spare_part_id  = tb_spare_part.spare_id
        INNER JOIN tb_officer
        ON tb_spare_parts_list.officer_id  = tb_officer.officer_id
        WHERE sp_list_id = '{$sp_list_id}'";
$result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        $detail_sp_list.= '<div class="text-center">รหัสการเบิก :  <span class="text-danger">'.$row['sp_list_id'].'</span></div><br>';
        $detail_sp_list.='<center><table border="1" >';
        $detail_sp_list.='<tr><td>&nbsp;วันที่เบิก :&nbsp;</td><td>&nbsp;<span class="text-danger">'.$row['sp_list_date'].'</span>&nbsp;</td></tr>';
        $detail_sp_list.='<tr><td>&nbsp;อะไหล่ที่เบิก : &nbsp;</td><td>&nbsp;<span class="text-danger">'.$row['spare_name'].'</span></td></tr>';
        $detail_sp_list.='<tr><td>&nbsp;ชื่อ - สกุล ผู้เบิก : &nbsp;</td><td>&nbsp;<span class="text-danger">'.$row['officer_fristname'].' '.$row['officer_lastname'].'</span>&nbsp;</td></tr>';
        $detail_sp_list.='<tr><td>&nbsp;จำนวนที่เบิก : </td><td>&nbsp;<span class="text-danger">'.$row['sp_list_total'].'</span></td></tr>';
        $detail_sp_list.='</center></table>';
        
    }
    echo $detail_sp_list;
?>