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
                                    <h4><i class="fas fa-lock"></i> เปลี่ยนรหัสผ่าน</h4>
                                </div>
                                <div class="card-body">
                                <form action="service.php?reset=<?php echo MD5('reset_pass_admin') ?>" method="POST" class="form-horizontal">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-3 col-form-label">รหัสผ่านเก่า</label>
                                                <div class="col-sm-8">
                                                    <input type="password" class="form-control" name="old_password" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-3 col-form-label">รหัสผ่าน ใหม่</label>
                                                <div class="col-sm-8">
                                                    <input type="password" class="form-control" name="new_password" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-3 col-form-label">รหัสผ่าน ใหม่</label>
                                                <div class="col-sm-8">
                                                    <input type="password" class="form-control" name="new_password2" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">เปลี่ยนรหัสผ่าน</button>
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
    <?php require_once 'src/layout/admin/admin_footer.php'?>