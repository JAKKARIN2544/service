<?php
 if(!empty($_GET['uid'])){
    
    ?>
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
                        <div class="col-md-5">
                            <div class="card mt-5">
                                <div class="text-center mt-3">
                                </div>
                                <div class="card-body">
                                    <form
                                        action="service.php?OTP=<?php echo MD5('check_OTP') ?>&uid=<?php echo $_GET['uid'] ?>"
                                        method="POST" class="form-horizontal">
                                        <div class="card-body">
                                            <div class="container">
                                                <div class="alert alert-bg alert-dismissible text-center">
                                                    <span class="ml-3"> กรอก OTP ที่ท่านได้รับ</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3"></div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" name="OTP"
                                                        placeholder="OTP">
                                                </div>
                                                <div class="col-sm-3"></div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">ขอรหัสผ่านใหม่</button>
                                        </div>
                                        <!-- /.card-footer -->
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
            </section>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php require_once 'src/layout/index/index_footer.php'?>
    <?php
}else{
    echo'<script> 
            window.location.href = "../index.php";
        </script>';
}
?>