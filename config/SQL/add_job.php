<?php session_start(); ?>
<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <link rel="stylesheet" href="assets/dist/css/index.css">
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    </head>
    
    <body>
        <?php   
        if(empty($_GET['id'])){
            echo '<script type="text/javascript">
                                Swal.fire({
                                    icon: "warning",                    
                                    title: "แจ้งเตือน",
                                    text: "ไม่พบข้อมูล การแจ้งซ่อม !!!",
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
            
            $job_id         = $_GET['id'];
            $officer_id     = $_SESSION['id'];
            $status         = 'being';
    
            $sql1 = "SELECT officer_id FROM tb_service_detail WHERE service_id = '".$job_id."'";                 
            $result1 = mysqli_query($conn,$sql1);
            $row = mysqli_fetch_array($result1);
            
                if(mysqli_num_rows($result1)==1){
                    $sql2 = "UPDATE tb_service SET officer_id = '$officer_id' WHERE service_id = '$job_id' ";                 
                    $result2 = mysqli_query($conn,$sql2);
                    //----------------------------------------------------------------------------------
                    $sql3 = "UPDATE tb_service_detail SET officer_id = '$officer_id', status = '$status' WHERE service_id = '$job_id' ";                 
                    $result3 = mysqli_query($conn,$sql3);
                    mysqli_close($conn);
                    if ($result2 && $result3) {
                        echo '<script type="text/javascript">
                                        Swal.fire({
                                            icon: "success",                    
                                            title: "รับงานซ่อม สำเร็จ!",
                                            text: "ระบบ กำลังนำท่านไป...",
                                            showConfirmButton: false,
                                            timer: 3000
                                        }).then((result) => {
                                    if (result.isDismissed) {
                                        window.location.href = "service.php?job=service";
                                    }
                                });
                            </script>';
                    } else {
                        echo '<script type="text/javascript">
                                Swal.fire({
                                    icon: "error",                    
                                    title: "รับงานซ่อม ไม่สำเร็จ!",
                                    text: "กรุณาลองใหม่อีกครั้ง!!!",
                                    showConfirmButton: false,
                                    timer: 3000
                                }).then((result) => {
                                    if (result.isDismissed) {
                                        window.location.href = "service.php?job=service";
                                    }
                                });
                        </script>';
                    }
                }else{
                    echo '<script type="text/javascript">
                                Swal.fire({
                                    icon: "warning",                    
                                    title: "แจ้งเตือน",
                                    text: "ไม่พบข้อมูล การแจ้งซ่อม !!!",
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