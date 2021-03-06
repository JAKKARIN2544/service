<?php
 if(!isset($_SESSION['id'])){ 
?>
<?php require_once 'src/layout/admin/admin_header.php'?>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php require_once 'src/layout/admin/admin_navbar.php'?>
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
                            <div class="small-box bgadmin1">
                                <div class="inner">
                                    <h3><?php echo $row_count_service['COUNT(service_id)']; ?><sup style="font-size: 20px"> รายการ</sup></h3>

                                    <p>แจ้งซ่อม</p>
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
                            <div class="small-box bgadmin2">
                                <div class="inner">
                                    <h3><?php echo $row_count_list_sp['COUNT(sp_list_id)']; ?><sup style="font-size: 20px"> รายการ</sup></h3>
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
                            <div class="small-box bgadmin3">
                                <div class="inner">
                                    <h3><?php echo $row_count_users['COUNT(user_id)']; ?><sup style="font-size: 20px"> คน</sup></h3>
                                    <p>ยูสเซอร์ ทั้งหมด</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <a href="service.php?show=<?php echo MD5('show_user') ?>" class="small-box-footer">เพิ่มเติม <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bgadmin4">
                                <div class="inner">
                                    <h3><?php echo $row_count_officer['COUNT(officer_id)']; ?><sup style="font-size: 20px"> คน</sup></h3>
                                    <p>เจ้าหน้าที่ ทั้งหมด</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user"></i>
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
                        <section class="col-lg-6 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-chart-pie mr-1"></i>
                                        รายงานสถานะการซ่อม
                                    </h3>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <canvas id="myChart" width="auto" height="auto"></canvas>
                                    </div>
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-6 connectedSortable">
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
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-6 connectedSortable">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-chart-pie mr-1"></i>
                                        รายการเบิกไหล่
                                    </h3>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                <div class="tab-content p-0">
                                <canvas id="myChart4" width="auto" height="auto"></canvas>
                                    </div>
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                        <section class="col-lg-6 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-chart-pie mr-1"></i>
                                        กราฟรายการอะไหล่
                                    </h3>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <canvas id="myChart3" width="auto" height="auto"></canvas>
                                    </div>
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <!-- right col -->
                    </div>
                    <div class="row chart">
                        <!-- Left col -->
                        <section class="col-md-12">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-chart-pie mr-1"></i>
                                        รายงานการแจ้งซ่อม
                                    </h3>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <canvas id="myChart2" width="auto" height="auto"></canvas>
                                    </div>
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.Left col -->
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php require_once 'src/layout/admin/admin_footer.php'?>
<?php
}else{
    echo'<script> 
            window.location.href = "../index.php";
        </script>';
}
?>
