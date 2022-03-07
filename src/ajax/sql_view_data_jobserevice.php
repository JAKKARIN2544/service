<?php

$job_service_id = $_POST['id'];
//echo $officer_id;
$view_job = '';
// Create connection
require_once '../../config/ConnectDB/connect.php';
// Check connection
$sql = "SELECT tb_service_detail.*, tb_users.frist_name, tb_users.last_name
        FROM tb_service_detail
        INNER JOIN tb_users
        ON tb_service_detail.user_id = tb_users.user_id
        WHERE service_id = '{$job_service_id}'";
$result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        $view_job.= '<div class="text-center">รหัสแจ้งซ่อม :  <span class="text-danger">'.$row['service_id'].'</span></div><br>';
        $view_job.='<center><table border="1" >';
        $view_job.='<tr><td>&nbsp;วันที่แจ้งซ่อม :&nbsp;</td><td>&nbsp;<span class="text-danger">'.$row['service_date'].'</span>&nbsp;</td></tr>';
        $view_job.='<tr><td>&nbsp;ชื่อผู้แจ้งซ่อม : &nbsp;</td><td>&nbsp;<span class="text-danger">'.$row['frist_name'].' '.$row['last_name'].'</span>&nbsp;</td></tr>';
        $view_job.='<tr><td>&nbsp;อุปกรณ์ที่ส่งซ่อม : </td><td>&nbsp;<span class="text-danger">'.$row['computer_name'].'</span></td></tr>';
        $view_job.='<tr><td>&nbsp;ยีห้ออุปกรณ์ : </td><td>&nbsp;<span class="text-danger">'.$row['computer_brand'].'</span></td></tr>';
        $view_job.='<tr><td>&nbsp;ซีเรียลนัมเบอร์อุปกรณ์ : </td><td>&nbsp;<span class="text-danger">'.$row['computer_code'].'</span>&nbsp;</td></tr>';
        $view_job.='<tr><td>&nbsp;ความเร่งรีบ : </td><td>&nbsp;<span class="text-danger">'.$row['urgency'].'</span></td></tr>';
        $view_job.='<tr><td>&nbsp;รายละเอียดอาการชำรุด : </td><td>&nbsp;<span class="text-danger">'.$row['malfunction_datail'].'</span></td></tr>';
        $view_job.='<tr><td>&nbsp;ซีเรียลนัมเบอร์อุปกรณ์ : </td><td>&nbsp;<span class="text-danger">'.$row['computer_code'].'</span></td></tr>';
        $view_job.='</center></table>';
        $view_job.= '<div class="text-center mt-3"><img src="upload/'.$row['service_img'].'" width="200" height="180"></div>';
    }
    echo $view_job;
?>