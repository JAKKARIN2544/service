<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/dist/css/index.css">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</head>

<body>
<?php   
    //echo '<pre>';
    //print_r($_POST);
    if(empty($_GET['id'])){
        echo '<script type="text/javascript">
                            Swal.fire({
                                icon: "warning",                    
                                title: "ไม่พบข้อมูล ที่ต้องการลบ",
                                text: "ระบบกำลังนำท่านไป...",
                                showConfirmButton: false,
                                timer: 3000
                            }).then((result) => {
                                if (result.isDismissed) {
                                    window.location.href = "service.php?show='.MD5('show_officer').'";
                                }
                            });
                    </script>';
    }else{
        include_once 'config/ConnectDB/connect.php';

        $id = $_GET['id'];
        //echo $id;
        $sql1 = "DELETE FROM tb_login WHERE id = '".$id."'";
        $result1 = mysqli_query($conn, $sql1) or die ("Error in query: $sql1 " . mysqli_error());
        //--------------------------------------------------------------------------------------------------------
        $sql2 = "DELETE FROM tb_officer WHERE officer_id = '".$id."'";                 
        $result2 = mysqli_query($conn, $sql2) or die ("Error in query: $sql2 " . mysqli_error());     
        mysqli_close($conn);
                if ($result1 && $result2) {
                    echo '<script type="text/javascript">
                                    Swal.fire({
                                        icon: "success",                    
                                        title: "ลบข้อมูลเจ้าหน้าที่ สำเร็จ",
                                        text: "ระบบ กำลังนำท่านไป...",
                                        showConfirmButton: false,
                                        timer: 3000
                                    }).then((result) => {
                                if (result.isDismissed) {
                                    window.location.href = "service.php?show='.MD5('show_officer').'";
                                }
                            });
                        </script>';
                } else {
                    echo '<script type="text/javascript">
                            Swal.fire({
                                icon: "error",                    
                                title: "ลบข้อมูลเจ้าหน้าที่ ไม่สำเร็จ!!!",
                                text: "กรุณาลองใหม่อีกครั้ง",
                                showConfirmButton: false,
                                timer: 3000
                            }).then((result) => {
                                if (result.isDismissed) {
                                    window.location.href = "service.php?show='.MD5('show_officer').'";
                                }
                            });
                    </script>';
                }
    }
?>
</body>
</html>