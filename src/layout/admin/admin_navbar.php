<nav class="main-header navbar navbar-expand navbar-white navbar-light">
<ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <img src="assets/dist/img/CTC.png" alt="" >
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
      <p class="nav-link text-dark" >
              <img src="assets/dist/img/avatar/avatar2.png" alt="" class="brand-image img-circle elevation-0 mb-1" style="opacity: 1; width: 30px;">
              <span>ยินดีต้อนรับ คุณ.</span><span class="text-primary"> <?php echo  $row1['officer_fristname']; ?></span>
            </p>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="service.php?Home=<?php echo ('index_admin') ?>" class="brand-link bg-gradient-blue">
    <i class="fas fa-tools ml-3 "></i>
      <!-- <img src="assets/dist/img/favicon.ico" alt="" class="brand-image img-circle elevation-0" style="opacity: .8">-->
      <span class="brand-text font-weight-light ml-1">ระบบแจ้งซ่อม</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="avatar text-center mt-3">
        <img src="assets/dist/img/avatar/avatar2.png" class="brand-image img-circle elevation-3" alt="User Image" width="58px">
      </div>
      <div class="user-panel mt-1 text-center">
        <div class="info">
          <a href="#" class="d-block"><?php echo  $row1['officer_fristname'].' '.$row1['officer_lastname']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="service.php?Home=<?php echo ('index_admin') ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                หน้าหลัก
              </p>
            </a>
          </li>
          <li class="nav-header">รายการเมนู</li>
          <li class="nav-item">
            <li class="nav-item">
                <a href="service.php?show=<?php echo MD5('show_officer') ?>" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>เจ้าหน้าที่</p>
                </a>
              </li>
          </li>
          <li class="nav-item">
            <li class="nav-item">
                <a href="service.php?show=<?php echo MD5('show_user') ?>" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                  <p>ผู้ใช้งาน</p>
                </a>
              </li>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-toolbox"></i>
              <p>
                อะไหล่
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="service.php?show=<?php echo MD5('show_spare_part') ?>" class="nav-link">
                  <i class="fas fa-minus nav-icon"></i>
                  <p>รายการ อะไหล่</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="service.php?show=<?php echo MD5('show_list_spare_part') ?>" class="nav-link">
                  <i class="fas fa-minus nav-icon"></i>
                  <p>รายการเบิก</p>
                  <span class="badge badge-warning right"><?php echo $row_count_list_sp['COUNT(sp_list_id)']; ?> รายการ</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="service.php?show=<?php echo MD5('list_service') ?>" class="nav-link"> 
              <i class="nav-icon fas fa-tools"></i>
              <p>
                รายการซ่อม
              </p>
            </a>
          </li>
          <li class="nav-header">การจัดการ</li>
          <li class="nav-item">
            <a href="service.php?view=profile" class="nav-link ">
              <i class="nav-icon fas fa-user"></i>
              <p class="text">ข้อมูลส่วนตัว</p>
            </a>
            <li class="nav-item">
            <a href="#" class="nav-link ">
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