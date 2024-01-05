<?php include('../employee/include/header.php') ?>

<body>


	<?php include('../employee/include/navbar.php') ?>
	<?php include('../employee/include/sidebar.php') ?>

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="title pb-20">
				<h2 class="h3 mb-0">ข้อมูลพนักงาน</h2>
			</div>
			<div>
				<button class="importexcel-btn"><i class="fa-regular fa-file-excel"></i> นำเข้าไฟล์ Excel</button>
				<button class="downloadexcel-btn"><i class="fa-regular fa-circle-down"></i> ดาวโหลดตัวอย่าง Excel</button>
			</div>
		</div>
		<hr>
		<div class="pd-ltr-20 card-box mb-0">
			<div class="pd-20">
				<h2 class="text-blue h4">รายการพนักงานทั้งหมด</h2>
				<div class="text-left">
					หมวดหมู่ :
					<select name="contract_type" id="contract_type" class="filter-select" required="true" autocomplete="off">
						<option value="" disabled selected>-- เลือกประเภทพนักงานทั้งหมด --</option>
						<?php
						// สร้าง options สำหรับ dropdown
						$sqlDropdown = "SELECT * FROM contract_type";
						$resultDropdown = sqlsrv_query($conn, $sqlDropdown);

						if ($resultDropdown === false) {
							die(print_r(sqlsrv_errors(), true));
						}

						while ($row = sqlsrv_fetch_array($resultDropdown, SQLSRV_FETCH_ASSOC)) {
							echo "<option value='"  . $row['contract_type_id'] . "'>" . $row['name_thai'] . "</option>";
						}
						?>
					</select>
				</div>
				<div class="text-right">

					<button class="createdemp-btn" onclick="location.href='listemployee_Create.php'"> + เพิ่มพนักงานใหม่ </button>
				</div>

			</div>
			<div class="pb-20">
				<table class="data-table table stripe hover nowrap">
					<thead>
						<tr>
							<th class="datatable-nosort">ลำดับ</th>
							<th class="datatable-nosort">SCG-ID</th>
							<th class="datatable-nosort">รายชื่อพนักงาน</th>
							<th class="datatable-nosort">ประเภท</th>
							<th class="datatable-nosort">แผนก</th>
							<th class="datatable-nosort">หน่วยงาน</th>
							<th class="datatable-nosort">บทบาท</th>
						</tr>
					</thead>
					<tbody>
						<?php
						// เตรียมคำสั่ง SQL
						$sql = "SELECT scg_employee_id, prefix_thai, firstname_thai, lastname_thai, nickname_thai, gender, phone_number, employee_email, 
								permission.name as permission, permission.permission_id as permissionID, contract_type.name_eng as contracts, 
								section.name_thai as section, department.name_thai as department 
								
								FROM employee
								INNER JOIN  cost_center ON cost_center.cost_center_id = employee.cost_center_organization_id
								INNER JOIN section ON section.section_id = cost_center.section_id
								INNER JOIN department ON department.department_id = section.department_id
								INNER JOIN permission ON permission.permission_id = employee.permission_id
								INNER JOIN contract_type ON contract_type.contract_type_id = employee.contract_type_id";


						$params = array();
						$i = 1;

						// ดึงข้อมูลจากฐานข้อมูล
						$stmt = sqlsrv_query($conn, $sql, $params);
						// ตรวจสอบการทำงานของคำสั่ง SQL
						if ($stmt === false) {
							die(print_r(sqlsrv_errors(), true));
						}

						// แสดงผลลัพธ์ในรูปแบบของตาราง HTML
						while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
							echo "<tr>";
							echo "<td>" . $i++ . "</td>";
							echo "<td>" . $row["scg_employee_id"] . "</td>";
							echo "<td><div class='row'>",
							"<div style= 'padding-right: 10px;'><img src='../asset/img/employeeicon.png' class='border-radius-100 shadow' width='40' height='40' alt=''></div>",
							"<div  ><b>" . '  ' . $row["prefix_thai"] . '  ' . $row["firstname_thai"] . ' ' . $row["lastname_thai"] . ' (' . $row["nickname_thai"] . ')' . " </b><br/>", "<a class ='text-primary'>" . $row["employee_email"] . " </a><br/>";

							echo "<td>" . $row["contracts"] . "</td>";
							echo "<td>" . $row["department"] . "</td>";
							echo "<td>" . $row["section"] . "</td>";

							echo "<td><div class='permission-" . $row["permissionID"] . "'><b>" . $row["permission"] . "</b></div></td>";
							echo "</tr>";
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<?php include('../employee/include/footer.php') ?>

	</div>
	<!-- js -->

	<?php include('../employee/include/scripts.php') ?>
</body>

</html>