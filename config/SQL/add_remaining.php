<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/dist/css/index.css">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</head>

<body>
    <?php   
    if(empty($_POST['date_time'])){
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
    }else if(empty($_POST['name'])){
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
    }else if(empty($_POST['remaining'])){
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
        
        $date_time          = $_POST['date_time'];
        $name               = $_POST['name'];
        $remaining          = $_POST['remaining'];

        $sql1 = "SELECT * FROM tb_spare_part WHERE spare_id = '".$name."'";                 
        $result1 = mysqli_query($conn,$sql1);
        $row = mysqli_fetch_array($result1);

        $old_rm = $row['spare_remaining'];
        $new_rm = $remaining;
        $sum_rm = $old_rm + $new_rm;
        
       if(mysqli_num_rows($result1)==1){
            $sql2 = "UPDATE tb_spare_part SET buy_date = '$date_time', spare_remaining = '$sum_rm' WHERE spare_id = '$name' ";                 
            $result2 = mysqli_query($conn,$sql2);
            mysqli_close($conn);
            if ($result2) {
                echo '<script type="text/javascript">
                                Swal.fire({
                                    icon: "success",                    
                                    title: "เพิ่มจำนวนคงเหลือ สำเร็จ!",
                                    text: "ระบบ กำลังนำท่านไป...",
                                    showConfirmButton: false,
                                    timer: 3000
                                }).then((result) => {
                            if (result.isDismissed) {
                                window.location.href = "service.php?show='.MD5('show_spare_part').'";
                            }
                        });
                    </script>';
            } else {
                echo '<script type="text/javascript">
                        Swal.fire({
                            icon: "error",                    
                            title: "เพิ่มจำนวนคงเหลือ ไม่สำเร็จ!",
                            text: "กรุณาลองใหม่อีกครั้ง!!!",
                            showConfirmButton: false,
                            timer: 3000
                        }).then((result) => {
                            if (result.isDismissed) {
                                window.location.href = "service.php?show='.MD5('show_spare_part').'";
                            }
                        });
                </script>';
            }
        }
    }
?>
</body>

</html>