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
        if(empty($_POST['OTP'])){
            echo '<script type="text/javascript">
                                Swal.fire({
                                    icon: "warning", 
                                    title: "แจ้งเตือน",                   
                                    text: "กรอก OTP ของท่าน",
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

            $uid  = $_GET['uid'];
            $OTP  = $_POST['OTP'];
            
            $sql1 = "SELECT * FROM tb_login WHERE id = '".$uid."'";                 
        	$result1 = mysqli_query($conn,$sql1);
        	$row1 = mysqli_fetch_array($result1);
            
            if($row1['OTP'] == $OTP){
                echo '<script type="text/javascript">
                        window.location.href = "service.php?forgot='.MD5('password').'&uid='.$row1['id'].'";
                </script>';
            }else{
                echo '<script type="text/javascript">
                                Swal.fire({
                                    icon: "warning", 
                                    title: "OTP ไม่ถูกต้อง",                   
                                    text: "กรอก OTP ของท่านอีกครั้ง",
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