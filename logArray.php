<?php
    include_once 'config/ConnectDB/connect.php';

        $year = date("Y");
        $month = date("M");
        $day = date("d");

        $query = "SELECT service_date, COUNT(service_id)
        FROM tb_service
        WHERE service_date LIKE '".$month."'
        GROUP BY service_date";

        $query = $conn->query($query);
        $row = mysqli_fetch_array($query);

        echo '<pre>';
        echo $row['service_date'];
        echo $row['COUNT(service_id)'];
        //print_r($query);
?>
