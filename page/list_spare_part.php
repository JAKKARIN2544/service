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
                <div class="col-md-12">
                    <div class="card card-secondary collapsed-card">
                        <div class="card-header">
                            <h3 class="card-title">รายกาาร เบิกอะไหล่</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-info"><i class="fas fa-toolbox"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">เบิกอะไหล่ทั้งหมด</span>
                                            <span class="info-box-number">1,410 <small>ชิ้น</small></span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    
                                    <!-- /.info-box -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-info"><i class="fas fa-toolbox"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">เบิกอะไหล่วันนี้</span>
                                            <span class="info-box-number">1,410 <small>ชิ้น</small></span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    
                                    <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                                <!-- /.col -->
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <table id="example" class="display responsive nowrap" style="width:100%">
                                            <thead class="text-center">
                                                <tr>
                                                    <th>รหัส เบิกอะไหล่</th>
                                                    <th>วันที่เบิกอะไหล่</th>
                                                    <th>อะไหล่ที่เบิก</th>
                                                    <th>เจ้าหน้าที่ ที่เบิก</th>
                                                    <th>จำนวนที่เบิก / ชิ้น</th>
                                                    <th>การจัดการ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if (mysqli_num_rows($query_list_sp) >= 0) {
                                                    // output data of each row
                                                    while ($row_list_sp = mysqli_fetch_assoc($query_list_sp)) {
                                                ?>
                                                <tr class="text-center">
                                                    <td><?php echo $row_list_sp['sp_list_id'] ?></td>
                                                    <td><?php echo $row_list_sp['sp_list_date'] ?></td>
                                                    <td class="text-danger"><?php echo $row_list_sp['spare_name'] ?></td>
                                                    <td><?php echo $row_list_sp['officer_fristname'].' '.$row_list_sp['officer_lastname'] ?> </td>
                                                    <td><?php echo $row_list_sp['sp_list_total'] ?> ชิ้น</td>
                                                    <td class="text-center">
                                                        <a class="btn btn-success" href=""><i class="far fa-eye"></i></a>
                                                    </td>
                                                </tr>
                                                <?php
                                                    }
                                                } else {
                                                    //echo "0 results";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php require_once 'src/layout/admin/admin_footer.php'?>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script>
        $(document).ready(function() {
            responsive: true
            $('#example').DataTable({
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