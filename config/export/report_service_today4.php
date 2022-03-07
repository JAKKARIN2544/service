<?php
session_start();
// Require composer autoload
require_once __DIR__ . '../../../assets/lib/mpdf/vendor/autoload.php';
// Create an instance of the class:

$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
    'fontDir' => array_merge($fontDirs, [   
        __DIR__ . '/tmp',
    ]),
    'fontdata' => $fontData + [
        'sarabun' => [
            'R' => 'THSarabunNew.ttf',
            'I' => 'THSarabunNew Italic.ttf',
            'B' => 'THSarabunNew Bold.ttf',
            'BI' => 'THSarabunNew BoldItalic.ttf'
        ]
    ],
    'default_font' => 'sarabun'
]);

ob_start(); // Start get HTML code
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: sarabun;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    h1{
        text-align: center;
    }
    </style>
</head>

<body>

    <h1>รายงานยกเลิกซ่อมวันนี้</h1>
    <table>
        <tr>
        
            <th>วันที่แจ้งซ่อม</th>
            <th>วันที่ซ่อมสำเร็จ</th>
            <th>อุปกรณ์ที่ส่งซ่อม</th>
            <th>ซีเรียลนัมเบอร์อุปกรณ์</th>
            <th>สถานะการซ่อม</th>
        </tr>
        <?php
         require_once 'config/ConnectDB/connect.php';
        $sql = "SELECT tb_service_detail.*,tb_status.status_name_th
                FROM tb_service_detail
                INNER JOIN tb_status
                ON tb_service_detail.status = tb_status.status_name_eng
                WHERE user_id = '".$_SESSION['id']."' AND service_date = DATE(CURRENT_TIMESTAMP) AND status = 'success' ";
        $result = mysqli_query($conn, $sql);
        
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row['service_date']?></td>
            <td><?php echo $row['service_end_date']?></td>
            <td><?php echo $row['computer_name']?></td>
            <td><?php echo $row['computer_code']?></td>
            <td><?php echo $row['status_name_th']?></td>
        </tr>
        <?php
            }
            } else {
                //echo "0 results";
            }
        ?>
    </table>

</body>

</html>
<?php
$html = ob_get_contents();
$mpdf->WriteHTML($html);
$taget = "src/pdf/ายงานยกเลิกซ่อมวันนี้.pdf";
$mpdf->Output($taget);
echo "<script>window.location.href='$taget';</script>";
?>