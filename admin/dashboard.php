<?php
require_once "../config/connection.php";
?>

<?php include('../admin/include/header.php') ?>

<body>

    <div class="pre-loader">
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
        <?php
        echo "<script>";
        echo "Swal.fire({title: 'เข้าสู่ระบบสำเร็จ!',text: 'ยินดีต้อนรับสู่ Fair Manpower', icon: 'success', timer: 2500});";
        echo "</script>";
        ?>
    </div>
    <?php include('../admin/include/navbar.php') ?>
    <?php include('../admin/include/sidebar.php') ?>

    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="pd-ltr-20">
            <div class="title pb-20">
                <h2 class="h3 mb-0">Dashboard</h2>
            </div>
            <div class="card-box pd-20  mb-30">

            </div>
        </div>


        <?php include('../admin/include/footer.php'); ?>
    </div>
    </div>

    <!-- js -->
    <?php include('../admin/include/scripts.php') ?>

</body>

</html>