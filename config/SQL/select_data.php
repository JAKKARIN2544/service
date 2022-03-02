<?php
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
$query_users = "SELECT tb_login.id,tb_users.*
                        FROM tb_login
                        INNER JOIN tb_users
                        ON tb_login.id  = tb_users.user_id 
                        WHERE  tb_users.user_id = '".$_SESSION['id']."'";
        $query_users = $conn->query($query_users);
        $row2=mysqli_fetch_array($query_users);
        

$sql1 = "SELECT tb_service_detail.service_date,tb_service_detail.computer_name,tb_service_detail.malfunction,
        tb_officer.officer_fristname,tb_officer.officer_lastname,tb_status.status_name_th,tb_service_detail.officer_id
        FROM tb_service_detail 
        LEFT JOIN tb_officer
        ON tb_service_detail.officer_id = tb_officer.officer_id
        INNER JOIN tb_status
        ON tb_service_detail.status = tb_status.status_name_eng
        WHERE user_id = '".$_SESSION['id']."' AND status = 'being' OR status = 'estimate'";
$result1 = mysqli_query($conn, $sql1);

$sql2 = "SELECT tb_service_detail.service_date,tb_service_detail.computer_name,tb_service_detail.malfunction,
        tb_officer.officer_fristname,tb_officer.officer_lastname,tb_status.status_name_th,tb_service_detail.service_end_date
        FROM tb_service_detail 
        LEFT JOIN tb_officer
        ON tb_service_detail.officer_id = tb_officer.officer_id
        INNER JOIN tb_status
        ON tb_service_detail.status = tb_status.status_name_eng
        WHERE user_id = '".$_SESSION['id']."' AND status = 'success'";
$result2 = mysqli_query($conn, $sql2);

$sql3 = "SELECT tb_service_detail.service_date,tb_service_detail.computer_name,tb_service_detail.malfunction,
        tb_officer.officer_fristname,tb_officer.officer_lastname,tb_status.status_name_th,tb_service_detail.service_end_date
        FROM tb_service_detail 
        LEFT JOIN tb_officer
        ON tb_service_detail.officer_id = tb_officer.officer_id
        INNER JOIN tb_status
        ON tb_service_detail.status = tb_status.status_name_eng
        WHERE user_id = '".$_SESSION['id']."' AND status = 'cancel'";
$result3 = mysqli_query($conn, $sql3);

//---------------------------------------------------------------------------------
$cus1 = "SELECT COUNT(service_id) FROM tb_service_detail WHERE  user_id = '".$_SESSION['id']."' AND status = 'being'";
$cus1 = $conn->query($cus1);
$row_cus1 = mysqli_fetch_array($cus1);

//---------------------------------------------------------------------------------
$cus2 = "SELECT COUNT(service_id) FROM tb_service_detail WHERE  user_id = '".$_SESSION['id']."' AND status = 'cancel'";
$cus2 = $conn->query($cus2);
$row_cus2 = mysqli_fetch_array($cus2);

//---------------------------------------------------------------------------------
$cus3 = "SELECT COUNT(service_id) FROM tb_service_detail WHERE  user_id = '".$_SESSION['id']."' AND status = 'success'";
$cus3 = $conn->query($cus3);
$row_cus3 = mysqli_fetch_array($cus3);

//---------------------------------------------------------------------------------
$cus4 = "SELECT COUNT(service_id) FROM tb_service_detail WHERE  user_id = '".$_SESSION['id']."' AND status = 'estimate'";
$cus4 = $conn->query($cus4);
$row_cus4 = mysqli_fetch_array($cus4);

//---------------------------------------------------------------------------------
$cau = "SELECT COUNT(service_id) FROM tb_service_detail WHERE  user_id = '".$_SESSION['id']."'";
$cau = $conn->query($cau);
$row_cau = mysqli_fetch_array($cau);
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
?>