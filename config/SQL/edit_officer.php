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
    if(empty($_POST['email'])){
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
    }else if(empty($_POST['id_card'])){
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
    }else if(empty($_POST['fristname'])){
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
    }else if(empty($_POST['lastname'])){
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
                                    window.history.back();
                                }
                            });
                    </script>';
    }else if(empty($_POST['level'])){
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
        $email              = $_POST['email'];
        $id_card            = $_POST['id_card'];
        $fristname          = $_POST['fristname'];
        $lastname           = $_POST['lastname'];
        $phone              = $_POST['phone'];
        $level              = $_POST['level'];
        //echo '<pre>';
        //print_r($_POST);
        $sql1 = "UPDATE tb_officer SET officer_email = '$email', officer_id_card = '$id_card', officer_fristname = '$fristname', officer_lastname = '$lastname', 
                officer_phone = '$phone', officer_level = '$level'
                WHERE officer_id = '".$id."' ";  
        $result1 = mysqli_query($conn, $sql1) or die ("Error in query: $sql1" . mysqli_error());
        //-----------------------------------------------------------------------------------------------------
        $sql2 = "UPDATE tb_login SET username = '$id_card'  WHERE id = '".$id."' ";  
        $result2 = mysqli_query($conn, $sql2) or die ("Error in query: $sql2" . mysqli_error());
        mysqli_close($conn);
                if ($result1 && $result2) {
                    echo '<script type="text/javascript">
                                    Swal.fire({
                                        icon: "success",                    
                                        title: "แก้ไขข้อมูลสำเร็จ",
                                        text: "ระบบกำลังนำท่านไป...",
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
                                title: "แก้ไขข้อมูล ไม่สำเร็จ!!!",
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