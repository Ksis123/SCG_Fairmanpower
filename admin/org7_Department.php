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
                                <h3>ข้อมูลโครงสร้างองค์กร : Department (แผนก)</h3>
                                <p class="text-primary">โครงสร้างทั้ง 9 ลำดับขั้นจะเริ่มเรียงจากซ้าย-ขวาเสมอ

                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item "><a href="org1_Business_unit.php">Business Unit</a></li>
                                    <li class="breadcrumb-item"><a href="org2_Sub_Business_unit.php">Sub-business-unit</a></li>
                                    <li class="breadcrumb-item"><a href="org3_Organizaion.php">Organization-ID</a></li>
                                    <li class="breadcrumb-item"><a href="org4_Company.php">Company </a></li>
                                    <li class="breadcrumb-item"><a href="org5_Location.php">Location</a></li>
                                    <li class="breadcrumb-item"><a href="org6_Division.php">Division</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Department</li>
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
                            <h2 class="mb-30 h4 text-blue">รายการ แผนก ทั้งหมดในระบบ</h2>
                            <p class="text-danger">* หมายเหตุ : หากต้องการลบ แผนก จะต้องลบ Section ที่เกี่ยวข้องก่อนเสมอ</p>

                            <div class="pb-20">
                                <table class="data-table table stripe hover nowrap">
                                    <thead>
                                        <tr>
                                            <th>เลข Division </th>
                                            <th>ชื่อแผนก (TH)</th>
                                            <th>ชื่อแผนก (ENG)</th>
                                            <th>จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // เตรียมคำสั่ง SQL
                                        $sql7 = "SELECT * FROM department";

                                        $params7 = array();
                                        $i = 1;

                                        // ดึงข้อมูลจากฐานข้อมูล
                                        $stmt7 = sqlsrv_query($conn, $sql7, $params7);
                                        // ตรวจสอบการทำงานของคำสั่ง SQL
                                        if ($stmt7 === false) {
                                            die(print_r(sqlsrv_errors(), true));
                                        }

                                        // แสดงผลลัพธ์ในรูปแบบของตาราง HTML
                                        while ($row = sqlsrv_fetch_array($stmt7, SQLSRV_FETCH_ASSOC)) {
                                            echo "<tr>";
                                            echo "<td>" . $row["division_id"] .  "</td>";
                                            echo "<td>" . $row["name_thai"] . "</td>";
                                            echo "<td>" . $row["name_eng"] . "</td>";
                                            echo '<td><div class="flex"><form method="post" action="org7_Department.php" >',
                                            '<input type="hidden" name="department_id" value="' . $row['department_id'] . '">',
                                            '<button type="submit" name="delete_department" class="delete-btn_Org"><i class="fa-solid fa-trash-can"></i></button>',
                                            '</form>';
                                            echo '<form >',
                                            '<input type="hidden" name="department_id" value="' . $row['department_id'] . '">',
                                            '<button type="submit" name="edit_department" class="edit-btn_Org" ><i class="fa-solid fa-pencil"></i></button>',
                                            '</form></div></td>';
                                            echo "</tr>";
                                        }
                                        ?>

                                        <?php
                                        // -- DELETE  ค่า Business ตาม organization_id -->

                                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_department'])) {

                                            $department_id = $_POST['department_id'];
                                            $sql = "DELETE FROM department WHERE department_id = ?";
                                            $params = array($department_id);

                                            $stmt = sqlsrv_prepare($conn, $sql, $params);
                                            if ($stmt === false) {
                                                die(print_r(sqlsrv_errors(), true));
                                            }

                                            $result = sqlsrv_execute($stmt);
                                            if ($result === false) {
                                                die(print_r(sqlsrv_errors(), true));
                                            } else {
                                                echo '<script type="text/javascript">
                                                        const swalWithBootstrapButtons = Swal.mixin({
                                                            customClass: {
                                                                confirmButton: "delete-swal",
                                                                cancelButton: "edit-swal"
                                                            },
                                                            buttonsStyling: false
                                                        });
                                                        swalWithBootstrapButtons.fire({
                                                            icon: "success",
                                                            title: "ระบบลบ Department (แผนก) ตามที่ระบุสำเร็จ ",
                                                            text: "อีกสักครู่ ...ระบบจะทำการรีเฟส",
                                                            confirmButtonText: "ตกลง",

                                                        })
                                                    </script>';
                                                echo "<meta http-equiv='refresh' content='2'>";
                                                exit();
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                        <div class="card-box pd-30 pt-10 height-50-p">
                            <section>
                                <form name="save" method="post" action="org7_Department.php">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ชื่อ Division </label>
                                                <select name="division_id" class="custom-select form-control" required="true" autocomplete="off">
                                                    <option value="" disabled selected>---- โปรดระบุ Division ----</option>
                                                    <?php
                                                    // สร้าง options สำหรับ dropdown 2
                                                    $sqlDropdown7 = "SELECT * FROM division";
                                                    $resultDropdown7 = sqlsrv_query($conn, $sqlDropdown7);

                                                    // เช็ค error
                                                    if ($resultDropdown7 === false) {
                                                        die(print_r(sqlsrv_errors(), true));
                                                    }

                                                    if ($resultDropdown7) {
                                                        while ($row = sqlsrv_fetch_array($resultDropdown7, SQLSRV_FETCH_ASSOC)) {
                                                            echo "<option value='"  . $row['division_id'] . "'>" . $row['name_eng'] . "</option>";
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
                                                <label>ชื่อ แผนก (TH)</label>
                                                <input name="name_thai" type="text" class="form-control" required="true" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ชื่อ แผนก (ENG)</label>
                                                <input name="name_eng" type="text" class="form-control" required="true" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 ">
                                            <div class="dropdown text-center">
                                                <input class="btn btn-primary" type="submit" value="เพิ่ม Department (แผนก)" name="submit">
                                            </div>
                                        </div>
                                    </div>

                                </form>
                                <?php
                                // PHP สำหรับการ Insert ข้อมูลลงในฐานข้อมูล SQL Server 
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    if (isset($_POST['submit'])) {
                                        $divisionid = $_POST['division_id'];
                                        $nameTH = $_POST['name_thai'];
                                        $nameENG = $_POST['name_eng'];

                                        // ค่าไม่ว่าง ทำการ insert ข้อมูล
                                        $sqlInsert = "INSERT INTO department (division_id, name_thai, name_eng) VALUES ('$divisionid', '$nameTH', '$nameENG')";
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
                                                timer: 1300,
                                                timerProgressBar: true,
                                                didOpen: (toast) => {
                                                    toast.onmouseenter = Swal.stopTimer;
                                                    toast.onmouseleave = Swal.resumeTimer;
                                                }
                                            });
                                            Toast.fire({
                                                icon: "success",
                                                title: "บันทึกข้อมูล Department (แผนก) สำเร็จ"
                                            });            
                                            </script>';

                                            echo "<meta http-equiv='refresh' content='2'>";
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