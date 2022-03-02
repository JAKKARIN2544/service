<?php //session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/dist/css/index.css">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</head>
<body>
	<?php require_once 'assets/lib/phpmailer/PHPMailerAutoload.php';?>
	<?php
		if(empty($_POST['email'])){
			echo '<script type="text/javascript">
                            Swal.fire({
                                icon: "warning",                    
                                title: "กรุณากรอก E-mail",
                                text: "ระบบกำลังนำท่านไป...",
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

			$mail_user = $_POST['email'];
	
			$sql1 = "SELECT * FROM tb_login WHERE email = '".$mail_user."'";                 
        	$result1 = mysqli_query($conn,$sql1);
        	$row1 = mysqli_fetch_array($result1);

			//$_SESSION["OTPMail"] = $row1["id"];

				if($row1 == 0){
					echo '<script type="text/javascript">
                            Swal.fire({
                                icon: "warning",                    
                                title: "ไม่พบ ข้อมูลในระบบ",
                                text: "กรุณาตรวจสอบE-mail อีกครั้ง!!!",
                                showConfirmButton: false,
                                timer: 3000
                            }).then((result) => {
                                if (result.isDismissed) {
                                    window.history.back();
                                }
                            });
                    </script>';
				}else{


					$mail = new PHPMailer;
					$mail->CharSet = "utf-8";
					$mail->isSMTP();
					$mail->Host = 'smtp.gmail.com';
					$mail->Port = 587;
					$mail->SMTPSecure = 'tls';
					$mail->SMTPAuth = true;


					$gmail_username = "serviceapp.chontect@gmail.com"; // gmail ที่ใช้ส่ง
					$gmail_password = "serviceapp1234"; // รหัสผ่าน gmail
					// ตั้งค่าอนุญาตการใช้งานได้ที่นี่ https://myaccount.google.com/lesssecureapps?pli=1


					$sender = "SERVICE APP"; // ชื่อผู้ส่ง
					$email_sender = "noreply@serviceapp.com"; // เมล์ผู้ส่ง 
					$email_receiver = "{$mail_user}"; // เมล์ผู้รับ ***

					$subject = "เปลี่ยนรหัสผ่าน"; // หัวข้อเมล์


					$mail->Username = $gmail_username;
					$mail->Password = $gmail_password;
					$mail->setFrom($email_sender, $sender);
					$mail->addAddress($email_receiver);
					$mail->Subject = $subject;
					
					$OTP = rand(1000,9999);

					$email_content = "
						<!DOCTYPE html>
						<html>
							<head>
								<meta charset=utf-8'/>
							</head>
							<body>
								<div style='padding:20px;'>
									<div>				
										<h2>การกู้รหัสผ่าน<strong style='color:#0000ff;'></strong></h2>
											<h1>OTP ของคุณคือ :<strong style='color:#3c83f9;'> {$OTP}</strong> </h1>
									</div>
								</div>
							</body>
						</html>";

					//  ถ้ามี email ผู้รับ
					if($email_receiver){
						$mail->msgHTML($email_content);


						if (!$mail->send()) {  // สั่งให้ส่ง email
							echo '<script type="text/javascript">
										Swal.fire({
											icon: "error",                    
											title: "ระบบมีปัญหา",
											text: "กรุราลองใหม่อีกครั้ง!!!",
											showConfirmButton: false,
											timer: 3000
										}).then((result) => {
											if (result.isDismissed) {
												window.history.back();
											}
										});
								</script>';
							// กรณีส่ง email ไม่สำเร็จ
							//echo $mail->ErrorInfo; // ข้อความ รายละเอียดการ error
						}else{
							// กรณีส่ง email สำเร็จ
							include_once 'config/ConnectDB/connect.php';

							$sql2 = "UPDATE tb_login SET OTP = '$OTP'  WHERE email = '".$mail_user."' ";  
        					$result2 = mysqli_query($conn, $sql2) or die ("Error in query: $sql2" . mysqli_error());
							mysqli_close($conn);
								if ($result2) {
									echo '<script type="text/javascript">
													Swal.fire({
														icon: "success",                    
														title: "ระบบได้ทำการส่ง OTP",
														text: "กรุณาตรวจสอบ OTP ของท่าน",
														showConfirmButton: false,
														timer: 3000
													}).then((result) => {
												if (result.isDismissed) {
													window.location.href = "service.php?OTP='.MD5('OTP').'&uid='.$row1['id'].'";
												}
											});
										</script>';
								} else {
									echo '<script type="text/javascript">
										Swal.fire({
											icon: "error",                    
											title: "ระบบมีปัญหา",
											text: "กรุราลองใหม่อีกครั้ง!!!",
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
				}
		}
?>
</body>
</html>