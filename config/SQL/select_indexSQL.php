<?php 
    $csa = "SELECT COUNT(service_id) FROM tb_service_detail ";
    $csa = $conn->query($csa);
    $row_csa = mysqli_fetch_array($csa);


    $csa1 = "SELECT COUNT(service_id) FROM tb_service_detail WHERE  status = 'estimate'";
    $csa1 = $conn->query($csa1);
    $row_csa1 = mysqli_fetch_array($csa1);

    $csa2 = "SELECT COUNT(service_id) FROM tb_service_detail WHERE  status = 'being'";
    $csa2 = $conn->query($csa2);
    $row_csa2 = mysqli_fetch_array($csa2);

    $csa3 = "SELECT COUNT(service_id) FROM tb_service_detail WHERE  status = 'cancel'";
    $csa3 = $conn->query($csa3);
    $row_csa3 = mysqli_fetch_array($csa3);

    $cstd = "SELECT COUNT(service_id) FROM tb_service_detail WHERE  service_date = '".date('Y-m-d')."'";
    $cstd = $conn->query($cstd);
    $row_cstd = mysqli_fetch_array($cstd);

    $cstd1 = "SELECT COUNT(service_id) FROM tb_service_detail WHERE  service_date = '".date('Y-m-d')."' AND status = 'estimate'";
    $cstd1 = $conn->query($cstd1);
    $row_cstd1 = mysqli_fetch_array($cstd1);

    $cstd2 = "SELECT COUNT(service_id) FROM tb_service_detail WHERE  service_date = '".date('Y-m-d')."' AND status = 'being'";
    $cstd2 = $conn->query($cstd2);
    $row_cstd2 = mysqli_fetch_array($cstd2);

    $cstd3 = "SELECT COUNT(service_id) FROM tb_service_detail WHERE  service_date = '".date('Y-m-d')."' AND status = 'cancel'";
    $cstd3 = $conn->query($cstd3);
    $row_cstd3 = mysqli_fetch_array($cstd3);
?>