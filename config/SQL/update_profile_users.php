<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/dist/css/index.css">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</head>

<body>
<?php
    session_start();
    //echo '<pre>';
    //print_r($_POST);
        include_once 'config/ConnectDB/connect.php';
    
        $email              = $_POST['email'];
        $frist_name         = $_POST['frist_name'];
        $last_name          = $_POST['last_name'];
        $phone              = $_POST['phone'];

        $sql1 = "UPDATE tb_users SET email = '$email', frist_name = '$frist_name', last_name = '$last_name', phone = '$phone'
                WHERE user_id = '".$_SESSION['id']."' ";  
        $result1 = mysqli_query($conn, $sql1) or die ("Error in query: $sql1" . mysqli_error());

        $sql2 = "UPDATE tb_login SET email = '$email' WHERE id = '".$_SESSION['id']."' ";  
        $result2 = mysqli_query($conn, $sql2) or die ("Error in query: $sql2" . mysqli_error());
        mysqli_close($conn);
                if ($result1 && $result2) {
                    echo '<script type="text/javascript">
                                    Swal.fire({
                                        icon: "success",                    
                                        title: "แก้ไขข้อมูลสำเร็จ",
                                        showConfirmButton: false,
                                        timer: 3000
                                    }).then((result) => {
                                if (result.isDismissed) {
                                    window.history.back();
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
                                    window.history.back();
                                }
                            });
                    </script>';
                }
?>
</body>
</html>