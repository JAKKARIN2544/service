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
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="card mt-2">
                                <div class="text-center mt-3">
                                    <h4><i class="fas fa-user-graduate"></i> สมัครสมาชิก </h4>
                                </div>
                                <div class="card-body">
                                    <form action="service.php?register=<?php echo MD5('reg_user') ?>" method="POST"
                                        class="form-horizontal">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-2 col-form-label">ชื่อ - สกุล</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" name="frist_name"
                                                        placeholder="">
                                                    <small>ชื่อ <small class="text-danger">*</small></small>
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" name="last_name"
                                                        placeholder="">
                                                    <small>นามสกุล <small class="text-danger">*</small></small>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-2 col-form-label">E-mail</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="email" id="email"
                                                        placeholder="">
                                                    <small>E-mail <small class="text-danger" id="msg_email">*</small></small>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-2 col-form-label">รหัสนักศึกษา</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" name="id_ldentification"
                                                        placeholder="">
                                                    <small>รหัสนักศึกษา <small class="text-danger">*</small></small>
                                                </div>
                                                <div class="col-sm-3">
                                                    <select class="custom-select" name="gender">
                                                        <option selected disabled></option>
                                                        <option value="ชาย">ชาย</option>
                                                        <option value="หญิง">หญิง</option>

                                                    </select>
                                                    <small>เพศ <small class="text-danger">*</small></small>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-2 col-form-label">รหัสผ่าน</label>
                                                <div class="col-sm-5">
                                                    <input type="password" class="form-control" name="password"
                                                        placeholder="">
                                                    <small>รหัสผ่าน <small class="text-danger">*</small></small>
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="password" class="form-control" name="con-password"
                                                        placeholder="">
                                                    <small>ยืนยัน รหัสผ่าน <small class="text-danger">*</small></small>
                                                </div>

                                                <div class="col-sm-2"></div>
                                                <div class="col-sm-10">
                                                    <small class="text-danger">***รหัสผ่านต้องประกอบด้วย
                                                        ตัวอักษรภาษาอังกฤษ ตัวพิมพ์ใหญ่
                                                        ตัวพิมพ์เล็ก และตัวเลข A-Z a-z 0-9 เป็นต้น</small>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-2 col-form-label">ระดับ - แผนก</label>
                                                <div class="col-sm-3">
                                                    <select class="custom-select" name="class">
                                                        <option selected disabled></option>
                                                        <option value="ปวช.1">ปวช.1</option>
                                                        <option value="ปวช.2">ปวช.2</option>
                                                        <option value="ปวช.3">ปวช.3</option>
                                                        <option value="ปวส.1">ปวส.1</option>
                                                        <option value="ปวส.2">ปวส.2</option>
                                                    </select>
                                                    <small>ระดับชั้น <small class="text-danger">*</small></small>
                                                </div>
                                                <div class="col-sm-7">
                                                    <select class="custom-select" name="department">
                                                        <option selected disabled></option>
                                                        <?php
                                                            if (mysqli_num_rows($query_department) > 1) {
                                                                    // output data of each row
                                                                    while ($row = mysqli_fetch_assoc($query_department)) {
                                                                ?>
                                                        <option value="<?php echo $row['dep_name'] ?>">
                                                            <?php echo $row['dep_name'] ?>
                                                        </option>
                                                        <?php
                                                                }
                                                            } else {
                                                                echo "0 results";
                                                            }
                                                            ?>
                                                    </select>
                                                    <small>แผนกวิชา <small class="text-danger">*</small></small>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-2 col-form-label">เบอร์โทรศัพท์</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" name="phone" placeholder="">
                                                    <small>เบอร์โทรศัพท์ <small class="text-danger">*</small></small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-lg">สมัครสมาชิก</button>
                                        </div>
                                        <!-- /.card-footer -->
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
            </section>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php require_once 'src/layout/index/index_footer.php'?>