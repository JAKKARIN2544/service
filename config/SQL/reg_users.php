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
                                    window.location.href = "index.php";
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
                                    window.location.href = "index.php";
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
                                    window.location.href = "index.php";
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
                                    window.location.href = "index.php";
                                }
                            });
                    </script>';
    }else if(empty($_POST['password'])){
        echo '<script type="text/javascript">
                            Swal.fire({
                                icon: "warning",                    
                                title: "แจ้งเตือน",
                                text: "กรุณากรอกข้อมูล !!!",
                                showConfirmButton: false,
                                timer: 3000
                            }).then((result) => {
                                if (result.isDismissed) {
                                    window.location.href = "index.php";
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
                                    window.location.href = "index.php";
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
                                    window.location.href = "index.php";
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
                                    window.location.href = "index.php";
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
        $email              = $_POST['email'];
        $frist_name         = $_POST['frist_name'];
        $last_name          = $_POST['last_name'];
        $password           = MD5($_POST['password']);
        $class              = $_POST['class'];
        $department         = $_POST['department'];
        $phone              = $_POST['phone'];
        $user_level         = "user";
        //echo '<pre>'; 
        //print_r($_POST);
        $sql1 = "INSERT INTO tb_login VALUE ('$user_id ','$id_ldentification','$password','$user_level')";
        $result1 = mysqli_query($conn, $sql1) or die ("Error in query: $sql1 " . mysqli_error());
        //--------------------------------------------------------------------------------------------------------
        $sql2 = "INSERT INTO tb_users VALUE ('$user_id ','$id_ldentification','$email','$frist_name','$last_name','$class','$department','$phone','$user_level')";                 
        $result2 = mysqli_query($conn, $sql2) or die ("Error in query: $sql2 " . mysqli_error());     
        mysqli_close($conn);
                if ($result1 && $result2) {
                    echo '<script type="text/javascript">
                                    Swal.fire({
                                        icon: "success",                    
                                        title: "สมัครสมาชิก สำเร็จ!",
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
                                title: "สมัครสมาชิก",
                                text: "สมัครสมาชิก ไม่สำเร็จ!!!",
                                showConfirmButton: false,
                                timer: 3000
                            }).then((result) => {
                                if (result.isDismissed) {
                                    window.location.href = "index.php";
                                }
                            });
                    </script>';
                }
    }
?>
</body>
</html>