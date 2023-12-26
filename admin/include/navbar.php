<div class="header">
	<div class="header-left">
		<div class="menu-icon">
			<i class="fa-solid fa-bars"></i>
		</div>
		<div class="search-toggle-icon" data-toggle="header_search"></div>

	</div>
	<div class="header-right">
		<div class="dashboard-setting user-notification">
			<div class="dropdown">
				<button class="notification-btn">
					<i class="fa-regular fa-bell"></i>
				</button>
				<!-- <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
					<i class="fa-regular fa-bell"></i>
				</a> -->
			</div>
		</div>
		<div class="dashboard-setting user-notification">
			<div class="dropdown">
				<button class="notification-btn">
					<i class="fa-solid fa-comment-dots"></i>
				</button>
			</div>
		</div>
		<div class="user-info-dropdown">
			<div class="dropdown">
				<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
					<span class="user-icon">
						<img src="<?php echo (!empty($row['location'])) ? '../uploads/' . $row['location'] : '../asset/img/admin.png'; ?>" alt="">
					</span>
					<!-- <span class="user-name">นายศิวกร แก้วมาลา</span> -->
					<span class="user-name">นายศิวกร แก้วมาลา</span>
				</a>
				<div class="dropdown-menu dropdown-menu-icon-list">
					<a class="dropdown-item" href="profile.php"><i class="dw dw-user1"></i> โปรไฟล์</a>
					<a class="dropdown-item" href="signin.php"><i class="dw dw-logout"></i> ออกจากระบบ</a>
				</div>
			</div>
		</div>
	</div>
</div>