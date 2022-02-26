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
                    <div class="mt-4 mb-3">
                        <div class="">
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group input-group-lg mb-3">
                                                <select class="custom-select" name="status">
                                                 <option selected disabled>เลือก</option>
                                                <?php
                                                    if (mysqli_num_rows($query_status_service) > 1) {
                                                        // output data of each row
                                                        while ($row = mysqli_fetch_assoc($query_status_service)) {
                                                    ?>
                                                            <option value="<?php echo $row['status_name_eng'] ?>">
                                                                <?php echo $row['status_name_th'] ?>
                                                            </option>
                                                    <?php
                                                        }
                                                    } else {
                                                        //echo "0 results";
                                                    }
                                                    ?>       
                                                </select>
                                                <button type="submit" class="btn btn-primary btn-lg ml-3">ค้นหา</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                            </form>
                        </div>
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
                                                    <th>รหัสการแจ้งซ่อม</th>
                                                    <th>วันที่แจ้งซ่อม</th>
                                                    <th>แจ้งซ่อมโดย</th>
                                                    <th>รับงานซ่อม โดย</th>
                                                    <th>สถานะการซ่อม</th>
                                                    <th>การจัดการ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if (mysqli_num_rows($query_list_service) >= 0) {
                                                    // output data of each row
                                                    while ($row_list_service = mysqli_fetch_assoc($query_list_service)) {
                                                ?>
                                                <tr class="text-center">
                                                    <td><?php echo $row_list_service['service_id'] ?></td>
                                                    <td><?php echo $row_list_service['service_date'] ?></td>
                                                    <td><?php echo $row_list_service['frist_name'].' '.$row_list_service['last_name'] ?></td>
                                                    <td><?php echo $row_list_service['officer_fristname'].' '.$row_list_service['officer_lastname'] ?></td>
                                                    <td><?php echo $row_list_service['status_name_th'] ?></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-success" href=""><i
                                                                class="far fa-eye"></i></a>
                                                        <a class="btn btn-secondary" href=""><i
                                                                class="fas fa-print"></i></a>
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