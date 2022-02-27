<?php

$officer_id = $_POST['id'];
//echo $officer_id;
$view_detail = '';
// Create connection
require_once '../../config/ConnectDB/connect.php';
// Check connection
$sql = "SELECT * FROM tb_officer WHERE officer_id = '{$officer_id}'";
$result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $view_detail.='<div class="text-center">';
        $view_detail.= '<img src="assets/dist/img/avatar/avatar2.png" alt="" class="brand-image img-circle elevation-0 mb-3" style="opacity: 1; width: 130px;">';
        $view_detail.= '<p>รหัสเจ้าหน้าที่ : <span class="text-danger ">'.$row['officer_id'].'</span> </p>';
        $view_detail.= '<p>E-mail : <span class="text-danger">'.$row['officer_email'].'</span> </p>';
        $view_detail.= '<p>รหัสประจำตัวประชาชน : <span class="text-danger">'.$row['officer_id_card'].'</span> </p>';
        $view_detail.= '<p>ชื่อ - สกุล : <span class="text-danger">'.$row['officer_fristname'].' '.$row['officer_lastname'].'</span> </p>';
        $view_detail.= '<p>เบอร์โทรศัพท์ : <span class="text-danger">'.$row['officer_phone'].'</span> </p>';
        $view_detail.= '<p>ระดับผู้ใช้งาน : <span class="text-danger">'.$row['officer_level'].'</span> </p>';
        
    }
    echo $view_detail;
?>