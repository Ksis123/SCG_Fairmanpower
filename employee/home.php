<?php
require_once "../config/connection.php";
?>

<?php include('../employee/include/header.php') ?>

<body>

    <!-- <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo">
                <img src="https://gateway.pinata.cloud/ipfs/QmQWDGDreHp99nneodnavQYYBYd7ejFqU5TLzDefhKb92Z?_gl=1*1979x1s*_ga*MTE0ODI0Mjc0LjE2OTY4NjQ2MTU.*_ga_5RMPXG14TE*MTcwMjgzMjk4Mi42My4xLjE3MDI4MzI5ODIuNjAuMC4w" alt="">
            </div>
            <div class='loader-progress' id="progress_div">
                <div class='bar' id='bar1'></div>
            </div>
            <div class='percent' id='percent1'>0%</div>
            <div class="loading-text">
                Loading...
            </div>
        </div>
    </div> -->

    <?php
    echo "<script>";
    echo "Swal.fire({title: 'เข้าสู่ระบบสำเร็จ!',text: 'ยินดีต้อนรับสู่ Fair Manpower', icon: 'success', timer: 2500});";
    echo "</script>";
    ?>
    <?php include('../employee/include/navbar.php') ?>
    <?php include('../employee/include/sidebar.php') ?>

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
                <p class="font-18 max-width-1000">* หมายเหตุ ทางผู้พัฒนาได้ปรับปรุงส่วน <a href="org1_Business_unit.php"> ข้อมูลพนักงาน </a>ณ วันที่ 5 ม.ค. 2567
                <p class="font-18 max-width-800 text-danger"> จึง สุขสันปีใหม่ 2567 มา ณ ที่นี้</p>
                </p>
            </div>
        </div>


        <?php include('../admin/include/footer.php'); ?>
    </div>
    </div>

    <!-- js -->
    <?php include('../employee/include/scripts.php') ?>

</body>

</html>