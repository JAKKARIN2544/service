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

        $officer_id = $_GET['id'];
        //echo $officer_id;
        $sql1 = "SELECT * FROM tb_officer WHERE officer_id = '".$officer_id."'";                 
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
                                <div class="card-header bg-primary text-center">
                                    <h4 class="mt-1">
                                        <i class="fas fa-users mr-1"></i>
                                        แก้ไขข้อมูล เจ้าหน้าที่
                                    </h4>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <form action="service.php?edit=<?php echo MD5('edit_officer') ?>" method="POST">
                                        <div class="row">
                                            <input type="hidden" name="id" value="<?php echo $row['officer_id']; ?>">
                                        </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Email<span class="text-danger">*</span></label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fas fa-envelope"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" name="email" value="<?php echo $row['officer_email']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">รหัสบัตรประชาชน 13 หลัก<span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fas fa-user"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" name="id_card" value="<?php echo $row['officer_id_card']; ?>">
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
                                                            <input type="text" class="form-control" name="fristname" value="<?php echo $row['officer_fristname']; ?>">
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
                                                            <input type="text" class="form-control" name="lastname" value="<?php echo $row['officer_lastname']; ?>">
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
                                                            <input type="text" class="form-control" name="phone" value="<?php echo $row['officer_phone']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">สถานะผู้ใช้งาน<span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fas fa-info"></i></span>
                                                            </div>
                                                            <select class="custom-select" name="level">
                                                                <option value="<?php echo $row['officer_level']; ?>" selected><?php echo $row['officer_level']; ?> </option>
                                                                <option class="text-danger" value="admin">ผู้ดูแลระบบ
                                                                </option>
                                                                <option class="text-info" value="officer">เจ้าหน้าที่
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right mr-5 ml-5 mt-3">
                                                <button type="submit" class="btn btn-primary btn-block">แก้ไขข้อมูล
                                                    เจ้าหน้าที่</button>
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