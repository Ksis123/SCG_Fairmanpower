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
                                <h3>ข้อมูลโครงสร้างองค์กร : Location (สำนักงาน)</h3>
                                <p class="text-primary">โครงสร้างทั้ง 9 ลำดับขั้นจะเริ่มเรียงจากซ้าย-ขวาเสมอ

                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item "><a href="org1_Business_unit.php">Business Unit</a></li>
                                    <li class="breadcrumb-item"><a href="org2_Sub_Business_unit.php">Sub-business-unit</a></li>
                                    <li class="breadcrumb-item"><a href="org3_Organizaion.php">Organization-ID</a></li>
                                    <li class="breadcrumb-item"><a href="org4_Company.php">Company </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Location</li>
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
                    <div class="col-lg-8 col-md-6 col-sm-12 mb-30">
                        <div class="card-box pd-30 pt-10 height-100-p">
                            <h2 class="mb-30 h4 text-blue">รายการ สำนักงาน ทั้งหมดในระบบ</h2>
                            <p class="text-danger">* หมายเหตุ : หากต้องการลบตำแหน่ง Location จะต้องลบ Division ที่เกี่ยวข้องก่อนเสมอ</p>

                            <div class="pb-20">
                                <table class="data-table table stripe hover nowrap">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>บริษัท</th>
                                            <th>Location</th>
                                            <th>จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // เตรียมคำสั่ง SQL
                                        $sql4 = "SELECT * FROM location JOIN company ON location.company_id = company.company_id";

                                        $params4 = array();
                                        $i = 1;
                                        // ดึงข้อมูลจากฐานข้อมูล
                                        $stmt4 = sqlsrv_query($conn, $sql4, $params4);
                                        // ตรวจสอบการทำงานของคำสั่ง SQL
                                        if ($stmt4 === false) {
                                            die(print_r(sqlsrv_errors(), true));
                                        }

                                        // แสดงผลลัพธ์ในรูปแบบของตาราง HTML
                                        while ($row = sqlsrv_fetch_array($stmt4, SQLSRV_FETCH_ASSOC)) {
                                            echo "<tr>";
                                            echo "<td>" . $i++ . "</td>";
                                            echo "<td>" . $row["name_thai"] . ' <br> ' . $row["name_eng"] . "</td>";
                                            echo "<td>" . $row["name"] . "</td>";
                                            echo '<td><div class="flex"><form method="post" action="org5_Location.php" >',
                                            '<input type="hidden" name="location_id" value="' . $row['location_id'] . '">',
                                            '<button type="submit" name="delete_location" class="delete-btn_Org"><i class="fa-solid fa-trash-can"></i></button>',
                                            '</form>';
                                            echo '<button type="button" class="edit-btn_Org" onclick="openEdit_Location_Modal(\'' . $row['location_id'] . '\', \'' . $row['company_id'] . '\', \'' . $row['name'] . '\');">',
                                            '<i class="fa-solid fa-pencil"></i>',
                                            '</button></div></td>';
                                        }
                                        ?>

                                        <?php
                                        // -- DELETE  ค่า Business ตาม organization_id -->

                                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_location'])) {

                                            $location_id = $_POST['location_id'];
                                            $sql = "DELETE FROM location WHERE location_id = ?";
                                            $params = array($location_id);

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
                                                            title: "ระบบลบ Location ตามที่ระบุสำเร็จ ",
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

                    <!-- Modal Start -->
                    <div class="modal fade" id="editLocationModal" tabindex="-1" role="dialog" aria-labelledby="editLocationModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editLocationModalLabel">แก้ไขข้อมูล Location (สำนักงาน)</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Form for editing Location data -->
                                    <form id="editLocationForm" method="post" action="org5_Location.php">
                                        <input name="location_id" type="hidden" id="editLocationIdInput">
                                        <div class="form-group">
                                            <label for="editCompany">ชื่อ company (บริษัท)</label>
                                            <select name="company_id" class="custom-select form-control" required="true" autocomplete="off" id="editCompany">
                                                <?php
                                                // สร้าง options สำหรับ dropdown 2
                                                $sqlDropdown = "SELECT * FROM company";
                                                $resultDropdown = sqlsrv_query($conn, $sqlDropdown);

                                                // เช็ค error
                                                if ($resultDropdown === false) {
                                                    die(print_r(sqlsrv_errors(), true));
                                                }

                                                if ($resultDropdown) {
                                                    while ($row = sqlsrv_fetch_array($resultDropdown, SQLSRV_FETCH_ASSOC)) {
                                                        echo "<option value='"  . $row['company_id'] . "'>" . $row['name_thai'] . "</option>";
                                                    }
                                                }
                                                ?> </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="editLocationName">ชื่อ Location (สำนักงาน)</label>
                                            <input type="text" class="form-control" id="editLocationName" name="name" required autocomplete="off" style='text-transform:uppercase'>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary" name="update_location">บันทึกการแก้ไข</button>
                                        </div>
                                    </form>
                                    <?php
                                    // -- UPDATE Location based on location_id -->
                                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_location'])) {
                                        $location_id = $_POST['location_id'];
                                        $company_id = $_POST['company_id'];
                                        $location_name = $_POST['name'];

                                        // อัปเดตค่าของฟิลด์ company_id และ name
                                        $sqlUpdateLocation = "UPDATE location SET company_id = '$company_id', name = '$location_name' WHERE location_id = '$location_id'";
                                        $stmtUpdateLocation = sqlsrv_query($conn, $sqlUpdateLocation);

                                        if ($stmtUpdateLocation === false) {
                                            die(print_r(sqlsrv_errors(), true));
                                        } else {
                                            echo '<script type="text/javascript">
                                                    const Toast = Swal.mixin({
                                                        toast: true,
                                                        position: "top-end",
                                                        showConfirmButton: false,
                                                        timer: 980,
                                                        timerProgressBar: true,
                                                        didOpen: (toast) => {
                                                            toast.onmouseenter = Swal.stopTimer;
                                                            toast.onmouseleave = Swal.resumeTimer;
                                                        }
                                                    });
                                                    Toast.fire({
                                                        icon: "success",
                                                        title: "บันทึกข้อมูลสำนักงานสำเร็จ"
                                                    });
                                                </script>';

                                            echo "<meta http-equiv='refresh' content='1'>";
                                            exit; // จบการทำงานของสคริปต์ทันทีหลังจาก redirect
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal End -->

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                        <div class="card-box pd-30 pt-10 height-50-p">
                            <form name="save" method="post" action="org5_Location.php">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>ชื่อ company (บริษัท)</label>
                                            <select name="company_id" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value="" disabled selected>---- โปรดระบุ company (บริษัท) ----</option>
                                                <?php
                                                // สร้าง options สำหรับ dropdown 2
                                                $sqlDropdown5 = "SELECT * FROM company";
                                                $resultDropdown5 = sqlsrv_query($conn, $sqlDropdown5);

                                                // เช็ค error
                                                if ($resultDropdown5 === false) {
                                                    die(print_r(sqlsrv_errors(), true));
                                                }

                                                if ($resultDropdown5) {
                                                    while ($row = sqlsrv_fetch_array($resultDropdown5, SQLSRV_FETCH_ASSOC)) {
                                                        echo "<option value='"  . $row['company_id'] . "'>" . $row['name_thai'] . "</option>";
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
                                            <label>ชื่อ Location (สำนักงาน)</label>
                                            <input name="name" type="text" class="form-control" required="true" autocomplete="off" style='text-transform:uppercase'>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-right">
                                        <div class="dropdown">
                                            <input class="btn btn-primary" type="submit" value="เพิ่ม Location (สำนักงาน)" name="submit">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                        <?php
                        // PHP สำหรับการ Insert ข้อมูลลงในฐานข้อมูล SQL Server 
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if (isset($_POST['submit'])) {
                                $companyid = $_POST['company_id'];
                                $loname = $_POST['name'];

                                // ค่าไม่ว่าง ทำการ insert ข้อมูล
                                $sqlInsert = "INSERT INTO location (company_id, name) VALUES ('$companyid', '$loname')";
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
                                                timer: 950,
                                                timerProgressBar: true,
                                                didOpen: (toast) => {
                                                    toast.onmouseenter = Swal.stopTimer;
                                                    toast.onmouseleave = Swal.resumeTimer;
                                                }
                                            });
                                            Toast.fire({
                                                icon: "success",
                                                title: "บันทึกข้อมูล Location (สำนักงาน) สำเร็จ"
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

            <?php include('../admin/include/footer.php'); ?>
        </div>
    </div>
    <!-- js -->

    <?php include('../admin/include/scripts.php') ?>
</body>

</html>