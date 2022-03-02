<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <img src="assets/dist/img/CTC.png" alt="">
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <p class="nav-link text-dark">
                <img src="assets/dist/img/avatar/avatar7.png" alt="" class="brand-image img-circle elevation-0 mb-1"
                    style="opacity: 1; width: 30px;">
                <span>ยินดีต้อนรับ คุณ.</span><span class="text-primary"> <?php echo  $row2['frist_name']; ?></span>
            </p>
        </li>
    </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="service.php?Home=<?php echo ('index_users') ?>" class="brand-link bg-gradient-blue">
        <i class="fas fa-tools ml-3 "></i>
        <!-- <img src="assets/dist/img/favicon.ico" alt="" class="brand-image img-circle elevation-0" style="opacity: .8">-->
        <span class="brand-text font-weight-light ml-1">ระบบแจ้งซ่อม</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="avatar text-center mt-3">
            <img src="assets/dist/img/avatar/avatar7.png" class="brand-image img-circle elevation-3" alt="User Image"
                width="58px">
        </div>
        <div class="user-panel mt-1 text-center">
            <div class="info">
                <a href="service.php?view=profile_u" class="d-block"><?php echo  $row2['frist_name'].' '.$row2['last_name']; ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="service.php?Home=<?php echo ('index_users') ?>" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            หน้าหลัก
                        </p>
                    </a>
                </li>
                <li class="nav-header">รายการเมนู</li>
                <li class="nav-item">
                <li class="nav-item">
                    <a href="service.php?form=service" class="nav-link">
                        <i class="nav-icon fas fa-notes-medical"></i>
                        <p>แบบฟอร์มแจ้งซ่อม</p>
                    </a>
                </li>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            สถานะ การซ่อม
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="service.php?status=service" class="nav-link text-warning">
                                <i class="fas fa-tag nav-icon"></i>
                                <p>
                                    ติดตามการซ่อม

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <li class="nav-item">
                            <a href="service.php?status=success" class="nav-link text-success">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>ซ่อมสำเร็จ</p>
                            </a>
                        </li>
                </li>
                <li class="nav-item">
                <li class="nav-item">
                    <a href="service.php?status=cancel" class="nav-link text-danger">
                        <i class="fas fa-list-alt nav-icon"></i>
                        <p>ยกเลิกซ่อม</p>
                    </a>
                </li>
            </ul>
            </li>
            </li>
            <li class="nav-header">การจัดการ</li>
            <li class="nav-item">
                <a href="service.php?view=profile_u" class="nav-link ">
                    <i class="nav-icon fas fa-user"></i>
                    <p class="text">ข้อมูลส่วนตัว</p>
                </a>
            <li class="nav-item">
                <a href="service.php?reset=reset_users" class="nav-link ">
                    <i class="nav-icon fas fa-lock"></i>
                    <p class="text">เปลี่ยนรหัสผ่าน</p>
                </a>
            </li>
            </li>
            <li class="nav-item mt-3">
                <a href="service.php?logout=<?php echo MD5('logout') ?>" class="nav-link text-danger">
                    <i class="nav-icon fas fa-sign-out-alt "></i>
                    <p class="text">ออกจากระบบ</p>
                </a>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>