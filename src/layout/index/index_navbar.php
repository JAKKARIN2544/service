<nav class="main-header navbar navbar-expand navbar-white navbar-light animate__bounceIn">
    <!-- Left navbar links -->
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
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"><i class="fas fa-info"></i> วิธีใช้งาน</a>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4  animate__bounceIn">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link bg-gradient-blue">
    <i class="fas fa-tools ml-3 "></i>
      <!-- <img src="assets/dist/img/favicon.ico" alt="" class="brand-image img-circle elevation-0" style="opacity: .8">-->
      <span class="brand-text font-weight-light ml-1">ระบบแจ้งซ่อม</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link ">
              <i class="nav-icon fas fa-home "></i>
              <p>
                หน้าหลัก
              </p>
            </a>
            <li class="nav-item">
            <a href="login.php" class="nav-link">
              <i class="nav-icon fas fa-key"></i>
              <p>
                เข้าสู่ระบบ
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="service.php?page=users" class="nav-link">
                  
                  <p class="ml-4 font-10"><i class="fas fa-users"></i> นักศึกษา</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="service.php?page=officer" class="nav-link">
                  
                  <p class="ml-4"><i class="fas fa-users-cog"></i> เจ้าหน้าที่</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="service.php?page=admin" class="nav-link">
                  
                  <p class="ml-4"><i class="fas fa-user-shield"></i> ผู้ดูแลระบบ</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">การใช้งาน</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                วิธีการใช้งาน
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                <i class="fas fa-eye nav-icon"></i>
                  <p>วิธีการใช้งาน</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                <i class="fas fa-download nav-icon"></i>
                  <p>Download วิธีการใช้งาน</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
                <a href="service.php?page=forgot_password" class="nav-link">
                <i class="fas fa-ellipsis-h nav-icon"></i>
                  <p>ลืมรหัสผ่าน</p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>