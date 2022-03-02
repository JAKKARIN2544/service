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
                $img = '<img src="assets/dist/img/avatar/avatar5.png" alt="" class="brand-image img-circle elevation-0 mb-3" style="opacity: 1; width: 130px;">';
                $view_detail_users.= '<div class="text-center">'.$img.'</div>';
                $view_detail_users.= '<div class="text-center">รหัสเจ้าหน้าที่ : <span class="text-danger">'.$row['user_id'].'</span></div><br>';
                $view_detail_users.='<center><table border="1" >';
                $view_detail_users.='<tr><td>&nbsp;E-mail :&nbsp;</td><td>&nbsp;<span class="text-danger">'.$row['email'].'</span>&nbsp;</td></tr>';
                $view_detail_users.='<tr><td>&nbsp;รหัสประจำตัว : &nbsp;</td><td>&nbsp;<span class="text-danger">'.$row['id_ldentification'].'</span></td></tr>';
                $view_detail_users.='<tr><td>&nbsp;ชื่อ - สกุล : </td><td>&nbsp;<span class="text-danger">'.$row['frist_name'].' '.$row['last_name'].'</span></td></tr>';
                $view_detail_users.='<tr><td>&nbsp;ระดับชั้น - แผนก :&nbsp;</td><td>&nbsp;<span class="text-danger">'.$row['class'].' '.$row['department'].'&nbsp;</span></td></tr>';
                $view_detail_users.='<tr><td>&nbsp;เบอร์โทรศัพท์ :</td><td>&nbsp;<span class="text-danger">'.$row['phone'].'</span></td></tr>';
                $view_detail_users.='</center></table>';
        
    }
    echo $view_detail_users;
?>