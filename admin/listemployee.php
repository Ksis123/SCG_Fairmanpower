<?php include('../admin/include/header.php') ?>

<body>


	<?php include('../admin/include/navbar.php') ?>
	<?php include('../admin/include/sidebar.php') ?>

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
				<div class="text-left ">หมวดหมู่ :
					<select name="sub_business_id" class="filter-select" required="true" autocomplete="off">
						<option value="" disabled selected>-- เลือกประเภทพนักงานทั้งหมด --</option>
						<?php
						// สร้าง options สำหรับ dropdown 2
						$sqlDropdown = "SELECT * FROM contract_type";
						$resultDropdown = sqlsrv_query($conn, $sqlDropdown);

						// เช็ค error
						if ($resultDropdown === false) {
							die(print_r(sqlsrv_errors(), true));
						}

						if ($resultDropdown) {
							while ($row = sqlsrv_fetch_array($resultDropdown, SQLSRV_FETCH_ASSOC)) {
								echo "<option value='"  . $row['contract_type_id'] . "'>" . $row['name_thai'] . "</option>";
							}
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
							<th class="datatable-nosort">เพศ</th>
							<!-- <th class="datatable-nosort">ประเภท</th> -->
							<th class="datatable-nosort">เบอร์โทร</th>
							<th class="datatable-nosort">อีเมล</th>
							<th class="datatable-nosort">Cost-Center</th>
							<!-- <th class="datatable-nosort">แผนก</th>
							<th class="datatable-nosort">หน่วยงาน</th>
							<th class="datatable-nosort">ตำแหน่ง</th> -->
							<th class="datatable-nosort">การจัดการ</th>
						</tr>
					</thead>
					<tbody>
						<?php
						// เตรียมคำสั่ง SQL
						$sql = "SELECT * FROM employee";
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
							echo "<td>" . $row["prefix_thai"] . ' ' . $row["firstname_thai"] . '' . $row["lastname_thai"] . ' (' . $row["nickname_thai"] . ')' . "</td>";
							echo "<td>" . $row["gender"] . "</td>";
							echo "<td>" . $row["phone_number"] . "</td>";
							echo "<td>" . $row["employee_email"] . "</td>";
							echo "<td>" . $row["cost_center_payment_id"] . "</td>";
							echo "<td><div class='dropdown'><button class='delete-btn_Org'><i class='fa-solid fa-trash-can'></i></button><button class='edit-btn_Org'><i class='fa-solid fa-pencil'></i></button></div></td>";
							echo "</tr>";
						}
						?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
	<?php include('../admin/include/footer.php') ?>

	</div>
	<!-- js -->

	<?php include('../admin/include/scripts.php') ?>
</body>

</html>