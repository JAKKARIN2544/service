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
    if(empty($_POST['sp_name'])){
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
    }else if(empty($_POST['sp_total'])){
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
        
        $sp_list_id         = date('H').date('i').date('s').rand(0,9);
        $date_time          = date("Y-m-d");
        $sp_id              = $_POST['sp_name'];
        $officer_id         = $_SESSION['id'];
        $sp_total           = $_POST['sp_total'];

        $sql1 = "SELECT * FROM tb_spare_part WHERE spare_id = '".$sp_id."'";                 
        $result1 = mysqli_query($conn,$sql1);
        $row1 = mysqli_fetch_array($result1);

        $remaining = $row1['spare_remaining'];
        //echo $remaining;
        //echo '<br>';
        //echo $officer_id;
        if($sp_total > $remaining){
            echo '<script type="text/javascript">
                            Swal.fire({
                                icon: "warning",                    
                                title: "แจ้งเตือน",
                                text: "จำนวนอะไหล่ในระบบไม่เพียงพอ",
                                showConfirmButton: false,
                                timer: 3000
                            }).then((result) => {
                                if (result.isDismissed) {
                                    window.history.back();
                                }
                            });
                </script>';
        }else{
            //echo $sp_total;
            //echo '<br>';
            //echo $remaining;
            //echo '<br>';
            $new_rm = $remaining - $sp_total;
            //echo $new_rm;
            $sql2 = "INSERT INTO tb_spare_parts_list VALUE ('LSP$sp_list_id ','$date_time ','$sp_id','$officer_id','$sp_total')";                 
            $result2 = mysqli_query($conn, $sql2) or die ("Error in query: $sql2" . mysqli_error());
            //------------------------------------------------------------------------------------------------
            $sql1 = "UPDATE tb_spare_part SET spare_remaining = '$new_rm' WHERE spare_id = '$sp_id' ";                 
            $result1 = mysqli_query($conn, $sql1) or die ("Error in query: $sql1" . mysqli_error()); 

            mysqli_close($conn);
                    if ($result1 && $result2) {
                        echo '<script type="text/javascript">
                                        Swal.fire({
                                            icon: "success",                    
                                            title: "เบิกอะไหล่ สำเร็จ",
                                            text: "ระบบ กำลังนำท่านไป...",
                                            showConfirmButton: false,
                                            timer: 3000
                                        }).then((result) => {
                                    if (result.isDismissed) {
                                        window.location.href = "service.php?list=withdraw_spare_part";
                                    }
                                });
                            </script>';
                    } else {
                        echo '<script type="text/javascript">
                                Swal.fire({
                                    icon: "error",                    
                                    title: "เบิกอะไหล่ ไม่สำเร็จ!!!",
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
            }
    }
?>
</body>
</html>