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

	$sql2 = "SELECT scg_employee_id, prefix_thai, firstname_thai, lastname_thai, nickname_thai, gender, phone_number, employee_email, 
	permission.name as permission, permission.permission_id as permissionID, contract_type.name_eng as contracts, 
	section.name_thai as section, department.name_thai as department 
	
	FROM employee
	INNER JOIN  cost_center ON cost_center.cost_center_id = employee.cost_center_organization_id
	INNER JOIN section ON section.section_id = cost_center.section_id
	INNER JOIN department ON department.department_id = section.department_id
	INNER JOIN permission ON permission.permission_id = employee.permission_id
	INNER JOIN contract_type ON contract_type.contract_type_id = employee.contract_type_id WHERE employee.card_id = ?";

	$params = array($card_id);
	$stmt = sqlsrv_query($conn, $sql2, $params);

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
	<link rel="stylesheet" type="text/css" href="../src/plugins/jquery-steps/jquery.steps.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/style.css">

	<script src="../asset/plugins/sweetalert2-11.10.1/jquery-3.7.1.min.js"></script>
	<script src="../asset/plugins/sweetalert2-11.10.1/sweetalert2.all.min.js"></script>

	<!-- momet time -->
	<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

	<script>
		function calculateAge() {
			// ดึงค่าจาก input birth_date
			var birthDateValue = document.getElementsByName("birth_date")[0].value;

			// ตรวจสอบว่า birthDateValue ไม่ใช่ค่าว่าง
			if (birthDateValue !== "") {
				// ทำการคำนวณอายุ
				var birthDate = moment(birthDateValue, "YYYY-MM-DD");
				var currentDate = moment();
				var ageYears = currentDate.diff(birthDate, "years");
				var ageMonths = currentDate.diff(birthDate, "months") % 12;

				// ตั้งค่าค่าอายุใน input
				document.getElementsByName("age_year")[0].value = ageYears;
				document.getElementsByName("age_month")[0].value = ageMonths;
			} else {
				// ถ้า birthDateValue เป็นค่าว่าง ให้ตั้งค่า age_year และ age_month เป็นค่าว่างด้วย
				document.getElementsByName("age_year")[0].value = "";
				document.getElementsByName("age_month")[0].value = "";
			}
		}
	</script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
		.flex {
			display: flex;
		}
	</style>

</head>