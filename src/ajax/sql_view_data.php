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
                if($row['officer_level'] == 'admin'){
                    $img ='<img src="assets/dist/img/avatar/avatar2.png" alt="" class="brand-image img-circle elevation-0 mb-3" style="opacity: 1; width: 130px;">';
                }else{
                    $img ='<img src="assets/dist/img/avatar/avatar1.png" alt="" class="brand-image img-circle elevation-0 mb-3" style="opacity: 1; width: 130px;">';
                }
                $view_detail.= '<div class="text-center">'.$img.'</div>';
                $view_detail.= '<div class="text-center">รหัสเจ้าหน้าที่ : <span class="text-danger">'.$row['officer_id'].'</span></div><br>';
                $view_detail.='<center><table border="1" >';
                $view_detail.='<tr><td>&nbsp;E-mail :&nbsp;</td><td>&nbsp;<span class="text-danger">'.$row['officer_email'].'</span>&nbsp;</td></tr>';
                $view_detail.='<tr><td>&nbsp;รหัสประจำตัวประชาชน : &nbsp;</td><td>&nbsp;<span class="text-danger">'.$row['officer_id_card'].'</span></td></tr>';
                $view_detail.='<tr><td>&nbsp;ชื่อ - สกุล : </td><td>&nbsp;<span class="text-danger">'.$row['officer_fristname'].' '.$row['officer_lastname'].'</span></td></tr>';
                $view_detail.='<tr><td>&nbsp;เบอร์โทรศัพท์ :</td><td>&nbsp;<span class="text-danger">'.$row['officer_phone'].'</span></td></tr>';
                $view_detail.='<tr><td>&nbsp;ระดับผู้ใช้งาน :</td><td>&nbsp;<span class="text-danger">'.$row['officer_level'].'</span></td></tr>';
                $view_detail.='</center></table>';
    }
    echo $view_detail;
?>
