<!-- Header -->
<?php require_once 'src/layout/index/index_header.php'?>
<!-- /.Header -->
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php require_once 'src/layout/index/index_navbar.php'?>
            <!-- section-->
            <section class="animate__bounceIn py-3 mt-5">
                <div class="container px-5 my-4">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5">
                            <a data-toggle="modal" data-target="#modal-login-admin">
                            <div class="card h-100 shadow border-0 card-hover-admin">
                                <img class="hover-img" src="assets/dist/img/admin.png" alt="..." />
                            </div>
                            </a>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <a data-toggle="modal" data-target="#modal-login-officer">
                            <div class="card h-100 shadow border-0 card-hover-officer">
                                <img class="hover-img" src="assets/dist/img/officer.png" alt="..." />
                            </div>
                            </a>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <a data-toggle="modal" data-target="#modal-login-users">
                            <div class="card h-100 shadow border-0 card-hover-users">
                                <img class="hover-img" src="assets/dist/img/users.png" alt="..." />
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
  <!-- Footer -->
  <?php require_once 'src/layout/index/index_footer.php'?>
  <!-- .Footer -->
