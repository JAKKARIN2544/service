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
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="card mt-5">
                                <div class="text-center mt-3">
                                    <h4><i class="fas fa-user-graduate"></i> เข้าสู่ระบบ ผู้ใช้งาน</h4>
                                </div>
                                <div class="container"> 
                                <div class="alert alert-bg alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-exclamation-triangle"></i> แนะนำ!</h5>
                                    หากยังไม่มีบัญชีผู้ใช้งาน กดสมัครสมาชิกด้านล่าง !!
                                </div>
                                </div>
                                <div class="card-body">
                                    <form action="service.php?login=<?php echo MD5('login_user') ?>" method="POST">
                                        <div class="form-group">
                                            <label for="username">รหัสประจำตัว<span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="number" class="form-control" name="username"
                                                    placeholder="รหัสประจำตัว">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">รหัสผ่าน<span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                                </div>
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="รหัสผ่าน">
                                            </div>
                                        </div>
                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-primary mb-2"><i
                                                    class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ</button>
                                            <a href="service.php?page=register" class="btn btn-warning mb-2"><i
                                                    class="fas fa-user-plus"></i> สมัครสมาชิก</a><br>
                                            <a href="service.php?page=forgot_password" class="text-dark"><i
                                                    class="fas fa-lock-open"></i> ลืมรหัสผ่าน ??</a>
                                        </div>
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