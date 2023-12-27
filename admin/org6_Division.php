<?php include('../admin/include/header.php') ?>


<body>

    <?php include('../admin/include/navbar.php') ?>
    <?php include('../admin/include/sidebar.php') ?>

    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h3>ข้อมูลโครงสร้างองค์กร : Division</h3>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item "><a href="org1_Business_unit.php">Business Unit</a></li>
                                    <li class="breadcrumb-item"><a href="org2_Sub_Business_unit.php">Sub-business-unit</a></li>
                                    <li class="breadcrumb-item"><a href="org3_Organizaion.php">Organization-ID</a></li>
                                    <li class="breadcrumb-item"><a href="org4_Company.php">Company </a></li>
                                    <li class="breadcrumb-item"><a href="org5_Location.php">Location</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Division</li>
                                    <li class="breadcrumb-item"><a href="org7_Department.php">Department</a></li>
                                    <li class="breadcrumb-item"><a href="org8_Section.php">Section</a></li>
                                    <li class="breadcrumb-item"><a href="org9_Costcenter.php">Cost-Center</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-12 mb-30">
                        <div class="card-box pd-30 pt-10 height-100-p">
                            <h2 class="mb-30 h4 text-blue">รายการ Division ทั้งหมดในระบบ</h2>
                            <div class="pb-20">
                                <table class="data-table table stripe hover nowrap">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>Division (TH)</th>
                                            <th>Division (ENG)</th>
                                            <th>จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // เตรียมคำสั่ง SQL
                                        $sql6 = "SELECT * FROM division";
                                        $params6 = array();
                                        // ดึงข้อมูลจากฐานข้อมูล
                                        $stmt6 = sqlsrv_query($conn, $sql6, $params6);
                                        // ตรวจสอบการทำงานของคำสั่ง SQL
                                        if ($stmt6 === false) {
                                            die(print_r(sqlsrv_errors(), true));
                                        }

                                        // แสดงผลลัพธ์ในรูปแบบของตาราง HTML
                                        while ($row = sqlsrv_fetch_array($stmt6, SQLSRV_FETCH_ASSOC)) {
                                            echo "<tr>";
                                            echo "<td>" . $row["division_id"] . "</td>";
                                            echo "<td>" . $row["name_thai"] . "</td>";
                                            echo "<td>" . $row["name_eng"] . "</td>";
                                            echo "<td><div class='dropdown'><button class='delete-btn_Org'><i class='fa-solid fa-trash-can'></i></button><button class='edit-btn_Org'><i class='fa-solid fa-pencil'></i></button></div></td>";
                                            echo "</tr>";
                                        }
                                        // ปิดการเชื่อมต่อ
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                        <div class="card-box pd-30 pt-10 height-50-p">
                            <section>
                                <form name="save" method="post" action="org6_Division.php">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ชื่อ Location (สำนักงาน)</label>
                                                <select name="location_id" class="custom-select form-control" required="true" autocomplete="off">
                                                    <option value="" disabled selected>---- โปรดระบุ Location (สำนักงาน) ----</option>
                                                    <?php
                                                    // สร้าง options สำหรับ dropdown 2
                                                    $sqlDropdown6 = "SELECT * FROM location";
                                                    $resultDropdown6 = sqlsrv_query($conn, $sqlDropdown6);

                                                    // เช็ค error
                                                    if ($resultDropdown6 === false) {
                                                        die(print_r(sqlsrv_errors(), true));
                                                    }

                                                    if ($resultDropdown6) {
                                                        while ($row = sqlsrv_fetch_array($resultDropdown6, SQLSRV_FETCH_ASSOC)) {
                                                            echo "<option value='"  . $row['location_id'] . "'>" . $row['name'] . "</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ชื่อ Division (TH)</label>
                                                <input name="name_thai" type="text" class="form-control" required="true" autocomplete="off" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ชื่อ Division (ENG)</label>
                                                <input name="name_eng" type="text" class="form-control" required="true" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-right">
                                        <div class="dropdown">
                                            <input class="btn btn-primary" type="submit" value="เพิ่ม Division" name="submit" >
                                        </div>
                                    </div>
                                </form>
                                <?php
                        // PHP สำหรับการ Insert ข้อมูลลงในฐานข้อมูล SQL Server 
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if (isset($_POST['submit'])) {
                                $locationid = $_POST['location_id'];
                                $nameTH = $_POST['name_thai'];
                                $nameENG = $_POST['name_eng'];

                                // ค่าไม่ว่าง ทำการ insert ข้อมูล
                                $sqlInsert = "INSERT INTO division (location_id, name_thai, name_eng) VALUES ('$locationid', '$nameTH', '$nameENG')";
                                // $params = array($selectedValue1, $nameTH, $nameENG);
                                $stmt = sqlsrv_query($conn, $sqlInsert);

                                if ($stmt === false) {
                                    die(print_r(sqlsrv_errors(), true));
                                } else {
                                    echo '<script type="text/javascript">
                                            const Toast = Swal.mixin({
                                                toast: true,
                                                position: "top-end",
                                                showConfirmButton: false,
                                                timer: 1000,
                                                timerProgressBar: true,
                                                didOpen: (toast) => {
                                                    toast.onmouseenter = Swal.stopTimer;
                                                    toast.onmouseleave = Swal.resumeTimer;
                                                }
                                            });
                                            Toast.fire({
                                                icon: "success",
                                                title: "บันทึกข้อมูล Division สำเร็จ"
                                            });            
                                            </script>';

                                    echo "<meta http-equiv='refresh' content='1'>";
                                    exit; // จบการทำงานของสคริปต์ทันทีหลังจาก redirect
                                }
                            }
                        }
                        ?>
                            </section>
                        </div>
                    </div>
                </div>

            </div>

            <?php include('../admin/include/footer.php'); ?>
        </div>
    </div>
    <!-- js -->

    <?php include('../admin/include/scripts.php') ?>
</body>

</html>