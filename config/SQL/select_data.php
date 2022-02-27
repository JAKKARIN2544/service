<?php
        $query_officer = "SELECT tb_login.id,tb_officer.*
                        FROM tb_login
                        INNER JOIN tb_officer
                        ON tb_login.id  = tb_officer.officer_id 
                        WHERE  tb_officer.officer_id = '".$_SESSION['id']."'";
        $query_officer = $conn->query($query_officer);
        $row1 = mysqli_fetch_array($query_officer);

//---------------------------------------------------------------------------------
$query_users = "SELECT tb_login.id,tb_users.*
                        FROM tb_login
                        INNER JOIN tb_users
                        ON tb_login.id  = tb_users.user_id 
                        WHERE  tb_users.user_id = '".$_SESSION['id']."'";
        $query_users = $conn->query($query_users);
        $row2=mysqli_fetch_array($query_users);
        
//---------------------------------------------------------------------------------
$query_data_officer = "SELECT * FROM tb_officer";
$query_data_officer = $conn->query($query_data_officer);

//---------------------------------------------------------------------------------
$query_data_users = "SELECT * FROM tb_users";
$query_data_users = $conn->query($query_data_users);

//---------------------------------------------------------------------------------
$query_data_spare_part = "SELECT * FROM tb_spare_part";
$query_data_spare_part = $conn->query($query_data_spare_part);

//---------------------------------------------------------------------------------
$count_list_sp = "SELECT COUNT(sp_list_id)  FROM tb_spare_parts_list";
        $count_list_sp = $conn->query($count_list_sp);
        $row_count_list_sp = mysqli_fetch_array($count_list_sp);

//---------------------------------------------------------------------------------
$query_list_sp = "SELECT tb_spare_parts_list.sp_list_id, tb_spare_parts_list.sp_list_date, 
                          tb_spare_part.spare_name, tb_officer.officer_fristname, tb_officer.officer_lastname, tb_spare_parts_list.sp_list_total
                        FROM tb_spare_parts_list
                        INNER JOIN tb_spare_part
                        ON tb_spare_parts_list.spare_part_id  = tb_spare_part.spare_id
                        INNER JOIN tb_officer
                        ON tb_spare_parts_list.officer_id  = tb_officer.officer_id";
        $query_list_sp = $conn->query($query_list_sp);

//---------------------------------------------------------------------------------
$query_accept_service = "SELECT * FROM tb_service WHERE service_status = ''";
$query_accept_service = $conn->query($query_accept_service);

//---------------------------------------------------------------------------------
$query_status_service = "SELECT * FROM tb_status";
$query_status_service = $conn->query($query_status_service);

//---------------------------------------------------------------------------------
$query_list_service =   "SELECT tb_service.service_id, tb_service.service_date, tb_users.frist_name, tb_users.last_name, 
                        tb_officer.officer_fristname, tb_officer.officer_lastname, tb_status.status_name_th
                        FROM tb_service
                        INNER JOIN tb_users
                        ON tb_service.user_id = tb_users.user_id
                        INNER JOIN tb_officer
                        ON tb_service.officer_id = tb_officer.officer_id
                        INNER JOIN tb_status
                        ON tb_service.service_status = tb_status.status_name_eng";
        $query_list_service = $conn->query($query_list_service);

//---------------------------------------------------------------------------------
$count_officer_A = "SELECT COUNT(officer_id)  FROM tb_officer WHERE officer_level = 'admin'";
        $count_officer_A = $conn->query($count_officer_A);
        $row_count_officer_A = mysqli_fetch_array($count_officer_A);

//---------------------------------------------------------------------------------
$count_officer_O = "SELECT COUNT(officer_id)  FROM tb_officer WHERE officer_level = 'officer'";
$count_officer_O = $conn->query($count_officer_O);
$row_count_officer_O = mysqli_fetch_array($count_officer_O);

//---------------------------------------------------------------------------------
$count_users = "SELECT COUNT(user_id)  FROM tb_users WHERE user_level = 'user'";
$count_users = $conn->query($count_users);
$row_count_users = mysqli_fetch_array($count_users);

//---------------------------------------------------------------------------------
$count_sp = "SELECT COUNT(spare_id)  FROM tb_spare_part ";
$count_sp = $conn->query($count_sp);
$row_count_sp = mysqli_fetch_array($count_sp);
?>