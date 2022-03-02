<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/dist/css/index.css">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</head>

<body>
    <?php
        //session_start();
        //echo '<pre>';
        //print_r($_POST);
        if(empty($_POST['new_password'])){
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
        }else if(empty($_POST['new_password2'])){
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
        }else if(($_POST['new_password']) != ($_POST['new_password2'])){
                    echo '<script type="text/javascript">
                    Swal.fire({
                        icon: "warning", 
                        title: "แจ้งเตือน",                  
                        text: "รหัสผ่านไม่ตรงกัน !!!",
                        showConfirmButton: false,
                        timer: 3000
                    }).then((result) => {
                        if (result.isDismissed) {
                            window.history.back();
                        }
                    });
                </script>';   
        }else if(($_POST['new_password']) == ($_POST['new_password2'])){
            include_once 'config/ConnectDB/connect.php';

            $uid = $_GET['uid'];
            $new_password  = MD5($_POST['new_password']);
            
            $sql1 = "UPDATE tb_login SET OTP = '0' WHERE id = '".$uid."' ";
            $result1 = mysqli_query($conn, $sql1) or die ("Error in query: $sql1 " . mysqli_error());
        //--------------------------------------------------------------------------------------------------------
            $sql2 = "UPDATE tb_login SET password = '$new_password' WHERE id = '".$uid."' ";  
            $result2 = mysqli_query($conn, $sql2) or die ("Error in query: $sql2" . mysqli_error());
                if ($result2) {
                    echo '<script type="text/javascript">
                                    Swal.fire({
                                        icon: "success",                    
                                        title: "เปลี่ยนรหัสผ่าน สำเร็จ!",
                                        text: "ระบบ กำลังนำท่านไป...",
                                        showConfirmButton: false,
                                        timer: 3000
                                    }).then((result) => {
                                if (result.isDismissed) {
                                    window.location.href = "index.php";
                                }
                            });
                        </script>';
                } else {
                    echo '<script type="text/javascript">
                            Swal.fire({
                                icon: "error",                    
                                title: "ข้อผิดพลาด",
                                text: "เปลี่ยนรหัสผ่าน ไม่สำเร็จ!!!",
                                showConfirmButton: false,
                                timer: 3000
                            }).then((result) => {
                                if (result.isDismissed) {
                                    window.history.back();
                                }
                            });
                    </script>';
                }
        }
?>
</body>

</html>