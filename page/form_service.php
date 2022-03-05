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
                        <section class="col-lg-10 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header bg-primary text-center">
                                    <h4 class="mt-1">
                                        <i class="fas fa-list-alt mr-1"></i>
                                        แบบบันทึกการซ่อม
                                    </h4>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <form action="service.php?notify=<?php echo MD5('service') ?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="">วันที่แจ้งซ่อม<span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" placeholder="วันที่แจ้งซ่อม" value="<?php echo date('Y-d-m'); ?>" name="date" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">ความเร่งด่วน<span class="text-danger">*</span></label>
                                            <select class="form-control" name="urgency" value="ความเร่งด่วน" required>
                                                <option value="ปกติ">ปกติ</option>
                                                <option value="เร่งด่วน">เร่งด่วน</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">ชื่อ - สกุล ผู้แจ้งซ่อม<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control"
                                                placeholder="ชื่อ - สกุล ผู้แจ้งซ่อม"
                                                value="<?php echo $row2['frist_name'].' '.$row2['last_name']; ?>" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">อุปกรณ์ที่ส่งซ่อม<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"
                                                placeholder="อุปกรณ์ที่ส่งซ่อม เช่น คอมพิวเตอร์ โน็ตบุ๊ค" name="computer_name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">ยี่ห้อของอุปกรณ์<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="ยี่ห้อของอุปกรณ์" name="computer_brand" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">เลขครุภัณฑ์ หรือ ซีเรียลนับเบอร์ ของอุปกรณ์<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control"
                                                placeholder="ระบุ เลขครุภัณฑ์ หรือ ซีเรียลนับเบอร์ ของอุปกรณ์" name="computer_code" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">รายละเอียดอาการชำรุด<span class="text-danger">*</span></label>
                                            <textarea class="form-control" rows="2"
                                                placeholder="ระบุอาการชำรุดให้ชัดเจน" name="malfunction_datail" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">รูปภาพอุปกรณ์<span class="text-danger">*</span></label>
                                            <input type="file" class="form-control" accept="image/png,image/jpeg" name="image[]" required>
                                        </div>
                                        <div class="form-group mt-3">
                                        <button type="submit" class="btn btn-primary btn-block">บันทึกรายการแจ้งซ่อม</button>
                                        </div>
                                    </form>
                                </div>
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
        <?php
}else{
    echo'<script> 
            window.location.href = "../index.php";
        </script>';
}
?>