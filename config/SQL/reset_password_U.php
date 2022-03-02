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
        if(empty($_POST['old_password'])){
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
        }else if(empty($_POST['new_password'])){
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
        }else{
            include_once 'config/ConnectDB/connect.php';

            $sql1 = "SELECT password FROM tb_login WHERE id = '".$_SESSION['id']."'";                 
            $result1 = mysqli_query($conn,$sql1);
            $row = mysqli_fetch_array($result1); 

            $password           = $row['password'];
            $old_password       = MD5($_POST['old_password']);
            $new_password       = MD5($_POST['new_password']);
            $new_password2      = MD5($_POST['new_password2']);

                echo $_SESSION['id'];
                echo '<br>';
                echo $password;
                echo '<br>';
               if(MD5($password)  == MD5($old_password)){
                echo 'Y';
               }else{
                    echo 'N';
               }
        }
?>
</body>

</html>