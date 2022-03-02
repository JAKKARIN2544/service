<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/dist/css/index.css">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</head>

<body>
<?php  
    include_once 'config/ConnectDB/connect.php';
        if(empty($_POST['username'])){
            echo '<script type="text/javascript">
                                Swal.fire({
                                    icon: "warning",                    
                                    title: "แจ้งเตือน",
                                    text: "กรุณากรอก username !!!",
                                    showConfirmButton: false,
                                    timer: 2000
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
                                    text: "กรุณากรอก password !!!",
                                    showConfirmButton: false,
                                    timer: 2000
                                }).then((result) => {
                                    if (result.isDismissed) {
                                        window.history.back();
                                    }
                                });
                        </script>';
        }else{
                $username  = $_POST['username'];
                $password  = MD5($_POST['password']);

                $sql="SELECT * FROM tb_login Where username='".$username."' AND password='".$password."' ";
                $result = mysqli_query($conn,$sql);

                if(mysqli_num_rows($result)==1){
                    $row = mysqli_fetch_array($result);
                    $_SESSION["id"] = $row["id"];
                    //$_SESSION["username"] = $row["username"];
                    $_SESSION["level"] = $row["level"];

                    if($_SESSION["level"] === "officer"){ 
                        echo '<script type="text/javascript">
                                Swal.fire({
                                    icon: "success",                    
                                    title: "เข้าสู่ระบบ สำเร็จ",
                                    text: "ระบบกำลังนำท่านไป...",
                                    showConfirmButton: false,
                                    timer: 3000
                                }).then((result) => {
                                    if (result.isDismissed) {
                                        window.location.href = "service.php?Home=index_officer";
                                    }
                                });
                        </script>';
                    }else if($_SESSION["level"] !== "officer"){
                        echo '<script type="text/javascript">
                            Swal.fire({
                                icon: "error",                    
                                title: "เข้าสู่ระบบ ไม่สำเร็จ",
                                text: "username หรือ password ไม่ถูกต้อง",
                                showConfirmButton: false,
                                timer: 3000
                            }).then((result) => {
                                if (result.isDismissed) {
                                    window.history.back();
                                }
                            });
                        </script>';
                    }
                }else{
                    echo '<script type="text/javascript">
                        Swal.fire({
                            icon: "error",                    
                            title: "เข้าสู่ระบบ ไม่สำเร็จ",
                            text: "username หรือ password ไม่ถูกต้อง",
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