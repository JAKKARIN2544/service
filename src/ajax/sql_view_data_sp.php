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

        $view_detail_sp.= '<div class="text-center">รหัสอะไหล่ :  <span class="text-danger">'.$row['spare_id'].'</span></div><br>';
        $view_detail_sp.='<center><table border="1" >';
        $view_detail_sp.='<tr><td>&nbsp;วันที่ซื้อ ล่าสุด :&nbsp;</td><td>&nbsp;<span class="text-danger">'.$row['buy_date'].'</span>&nbsp;</td></tr>';
        $view_detail_sp.='<tr><td>&nbsp;ชื่ออะไหล่ : &nbsp;</td><td>&nbsp;<span class="text-danger">'.$row['spare_name'].'</span></td></tr>';
        $view_detail_sp.='<tr><td>&nbsp;ราคา / ชิ้น : </td><td>&nbsp;<span class="text-danger">'.$row['spare_price'].'</span> บาท</td></tr>';
        $view_detail_sp.='<tr><td>&nbsp;คงเหลือ : </td><td>&nbsp;<span class="text-danger">'.$row['spare_remaining'].'</span> ชิ้น</td></tr>';
        $view_detail_sp.='</center></table>';
        
    }
    echo $view_detail_sp;
?>