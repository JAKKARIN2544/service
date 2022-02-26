<?php
 if(!isset($_SESSION['id'])){ 
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
                        <div class="col-md-3"></div>
                        <section class="col-md-6 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header bg-primary">
                                    <h4 class="text-center">
                                        <i class="fas fa-tools mr-1"></i>
                                        เพิ่ม จำนวนคงเหลืออะไหล่
                                    </h4>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <form action="service.php?add=<?php echo MD5('remaining') ?>" method="POST">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">วันที่ ซื้ออะไหล่<span class="text-danger">*</span></label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                                            </div>
                                                            <input type="datetime-local" class="form-control" name="date_time">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">ชื่อ อะไหล่<span class="text-danger">*</span></label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-wrench"></i></span>
                                                            </div>
                                                            <select class="custom-select" name="name">
                                                                <option selected disabled>เลือก อะไหล่</option>
                                                                <?php
                                                                    if (mysqli_num_rows($query_data_spare_part) > 0) {
                                                                        // output data of each row
                                                                        while ($row = mysqli_fetch_assoc($query_data_spare_part)) {
                                                                    ?>
                                                                <option value="<?php echo $row['spare_id'] ?>">
                                                                    <?php echo $row['spare_name'] ?>
                                                                </option>
                                                                <?php
                                                                    }
                                                                } else {
                                                                    //echo "0 results";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">คงเหลือ / ชิ้น<span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-sticky-note"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" name="remaining" placeholder="คงเหลือ">
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="text-right mr-5 ml-5 mt-3">
                                            <button type="submit" class="btn btn-primary btn-block">เพิ่ม จำนวนคงเหลือ</button>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                        <div class="col-md-3"></div>
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php require_once 'src/layout/admin/admin_footer.php'?>
        <?php
}else{
    echo'<script> 
            window.location.href = "../index.php";
        </script>';
}
?>