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
                        <section class="col-lg-12 connectedSortable">
                            <div class="card card-primary card-tabs">
                                <div class="card-header p-0 pt-1">
                                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                                href="#custom-tabs-one-home" role="tab"
                                                aria-controls="custom-tabs-one-home" aria-selected="true"><i
                                                    class="fas fa-book"></i> รายงานทั้งหมด</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                                href="#custom-tabs-one-profile" role="tab"
                                                aria-controls="custom-tabs-one-profile" aria-selected="false"><i
                                                    class="fas fa-book"></i> รายงานประจำวัน</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                                                href="#custom-tabs-one-messages" role="tab"
                                                aria-controls="custom-tabs-one-messages" aria-selected="false"><i
                                                    class="fas fa-book"></i> รายงานการซ่อม</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-one-tabContent">
                                        <div class="tab-pane fade show active mt-5" id="custom-tabs-one-home" role="tabpanel"
                                            aria-labelledby="custom-tabs-one-home-tab">
                                            <table id="example1" class="display responsive nowrap" style="width:100%">
                                                <thead class="text-center">
                                                    <tr>
                                                        <th>ลำดับ</th>
                                                        <th>หมายเลขรายงาน</th>
                                                        <th>ชื่อรายงาน</th>
                                                        <th>การส่งออก</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>1</td>
                                                        <td>REPORTALL1</td>
                                                        <td>รายงานการซ่อมทั้งหมด.pdf</td>
                                                        <td>
                                                            <a href="service.php?export=report-all1" target="_blank" class="btn btn-success"><i class="fas fa-print"></i> พิมพ์</a>
                                                            <a href="src/pdf/รายงานการแจ้งซ่อมทั้งหมด.pdf" class="btn btn-warning" download><i class="fas fa-cloud-download-alt"></i> ดาวน์โหลด</a>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-center">
                                                        <td>2</td>
                                                        <td>REPORTALL2</td>
                                                        <td>รายงานการซ่อมทั้งเดือน.pdf</td>
                                                        <td>
                                                            <a href="service.php?export=report-all2" target="_blank" class="btn btn-success"><i class="fas fa-print"></i> พิมพ์</a>
                                                            <a href="src/pdf/รายงานการซ่อมทั้งเดือน.pdf" class="btn btn-warning"><i class="fas fa-cloud-download-alt"></i> ดาวน์โหลด</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade mt-5" id="custom-tabs-one-profile" role="tabpanel"
                                            aria-labelledby="custom-tabs-one-profile-tab">
                                            <table id="example2" class="display responsive nowrap" style="width:100%">
                                                <thead class="text-center">
                                                    <tr>
                                                        <th>ลำดับ</th>
                                                        <th>หมายเลขรายงาน</th>
                                                        <th>ชื่อรายงาน</th>
                                                        <th>การส่งออก</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>1</td>
                                                        <td>REPORTTODAY1</td>
                                                        <td>รายงานการส่งซ่อมวันนี้.pdf</td>
                                                        <td>
                                                            <a href="service.php?export=report-today1" class="btn btn-success" target="_blank"><i class="fas fa-print"></i> พิมพ์</a>
                                                            <a href="src/pdf/รายงานการส่งซ่อมวันนี้.pdf" class="btn btn-warning"><i class="fas fa-cloud-download-alt"></i> ดาวน์โหลด</a>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-center">
                                                        <td>2</td>
                                                        <td>REPORTTODAY2</td>
                                                        <td>รายงานซ่อมกำลังซ่อมวันนี้.pdf</td>
                                                        <td>
                                                            <a href="service.php?export=report-today2" class="btn btn-success" target="_blank"><i class="fas fa-print"></i> พิมพ์</a>
                                                            <a href="src/pdf/รายงานกำลังซ่อมวันนี้.pdf" class="btn btn-warning"><i class="fas fa-cloud-download-alt"></i> ดาวน์โหลด</a>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-center">
                                                        <td>3</td>
                                                        <td>REPORTTODAY3</td>
                                                        <td>รายงานซ่อมสำเร็จวันนี้.pdf</td>
                                                        <td>
                                                            <a href="service.php?export=report-today3" class="btn btn-success" target="_blank"><i class="fas fa-print"></i> พิมพ์</a>
                                                            <a href="src/pdf/รายงานซ่อมสำเร็จวันนี้.pdf" class="btn btn-warning"><i class="fas fa-cloud-download-alt"></i> ดาวน์โหลด</a>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-center">
                                                        <td>4</td>
                                                        <td>REPORTTODAY4</td>
                                                        <td>รายงานยกเลิกซ่อมวันนี้.pdf</td>
                                                        <td>
                                                            <a href="service.php?export=report-today4" class="btn btn-success" target="_blank"><i class="fas fa-print"></i> พิมพ์</a>
                                                            <a href="src/pdf/รายงานยกเลิกซ่อมวันนี้.pdf" class="btn btn-warning"><i class="fas fa-cloud-download-alt"></i> ดาวน์โหลด</a>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade mt-5" id="custom-tabs-one-messages" role="tabpanel"
                                            aria-labelledby="custom-tabs-one-messages-tab">
                                            <table id="example3" class="display responsive nowrap" style="width:100%">
                                                <thead class="text-center">
                                                    <tr>
                                                        <th>ลำดับ</th>
                                                        <th>หมายเลขรายงาน</th>
                                                        <th>ชื่อรายงาน</th>
                                                        <th>การส่งออก</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>1</td>
                                                        <td>REPORTBEING</td>
                                                        <td>รายงานการซ่อมทั้งหมด.pdf</td>
                                                        <td>
                                                            <a href="service.php?export=report-being" class="btn btn-success" target="_blank"><i class="fas fa-print"></i> พิมพ์</a>
                                                            <a href="src/pdf/รายงานการซ่อมทั้งหมด.pdf" class="btn btn-warning"><i class="fas fa-cloud-download-alt"></i> ดาวน์โหลด</a>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-center">
                                                        <td>2</td>
                                                        <td>REPORTSUCCESS</td>
                                                        <td>รายงานการซ่อมสำเร็จทั้งหมด.pdf</td>
                                                        <td>
                                                            <a href="service.php?export=report-success" class="btn btn-success" target="_blank"><i class="fas fa-print"></i> พิมพ์</a>
                                                            <a href="src/pdf/รายงานการซ่อมสำเร็จทั้งหมด.pdf" class="btn btn-warning"><i class="fas fa-cloud-download-alt"></i> ดาวน์โหลด</a>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-center">
                                                        <td>3</td>
                                                        <td>REPORTCANCEL</td>
                                                        <td>รายงานการยกเลิกซ่อมทั้งหมด.pdf</td>
                                                        <td>
                                                            <a href="service.php?export=report-cancel" class="btn btn-success" target="_blank"><i class="fas fa-print"></i> พิมพ์</a>
                                                            <a href="src/pdf/รายงานการยกเลิกซ่อมทั้งหมด.pdf" class="btn btn-warning"><i class="fas fa-cloud-download-alt"></i> ดาวน์โหลด</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
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
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script>
        $(document).ready(function() {
            responsive: true
            $('#example1').DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "ไม่พบข้อมูล",
                    "info": "แสดง _START_ ถึง _END_ ของ _TOTAL_ รายการ",
                    "infoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
                    "infoFiltered": "(จาก รายการทั้งหมด _MAX_ total รายการ)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "แสดง _MENU_ รายการ",
                    "loadingRecords": "กำลังค้นหา...",
                    "processing": "กำลังค้นหา...",
                    "search": "ค้นหารายการ:",
                    "zeroRecords": "ไม่พบข้อมูล",
                    "paginate": {
                        "first": "หน้าแรก",
                        "last": "หน้าสุดท้าย",
                        "next": "ถัดไป",
                        "previous": "ย้อนกลับ"
                    },
                    "aria": {
                        "sortAscending": ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                }
            });
        });
        $(document).ready(function() {
            responsive: true
            $('#example2').DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "ไม่พบข้อมูล",
                    "info": "แสดง _START_ ถึง _END_ ของ _TOTAL_ รายการ",
                    "infoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
                    "infoFiltered": "(จาก รายการทั้งหมด _MAX_ total รายการ)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "แสดง _MENU_ รายการ",
                    "loadingRecords": "กำลังค้นหา...",
                    "processing": "กำลังค้นหา...",
                    "search": "ค้นหารายการ:",
                    "zeroRecords": "ไม่พบข้อมูล",
                    "paginate": {
                        "first": "หน้าแรก",
                        "last": "หน้าสุดท้าย",
                        "next": "ถัดไป",
                        "previous": "ย้อนกลับ"
                    },
                    "aria": {
                        "sortAscending": ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                }
            });
        });
        $(document).ready(function() {
            responsive: true
            $('#example3').DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "ไม่พบข้อมูล",
                    "info": "แสดง _START_ ถึง _END_ ของ _TOTAL_ รายการ",
                    "infoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
                    "infoFiltered": "(จาก รายการทั้งหมด _MAX_ total รายการ)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "แสดง _MENU_ รายการ",
                    "loadingRecords": "กำลังค้นหา...",
                    "processing": "กำลังค้นหา...",
                    "search": "ค้นหารายการ:",
                    "zeroRecords": "ไม่พบข้อมูล",
                    "paginate": {
                        "first": "หน้าแรก",
                        "last": "หน้าสุดท้าย",
                        "next": "ถัดไป",
                        "previous": "ย้อนกลับ"
                    },
                    "aria": {
                        "sortAscending": ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                }
            });

        });
        </script>
        <?php
}else{
    echo'<script> 
            window.location.href = "../index.php";
        </script>';
}
?>