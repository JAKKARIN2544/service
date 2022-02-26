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
                            <h3 class="card-title">รายชื่อเจ้าหน้าที่</h3>

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
                                        <span class="info-box-icon bg-info"><i class="fas fa-user-shield"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">ผู้ดูแลระบบ</span>
                                            <span class="info-box-number">1,410 <small>คน</small></span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-success"><i class="fas fa-users-cog"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">เจ้าหน้าที่</span>
                                            <span class="info-box-number">410 <small>คน</small></span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
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
                                        <div class="row mb-2">
                                            <div class="col-md-10">
                                                <p class="text"><a class="btn btn-primary btn-lg"
                                                        href="service.php?add=<?php echo MD5('add_officer') ?>"><i
                                                            class="fas fa-user-plus"></i> เพิ่ม เจ้าหน้าที่</a></p>
                                            </div><!-- /.col -->
                                        </div>
                                        <table id="example" class="display responsive nowrap" style="width:100%">
                                            <thead class="text-center">
                                                <tr>
                                                    <th>รหัส เจ้าหน้าที่</th>
                                                    <th>email</th>
                                                    <th>ชื่อ</th>
                                                    <th>สกุล</th>
                                                    <th>เบอร์โทรศัพท์</th>
                                                    <th>สถานะ</th>
                                                    <th>การจัดการ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if (mysqli_num_rows($query_data_officer) >= 1) {
                                                    // output data of each row
                                                    while ($row_data_officer = mysqli_fetch_assoc($query_data_officer)) {
                                                ?>
                                                <tr>
                                                    <td class="text-center">
                                                        <?php echo $row_data_officer['officer_id'] ?></td>
                                                    <td><?php echo $row_data_officer['officer_email'] ?></td>
                                                    <td><?php echo $row_data_officer['officer_fristname'] ?></td>
                                                    <td><?php echo $row_data_officer['officer_lastname'] ?></td>
                                                    <td><?php echo $row_data_officer['officer_phone'] ?></td>
                                                    <?php if($row_data_officer['officer_level'] === "admin"){
                                                            echo '<td class="text-center text-danger"><i class="fas fa-user-shield mr-2"></i>'.$row_data_officer["officer_level"].'</td>';
                                                        }else{
                                                            echo '<td class="text-center text-secondary"><i class="fas fa-user-cog mr-2"></i>'.$row_data_officer["officer_level"].'</td>';
                                                        }
                                                    ?>
                                                    <td class="text-center">
                                                        <a class="btn btn-success" href=""><i class="far fa-eye"></i>
                                                            </a>
                                                        <a class="btn btn-warning" href=""><i class="fas fa-edit"></i>
                                                            </a>
                                                        <a class="btn btn-danger" href=""><i
                                                                class="fas fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                                <?php
                                                    }
                                                } else {
                                                    echo "0 results";
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