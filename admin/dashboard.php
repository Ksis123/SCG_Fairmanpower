<?php include('../admin/include/header.php') ?>

<body>
    <!-- echo "<script>";
    echo "Swal.fire({title: 'เข้าสู่ระบบสำเร็จ!',text: 'ยินดีต้อนรับสู่ Fair Manpower', icon: 'success', timer: 1500});";
    echo "</script>"; -->

    <?php include('../admin/include/navbar.php') ?>
    <?php include('../admin/include/sidebar.php') ?>

    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="pd-ltr-20">
            <div class="title pb-20">
                <h2 class="h3 mb-0">Darshboard</h2>
            </div>
            <div class="card-box pd-20 height-100-p mb-30">
                <h4 class="font-20 weight-500 mb-10 text-capitalize">
                    SCG : Fair Manpower ยินดีให้บริการ <h4 class="weight-600 font-15 text-primary">คุณ<?php echo $fname . ' ' . $lname ?></h4>
                </h4>
                <p class="font-18 max-width-800 text-danger">* หมายเหตุ ทางผู้พัฒนาได้ปรับปรุงส่วน <a href="org1_Business_unit.php"> ข้อมูลโครงสร้างองค์กร </a>ณ วันที่ 28 - 31 ธ.ค. 2566 จึงขออภัยมา ณ ที่นี้</p>
            </div>
        </div>


        <?php include('../admin/include/footer.php'); ?>
    </div>
    </div>

    <!-- js -->
    <?php include('../admin/include/scripts.php') ?>

</body>

</html>