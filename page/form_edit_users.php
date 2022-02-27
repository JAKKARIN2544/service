<?php 
    if(empty($_GET['id'])){
        echo '<script type="text/javascript">
                                    Swal.fire({
                                        icon: "warning",                    
                                        title: "ไม่พบข้อมูลที่ต้องการแก้ไข",
                                        text: "ระบบกำลังนำท่านไป",
                                        showConfirmButton: false,
                                        timer: 3000
                                    }).then((result) => {
                                if (result.isDismissed) {
                                    window.history.back();
                                }
                            });
                        </script>';
    }else{
        include_once 'config/ConnectDB/connect.php';

        $users_id = $_GET['id'];
        //echo $users_id;
        $sql1 = "SELECT * FROM tb_users WHERE user_id = '".$users_id."'";                 
        $result1 = mysqli_query($conn,$sql1);
        $row = mysqli_fetch_array($result1);
    }
    
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
                                <div class="card-header bg-primary">
                                    <h4 class="text-center">
                                        <i class="fas fa-users mr-1"></i>
                                        แก้ไขข้อมูล ผู้ใช้งาน
                                    </h4>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <form action="service.php?edit=<?php echo MD5('edit_users') ?>" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $row['user_id']; ?>">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">รหัสประจำตัว<span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fas fa-id-card"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                name="id_ldentification"
                                                                value="<?php echo $row['id_ldentification']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Email<span class="text-danger">*</span></label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fas fa-envelope"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" name="email"
                                                                value="<?php echo $row['email']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">ชื่อ<span class="text-danger">*</span></label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fas fa-user"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" name="frist_name"
                                                                value="<?php echo $row['frist_name']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">นามสกุล<span class="text-danger">*</span></label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fas fa-user"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" name="last_name"
                                                                value="<?php echo $row['last_name']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">เบอร์โทรศัพท์<span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fas fa-phone"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" name="phone"
                                                                value="<?php echo $row['phone']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">ระดับชั้น<span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fas fa-level-up-alt"></i></span>
                                                            </div>
                                                            <select class="custom-select" name="class">
                                                                <option selected><?php echo $row['class']; ?></option>
                                                                <option value="ปวช.1">ปวช.1</option>
                                                                <option value="ปวช.2">ปวช.2</option>
                                                                <option value="ปวช.3">ปวช.3</option>
                                                                <option value="ปวส.1">ปวส.1</option>
                                                                <option value="ปวส.2">ปวส.2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>แผนก<span class="text-danger">*</span></label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fas fa-building"></i></span>
                                                            </div>
                                                            <select class="custom-select" name="department">
                                                                <option selected><?php echo $row['department']; ?>
                                                                </option>
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
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right mr-5 ml-5 mt-3">
                                                <button type="submit" class="btn btn-primary btn-block">แก้ไขข้อมูล
                                                    ผู้ใช้งาน</button>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- /.card-body -->
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
        <?php require_once 'src/layout/admin/admin_footer.php'?>