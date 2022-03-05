<?php
 if(!isset($_SESSION['id'])){ 
?>
<?php require_once 'src/layout/users/users_header.php'?>

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
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-6 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <div class="row">
                                            <h1>รายการซ่อมทั้งหมด <?php echo $row_cau['COUNT(service_id)'] ?> รายการ
                                            </h1>
                                        </div>
                                        <div class="row">
                                            <canvas id="myChart1" width="auto" height="auto"></canvas>
                                        </div>
                                    </div>
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-6 connectedSortable">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <div class="row mt-4">
                                            <div class="col-lg-6 col-6">
                                                <!-- small box -->
                                                <div class="small-box bgusers3">
                                                    <div class="inner">
                                                        <h3><?php echo $row_cus4['COUNT(service_id)'] ?><sup
                                                                style="font-size: 20px"> รายการ</sup></h3>

                                                        <p>รอประเมินการซ่อม</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fas fa-clipboard-list"></i>
                                                    </div>
                                                    <a class="small-box-footer"><br></a>
                                                </div>
                                            </div>
                                            <!-- ./col -->
                                            <div class="col-lg-6 col-6">
                                                <!-- small box -->
                                                <div class="small-box bgusers2">
                                                    <div class="inner">
                                                        <h3><?php echo $row_cus3['COUNT(service_id)'] ?><sup
                                                                style="font-size: 20px"> รายการ</sup></h3>
                                                        <p>ซ่อม สำเร็จ</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fas fa-tools"></i>
                                                    </div>
                                                    <a class="small-box-footer"><br></a>
                                                </div>
                                            </div>
                                            <!-- ./col -->
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-6">
                                                <!-- small box -->
                                                <div class="small-box bgusers1">
                                                    <div class="inner">
                                                        <h3><?php echo $row_cus1['COUNT(service_id)'] ?><sup
                                                                style="font-size: 20px"> รายการ</sup></h3>

                                                        <p>กำลังดำเนินการซ่อม</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fas fa-wrench"></i>
                                                    </div>
                                                    <a class="small-box-footer"><br></a>
                                                </div>
                                            </div>
                                            <!-- ./col -->
                                            <div class="col-lg-6 col-6">
                                                <!-- small box -->
                                                <div class="small-box bgusers4">
                                                    <div class="inner">
                                                        <h3><?php echo $row_cus2['COUNT(service_id)'] ?><sup
                                                                style="font-size: 20px"> รายการ</sup></h3>
                                                        <p>ยกเลิกการซ่อม</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fas fa-times"></i>
                                                    </div>
                                                    <a class="small-box-footer"><br></a>
                                                </div>
                                            </div>
                                            <!-- ./col -->
                                        </div>
                                        <!-- ./col -->
                                    </div>
                                </div>
                            </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
            </section>
            <section class="col-lg-12 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card">
                    <div class="card-body">
                    <div class="card-header">
                                รายการแจ้งซ่อม แต่ละเดือน
                            </div>
                        <div class="tab-content p-0">
                            <div class="row">
                                <canvas id="myChart2" width="500" height="100"></canvas>
                            </div>
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
    <?php require_once 'src/layout/users/users_footer.php'?>
    <?php require_once 'src/chart/user_chart.php'?>
    <?php
}else{
    echo'<script> 
            window.location.href = "../index.php";
        </script>';
}
?>