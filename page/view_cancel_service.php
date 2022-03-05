<?php
 if(!isset($_SESSION['id'])){ 
?>
<?php require_once 'src/layout/users/users_header.php'?>
<?php 
    $scd = "SELECT tb_service_detail.*,tb_status.status_name_th
            FROM tb_service_detail
            INNER JOIN tb_status
            ON tb_service_detail.status = tb_status.status_name_eng
            WHERE service_id = '".$_GET['id']."' AND status = 'cancel'";
    $scd = $conn->query($scd);
    $row_scd = mysqli_fetch_array($scd);
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
                                            <?php echo $row_scd['service_date']?></div>
                                    </div>
                                    <div class="row h5">
                                        <div class="col-md-6 text-right">วันที่ยกเลิกซ่อม</div>
                                        <div class="col-md-6 text-danger text-left">
                                            <?php echo $row_scd['service_end_date']?></div>
                                    </div>
                                    <div class="row h5">
                                        <div class="col-md-6 text-right">ชื่อผู้ส่งซ่อม</div>
                                        <div class="col-md-6 text-danger text-left">
                                            <?php echo $row2['frist_name'].' '.$row2['last_name']?></div>
                                    </div>
                                    <div class="row h5">
                                        <div class="col-md-6 text-right">อุปกรณ์ที่ส่งซ่อม</div>
                                        <div class="col-md-6 text-danger text-left">
                                            <?php echo $row_scd['computer_name']?></div>
                                    </div>
                                    <div class="row h5">
                                        <div class="col-md-6 text-right">เลขครุภัณฑ์/ซีเรียลนับเบอร์</div>
                                        <div class="col-md-6 text-danger text-left">
                                            <?php echo $row_scd['computer_code']?></div>
                                    </div>
                                    <div class="row h5">
                                        <div class="col-md-6 text-right">สถานะการซ่อม</div>
                                        <div class="col-md-6 text-left">
                                            <?php
                                                    if($row_scd['status'] == 'cancel'){
                                                        echo '<div class="text-danger"><i class="fas fa-times"></i> '.$row_scd['status_name_th'].'</div>';
                                                    }
                                                ?>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div class="h5">หมายเหตุ<span class="text-danger">*</span></div>
                                        <div class="h5 text-danger"><?php echo $row_scd['service_note']?></div>
                                    </div>
                                    <div class="text-center mt-5">
                                        <a href="service.php?status=cancel" class="btn btn-primary mr-3">ย้อนกลับ</a>        
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