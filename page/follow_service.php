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
                                                    <th>อุปกรณ์ที่ส่งซ่อม</th>
                                                    <th>รับซ่อมโดย</th>
                                                    <th>สถานะการซ่อม</th>
                                                    <th>การจัดการ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if (mysqli_num_rows($result1) >= 0) {
                                                    // output data of each row
                                                    while ($row1 = mysqli_fetch_assoc($result1)) {
                                                ?>
                                                <tr class="text-center">
                                                    <td><?php echo $row1['service_date'] ?></td>
                                                    <td><?php echo $row1['computer_name'] ?></td>
                                                    <?php 
                                                    if($row1['officer_id'] == ''){
                                                        echo '<td>รอดำเนินการ</td>';
                                                    }else{
                                                        echo '<td>'.$row1['officer_fristname'].''.$row1['officer_lastname'].'</td>';
                                                    }
                                                    ?>
                                                    <?php
                                                    if($row1['status_name_th'] == 'กำลังซ่อม'){
                                                        echo '<td class="text-primary"><i class="fas fa-cog fa-spin"></i> '.$row1['status_name_th'].'</td>';
                                                    } else{
                                                        echo '<td class="text-warning"><i class="fas fa-spinner fa-spin"></i> '.$row1['status_name_th'].'</td>';
                                                    }
                                                        ?>
                                                    <td class="text-center">
                                                        <?php 
                                                        if($row1['status_name_th'] == 'ประเมินการซ่อม'){
                                                           echo '<a href="service.php?detail=view-service&id='.$row1['service_id'].'" class="btn btn-success mr-2">ตรวจสอบ</a>';
                                                           echo '<a href="service.php?action=confrim-delete-service&id='.$row1['service_id'].'" class="btn btn-danger">ลบรายการ</a>';
                                                        }else if($row1['status_name_th'] == 'กำลังซ่อม'){
                                                           echo '<a href="service.php?detail=view-service&id='.$row1['service_id'].'" class="btn btn-success mr-2">ตรวจสอบ</a>';
                                                           echo '<a href="service.php?action=confrim-delete-service&id='.$row1['service_id'].'" class="btn btn-danger disabled">ลบรายการ</a>';
                                                        }else if($row1['status_name_th'] == 'ซ่อมสำเร็จ'){
                                                            echo '<a href="service.php?detail=view-service&id='.$row1['service_id'].'" class="btn btn-success mr-2">ตรวจสอบ</a>';
                                                            echo '<a href="service.php?action=confrim-delete-service&id='.$row1['service_id'].'" class="btn btn-danger disabled">ลบรายการ</a>';
                                                         }
                                                        ?>
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
        <?php require_once 'src/layout/users/users_footer.php'?>
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