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
                                        <div class="text-right">ค้นหาจากสถานะการแจ้งซ่อม: </div>
                                        <div class="text-right mb-3"><span class="text-success">รับซ่อม</span><span class="text-warning"> กำลังซ่อม</span>
                                        <span class="text-primary"> ประเมินอาการชำรุด</span><span class="text-danger"> ยกเลิกซ่อม</span></div>
                                            <thead class="text-center">
                                                <tr>
                                                    <th>รหัสการแจ้งซ่อม</th>
                                                    <th>วันที่แจ้งซ่อม</th>
                                                    <th>แจ้งซ่อมโดย</th>
                                                    <th>รับงานซ่อม โดย</th>
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
                                                    <td class="view_data_service" data-toggle="modal" data-target="#service_modal" id="<?php echo $row_list_service['service_id'] ?>"><a href="#"><?php echo $row_list_service['service_id'] ?></a></td>
                                                    <td><?php echo $row_list_service['service_date'] ?></td>
                                                    <td><?php echo $row_list_service['frist_name'].' '.$row_list_service['last_name'] ?></td>
                                                    <td><?php echo $row_list_service['officer_fristname'].' '.$row_list_service['officer_lastname'] ?></td>
                                                    <td class="text-center">
                                                        <button class="btn btn-success view_data_service" data-toggle="modal" data-target="#service_modal" id="<?php echo $row_list_service['service_id'] ?>"><i class="far fa-eye"></i></button>
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