<?php

$users_id = $_POST['id'];
//echo $officer_id;
$view_detail_users = '';
// Create connection
require_once '../../config/ConnectDB/connect.php';
// Check connection
$sql = "SELECT * FROM tb_users WHERE user_id = '{$users_id}'";
$result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $view_detail_users.='<div class="text-center">';
        $view_detail_users.= '<img src="assets/dist/img/avatar/avatar5.png" alt="" class="brand-image img-circle elevation-0 mb-3" style="opacity: 1; width: 130px;">';
        $view_detail_users.= '<p>รหัสผู้ใช้งาน : <span class="text-danger ">'.$row['user_id'].'</span> </p>';
        $view_detail_users.= '<p>E-mail : <span class="text-danger">'.$row['email'].'</span> </p>';
        $view_detail_users.= '<p>รหัสประจำตัว : <span class="text-danger">'.$row['id_ldentification'].'</span> </p>';
        $view_detail_users.= '<p>ชื่อ - สกุล : <span class="text-danger">'.$row['frist_name'].' '.$row['last_name'].'</span> </p>';
        $view_detail_users.= '<p>ชั้น - แผนก : <span class="text-danger">'.$row['class'].' '.$row['department'].'</span> </p>';
        $view_detail_users.= '<p>เบอร์โทรศัพท์ : <span class="text-danger">'.$row['phone'].'</span> </p>';
        
    }
    echo $view_detail_users;
?>