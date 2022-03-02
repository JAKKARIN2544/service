<?php

$service_id = $_POST['id'];
//echo $service_id;
$detail_service = '';
// Create connection
require_once '../../config/ConnectDB/connect.php';
// Check connection
$sql = "SELECT tb_service.service_id, tb_service.service_date, tb_users.frist_name, tb_users.last_name, 
        tb_officer.officer_fristname, tb_officer.officer_lastname,tb_service_detail.computer_name, 
        tb_service_detail.computer_brand, tb_service_detail.computer_color ,tb_service_detail.computer_code, 
        tb_service_detail.service_item, tb_service_detail.malfunction, tb_service_detail.malfunction_datail,
        tb_status.status_name_th
        FROM tb_service
        INNER JOIN tb_service_detail
        ON tb_service.service_id = tb_service_detail.service_id
        INNER JOIN tb_users
        ON tb_service.user_id = tb_users.user_id
        INNER JOIN tb_officer
        ON tb_service.officer_id = tb_officer.officer_id
        INNER JOIN tb_status
        ON tb_service_detail.status = tb_status.status_name_eng
        WHERE tb_service.service_id = '{$service_id}'";
$result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $text = $row['malfunction_datail'];
        $word = mb_substr($text,0,-4);
        $detail_service.= '<div class="text-center">รหัสแจ้งซ่อม :  <span class="text-danger">'.$row['service_id'].'</span></div><br>';
        $detail_service.='<center><table border="1" >';
        $detail_service.='<tr><td>&nbsp;วันที่แจ้งซ่อม :&nbsp;</td><td>&nbsp;<span class="text-danger">'.$row['service_date'].'</span>&nbsp;</td></tr>';
        $detail_service.='<tr><td>&nbsp;รหัสผู้ใช้งานที่ส่งซ่อม : &nbsp;</td><td>&nbsp;<span class="text-danger">'.$row['frist_name'].' '.$row['last_name'].'</span></td></tr>';
        $detail_service.='<tr><td>&nbsp;รหัสเจ้าหน้าที่ที่รับซ่อม : &nbsp;</td><td>&nbsp;<span class="text-danger">'.$row['officer_fristname'].' '.$row['officer_lastname'].'</span>&nbsp;</td></tr>';
        $detail_service.='<tr><td>&nbsp;ชื่ออุปกรณ์ : </td><td>&nbsp;<span class="text-danger">'.$row['computer_name'].'</span></td></tr>';
        $detail_service.='<tr><td>&nbsp;ยี่ห้ออุปกรณ์ : </td><td>&nbsp;<span class="text-danger">'.$row['computer_brand'].'</span></td></tr>';
        $detail_service.='<tr><td>&nbsp;สีอุปกรณ์ : </td><td>&nbsp;<span class="text-danger">'.$row['computer_color'].'</span></td></tr>';
        $detail_service.='<tr><td>&nbsp;ซีเรียลนัมเบอร์อุปกรณ์ : </td><td>&nbsp;<span class="text-danger">'.$row['computer_code'].'&nbsp;</span></td></tr>';
        $detail_service.='<tr><td>&nbsp;จำนวนอุปกรณ์ที่ส่งซ่อม : </td><td>&nbsp;<span class="text-danger">'.$row['service_item'].'</span> ชิ้น</td></tr>';
        $detail_service.='<tr><td>&nbsp;อาการชำรุด : </td><td>&nbsp;<span class="text-danger">'.$row['malfunction'].'</span></td></tr>';
        $detail_service.='<tr><td>&nbsp;รายละเอียดอาการชำรุด : </td><td>&nbsp;<span class="text-danger">'.$word.'...</span></td></tr>';
        $detail_service.='<tr><td>&nbsp;สถานะการซ่อม : </td><td>&nbsp;<span class="text-danger">'.$row['status_name_th'].'</span></td></tr>';
        $detail_service.='</center></table>';
    }
    echo $detail_service;
?>