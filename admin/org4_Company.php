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
                                <h3>ข้อมูลโครงสร้างองค์กร : Company (บริษัท)</h3>
                                <p class="text-primary">โครงสร้างทั้ง 9 ลำดับขั้นจะเริ่มเรียงจากซ้าย-ขวาเสมอ

                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item "><a href="org1_Business_unit.php">Business Unit</a></li>
                                    <li class="breadcrumb-item"><a href="org2_Sub_Business_unit.php">Sub-business-unit</a></li>
                                    <li class="breadcrumb-item"><a href="org3_Organizaion.php">Organization-ID</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Company</li>
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
                    <div class="col-lg-12 col-md-6 col-sm-12 mb-30">
                        <div class="card-box pd-30 pt-10 height-100-p">
                            <form name="save" method="post" action="org4_Company.php">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>หมายเลข Organization-ID</label>
                                            <select name="organization_id" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value="" disabled selected>-- โปรดระบุ Organization-ID --</option>
                                                <?php
                                                // สร้าง options สำหรับ dropdown 2
                                                $sqlDropdown4 = "SELECT * FROM organization";
                                                $resultDropdown4 = sqlsrv_query($conn, $sqlDropdown4);

                                                // เช็ค error
                                                if ($resultDropdown4 === false) {
                                                    die(print_r(sqlsrv_errors(), true));
                                                }

                                                if ($resultDropdown4) {
                                                    while ($row = sqlsrv_fetch_array($resultDropdown4, SQLSRV_FETCH_ASSOC)) {
                                                        echo "<option value='"  . $row['organization_id'] . "'>" . $row['organization_id'] . "</option>";
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>ชื่อ บริษัท (TH)</label>
                                            <input name="name_thai" type="text" class="form-control" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>ชื่อ บริษัท (ENG)</label>
                                            <input name="name_eng" type="text" class="form-control" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 text-right">
                                    <div class="dropdown">
                                        <input class="btn btn-primary" type="submit" value="เพิ่ม Company (บริษัท)" name="submit">
                                    </div>
                                </div>
                        </div>
                        </form>
                        <?php
                        // PHP สำหรับการ Insert ข้อมูลลงในฐานข้อมูล SQL Server 
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if (isset($_POST['submit'])) {
                                $orgid = $_POST['organization_id'];
                                $nameTH = $_POST['name_thai'];
                                $nameENG = $_POST['name_eng'];

                                // ค่าไม่ว่าง ทำการ insert ข้อมูล
                                $sqlInsert = "INSERT INTO company (organization_id, name_thai, name_eng) VALUES ('$orgid', '$nameTH', '$nameENG')";
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
                                                title: "บันทึกข้อมูล Company (บริษัท) สำเร็จ"
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
                <div class="col-lg-12 col-md-6 col-sm-12 mb-30">
                    <div class="card-box pd-30 pt-10 height-100-p">
                        <h2 class="mb-30 h4 text-blue">รายการ บริษัททั้งหมดในระบบ</h2>
                        <p class="text-danger">* หมายเหตุ : หากต้องการลบชื่อ Company (บริษัท) จะต้องลบ Location (สำนักงาน) ที่เกี่ยวข้องก่อนเสมอ</p>

                        <div class="pb-20">
                            <table class="data-table table stripe hover nowrap">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>Organization-ID</th>
                                        <th>ชื่อบริษัท (TH)</th>
                                        <th>ชื่อบริษัท (ENG)</th>
                                        <th>จัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // เตรียมคำสั่ง SQL
                                    $sql4 = "SELECT * FROM company";
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
                                        echo "<td>" . $row["organization_id"] . "</td>";
                                        echo "<td>" . $row["name_thai"] . "</td>";
                                        echo "<td>" . $row["name_eng"] . "</td>";
                                        echo '<td><div class="flex"><form method="post" action="org4_Company.php" >',
                                        '<input type="hidden" name="company_id" value="' . $row['company_id'] . '">',
                                        '<button type="submit" name="delete_company" class="delete-btn_Org"><i class="fa-solid fa-trash-can"></i></button>',
                                        '</form>';
                                        echo '<button type="button" class="edit-btn_Org" onclick="openEdit_Company_Modal(\'' . $row['company_id'] . '\', \'' . $row['organization_id'] . '\', \'' . $row['name_thai'] . '\', \'' . $row['name_eng'] . '\');">',
                                        '<i class="fa-solid fa-pencil"></i>',
                                        '</button></div></td>';
                                        echo "</tr>";
                                    }
                                    ?>
                                    <?php
                                    // -- DELETE  ค่า Business ตาม organization_id -->

                                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_company'])) {

                                        $company_id = $_POST['company_id'];
                                        $sql = "DELETE FROM company WHERE company_id = ?";
                                        $params = array($company_id);

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
                                                            title: "ระบบลบ ชื่อบริษัท ตามที่ระบุสำเร็จ ",
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
                <div class="modal fade" id="editCompanyModal" tabindex="-1" role="dialog" aria-labelledby="editCompanyModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editCompanyModalLabel">แก้ไขข้อมูลบริษัท</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Form for editing Company data -->
                                <form id="editCompanyForm" method="post" action="org4_Company.php">
                                    <input name="company_id" type="hidden" id="editCompanyIdInput">
                                    <div class="form-group">
                                        <label for="editOrganizationId">หมายเลข Organization-ID</label>
                                        <select name="organization_id" class="custom-select form-control" required="true" autocomplete="off" id="editOrganizationId">
                                            <?php
                                            // สร้าง options สำหรับ dropdown 2
                                            $sqlDropdown = "SELECT * FROM organization";
                                            $resultDropdown = sqlsrv_query($conn, $sqlDropdown);

                                            // เช็ค error
                                            if ($resultDropdown === false) {
                                                die(print_r(sqlsrv_errors(), true));
                                            }

                                            if ($resultDropdown) {
                                                while ($row = sqlsrv_fetch_array($resultDropdown, SQLSRV_FETCH_ASSOC)) {
                                                    echo "<option value='"  . $row['organization_id'] . "'>" . $row['organization_id'] . "</option>";
                                                }
                                            }
                                            ?> 
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="editNameThai">ชื่อ บริษัท (TH)</label>
                                        <input type="text" class="form-control" id="editNameThai" name="name_thai" required autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="editNameEng">ชื่อ บริษัท (ENG)</label>
                                        <input type="text" class="form-control" id="editNameEng" name="name_eng" required autocomplete="off">
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary" name="update_company">บันทึกการแก้ไข</button>
                                    </div>
                                </form>
                                <?php
                                // -- UPDATE Company based on company_id -->
                                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_company'])) {
                                    $company_id = $_POST['company_id'];
                                    $organization_id = $_POST['organization_id'];
                                    $nameTH = $_POST['name_thai'];
                                    $nameENG = $_POST['name_eng'];

                                    // อัปเดตค่าของฟิลด์ organization_id, name_thai และ name_eng
                                    $sqlUpdateCompany = "UPDATE company SET organization_id = '$organization_id', name_thai = '$nameTH', name_eng = '$nameENG' WHERE company_id = '$company_id'";
                                    $stmtUpdateCompany = sqlsrv_query($conn, $sqlUpdateCompany);

                                    if ($stmtUpdateCompany === false) {
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
                                                    title: "แก้ไขข้อมูลบริษัทสำเร็จ"
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
            </div>

        </div>

        <?php include('../admin/include/footer.php'); ?>
    </div>
    </div>
    <!-- js -->

    <?php include('../admin/include/scripts.php') ?>
</body>

</html>