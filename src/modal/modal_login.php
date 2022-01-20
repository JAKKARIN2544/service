<!-------------------------------------------- Modal login_admin --------------------------------------------------------->
<div class="modal fade modal-bg" id="modal-login-admin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <div class="row">
                    <h4 class="">เข้าสู่ระบบ <span style="color:#e17ffa;">ผู้ดูแลระบบ</span></h4>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="username">ชื่อผู้ใช้งาน<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="username" placeholder="username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">รหัสผ่าน<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="password">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-admin">เข้าสู่ระบบ</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-------------------------------------------- Modal login_officer --------------------------------------------------------->
<div class="modal fade modal-bg" id="modal-login-officer" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <div class="row">
                    <h4 class="">เข้าสู่ระบบ <span style="color:#faa55f;">เจ้าหน้าที่</span></h4>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="username">ชื่อผู้ใช้งาน<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">
                                <option selected disabled>เลือกชื่อผู้ใช้งาน</option>
                                <option value="1">user One</option>
                                <option value="2">user Two</option>
                                <option value="3">user Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">รหัสผ่าน<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="password">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-officer">เข้าสู่ระบบ</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-------------------------------------------- Modal login_users --------------------------------------------------------->
<div class="modal fade modal-bg" id="modal-login-users" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <div class="row">
                    <h4 class="">เข้าสู่ระบบ <span style="color:#69a4fc;">ผู้ใช้งาน</span></h4>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="username">รหัสประจำตัว<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="username" placeholder="รหัสประจำตัว">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">รหัสผ่าน<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <a class="text-warning mr-3" data-toggle="modal" href="#modal-register">สมัครสมาชิก</a>
                <button type="button" class="btn btn-success">เข้าสู่ระบบ</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-------------------------------------------- Modal register --------------------------------------------------------->
<div class="modal fade modal-bg" id="modal-register" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <div class="row">
                    <h4 class="">สมัครสมาชิก</h4>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>รหัสประจำตัว<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="id_card" placeholder="รหัสประจำตัว">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>อีเมล<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="email"
                                        placeholder="service@example.com">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ชื่อ<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="id_card" placeholder="ชื่อ">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>นามสกุล<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="text"
                                        placeholder="นามสกุล">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>รหัสผ่าน<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน">
                                    <small class="text-danger">***รหัสผ่านต้องประกอบด้วย ตัวอักษรภาษาอังกฤษ ตัวพิมพ์ใหญ่
                                        ตัวพิมพ์เล็ก และตัวเลข A-Z a-z 0-9 เป็นต้น</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>รหัสผ่าน<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name="con-password"
                                        placeholder="ยืนยัน รหัสผ่าน">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>ระดับชั้น<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected disabled>เลือกระดับชั้น</option>
                                        <option value="1">ปวช.1</option>
                                        <option value="2">ปวช.2</option>
                                        <option value="3">ปวช.3</option>
                                        <option value="4">ปวส.1</option>
                                        <option value="5">ปวส.2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>แผนก<span class="text-danger">*</span></label>
                                <select class="custom-select" id="" name="">
                                    <option selected disabled>กรุณาเลือกแผนก</option>
                                    <?php
                                    if (mysqli_num_rows($result) > 1) {
                                        // output data of each row
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <option value="<?php echo $row['dep_name'] ?>"><?php echo $row['dep_name'] ?></option>
                                    <?php
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>เบอร์โทรศัพท์<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="phone"
                                        placeholder="เบอร์โทรศัพท์">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">สมัครสมาชิก</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>