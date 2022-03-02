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
                        <div class="col-lg-0"></div>
                        <section class="col-lg-12 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header bg-white text-center">
                                    <h4 class="mt-1">
                                        <i class="fas fa-list-alt mr-1"></i>
                                        แบบบันทึกการซ่อม
                                    </h4>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <form action="service.php?notify=<?php echo MD5('service') ?>" method="POST">
                                        <div class="row">
                                            <section class="col-lg-6">
                                                <div class="tab-content p-0">
                                                    <div class="row">
                                                        <div class="container">
                                                            <h5 class="mt-1 text-danger">วันที่แจ้งซ่อม</h5>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-3">
                                                        <label for="" class="col-sm-3 col-form-label">วันที่</label>
                                                        <div class="col-sm-8">
                                                            <input type="date" class="form-control" name="date"  value="" required >

                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-3">
                                                        <label for=""
                                                            class="col-sm-3 col-form-label">ความเร่งด่วน<span class="text-danger">*</span></label>
                                                        <div class="col-sm-8">
                                                            <select class="custom-select" name="urgency" required>
                                                                <option value="ปกติ"selected >ปกติ</option>
                                                                <option value="เร่งด่วน">เร่งด่วน</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="container">
                                                        <h5 class="mt-1 text-danger">ข้อมูลผู้แจ้งซ่อม</h5>
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-3">
                                                    <label for="" class="col-sm-3 col-form-label">ชื่อ -
                                                        สกุล</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="name" value="<?php echo  $row2['frist_name'].' '.$row2['last_name']; ?>" disabled>

                                                    </div>
                                                </div>
                                                <div class="form-group row mt-3">
                                                    <label for="" class="col-sm-3 col-form-label">รหัส</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="id_ldentification" value="<?php echo  $row2['id_ldentification']; ?>" disabled>

                                                    </div>
                                                </div>
                                                <div class="form-group row mt-3">
                                                    <label for="" class="col-sm-3 col-form-label">E-mail</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="email" value="<?php echo  $row2['email']; ?>" disabled>

                                                    </div>
                                                </div>
                                                <div class="form-group row mt-3">
                                                    <label for="" class="col-sm-3 col-form-label">ระดับชั้น</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" name="class" value="<?php echo  $row2['class']; ?>" disabled>

                                                    </div>
                                                </div>
                                                <div class="form-group row mt-3">
                                                    <label for="" class="col-sm-3 col-form-label">แผนก</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="department" value="<?php echo  $row2['department']; ?>" disabled>

                                                    </div>
                                                </div>
                                                <div class="form-group row mt-3">
                                                    <label for="" class="col-sm-3 col-form-label">เบอร์โทรศัพท์</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="phone" value="<?php echo  $row2['phone']; ?>" disabled>

                                                    </div>
                                                </div>

                                            </section>
                                            <section class="col-lg-6">
                                                <div class="row">
                                                    <div class="container">
                                                        <h5 class="mt-1 text-danger">ข้อมูลอุปกรณ์</h5>
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-3">
                                                    <label for="" class="col-sm-3 col-form-label">ชื่อ อุปกรณ์<span class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="computer_name" required>

                                                    </div>
                                                </div>
                                                <div class="form-group row mt-3">
                                                    <label for="" class="col-sm-3 col-form-label">ยี่ห้ออุปกรณ์<span class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="computer_brand" required>

                                                    </div>
                                                </div>
                                                <div class="form-group row mt-3">
                                                    <label for=""
                                                        class="col-sm-3 col-form-label">ซีเรียลนัมเบอร์<span class="text-danger">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" name="computer_code" required>

                                                    </div>
                                                </div>
                                                <div class="form-group row mt-3">
                                                    <label for="" class="col-sm-3 col-form-label">อาการชำรุด<span class="text-danger">*</span></label>
                                                    <div class="col-sm-6">
                                                    <select class="custom-select" name="malfunction">
                                                                <option value="เปิดไม่ติด"selected >เปิดไม่ติด</option>
                                                                <option value="ไฟไม่เข้า">ชาจไฟไม่เข้า</option>
                                                                <option value="อื่นๆ">อื่นๆ</option>
                                                            </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-3">
                                                    <label for=""
                                                        class="col-sm-12 col-form-label">รายละเอียดอาการชำรุด<span class="text-danger">*</span></label>
                                                    <div class="col-sm-12">
                                                        <textarea class="form-control" name="malfunction_datail" rows="5" required></textarea>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-4">
                                                <div class="text-center">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-block">บันทึกการซ่อม</button>
                                                </div>
                                            </div>
                                            <div class="col-md-4"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.card -->
                        </section>
                        <div class="col-lg-0"></div>
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