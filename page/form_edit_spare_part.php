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

        $sp_id = $_GET['id'];
        //echo $sp_id;
        $sql1 = "SELECT * FROM tb_spare_part WHERE spare_id = '".$sp_id."'";                 
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
                        <div class="col-md-3"></div>
                        <section class="col-md-6 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header bg-primary">
                                    <h1 class="card-title">
                                        <i class="fas fa-tools mr-1"></i>
                                        แก้ไขข้อมูล อะไหล่
                                    </h1>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <form action="service.php?edit=<?php echo MD5('edit_spare_part') ?>" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $row['spare_id'] ?>">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">ชื่อ อะไหล่<span class="text-danger">*</span></label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-wrench"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" name="name"
                                                                value="<?php echo $row['spare_name'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">ราคา อะไหล่/ชิ้น<span class="text-danger">*</span></label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-money-bill-alt"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" name="price"
                                                            value="<?php echo $row['spare_price'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="text-right mr-5 ml-5 mt-3">
                                            <button type="submit" class="btn btn-primary btn-block">แก้ไขข้อมูล อะไหล่</button>
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
