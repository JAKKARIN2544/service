<?php 
require_once 'config/ConnectDB/connect.php';
    $query_list_sp =   "SELECT tb_spare_parts_list.sp_list_id, tb_spare_parts_list.sp_list_date, 
                        tb_spare_part.spare_name, tb_officer.officer_fristname, tb_officer.officer_lastname, tb_spare_parts_list.sp_list_total
                        FROM tb_spare_parts_list
                        INNER JOIN tb_spare_part
                        ON tb_spare_parts_list.spare_part_id  = tb_spare_part.spare_id
                        INNER JOIN tb_officer
                        ON tb_spare_parts_list.officer_id  = tb_officer.officer_id";
    $query_list_sp = $conn->query($query_list_sp);
    $row_list_sp = mysqli_fetch_array($query_list_sp);
    echo '<pre>';
    print_r($row_list_sp);
?>
