<?php
    session_start();
    //echo $_SESSION['id'];
    //echo '<pre>';
    //print_r();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/dist/css/index.css">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</head>

<body>
    <?php   
    if(empty($_POST['date'])){
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
    }else if(empty($_POST['urgency'])){
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
    }else if(empty($_POST['computer_name'])){
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
    }else if(empty($_POST['computer_brand'])){
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
     }else if(empty($_POST['computer_code'])){
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
    }else if(empty($_POST['malfunction'])){
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
    }else if(empty($_POST['malfunction_datail'])){
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

        $uid                = $_SESSION['id'];
        $oid                = ' ';
        $end_date           = date("d-m-Y");
        $service_id         = 'S'.date('y').date('s').rand(0,9);
        $date               = $_POST['date'];
        $urgency            = $_POST['urgency'];
        $computer_name      = $_POST['computer_name'];
        $computer_brand     = $_POST['computer_brand'];
        $computer_code      = $_POST['computer_code'];
        $malfunction        = $_POST['malfunction'];
        $malfunction_datail = $_POST['malfunction_datail'];
        $status             = "estimate";
        
        $sql1 = "INSERT INTO tb_service VALUE ('$service_id','$date','$uid','$oid')";
        $result1 = mysqli_query($conn, $sql1) or die ("Error in query: $sql1 " . mysqli_error());                
        //----------------------------------------------------------------------------------------------
        $sql2 = "INSERT INTO tb_service_detail VALUE ('$service_id','$date','$end_date','$uid','$oid','$computer_name','$computer_brand',
                '$computer_code','$urgency','$malfunction','$malfunction_datail','$status')";
        $result2 = mysqli_query($conn, $sql2) or die ("Error in query: $sql2 " . mysqli_error()); 

        if ($result1 && $result2) {
            echo '<script type="text/javascript">
                    Swal.fire({
                        icon: "success",                    
                        title: "แจ้งซ่อม สำเร็จ",
                        text: "ระบบได้ทำการบันทึกแบบฟอร์มแล้ว",
                        showConfirmButton: false,
                        timer: 3000
                    }).then((result) => {
                        if (result.isDismissed) {
                            window.location.href = "service.php?status=service";
                        }
                    });
            </script>';
        } else {
            echo '<script type="text/javascript">
                    Swal.fire({
                        icon: "error",                    
                        title: "สมัครสมาชิก",
                        text: "สมัครสมาชิก ไม่สำเร็จ!!!",
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
<?php 
 define('LINE_API',"https://notify-api.line.me/api/notify");

 $token = 'qBSDNIgAZLbenWbngGWse0DjYY0uY8Mo666RTL9gk1N'; //ใส่Token ที่copy เอาไว้

 $str   = '📌 รายการแจ้งซ่อมใหม่ 📌'."\n".' รหัสแจ้งซ่อม : '. $service_id .'
                           '."\n".' วันที่ : '. $date .'
                           '."\n".' ความเร่งด่วน : '. $urgency .'
                           '."\n".' อาการเสียเบื้องต้น : '. $malfunction .'
                           '."\n".' สถานะ : '. $status .'
 
 ';
 
 $res = notify_message($str,$token);
 //print_r($res);
 function notify_message($message,$token){
 $queryData = array('message' => $message);
 $queryData = http_build_query($queryData,'','&');
 $headerOptions = array( 
         'http'=>array(
             'method'=>'POST',
             'header'=> "Content-Type: application/x-www-form-urlencoded\r\n"
                     ."Authorization: Bearer ".$token."\r\n"
                     ."Content-Length: ".strlen($queryData)."\r\n",
             'content' => $queryData
         ),
 );
 $context = stream_context_create($headerOptions);
 $result = file_get_contents(LINE_API,FALSE,$context);
 $res = json_decode($result);
 return $res;
}
?>
</body>

</html>