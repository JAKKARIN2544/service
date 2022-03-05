<?php
 if(!isset($_SESSION['id'])){ 
?>
<?php require_once 'src/layout/users/users_header.php'?>
<?php 
    $ssd = "SELECT tb_service_detail.*,tb_status.status_name_th
            FROM tb_service_detail
            INNER JOIN tb_status
            ON  tb_service_detail.status = tb_status.status_name_eng
            WHERE  service_id = '".$_GET['id']."'";
    $ssd = $conn->query($ssd);
    $row_ssd = mysqli_fetch_array($ssd);
?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php require_once 'src/layout/users/users_navbar.php'?>
        <!-- /.navbar -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-8">
                            <h1 class="m-0 mb-2"></h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Left col -->
                        <div class="col-lg-1"></div>
                        <section class="col-lg-10 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="h3">รายละเอียดการซ่อม</div>
                                    <div class="row mt-5 h5">
                                        <div class="col-md-6 text-right">วันที่แจ้งซ่อม</div>
                                        <div class="col-md-6 text-danger text-left">
                                            <?php echo $row_ssd['service_date']?></div>
                                    </div>
                                    <div class="row h5">
                                        <div class="col-md-6 text-right">ชื่อผู้ส่งซ่อม</div>
                                        <div class="col-md-6 text-danger text-left">
                                            <?php echo $row2['frist_name'].''.$row2['last_name']?></div>
                                    </div>
                                    <div class="row h5">
                                        <div class="col-md-6 text-right">อุปกรณ์ที่ส่งซ่อม</div>
                                        <div class="col-md-6 text-danger text-left">
                                            <?php echo $row_ssd['computer_name']?></div>
                                    </div>
                                    <div class="row h5">
                                        <div class="col-md-6 text-right">เลขครุภัณฑ์/ซีเรียลนับเบอร์</div>
                                        <div class="col-md-6 text-danger text-left">
                                            <?php echo $row_ssd['computer_code']?></div>
                                    </div>
                                    <div class="row h5">
                                        <div class="col-md-6 text-right">สถานะการซ่อม</div>
                                        <div class="col-md-6 text-left">
                                            <?php
                                                    if($row_ssd['status_name_th'] == 'กำลังซ่อม'){
                                                        echo '<div class="text-primary"><i class="fas fa-cog fa-spin"></i> '.$row_ssd['status_name_th'].'</div>';
                                                    } else{
                                                        echo '<div class="text-warning"><i class="fas fa-spinner fa-spin"></i> '.$row_ssd['status_name_th'].'</div>';
                                                    }
                                                        ?>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <?php 
                                            if($row_ssd['status'] == 'estimate'){
                                              echo '<img src="assets/dist/img/status1.png" width="590" height="130">';  
                                            }else if($row_ssd['status'] == 'being'){
                                              echo '<img src="assets/dist/img/status2.png" width="590" height="130">';
                                            }else{
                                              echo '<img src="assets/dist/img/status3.png" width="590" height="130">';
                                            }
                                        ?>

                                    </div>
                                    <div class="text-center mt-3">
                                        <?php 
                                            if($row_ssd['status'] == 'estimate'){
                                                echo '<a href="service.php?status=service" class="btn btn-primary mr-3">ย้อนกลับ</a>';
                                                echo '<a href="service.php?action=confrim-delete-service&id='.$row_ssd['service_id'].'" class="btn btn-danger">ลบรายการ</a>';
                                            }else if($row_ssd['status'] == 'being'){
                                                echo '<a href="service.php?status=service" class="btn btn-primary mr-3">ย้อนกลับ</a>';
                                                echo '<a href="service.php?action=confrim-delete-service&id='.$row_ssd['service_id'].'" class="btn btn-danger disabled">ลบรายการ</a>';
                                            }else if($row_ssd['status'] == 'success'){
                                                echo '<a href="service.php?status=service" class="btn btn-primary mr-3">ย้อนกลับ</a>';
                                                echo '<a href="service.php?action=confrim-delete-service&id='.$row_ssd['service_id'].'" class="btn btn-danger disabled">ลบรายการ</a>';
                                            }
                                        ?>
                                    
                    
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </section>
                        <div class="col-lg-1"></div>
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php require_once 'src/layout/users/users_footer.php'?>
        <?php
}else{
    echo'<script> 
            window.location.href = "../index.php";
        </script>';
}
?>