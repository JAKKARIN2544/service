<?php
 if(!isset($_SESSION['id'])){ 
?>
<?php require_once 'src/layout/officer/officer_header.php'?>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php require_once 'src/layout/officer/officer_navbar.php'?>
        <!-- /.navbar -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bgofficer1">
                                <div class="inner">
                                    <h3>0<sup style="font-size: 20px"> รายการ</sup></h3>

                                    <p>งานที่รับซ่อม วันนี้</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-clipboard-list"></i>
                                </div>
                                <a href="service.php?show=<?php echo MD5('list_service') ?>" class="small-box-footer">เพิ่มเติม <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bgofficer4">
                                <div class="inner">
                                    <h3>0<sup style="font-size: 20px"> รายการ</sup></h3>
                                    <p>เบิกอะไหล่</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-toolbox"></i>
                                </div>
                                <a href="service.php?show=<?php echo MD5('show_list_spare_part') ?>" class="small-box-footer">เพิ่มเติม <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bgofficer3">
                                <div class="inner">
                                    <h3>0<sup style="font-size: 20px"> รายการ</sup></h3>
                                    <p>งานที่รับซ่อม ทั้งหมด</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-tools"></i>
                                </div>
                                <a href="service.php?show=<?php echo MD5('show_user') ?>" class="small-box-footer">เพิ่มเติม <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bgofficer2">
                                <div class="inner">
                                    <h3>0<sup style="font-size: 20px"> รายการ</sup></h3>
                                    <p>ซ่อมสำเร็จ ทั้งหมด</p>
                                </div>
                                <div class="icon">
                                <i class="fas fa-wrench"></i>
                                </div>
                                <a href="service.php?show=<?php echo MD5('show_officer') ?>" class="small-box-footer">เพิ่มเติม <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-5 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-chart-pie mr-1"></i>
                                        รายงานการซ่อม
                                    </h3>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <div class="row">
                                            <div class="col-md-8"><h5>รับงานซ่อม </h5></div>
                                            <div class="col-md-4"><h5>20 รายการ</h5></div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-8"><h5>กำลังซ่อม </h5></div>
                                            <div class="col-md-4"><h5>20 รายการ</h5></div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-8"><h5>ยกเลิกซ่อม </h5></div>
                                            <div class="col-md-4"><h5>20 รายการ</h5></div>
                                        </div>
                                    </div>
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-7 connectedSortable">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-chart-pie mr-1"></i>
                                        รายงานผู้ใช้งานในระบบ
                                    </h3>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                <div class="tab-content p-0">
                                <canvas id="myChart1" width="auto" height="auto"></canvas>
                                    </div>
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- right col -->
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php require_once 'src/layout/officer/officer_footer.php'?>
<?php
}else{
    echo'<script> 
            window.location.href = "../index.php";
        </script>';
}
?>
