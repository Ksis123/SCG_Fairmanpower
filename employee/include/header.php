<?php
	session_start(); // เรียกใช้ session_start() ก่อนที่จะใช้ session
	require_once('C:\xampp\htdocs\SCG_Fairmanpower\config\connection.php');
	// ตรวจสอบว่ามี Session 'line_id' หรือไม่ และค่าของ 'line_id' ไม่เป็นค่าว่าง

	if (
		isset($_SESSION['line_id'], $_SESSION['card_id'], $_SESSION['prefix_thai'], $_SESSION['firstname_thai'], $_SESSION['lastname_thai']) &&
		!empty($_SESSION['line_id']) && !empty($_SESSION['card_id']) && !empty($_SESSION['prefix_thai']) &&
		!empty($_SESSION['firstname_thai']) && !empty($_SESSION['lastname_thai'])
	) {
		$line_id = $_SESSION['line_id'];
		$card_id = $_SESSION['card_id'];
		$prefix = $_SESSION['prefix_thai'];
		$fname = $_SESSION['firstname_thai'];
		$lname = $_SESSION['lastname_thai'];
		
		// ส่วนคำสั่ง SQL ควรตรงกับโครงสร้างของตารางในฐานข้อมูล
		$sql = "SELECT * FROM employee em WHERE em.card_id = ?";
		$params = array($card_id);
		$stmt = sqlsrv_query($conn, $sql, $params);

		if ($stmt === false) {
			die(print_r(sqlsrv_errors(), true));
		}

		$row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
		if ($row) {
		} else {
			// หากไม่พบข้อมูลที่ตรงกัน
			echo "ไม่พบข้อมูลที่ตรงกับ line_id: $line_id";
		}
	}
?>

<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>SCG | Fair Manpower</title>

	<!-- Site favicon -->
	<link rel="icon" type="image/ico" href="../favicon.ico">


	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../src/plugins/jquery-steps/jquery.steps.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/style.css">

	<script src="../asset/plugins/sweetalert2-11.10.1/jquery-3.7.1.min.js"></script>
	<script src="../asset/plugins/sweetalert2-11.10.1/sweetalert2.all.min.js"></script>

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />	
	<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
	
	<style>
		.flex{
			display: flex;
		}

	</style>

</head>