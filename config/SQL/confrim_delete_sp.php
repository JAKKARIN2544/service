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
                                title: "ไม่พบข้อมูล ที่ต้องการลบ",
                                text: "ระบบกำลังนำท่านไป...",
                                showConfirmButton: false,
                                timer: 3000
                            }).then((result) => {
                                if (result.isDismissed) {
                                    window.location.href = "service.php?show='.MD5('show_spare_part').'";
                                }
                            });
                    </script>';  
     }else{
            echo '<script type="text/javascript">
                            Swal.fire({
                                title: "ลบรายการนี้หรือไม่?",
                                text: "เมื่อรายการนี้ถูกลบ ไม่สามารถกู้คืนรายการได้!",
                                icon: "question",
                                showCancelButton: true,
                                confirmButtonColor: "#3085d6",
                                cancelButtonColor: "#d33",
                                confirmButtonText: "ตกลง",
                                cancelButtonText: "ยกเลิก",
                                
                            }).then((result) => {
                                if (result.isConfirmed) {
                                        window.location.href = "service.php?delete='.MD5('spare_part').'&id='.$_GET['id'].'";  
                                }else{
                                        window.location.href = "service.php?show='.MD5('show_spare_part').'";
                                }
                            })
                    </script>';
        }
?>
</body>

</html>