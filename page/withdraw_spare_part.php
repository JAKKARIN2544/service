<?php
 if(!isset($_SESSION['id'])){ 
?>
<?php require_once 'src/layout/officer/officer_header.php'?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php require_once 'src/layout/officer/officer_navbar.php'?>
        <!-- /.navbar -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card mt-3">
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <div class="row mb-3 ml-1">
                                            <h3>อะไหล่ทั้งหมดในระบบ</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-2">
                                                <div class="info-box bg-success">
                                                    <div class="info-box-content">
                                                        <span
                                                            class="info-box-text text-center text-white">อะไหล่ทั้งหมด</span>
                                                        <span
                                                            class="info-box-number text-center text-white mb-0"><?php echo $row_scsp['COUNT(spare_id)']?>
                                                            รายการ</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                require_once 'config/ConnectDB/connect.php';
                                                $sql = "SELECT * FROM tb_spare_part";
                                                $result = mysqli_query($conn, $sql);
                                                
                                                    if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                            <div class="col-12 col-sm-2">
                                                <div class="info-box bg-light">
                                                    <div class="info-box-content">
                                                        <span
                                                            class="info-box-text text-center text-dark"><?php echo $row['spare_name']?></span>
                                                        <span class="info-box-number text-center text-dark mb-0"><span
                                                                class="text-danger"><?php echo $row['spare_remaining']?></span>
                                                            ชิ้น</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                            }
                                                            } else {
                                                                //echo "0 results";
                                                            }
                                                        ?>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <div class="container text-center">
                                                    <div class="alert alert-bg alert-dismissible">
                                                        <h5><i class="icon fas fa-exclamation-triangle"></i> แนะนำ!</h5>
                                                        สามารถเบิกอะไหล่ได้ครั้งละ 1 รายการ เท่านั้น !!
                                                    </div>
                                                </div>
                                                <div class="mb-3 mt-3">
                                                    <form action="service.php?list=withdraw_sp" method="POST">
                                                        <div class="row text-center">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">รายการอะไหล่</label>
                                                                    <select class="form-control" id=""
                                                                        name="sp_name">
                                                                        <?php
                                                                    require_once 'config/ConnectDB/connect.php';
                                                                    $sql1 = "SELECT * FROM tb_spare_part";
                                                                    $result1 = mysqli_query($conn, $sql1);
                                                                    
                                                                        if (mysqli_num_rows($result1) > 0) {
                                                                            // output data of each row
                                                                        while ($row1 = mysqli_fetch_assoc($result1)) {
                                                                    ?>
                                                                        <option value="<?php echo $row1['spare_id']?>">
                                                                            <?php echo $row1['spare_name']?></option>
                                                                        <?php
                                                                                }
                                                                                } else {
                                                                                    //echo "0 results";
                                                                                }
                                                                            ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-6 mb-3">
                                                                <div class="form-group">
                                                                    <label for="">จำนวนที่ต้องการเบิก</label>
                                                                    <input type="number" class="form-control"
                                                                        placeholder="ระบุจำนวนที่ต้องการเบิก" name="sp_total">
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary btn-block">เบิกอะไหล่</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div>
                                    </div>
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php require_once 'src/layout/officer/officer_footer.php'?>
        <?php
}else{
    echo'<script> 
            window.location.href = "../index.php";
        </script>';
}
?>