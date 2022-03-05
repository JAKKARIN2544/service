<?php require_once 'src/layout/index/index_header.php'?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php require_once 'src/layout/index/index_navbar.php'?>
        <!-- /.navbar -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content  animate__bounceIn">
                <div class="container-fluid">
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-barcode mr-1"></i>
                                        สรุปข้อมูลแจ้งซ่อม
                                    </h3>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="card bg1">
                                                    <div class="container ml-3 mr-3 mb-3">
                                                        <h3 class="mt-3 text-bg">รายการซ่อม</h3>
                                                        <h5 class="text-bg">รายการแจ้งซ่อมทั้งหมด</h5>
                                                        <h1 class="mt-5 mb-3 text-white "><?php echo $row_csa['COUNT(service_id)']?> รายการ</h1>
                                                        <span class="mr-3 text-dark text-bg"><i
                                                                class="fas fa-cog fa-spin"></i> ประเมินการซ่อม <?php echo $row_csa1['COUNT(service_id)']?>
                                                            รายการ</span>
                                                        <span class="mr-3 text-dark text-bg"><i
                                                                class="fas fa-cog fa-spin"></i> กำลังซ่อม <?php echo $row_csa2['COUNT(service_id)']?>
                                                            รายการ</span>
                                                        <span class="text-dark text-bg"><i
                                                                class="fas fa-cog fa-spin"></i> ยกเลิกซ่อม <?php echo $row_csa3['COUNT(service_id)']?>
                                                            รายการ</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="card bg2">
                                                    <div class="container ml-3 mr-3 mb-3">
                                                        <h3 class="mt-3 text-bg">รายการซ่อม วันนี้</h3>
                                                        <h5 class="text-bg">รายการแจ้งซ่อมวันที่
                                                            <?php echo date('d/m/Y');?></h5>
                                                        <h1 class="mt-4 mb-3 text-white"><?php echo $row_cstd['COUNT(service_id)']?> รายการ</h1>
                                                        <span class="mr-3 text-dark text-bg"><i
                                                                class="fas fa-cog fa-spin"></i> ประเมินการซ่อม <?php echo $row_cstd1['COUNT(service_id)']?>
                                                            รายการ</span>
                                                        <span class="mr-3 text-bg"><i class="fas fa-cog fa-spin"></i>
                                                            กำลังซ่อม <?php echo $row_cstd2['COUNT(service_id)']?> รายการ</span><br>
                                                        <span class="text-bg"><i class="fas fa-cog fa-spin"></i>
                                                            ยกเลิกซ่อม <?php echo $row_cstd3['COUNT(service_id)']?> รายการ</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.card-body -->
                        </section>
                    </div>
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-6 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                    <i class="fas fa-chart-bar mr-1"></i>
                                        กราฟข้อมูลแจ้งซ่อม
                                    </h3>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <canvas id="myChart1" width="auto" height="auto"></canvas>
                                    </div>
                                </div>
                            </div><!-- /.card-body -->
                        </section>
                        <section class="col-lg-6 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                    <i class="fas fa-chart-bar mr-1"></i>
                                        กราฟข้อมูลจำนวน สถานะผู้ใช้งาน
                                    </h3>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <canvas id="myChart2" width="auto" height="auto"></canvas>
                                    </div>
                                </div>
                            </div><!-- /.card-body -->
                        </section>
                    </div>
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                    <i class="fas fa-chart-bar mr-1"></i>
                                        กราฟข้อมูลแจ้งซ่อมแต่ละเดือน
                                    </h3>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <canvas id="myChart3" width="500" height="100"></canvas>
                                    </div>
                                </div>
                            </div><!-- /.card-body -->
                        </section>
                    </div>
                    <!-- /.card -->
            </section>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php require_once 'src/layout/index/index_footer.php'?>