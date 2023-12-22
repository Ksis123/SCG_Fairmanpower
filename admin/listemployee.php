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
					<select class="filter-select">
						<option value=""> เลือกประเภทพนักงานทั้งหมด </option>
						<option value="พนักงานประจำ">พนักงานประจำ</option>
						<option value="สัญญาจ้างพิเศษ">สัญญาจ้างพิเศษ</option>
						<option value="Outsource">Outsource</option>
						<option value="นักศึกษาฝึกงาน">นักศึกษาฝึกงาน</option>
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
							<th class="datatable-nosort">ประเภท</th>
							<th class="datatable-nosort">แผนก</th>
							<th class="datatable-nosort">หน่วยงาน</th>
							<th class="datatable-nosort">ตำแหน่ง</th>
							<th class="datatable-nosort">การจัดการ</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td></td>
							<td></td>
							<td class="table-plus">
								<div class="name-avatar d-flex align-items-center">
									<div class="avatar mr-2 flex-shrink-0">
										<img src="<?php echo (!empty($row['location'])) ? '../uploads/' . $row['location'] : '../asset/img/employee/4.jpg'; ?>" class="border-radius-100 shadow" width="40" height="40" alt="">
									</div>
									<div class="txt">
										<div class="weight-600"></div>
									</div>
								</div>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<div class="dropdown">
									<button class="delete-btn"><i class="fa-solid fa-trash-can"></i></button>
									<button class="edit-btn"><i class="fa-solid fa-pencil"></i> </button>
								</div>
							</td>
						</tr>
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