<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/dist/css/index.css">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</head>

<body>
    <?php   
    if(empty($_POST['id_ldentification'])){
        echo '<script type="text/javascript">
                            Swal.fire({
                                icon: "warning",                    
                                title: "แจ้งเตือน",
                                text: "กรุณากรอกข้อมูล !!!",
                                showConfirmButton: false,
                                timer: 3000
                            }).then((result) => {
                                if (result.isDismissed) {
                                    window.history.back();
                                }
                            });
                    </script>';
    }else if(empty($_POST['id'])){
                    echo '<script type="text/javascript">
                        Swal.fire({
                            icon: "warning",                    
                            title: "แจ้งเตือน",
                            text: "กรุณากรอกข้อมูล !!!",
                            showConfirmButton: false,
                            timer: 3000
                    }).then((result) => {
                        if (result.isDismissed) {
                             window.history.back();
                        }
                    });
                </script>';
    }else if(empty($_POST['email'])){
        echo '<script type="text/javascript">
                            Swal.fire({
                                icon: "warning",                    
                                title: "แจ้งเตือน",
                                text: "กรุณากรอกข้อมูล !!!",
                                showConfirmButton: false,
                                timer: 3000
                            }).then((result) => {
                                if (result.isDismissed) {
                                    window.history.back();
                                }
                            });
                    </script>';
    }else if(empty($_POST['frist_name'])){
        echo '<script type="text/javascript">
                            Swal.fire({
                                icon: "warning",                    
                                title: "แจ้งเตือน",
                                text: "กรุณากรอกข้อมูล !!!",
                                showConfirmButton: false,
                                timer: 3000
                            }).then((result) => {
                                if (result.isDismissed) {
                                    window.history.back();
                                }
                            });
                    </script>';
    }else if(empty($_POST['last_name'])){
        echo '<script type="text/javascript">
                            Swal.fire({
                                icon: "warning",                    
                                title: "แจ้งเตือน",
                                text: "กรุณากรอกข้อมูล !!!",
                                showConfirmButton: false,
                                timer: 3000
                            }).then((result) => {
                                if (result.isDismissed) {
                                    window.history.back();
                                }
                            });
                    </script>';
    }else if(empty($_POST['class'])){
        echo '<script type="text/javascript">
                            Swal.fire({
                                icon: "warning",                    
                                title: "แจ้งเตือน",
                                text: "กรุณากรอกข้อมูล !!!",
                                showConfirmButton: false,
                                timer: 3000
                            }).then((result) => {
                                if (result.isDismissed) {
                                    window.history.back();
                                }
                            });
                    </script>';
    }else if(empty($_POST['department'])){
        echo '<script type="text/javascript">
                            Swal.fire({
                                icon: "warning",                    
                                title: "แจ้งเตือน",
                                text: "กรุณากรอกข้อมูล !!!",
                                showConfirmButton: false,
                                timer: 3000
                            }).then((result) => {
                                if (result.isDismissed) {
                                    window.history.back();
                                }
                            });
                    </script>';
    }else if(empty($_POST['phone'])){
        echo '<script type="text/javascript">
                            Swal.fire({
                                icon: "warning",                    
                                title: "แจ้งเตือน",
                                text: "กรุณากรอกข้อมูล !!!",
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
        
        $id_ldentification  = $_POST['id_ldentification'];
        $email              = $_POST['email'];
        $frist_name         = $_POST['frist_name'];
        $last_name          = $_POST['last_name'];
        $id                 = $_POST['id'];
        $class              = $_POST['class'];
        $department         = $_POST['department'];
        $phone              = $_POST['phone'];
        $OTP                = " ";
        //echo '<pre>'; 
        //print_r($_POST);
        $sql1 = "UPDATE tb_users SET id_ldentification = '$id_ldentification', email = '$email', frist_name = '$frist_name', last_name = '$last_name',
                class = '$class', department = '$department', phone = '$phone'   
                 WHERE user_id = '".$id."' ";  
        $result1 = mysqli_query($conn, $sql1) or die ("Error in query: $sql1" . mysqli_error());
        //-----------------------------------------------------------------------------------------------------
        $sql2 = "UPDATE tb_login SET username = '$id_ldentification', email = '$email', OTP = '$OTP'  WHERE id = '".$id."' ";  
        $result2 = mysqli_query($conn, $sql2) or die ("Error in query: $sql2" . mysqli_error());
        mysqli_close($conn);
                if ($result1 && $result2) {
                    echo '<script type="text/javascript">
                                    Swal.fire({
                                        icon: "success",                    
                                        title: "แก้ไขข้อมูลสำเร็จ",
                                        text: "ระบบกำลังนำท่านไป...",
                                        showConfirmButton: false,
                                        timer: 3000
                                    }).then((result) => {
                                if (result.isDismissed) {
                                    window.location.href = "service.php?show='.MD5('show_user').'";
                                }
                            });
                        </script>';
                } else {
                    echo '<script type="text/javascript">
                            Swal.fire({
                                icon: "error",                    
                                title: "แก้ไขข้อมูล ไม่สำเร็จ!!!",
                                text: "กรุณาลองใหม่อีกครั้ง",
                                showConfirmButton: false,
                                timer: 3000
                            }).then((result) => {
                                if (result.isDismissed) {
                                    window.location.href = "service.php?show='.MD5('show_user').'";
                                }
                            });
                    </script>';
                }
            }
?>
</body>

</html>