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
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content  animate__bounceIn">
                <div class="container-fluid">
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <?php 
                                            if($row2['gender'] == 'ชาย'){
                                                    echo '<img src="assets/dist/img/avatar/avatar7.png" alt=""
                                                    class="brand-image img-circle elevation-0 mb-1"
                                                    style="opacity: 1; width: 150px;">';
                                            }else{
                                                echo '<img src="assets/dist/img/avatar/avatar3.png" alt=""
                                                class="brand-image img-circle elevation-0 mb-1"
                                                style="opacity: 1; width: 150px;">';
                                            }
                                        ?>
        
                                        <h2><?php echo  $row2['frist_name'].' '.$row2['last_name']; ?></h2>
                                        <h5><?php echo  $row2['user_level']; ?></h5>
                                        <p><?php echo  $row2['email']; ?></p>
                                        <p>Tel. <?php echo  $row2['phone']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="card">
                                <div class="card-body">
                                    <form action="service.php?update=<?php echo MD5('update_profile_users') ?>"
                                        method="POST" class="form-horizontal">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-2 col-form-label">ชื่อ - สกุล</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" name="frist_name"
                                                        value="<?php echo  $row2['frist_name']; ?>">
                                                    <small>ชื่อ <small class="text-danger">*</small></small>
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" name="last_name"
                                                        value="<?php echo  $row2['last_name']; ?>">
                                                    <small>นามสกุล <small class="text-danger">*</small></small>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-2 col-form-label">E-mail</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="email"
                                                        value="<?php echo  $row2['email']; ?>">
                                                    <small>E-mail <small class="text-danger">*</small></small>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-2 col-form-label">เบอร์โทรศัพท์</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" name="phone"
                                                        value="<?php echo  $row2['phone']; ?>">
                                                    <small>เบอร์โทรศัพท์ <small class="text-danger">*</small></small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary ">แก้ไข ข้อมูลส่วนตัว</button>
                                        </div>
                                        <!-- /.card-footer -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php require_once 'src/layout/users/users_footer.php'?>