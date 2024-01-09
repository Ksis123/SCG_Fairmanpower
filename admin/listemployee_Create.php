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
                                <h3>ข้อมูลพนักงานเบื้องต้น</h3>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="listemployee.php">รายการข้อมูลพนักงานทั้งหมด</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">ข้อมูลพนักงานเบื้องต้น</li>
                                    <li class="breadcrumb-item"><a href="listemployee_Info.php">ประวัติส่วนตัว</a></li>
                                    <li class="breadcrumb-item"><a href="listemployee_Education.php">ประวัติการศึกษา</a></li>
                                    <li class="breadcrumb-item"><a href="listemployee_Workinfo.php">ประวัติการทำงาน</a></li>
                                    <li class="breadcrumb-item"><a href="listemployee_Manager.php">ผู้จัดการ</a></li>
                                    <li class="breadcrumb-item"><a href="listemployee_Report_to.php">report-to</a></li>

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
							<h4 class="text-blue h4">แบบฟอร์มข้อมูลพนักงานเบื้องต้น</h4>
							<p class="mb-20"></p>
						</div>
                    </div>
                    <div class="wizard-content">
                        <form method="post" action="listemployee_Create.php">
                            <section>
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>รหัสบัตรประชาชนพนักงาน (Card_id) : <b class="text-danger"><i class="fa-solid fa-circle-exclamation"></i> </b></label>
                                            <input name="card_id" placeholder="1949999999991" type="number" maxlength="13" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>รหัสส่วนบุคคล (Personal Number) <b class="text-danger"> * </b> </label>
                                            <input name="person_id" placeholder="1002479" type="number" maxlength="7" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>รหัสประจำตัวบุคคล <b class="text-danger"> * </b> </label>
                                            <input name="personnel_number" placeholder="1002247" type="number" maxlength="7" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>รหัสพนักงาน (SCG Employee) <b class="text-danger"> * </b> </label>
                                            <input name="scg_employee_id" placeholder="0150-1141" type="text" maxlength="11" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <hr />

                                <div class="row">
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>คำนำหน้าชื่อ (ไทย)</label>
                                            <select name="prefix_thai" class="custom-select form-control" autocomplete="off">
                                                <option value=" " disabled selected>ระบุคำนำหน้าชื่อ</option>
                                                <option value="นาย">นาย</option>
                                                <option value="นาง">นาง</option>
                                                <option value="นางสาว">นางสาว</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>ชื่อจริง (ไทย) <b class="text-danger"> * </b></label>
                                            <input name="firstname_thai" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>นามสกุล (ไทย) <b class="text-danger"> * </b></label>
                                            <input name="lastname_thai" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>ชื่อเล่น (ไทย) <b class="text-danger"> * </b></label>
                                            <input name="nickname_thai" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>วันเกิดพนักงาน</label>
                                            <input name="birth_date" type="text" class="form-control date-picker" autocomplete="off">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>คำนำหน้าชื่อ (อังกฤษ)</label>
                                            <select name="prefix_eng" class="custom-select form-control" autocomplete="off">
                                                <option disabled selected>ระบุคำนำหน้าชื่อ</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
                                                <option value="Miss.">Miss.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>ชื่อจริง (อังกฤษ) <b class="text-danger"> * </b></label>
                                            <input name="firstname_eng" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>นามสกุล (อังกฤษ) <b class="text-danger"> * </b></label>
                                            <input name="lastname_eng" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>ชื่อเล่น (อังกฤษ) <b class="text-danger"> * </b></label>
                                            <input name="nickname_eng" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <div class="form-group">
                                            <label>อายุ</label>
                                            <div class="flex">
                                                <input name="age_year" type="number" placeholder="ปี" maxlength="2" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control wizard-required" autocomplete="off">

                                                <input name="age_month" type="number" placeholder="เดือน" maxlength="2" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control wizard-required" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-1 col-sm-12">
                                        <div class="form-group">
                                            <label>กรุ๊ปเลือด</label>
                                            <select name="blood_type" class="custom-select form-control" autocomplete="off">
                                                <option disabled selected></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>สถานะความสัมพันธ์</label>
                                            <select name="marital_status" class="custom-select form-control" autocomplete="off">
                                                <option value="" disabled selected>ระบุสถานะความสัมพันธ์</option>
                                                <option value="โสด">โสด</option>
                                                <option value="มีแฟนแล้ว">มีแฟนแล้ว</option>
                                                <option value="แต่งงานแล้ว">แต่งงานแล้ว</option>
                                                <option value="หม้าย">หม้าย</option>
                                                <option value="หย่าระหว่างปี">หย่าระหว่างปี</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>สัญชาติ</label>
                                            <select name="nation" class="custom-select form-control" autocomplete="off">
                                                <option value="" disabled selected>ระบุสัญชาติ</option>
                                                <option value="ไทย">ไทย</option>
                                                <option value="ต่างชาติ">ต่างชาติ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>เชื้อชาติ</label>
                                            <select name="ethnicity" class="custom-select form-control" autocomplete="off">
                                                <option value="" disabled selected>ระบุเชื้อชาติ</option>
                                                <option value="ไทย">ไทย</option>
                                                <option value="ต่างชาติ">ต่างชาติ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>ศาสนา</label>
                                            <select name="religion" class="custom-select form-control" autocomplete="off">
                                                <option value="" disabled selected>ระบุศาสนา</option>
                                                <option value="พุทธ">พุทธ</option>
                                                <option value="คริสต์">คริสต์</option>
                                                <option value="อิสลาม">อิสลาม </option>
                                                <option value="ฮินดู">ฮินดู</option>
                                                <option value="ไม่นับถือ">ไม่นับถือ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>เบอร์โทรพนักงาน</label>
                                            <input name="phone_number" type="number" class="form-control" autocomplete="off" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>เลขประกันสังคม</label>
                                            <input name="social_security_id" type="number" placeholder=" ************* " maxlength="13" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>เลขประจำตัวผู้เสียภาษี</label>
                                            <input name="tax_id" type="number" placeholder=" ************* " maxlength="13" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>ประเภทพนักงาน <b class="text-danger"> * </b></label>
                                            <select name="contract_type_id" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value="" disabled selected>ระบุประเภทพนักงาน</option>
                                                <?php
                                                $sqlDropdown_type = "SELECT * FROM contract_type";
                                                $resultDropdown_type = sqlsrv_query($conn, $sqlDropdown_type);

                                                if ($resultDropdown_type === false) {
                                                    die(print_r(sqlsrv_errors(), true));
                                                }
                                                if ($resultDropdown_type) {
                                                    while ($row = sqlsrv_fetch_array($resultDropdown_type, SQLSRV_FETCH_ASSOC)) {
                                                        echo "<option value='"  . $row['contract_type_id'] . "'>" . $row['organization_id'] . ' ' . $row['name_eng'] . "</option>";
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>บทบาทสิทธิ์การเข้าถึง <b class="text-danger"> * </b></label>
                                            <select name="permission_id" class="custom-select form-control" require autocomplete="off">
                                                <option value="" disabled selected>ระบุสิทธิ์การเข้าถึง</option>
                                                <?php
                                                $sqlDropdown_cost = "SELECT * FROM permission";
                                                $resultDropdown_cost = sqlsrv_query($conn, $sqlDropdown_cost);

                                                if ($resultDropdown_cost === false) {
                                                    die(print_r(sqlsrv_errors(), true));
                                                }
                                                if ($resultDropdown_cost) {
                                                    while ($row = sqlsrv_fetch_array($resultDropdown_cost, SQLSRV_FETCH_ASSOC)) {
                                                        echo "<option value='"  . $row['permission_id'] . "'>" . $row['permission_id'] . ' ' . $row['name'] . "</option>";
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>หมายเลข Cost-Center สำหรับระบุองค์กรภายใน <b class="text-danger"> * </b></label>
                                            <select name="cost_center_organization_id" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value="" disabled selected>ระบุ Cost-Center (องค์กรภายใน)</option>
                                                <?php
                                                $sqlDropdown_cost = "SELECT cost_center_id , section.name_thai as section, department.name_thai as department 
                                                FROM cost_center 								
                                                INNER JOIN section ON section.section_id = cost_center.section_id
                                                INNER JOIN department ON department.department_id = section.department_id";

                                                $resultDropdown_cost = sqlsrv_query($conn, $sqlDropdown_cost);

                                                if ($resultDropdown_cost === false) {
                                                    die(print_r(sqlsrv_errors(), true));
                                                }
                                                if ($resultDropdown_cost) {
                                                    while ($row = sqlsrv_fetch_array($resultDropdown_cost, SQLSRV_FETCH_ASSOC)) {
                                                        echo "<option value='"  . $row['cost_center_id'] . "'>" . $row['cost_center_id'] . ' : '  . $row['department'] . ' : '  . $row['section'] . "</option>";
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group ">
                                            <label class="text-left">ระบุเพศ</label>
                                            <div class="text-left flex col-md-4">
                                                <input type="radio" name="gender" value="ชาย"><a style="color: #3fa7f2"><i class="fa-solid fa-mars fa-lg" style="color: #3fa7f2"></i>ชาย</a><br>
                                                <input type="radio" name="gender" value="หญิง"><a style="color: #fc5ba1"><i class="fa-solid fa-venus fa-lg"></i>หญิง</a><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>อีเมลพนักงาน</label>
                                            <input name="employee_email" placeholder="example@scg.com" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>สถานะการทำงาน</label>
                                            <select name="employment_status" class="custom-select form-control" autocomplete="off">
                                                <option value="" disabled selected>ระบุสถานะการทำงาน</option>
                                                <option value="ACTIVE">ทำงาน</option>
                                                <option value="IN-ACTIVE">พักงาน / ลางาน</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>หมายเลข Cost-Center สำหรับระบุองค์กรภายนอก <b class="text-danger"> * </b></label>
                                            <select name="cost_center_payment_id" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value="" disabled selected>ระบุ Cost-Center (องค์กรภายนอก)</option>
                                                <?php
                                                $sqlDropdown_cost = "SELECT cost_center_id , section.name_thai as section, department.name_thai as department 
                                                FROM cost_center 								
                                                INNER JOIN section ON section.section_id = cost_center.section_id
                                                INNER JOIN department ON department.department_id = section.department_id";

                                                $resultDropdown_cost = sqlsrv_query($conn, $sqlDropdown_cost);

                                                if ($resultDropdown_cost === false) {
                                                    die(print_r(sqlsrv_errors(), true));
                                                }
                                                if ($resultDropdown_cost) {
                                                    while ($row = sqlsrv_fetch_array($resultDropdown_cost, SQLSRV_FETCH_ASSOC)) {
                                                        echo "<option value='"  . $row['cost_center_id'] . "'>" . $row['cost_center_id'] . ' : '  . $row['department'] . ' : '  . $row['section'] . "</option>";
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>วันที่เริ่มทดลองงาน</label>
                                            <input name="probation_date_start" type="text" class="form-control date-picker" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>ระยะเวลาทดลองงาน</label>
                                            <input name="probation_period" type="number" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>วันที่สิ้นสุดการทดลองงาน</label>
                                            <input name="probation_date_end" type="text" class="form-control date-picker" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>วันที่เริ่มงาน SCG </label>
                                            <input name="scg_hiring_date" type="text" class="form-control date-picker" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>วันที่เกษียณ</label>
                                            <input name="retired_date" type="text" class="form-control date-picker" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>วันที่สิ้นสุดการจ้าง</label>
                                            <input name="termination_date" type="text" class="form-control date-picker" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>เลือกธนาคาร</label>
                                            <select name="bank_name" class="custom-select form-control" autocomplete="off">
                                                <option value="" disabled selected>ระบุธนาคาร</option>
                                                <option value="KBANK">KBANK กสิกรไทย</option>
                                                <option value="BBL">BBL กรุงเทพ</option>
                                                <option value="KTB">KTB กรุงไทย</option>
                                                <option value="BAY">BAY กรุงศรี</option>
                                                <option value="TMB">TMB ทหารไทยธนชาต</option>
                                                <option value="SCB">SCB ไทยพาณิชย์</option>
                                                <option value="GSB">GSB ออมสิน</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>สาขาธนาคาร</label>
                                            <input name="bank_branch_name" placeholder="ระบุสาขาธนาคาร" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>เลขบัญชีธนาคาร</label>
                                            <input name="back_account_id" placeholder="ระบุหมายเลขบัญชี" type="number" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" autocomplete="off" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>Work / scale</label>
                                            <select name="work_per_day" class="custom-select form-control" autocomplete="off">
                                                <option value="" disabled selected></option>
                                                <option value="1">1 วัน</option>
                                                <option value="2">2 วัน</option>
                                                <option value="3">3 วัน</option>
                                                <option value="4">4 วัน</option>
                                                <option value="5">5 วัน</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <hr />

                                <div class="row">

                                    <div class="col-md-3 col-sm-1">
                                        <div class="form-group">
                                            <label style="font-size:24px;"><b></b></label>
                                            <div class="justify-content-left">
                                                <button style="font-size:20px;" onclick="location.href='listemployee.php'" type="button" class="btn btn-default" data-dismiss="modal"><i class="fa-solid fa-circle-left"> </i> ย้อนกลับ</button>
                                                <!-- color:#AAAAAA -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-1">
                                        <div class="form-group">
                                            <label style="font-size:16px;"><b></b></label>
                                            <div class="text-right">
                                                <button class="btn btn-primary" name="add_employee" id="add_employee" data-toggle="modal">บันทึก&nbsp;ข้อมูลพนักงาน</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </section>
                        </form>

                        <?php

                        // -------- INSERT ค่า Employee ตาม card_id PK-->

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if (isset($_POST['add_employee'])) {
                                $card_id = $_POST['card_id'];
                                $person_id = $_POST['person_id'];
                                $personnel_number = $_POST['personnel_number'];
                                $scg_employee_id = $_POST['scg_employee_id'];

                                $prefix_thai = $_POST['prefix_thai'];
                                $firstname_thai = $_POST['firstname_thai'];
                                $lastname_thai = $_POST['lastname_thai'];

                                $prefix_eng = $_POST['prefix_eng'];
                                $firstname_eng = $_POST['firstname_eng'];
                                $lastname_eng = $_POST['lastname_eng'];

                                // Add placeholders for the missing fields
                                $birth_date = $_POST['birth_date'];
                                $age_year = $_POST['age_year'];
                                $age_month = $_POST['age_month'];
                                $blood_type = $_POST['blood_type'];
                                $marital_status = $_POST['marital_status'];
                                $nation = $_POST['nation'];
                                $ethnicity = $_POST['ethnicity'];
                                $religion = $_POST['religion'];
                                $phone_number = $_POST['phone_number'];
                                $social_security_id = $_POST['social_security_id'];
                                $tax_id = $_POST['tax_id'];
                                $contract_type_id = $_POST['contract_type_id'];
                                $permission_id = $_POST['permission_id'];
                                $cost_center_organization_id = $_POST['cost_center_organization_id'];
                                $cost_center_payment_id = $_POST['cost_center_payment_id'];
                                $gender = $_POST['gender'];
                                $employee_email = $_POST['employee_email'];
                                $employment_status = $_POST['employment_status'];
                                $scg_hiring_date = $_POST['scg_hiring_date'];
                                $retired_date = $_POST['retired_date'];
                                $termination_date = $_POST['termination_date'];
                                $probation_date_start = $_POST['probation_date_start'];
                                $probation_period = $_POST['probation_period'];
                                $probation_date_end = $_POST['probation_date_end'];
                                $bank_name = $_POST['bank_name'];
                                $bank_branch_name = $_POST['bank_branch_name'];
                                $back_account_id = $_POST['back_account_id'];
                                $work_per_day = $_POST['work_per_day'];

                                // ค่าไม่ว่าง ทำการ insert ข้อมูล
                                $sqlInsert = "INSERT INTO employee (card_id, person_id, personnel_number, scg_employee_id, 
                                            prefix_thai, firstname_thai, lastname_thai, birth_date,
                                            prefix_eng, firstname_eng, lastname_eng, age_year, age_month,
                                            blood_type, marital_status, nation, ethnicity, religion, phone_number,
                                            social_security_id, tax_id, contract_type_id, permission_id , cost_center_organization_id, cost_center_payment_id,
                                            gender, employee_email, employment_status,
                                            scg_hiring_date, retired_date, termination_date, probation_date_start, probation_period, probation_date_end,
                                            bank_name, bank_branch_name, back_account_id ,work_per_day
                                            ) 
                        VALUES ('$card_id', '$person_id', '$personnel_number','$scg_employee_id' ,'$prefix_thai', '$firstname_thai', '$lastname_thai', '$birth_date',
                                '$prefix_eng', '$firstname_eng', '$lastname_eng', '$age_year', '$age_month',
                                '$blood_type', '$marital_status', '$nation', '$ethnicity', '$religion', '$phone_number',
                                '$social_security_id', '$tax_id', '$contract_type_id', '$permission_id', '$cost_center_organization_id', '$cost_center_payment_id',
                                '$gender', '$employee_email', '$employment_status',
                                '$scg_hiring_date', '$retired_date', '$termination_date', '$probation_date_start', '$probation_period', '$probation_date_end',
                                '$bank_name', '$bank_branch_name', '$back_account_id', '$work_per_day')";
                                // $params = array($selectedValue1, $nameTH, $nameENG);
                                $stmt = sqlsrv_query($conn, $sqlInsert);

                                if ($stmt === false) {
                                    die(print_r(sqlsrv_errors(), true));
                                } else {
                                    echo '<script type="text/javascript">
                                                const swalWithBootstrapButtons = Swal.mixin({
                                                    customClass: {
                                                        confirmButton: "green-swal",
                                                        cancelButton: "edit-swal"
                                                    },
                                                    buttonsStyling: false
                                                });
                                                swalWithBootstrapButtons.fire({
                                                    icon: "success",
                                                    title: "ระบบลงทะเบียนพนักงานใหม่สำเร็จ ",
                                                    text: "อีกสักครู่ ...ระบบจะทำการรีเฟส",
                                                    confirmButtonText: "ตกลง",
                                                    confirmButtonColor: "#ffffff",

                                                })
                                            </script>';
                                    echo "<meta http-equiv='refresh' content='2;URL=listemployee.php'/>";
                                    exit();
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php include('../admin/include/footer.php') ?>
        </div>
    </div>
    <!-- js -->
    <?php include('../admin/include/scripts.php') ?>

</body>

</html>