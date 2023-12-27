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
                                <h3>ข้อมูลโครงสร้างองค์กร : Cost-Center</h3>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item "><a href="org1_Business_unit.php">Business Unit</a></li>
                                    <li class="breadcrumb-item"><a href="org2_Sub_Business_unit.php">Sub-business-unit</a></li>
                                    <li class="breadcrumb-item"><a href="org3_Organizaion.php">Organization-ID</a></li>
                                    <li class="breadcrumb-item"><a href="org4_Company.php">Company</a></li>
                                    <li class="breadcrumb-item"><a href="org5_Location.php">Location</a></li>
                                    <li class="breadcrumb-item"><a href="org6_Division.php">Division</a></li>
                                    <li class="breadcrumb-item"><a href="org7_Department.php">Department</a></li>
                                    <li class="breadcrumb-item"><a href="org8_Section.php">Section</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cost-Center</li>

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-12 mb-30">
                        <div class="card-box pd-30 pt-10 height-100-p">
                            <h2 class="mb-30 h4 text-blue">หมายเลข Cost-Center ทั้งหมดในระบบ</h2>
                            <div class="pb-20">
                                <table class="data-table table stripe hover nowrap">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>Cost-Center</th>
                                            <th>จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // เตรียมคำสั่ง SQL

                                        // $sql3 = "SELECT * FROM organization org INNER JOIN sub_business s ON org.sub_business_id = s.sub_business_id WHERE s.sub_business_id=?";

                                        $sql9 = "SELECT * FROM cost_center";
                                        $params9 = array();
                                        // ดึงข้อมูลจากฐานข้อมูล
                                        $stmt9 = sqlsrv_query($conn, $sql9, $params9);
                                        // ตรวจสอบการทำงานของคำสั่ง SQL
                                        if ($stmt9 === false) {
                                            die(print_r(sqlsrv_errors(), true));
                                        }

                                        // แสดงผลลัพธ์ในรูปแบบของตาราง HTML
                                        while ($row = sqlsrv_fetch_array($stmt9, SQLSRV_FETCH_ASSOC)) {
                                            echo "<tr>";
                                            echo "<td>" . $row["section_id"] . "</td>";
                                            echo "<td>" . $row["cost_center_id"] . "</td>";
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
                        <div class="card-box pd-30 pt-10 height-100-p">
                            <section>
                                <form name="save" method="post" action="org9_Costcenter.php">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ระบุ Section</label>
                                                <select name="section_id" class="custom-select form-control" required="true" autocomplete="off">
                                                    <option value="" disabled selected>-- โปรดระบุ Section --</option>
                                                    <?php
                                                    // สร้าง options สำหรับ dropdown 2
                                                    $sqlDropdown9 = "SELECT * FROM section";
                                                    $resultDropdown9 = sqlsrv_query($conn, $sqlDropdown9);

                                                    // เช็ค error
                                                    if ($resultDropdown9 === false) {
                                                        die(print_r(sqlsrv_errors(), true));
                                                    }

                                                    if ($resultDropdown9) {
                                                        while ($row = sqlsrv_fetch_array($resultDropdown9, SQLSRV_FETCH_ASSOC)) {
                                                            echo "<option value='"  . $row['section_id'] . "'>"  . $row['name_thai'] . "</option>";
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
                                                <label>หมายเลข Cost-Center</label>
                                                <input name="cost_center_id" type="text" class="form-control" required="true" autocomplete="off" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-right">
                                        <div class="dropdown">
                                            <input class="btn btn-primary" type="submit" value="เพิ่ม Cost-Center" name="submit">
                                        </div>
                                    </div>
                                </form>
                                <?php
                                // PHP สำหรับการ Insert ข้อมูลลงในฐานข้อมูล SQL Server 
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    if (isset($_POST['submit'])) {
                                        $section_id = $_POST['section_id'];
                                        $cost_id = $_POST['cost_center_id'];

                                        // ค่าไม่ว่าง ทำการ insert ข้อมูล
                                        $sqlInsert = "INSERT INTO cost_center (section_id, cost_center_id) VALUES ('$section_id', '$cost_id')";
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
                                                title: "บันทึกข้อมูล Cost-Center สำเร็จ"
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