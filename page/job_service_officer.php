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
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card mt-3">
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <table id="example" class="display responsive nowrap" style="width:100%">
                                            <thead class="text-center">
                                                <tr>
                                                    <th>วันที่แจ้งซ่อม</th>
                                                    <th>ชื่อผู้แจ้งซ่อม</th>
                                                    <th>อุปกรณ์ที่ส่งซ่อม</th>
                                                    <th>สถานะการซ่อม</th>
                                                    <th>การจัดการ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if (mysqli_num_rows($result_job) >= 0) {
                                                    // output data of each row
                                                    while ($row = mysqli_fetch_assoc($result_job)) {
                                                ?>
                                                <tr class="text-center">
                                                    <td><?php echo $row['service_date'] ?></td>
                                                    <td><?php echo $row['frist_name'].' '.$row['last_name'] ?></td>
                                                    <td><?php echo $row['computer_name'] ?></td>
                                                    <?php
                                                    if($row['status_name_th'] == 'กำลังซ่อม'){
                                                        echo '<td class="text-primary"><i class="fas fa-cog fa-spin"></i> '.$row['status_name_th'].'</td>';
                                                    } else{
                                                        echo '<td class="text-warning"><i class="fas fa-spinner fa-spin"></i> '.$row['status_name_th'].'</td>';
                                                    }
                                                        ?>
                                                    <td class="text-center">
                                                        <a href="service.php?add=<?php echo MD5('job') ?>&id=<?php echo $row['service_id'] ?> " class="btn btn-primary">รับงานซ่อม</a>
                                                        <button type="button" class="btn btn-secondary view_data"
                                                            data-toggle="modal" data-target="#job_datail_modal"
                                                            id="<?php echo $row['service_id'] ?>">รายละเอียด</button>
                                                        
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
        <?php require_once 'src/layout/officer/officer_footer.php'?>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script>
        $(document).ready(function() {
            responsive: true
            $('#example').DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "ไม่พบข้อมูลการแจ้งซ่อม",
                    "info": "แสดง _START_ ถึง _END_ ของ _TOTAL_ รายการ",
                    "infoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
                    "infoFiltered": "(จาก รายการทั้งหมด _MAX_ total รายการ)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "แสดง _MENU_ รายการ",
                    "loadingRecords": "กำลังค้นหา...",
                    "processing": "กำลังค้นหา...",
                    "search": "ค้นหารายการ:",
                    "zeroRecords": "ไม่พบข้อมูลการแจ้งซ่อม",
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