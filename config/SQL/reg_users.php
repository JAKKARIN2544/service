<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/dist/css/index.css">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</head>

<body>
<?php

$number = preg_match('@[0-9]@', $_POST['password']);
$uppercase = preg_match('@[A-Z]@', $_POST['password']);
$lowercase = preg_match('@[a-z]@', $_POST['password']);
$specialChars = preg_match('@[^\w]@', $_POST['password']); 

    if(strlen($_POST['password']) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
        echo '<script type="text/javascript">
                            Swal.fire({
                                icon: "warning",                    
                                title: "รหัสผ่าน ไม่แข็งแรง",
                                text: "รหัสผ่านต้องมากกว่า 8 ตัวอักษร และต้องมีตัวเลข ตัวอักษรพิมพ์ใหญ่ พิมพ์เล็ก และอักขระพิเศษหนึ่งตัว",
                                showConfirmButton: false,
                                timer: 5000
                            }).then((result) => {
                                if (result.isDismissed) {
                                    window.history.back();
                                }
                            });
                    </script>';
    }else if(empty($_POST['id_ldentification'])){
        echo '<script type="text/javascript">
                            Swal.fire({
                                icon: "warning",                    
                                title: "แจ้งเตือน",
                                text: "กรุณากรอกข้อมูลให้ครบถ้วน !!!",
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
                                text: "กรุณากรอกข้อมูลให้ครบถ้วน !!!",
                                showConfirmButton: false,
                                timer: 3000
                            }).then((result) => {
                                if (result.isDismissed) {
                                    window.history.back();
                                }
                            });
                    </script>';
    }else if(empty($_POST['gender'])){
        echo '<script type="text/javascript">
                            Swal.fire({
                                icon: "warning",                    
                                title: "แจ้งเตือน",
                                text: "กรุณากรอกข้อมูลให้ครบถ้วน !!!",
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
                                text: "กรุณากรอกข้อมูลให้ครบถ้วน !!!",
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
                                text: "กรุณากรอกข้อมูลให้ครบถ้วน !!!",
                                showConfirmButton: false,
                                timer: 3000
                            }).then((result) => {
                                if (result.isDismissed) {
                                    window.history.back();
                                }
                            });
                    </script>';
    }else if(empty($_POST['password'])){
        echo '<script type="text/javascript">
                            Swal.fire({
                                icon: "warning",                    
                                title: "แจ้งเตือน",
                                text: "กรุณากรอกข้อมูลให้ครบถ้วน !!!",
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
                                text: "กรุณากรอกข้อมูลให้ครบถ้วน !!!",
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
                                text: "กรุณากรอกข้อมูลให้ครบถ้วน !!!",
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
                                text: "กรุณากรอกข้อมูลให้ครบถ้วน !!!",
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
        
        $string             = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $random_character   = $string[mt_rand(0, strlen($string) - 1)];
        $random_id          = date('i').date('s').rand(0,9);
        $user_id            = $random_character.$random_id;
        $id_ldentification  = $_POST['id_ldentification'];
        $gender             = $_POST['gender'];
        $email              = $_POST['email'];
        $frist_name         = $_POST['frist_name'];
        $last_name          = $_POST['last_name'];
        $password           = MD5($_POST['password']);
        $class              = $_POST['class'];
        $department         = $_POST['department'];
        $phone              = $_POST['phone'];
        $user_level         = "user";
        $OTP                = " ";
        //echo '<pre>'; 
        //print_r($_POST);
            $sql1 = "SELECT email FROM  tb_users WHERE email ='".$email."' ";
            $result1 = mysqli_query($conn,$sql1);
            if(mysqli_num_rows($result1) >= 1){
                echo '<script type="text/javascript">
                                Swal.fire({
                                    icon: "warning",                    
                                    title: "E-mail ซ้ำ",
                                    text: "มีผู้ใช้งาน E-mail ในระบบ",
                                    showConfirmButton: false,
                                    timer: 3000
                                }).then((result) => {
                                    if (result.isDismissed) {
                                        window.history.back();
                                    }
                                });
                        </script>';
            }else{
                $sql2 = "INSERT INTO tb_login VALUE ('$user_id ','$id_ldentification','$password','$email','$user_level','$OTP')";
                $result2 = mysqli_query($conn, $sql2) or die ("Error in query: $sql2 " . mysqli_error());
                //--------------------------------------------------------------------------------------------------------
                $sql3 = "INSERT INTO tb_users VALUE ('$user_id ','$id_ldentification','$gender','$email','$frist_name','$last_name','$class','$department','$phone','$user_level')";                 
                $result3 = mysqli_query($conn, $sql3) or die ("Error in query: $sql3 " . mysqli_error());     
                mysqli_close($conn);
                        if ($result2 && $result3) {
                            echo '<script type="text/javascript">
                                            Swal.fire({
                                                icon: "success",                    
                                                title: "สมัครสมาชิก สำเร็จ!",
                                                text: "ระบบ กำลังนำท่านไป...",
                                                showConfirmButton: false,
                                                timer: 3000
                                            }).then((result) => {
                                        if (result.isDismissed) {
                                            window.location.href = "service.php?page=users";
                                        }
                                    });
                                </script>';
                        } else {
                            echo '<script type="text/javascript">
                                    Swal.fire({
                                        icon: "error",                    
                                        title: "สมัครสมาชิก",
                                        text: "สมัครสมาชิก ไม่สำเร็จ!!!",
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
        
    }
?>
</body>
</html>