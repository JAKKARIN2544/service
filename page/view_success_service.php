<?php
 if(!isset($_SESSION['id'])){ 
?>
<?php require_once 'src/layout/users/users_header.php'?>
<?php 
    $ssd = "SELECT tb_service_detail.*,tb_users.*,tb_status.status_name_th
            FROM tb_service_detail
            INNER JOIN tb_status
            ON  tb_service_detail.status = tb_status.status_name_eng
            INNER JOIN tb_users
            ON  tb_service_detail.user_id = tb_users.user_id
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
                                <div class="row">
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-center mt-3">
                                            <h3>รายงานบันทึกการซ่อม</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-right mt-5 mr-3">
                                            <h5>SERVICE-<?php echo $row_ssd['service_id']?></h5>
                                            <span><?php echo $row_ssd['service_date']?></span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row ml-5">
                                    <div class="col-md-4">
                                        <h5>ข้อมูลผู้แจ้งซ่อม</h5>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4"></div>
                                </div>
                                <div class="row ml-3 mt-2">
                                    <div class="col-md-2 text-right"><span>ชื่อ - นามสกุล</span></div>
                                    <div class="col-md-4 text-left">
                                        <?php echo $row_ssd['frist_name'].' '.$row_ssd['last_name']?></div>
                                    <div class="col-md-4"></div>
                                </div>
                                <div class="row ml-3">
                                    <div class="col-md-2 text-right"><span>E-mail</span></div>
                                    <div class="col-md-4 text-left"><?php echo $row_ssd['email']?></div>
                                    <div class="col-md-4"></div>
                                </div>
                                <div class="row ml-3">
                                    <div class="col-md-2 text-right"><span>รหัสประจำตัว</span></div>
                                    <div class="col-md-4 text-left"><?php echo $row_ssd['id_ldentification']?></div>
                                    <div class="col-md-4"></div>
                                </div>
                                <div class="row ml-3">
                                    <div class="col-md-2 text-right"><span>ชั้น - แผนก</span></div>
                                    <div class="col-md-4 text-left">
                                        <?php echo $row_ssd['class'].' '.$row_ssd['department']?></div>
                                    <div class="col-md-4"></div>
                                </div>
                                <div class="row ml-3 mb-3">
                                    <div class="col-md-2 text-right"><span>เบอร์โทรศัพท์</span></div>
                                    <div class="col-md-4 text-left"><?php echo $row_ssd['phone']?></div>
                                    <div class="col-md-4"></div>
                                </div>
                                <div class="row text-left mt-3">
                                    <div class="col-md-4 ml-4">
                                    <h5>อุปกรณ์ที่ส่งซ่อม</h5>
                                    </div>
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                                <div class="row mr-2 ml-2">
                                    <div class="col-md-12">
                                    <table class="table table-striped text-left">
                                        <thead>
                                            <tr>
                                                <th scope="col">ชื่ออุปกรณ์</th>
                                                <th scope="col">จำนวน</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row_ssd['computer_name']?></td>
                                                <td>1 เครื่อง</td>
                                                <td scope="row"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>            
                                </div>
                                <hr>
                                <div class="row text-left mt-3">
                                    <div class="col-md-4 ml-4">
                                    <h5>อะไหล่ที่เบิกซ่อม</h5>
                                    </div>
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                                <div class="row mr-2 ml-2">
                                    <div class="col-md-12">
                                    <table class="table table-striped text-left">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">ชื่ออะไหล่</th>
                                                <th scope="col">จำนวนที่เบิก</th>
                                                <th scope="col">ราคา</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">1</td>   
                                                <td>แรม</td>
                                                <td>10 ชิ้น</td>
                                                <td>10 บาท</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>            
                                </div>
                                <div class="text-center mt-3 mb-5">
                                    <a href="service.php?status=success" class="btn btn-primary"><i class="fas fa-backward"></i> ย้อนกลับ</a>
                                    <a href="" class="btn btn-success"><i class="fas fa-print"></i> พิมพ์</a>
                                    <a href="" class="btn btn-warning"><i class="fas fa-cloud-download-alt"></i> ดาวน์โหลด</a>
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