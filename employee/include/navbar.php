<div class="header">
	<div class="header-left">
		<div class="menu-icon dw dw-menu"></div>
		<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>

	</div>
	<div class="header-right">
		<div class="dashboard-setting user-notification">
		</div>

		<div class="user-info-dropdown">
			<div class="dropdown">
				<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
					<span class="user-icon">
						<img src="<?php echo (!empty($row['location'])) ? '../uploads/' . $row['location'] : '../asset/img/employeeicon.png'; ?>" alt="">
					</span>
					<span class="xp-user-live"></span>
					<span class="user-name">นายศิวกร แก้วมาลา</span>

				</a>
				<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
					<a class="dropdown-item" href="my_profile.php"><i class="dw dw-user1"></i> โปรไฟล์</a>
					<a class="dropdown-item" href="change_password.php"><i class="dw dw-help"></i> เปลี่ยนรหัสผ่าน</a>
					<a class="dropdown-item" href="signout.php"><i class="dw dw-logout"></i> ออกจากระบบ </a>
				</div>
			</div>
		</div>
	</div>
</div>