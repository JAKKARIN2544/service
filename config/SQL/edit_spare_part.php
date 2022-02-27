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
    if(empty($_POST['name'])){
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
    }else if(empty($_POST['price'])){
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
    }else if(empty($_POST['id'])){
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
        $id                 = $_POST['id'];
        $name              = $_POST['name'];
        $price              = $_POST['price'];
        //echo '<pre>';
        //print_r($_POST);
        $sql1 = "UPDATE tb_spare_part SET spare_name = '$name', spare_price = '$price' WHERE spare_id = '".$id."' ";  
        $result1 = mysqli_query($conn, $sql1) or die ("Error in query: $sql1" . mysqli_error());
        mysqli_close($conn);
                if ($result1) {
                    echo '<script type="text/javascript">
                                    Swal.fire({
                                        icon: "success",                    
                                        title: "แก้ไขข้อมูลสำเร็จ",
                                        text: "ระบบกำลังนำท่านไป...",
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
                                title: "แก้ไขข้อมูล ไม่สำเร็จ!!!",
                                text: "กรุณาลองใหม่อีกครั้ง",
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
?>
</body>
</html>