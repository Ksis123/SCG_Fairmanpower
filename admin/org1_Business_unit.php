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
                                <h3>ข้อมูลโครงสร้างองค์กร : Business Unit</h3>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Business Unit</li>
                                    <li class="breadcrumb-item"><a href="org2_Sub_Business_unit.php">Sub-business-unit</a></li>
                                    <li class="breadcrumb-item"><a href="org3_Organizaion.php">Organization-ID</a></li>
                                    <li class="breadcrumb-item"><a href="org4_Company.php">Company</a></li>
                                    <li class="breadcrumb-item"><a href="org5_Location.php">Location</a></li>
                                    <li class="breadcrumb-item"><a href="org6_Division.php">Division</a></li>
                                    <li class="breadcrumb-item"><a href="org7_Department.php">Department</a></li>
                                    <li class="breadcrumb-item"><a href="org8_Section.php">Section</a></li>
                                    <li class="breadcrumb-item"><a href="org9_Costcenter.php">Cost-Center</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9 col-md-6 col-sm-12 mb-30">
                        <div class="card-box pd-30 pt-10 height-100-p">
                            <div class="pb-20">
                                <h2 class="mb-30 h4 text-blue">รายการ Business Unit ทั้งหมดในระบบ</h2>
                                <table class="data-table table stripe hover nowrap">
                                    <thead>
                                        <tr>
                                            <th>Business ID</th>
                                            <th>Business Unit (TH)</th>
                                            <th>Business Unit (ENG)</th>
                                            <th>จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php
                                            // เตรียมคำสั่ง SQL
                                            $sql = "SELECT * FROM business";
                                            $params = array();
                                            // ดึงข้อมูลจากฐานข้อมูล
                                            $stmt = sqlsrv_query($conn, $sql, $params);
                                            // ตรวจสอบการทำงานของคำสั่ง SQL
                                            if ($stmt === false) {
                                                die(print_r(sqlsrv_errors(), true));
                                            }

                                            // แสดงผลลัพธ์ในรูปแบบของตาราง HTML
                                            while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                                                echo "<tr>";
                                                echo "<td>" . $row["business_id"] . "</td>";
                                                echo "<td>" . $row["name_thai"] . "</td>";
                                                echo "<td>" . $row["name_eng"] . "</td>";
                                                echo "<td><div class='dropdown'>",
                                                     "<button class='delete-btn_Org' onclick='swalDeleteAlert()'><i class='fa-solid fa-trash-can'></i></button>",
                                                     "<button class='edit-btn_Org'><i class='fa-solid fa-pencil'></i></button>",
                                                     "</div></td>";
                                                echo "</tr>";

                                            }
                                            // ปิดการเชื่อมต่อ
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                        <div class="card-box pd-30 pt-10 height-50-p">
                            <h2 class="mb-30 h4"></h2>
                            <section>
                                <form name="save" method="post" action="org1_Business_unit.php">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ชื่อย่อ หรือ Business ID </label>
                                                <input id="business_id" name="business_id" placeholder="ตัวอย่างเช่น CBM" type="text" class="form-control" required="true" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ชื่อ Business Unit (TH)</label>
                                                <input name="name_thai" type="text" class="form-control" required="true" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ชื่อ Business Unit (ENG)</label>
                                                <input name="name_eng" type="text" class="form-control" required="true" autocomplete="off" style="text-transform:uppercase">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-right">
                                        <div class="dropdown">
                                            <input class="btn btn-primary" type="submit" value="เพิ่ม Business-Unit" name="submit">
                                        </div>
                                    </div>
                                </form>
                                <?php
                                // PHP สำหรับการ Insert ข้อมูลลงในฐานข้อมูล SQL Server 
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    if (isset($_POST['submit'])) {
                                        $business_id = $_POST['business_id'];
                                        $nameTH = $_POST['name_thai'];
                                        $nameENG = $_POST['name_eng'];


                                        // ค่าไม่ว่าง ทำการ insert ข้อมูล
                                        $sqlInsert = "INSERT INTO business (business_id, name_thai, name_eng) VALUES ('$business_id', '$nameTH', '$nameENG')";
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
                                                timer: 3000,
                                                timerProgressBar: true,
                                                didOpen: (toast) => {
                                                    toast.onmouseenter = Swal.stopTimer;
                                                    toast.onmouseleave = Swal.resumeTimer;
                                                }
                                            });
                                            Toast.fire({
                                                icon: "success",
                                                title: "บันทึกข้อมูล Business-Unit สำเร็จ"
                                            });            
                                            </script>';

                                            echo "<meta http-equiv='refresh' content='3'>";

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