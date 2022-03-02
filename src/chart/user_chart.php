<?php
	require_once 'config/ConnectDB/connect.php';

	$sql1 = "SELECT tb_status.status_name_th,COUNT(service_id) 
			FROM tb_service_detail 
			INNER JOIN tb_status 
			ON tb_service_detail.status = tb_status.status_name_eng 
			WHERE user_id = '".$_SESSION['id']."' 
			GROUP BY status";

	$result1 = mysqli_query($conn, $sql1);

	if (mysqli_num_rows($result1) > 0) {

		while($row1 = mysqli_fetch_assoc($result1)) {
			
			$labels1[] = $row1['status_name_th'];
			
			$data1[] = $row1['COUNT(service_id)'];
		}
	}
?>
	<script>
	var ctx1 = document.getElementById("myChart1");
	var myChart1 = new Chart(ctx1, {
		type: 'bar',
		//type: 'line',
		//type: 'pie',
		data: {
			labels: <?=json_encode($labels1)?>,
			datasets: [{
				label: 'สถานะการซ่อม',
				data: <?=json_encode($data1, JSON_NUMERIC_CHECK);?>,
				backgroundColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
				],
				borderWidth: 0
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			},
			 responsive: true,
			 title: {
				display: true,
				text: ''
			}
		}
	});
	</script>


<?php
	require_once 'config/ConnectDB/connect.php';

	$sql2 = "SELECT tb_status.status_name_th,COUNT(service_id) 
			FROM tb_service_detail 
			INNER JOIN tb_status 
			ON tb_service_detail.status = tb_status.status_name_eng 
			WHERE user_id = '".$_SESSION['id']."' 
			GROUP BY status";

	$result2 = mysqli_query($conn, $sql2);

	if (mysqli_num_rows($result2) > 0) {

		while($row2 = mysqli_fetch_assoc($result2)) {
			
			$labels2[] = $row2['status_name_th'];
			
			$data2[] = $row2['COUNT(service_id)'];
		}
	}
?>
	<script>
	var ctx2 = document.getElementById("myChart1");
	var myChart2 = new Chart(ctx2, {
		type: 'bar',
		//type: 'line',
		//type: 'pie',
		data: {
			labels: <?=json_encode($labels2)?>,
			datasets: [{
				label: 'สถานะการซ่อม',
				data: <?=json_encode($data2, JSON_NUMERIC_CHECK);?>,
				backgroundColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
				],
				borderWidth: 0
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			},
			 responsive: true,
			 title: {
				display: true,
				text: ''
			}
		}
	});
	</script>
