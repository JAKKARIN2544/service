<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/dist/css/index.css">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</head>

<body>
<?php
    session_start();    
    session_destroy();
    if(!empty($_SESSION)){
        echo '<script type="text/javascript">
                    Swal.fire({
                    icon: "success",                    
                    title: "ออกจากระบบ สำเร็จ",
                    text: "ระบบกำลังนำท่านไป...",
                    showConfirmButton: false,
                    timer: 3000
                }).then((result) => {
                if (result.isDismissed) {
                    window.location.href = "index.php";
                }
            });
            </script>';
    }else{
        echo '<script>
                window.history.back()
            </script> ';
    }
?>
</body>
</html>