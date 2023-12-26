<?php include('../admin/include/header.php') ?>
<?php include('../config/connection.php') ?>

<body>
    <!-- echo "<script>";
    echo "Swal.fire({title: 'เข้าสู่ระบบสำเร็จ!',text: 'ยินดีต้อนรับสู่ Fair Manpower', icon: 'success', timer: 1500});";
    echo "</script>"; -->
    <?php
    $a = array();

    $stmt = "SELECT * FROM employee ";
    $query = sqlsrv_query($conn, $stmt);
    while ($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
        array_push($a, $result);
    }
    ?>
    <?php include('../admin/include/navbar.php') ?>
    <?php include('../admin/include/sidebar.php') ?>

    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="pd-ltr-20">
            <div class="title pb-20">
                <h2 class="h3 mb-0">Darshboard</h2>
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