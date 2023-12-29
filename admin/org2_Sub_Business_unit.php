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
                                <h3>ข้อมูลโครงสร้างองค์กร : Sub-business-unit</h3>
                                <p class="text-primary">โครงสร้างทั้ง 9 ลำดับขั้นจะเริ่มเรียงจากซ้าย-ขวาเสมอ

                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item "><a href="org1_Business_unit.php">Business Unit</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Sub-business-unit</li>
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
                            <h2 class="mb-30 h4 text-blue">รายการ Sub-business-unit ทั้งหมดในระบบ</h2>
                            <p class="text-danger">* หมายเหตุ : หากต้องการลบระดับ Sub-business ต้องลบหมายเลข OrganizationID ที่เกี่ยวข้องก่อนเสมอ</p>

                            <div class="pb-20">
                                <table class="data-table table stripe hover nowrap">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>Business ID</th>
                                            <th>Sub-business-unit (TH)</th>
                                            <th>Sub-business-unit (ENG)</th>
                                            <th>จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // เตรียมคำสั่ง SQL
                                        $sql2 = "SELECT * FROM sub_business";
                                        $params2 = array();
                                        $i = 1;
                                        // ดึงข้อมูลจากฐานข้อมูล
                                        $stmt2 = sqlsrv_query($conn, $sql2, $params2);
                                        // ตรวจสอบการทำงานของคำสั่ง SQL
                                        if ($stmt2 === false) {
                                            die(print_r(sqlsrv_errors(), true));
                                        }
                                        // แสดงผลลัพธ์ในรูปแบบของตาราง HTML
                                        while ($row = sqlsrv_fetch_array($stmt2, SQLSRV_FETCH_ASSOC)) {
                                            echo "<tr>";
                                            echo "<td>" . $i++ . "</td>";
                                            echo "<td>" . $row["business_id"] . "</td>";
                                            echo "<td>" . $row["name_thai"] . "</td>";
                                            echo "<td>" . $row["name_eng"] . "</td>";
                                            echo '<td><div class="flex"><form method="post" action="org2_Sub_Business_unit.php">',
                                            '<input type="hidden" name="sub_business_id" value="' . $row['sub_business_id'] . '">',
                                            '<button type="submit" name="delete_sub_business" class="delete-btn_Org"><i class="fa-solid fa-trash-can"></i></button>',
                                            '</form>';
                                            echo '<form >',
                                            '<input type="hidden" name="sub_business_id" value="' . $row['sub_business_id'] . '">',
                                            '<button type="submit" name="edit_sub_business" class="edit-btn_Org"  ><i class="fa-solid fa-pencil"></i></button>',
                                            '</form></div></td>';
                                            echo "</tr>";
                                        }
                                        ?>
                                        <?php

                                        // ----- DELETE  ค่า Business ตาม sub_business_id -->

                                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_sub_business'])) {
                                            
                                            $sub_business_id = $_POST['sub_business_id'];
                                            $sql = "DELETE FROM sub_business WHERE sub_business_id = ?";
                                            $params = array($sub_business_id);

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
                                                            title: "ระบบลบข้อมูล Sub-Business-Unit สำเร็จ",
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                        <div class="card-box pd-30 pt-10 height-50-p">
                            <h2 class="mb-30 h4"></h2>
                            <section>
                                <form name="save" method="post" action="org2_Sub_Business_unit.php">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ระบุ Business ID</label>
                                                <select id="business_id" name="business_id" class="custom-select form-control" required="true" autocomplete="off">
                                                    <option value="" disabled selected>-- โปรดระบุ Business ID --</option>
                                                    <?php
                                                    // สร้าง options สำหรับ dropdown 2
                                                    $sqlDropdown2 = "SELECT * FROM business";
                                                    $resultDropdown2 = sqlsrv_query($conn, $sqlDropdown2);

                                                    // เช็ค error
                                                    if ($resultDropdown2 === false) {
                                                        die(print_r(sqlsrv_errors(), true));
                                                    }

                                                    if ($resultDropdown2) {
                                                        while ($row = sqlsrv_fetch_array($resultDropdown2, SQLSRV_FETCH_ASSOC)) {
                                                            echo "<option value='"  . $row['business_id'] . "'>" . $row['business_id'] . ' ' . $row['name_thai'] . "</option>";
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
                                                <label>ชื่อ Sub-Business-Unit (TH)</label>
                                                <input name="name_thai" type="text" class="form-control" required="true" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ชื่อ Sub-Business-Unit (ENG)</label>
                                                <input name="name_eng" type="text" class="form-control" required="true" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="dropdown">
                                            <input class="btn btn-primary" type="submit" value=" เพิ่ม Sub-Business" name="submit">
                                        </div>
                                    </div>
                                </form>
                                <?php
                                // PHP สำหรับการ Insert ข้อมูลลงในฐานข้อมูล SQL Server 
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    if (isset($_POST['submit'])) {
                                        $selectedValue1 = $_POST['business_id'];
                                        $nameTH = $_POST['name_thai'];
                                        $nameENG = $_POST['name_eng'];

                                        // ค่าไม่ว่าง ทำการ insert ข้อมูล
                                        $sqlInsert = "INSERT INTO sub_business (business_id, name_thai, name_eng) VALUES ('$selectedValue1', '$nameTH', '$nameENG')";
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
                                                title: "บันทึก Sub-Business-Unit สำเร็จ"
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
                <div>
                </div>

                <?php include('../admin/include/footer.php'); ?>
            </div>
        </div>
        <!-- js -->

        <?php include('../admin/include/scripts.php') ?>
</body>

</html>