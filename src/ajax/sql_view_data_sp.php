<?php

$sp_id = $_POST['id'];
//echo $officer_id;
$view_detail_sp = '';
// Create connection
require_once '../../config/ConnectDB/connect.php';
// Check connection
$sql = "SELECT * FROM tb_spare_part WHERE spare_id = '{$sp_id}'";
$result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $view_detail_sp.='<div class="text-center">';
        $view_detail_sp.= '<p>รหัสอะไหล่ : <span class="text-danger ">'.$row['spare_id'].'</span> </p>';
        $view_detail_sp.= '<p>วันที่ซื้อ ล่าสุด : <span class="text-danger">'.$row['buy_date'].'</span> </p>';
        $view_detail_sp.= '<p>ชื่ออะไหล่ : <span class="text-danger">'.$row['spare_name'].'</span> </p>';
        $view_detail_sp.= '<p>ราคา / ชิ้น : <span class="text-danger">'.$row['spare_price'].'</span> บาท </p>';
        $view_detail_sp.= '<p>คงเหลือ : <span class="text-danger">'.$row['spare_remaining'].'</span> ชิ้น </p>';
        
    }
    echo $view_detail_sp;
?>