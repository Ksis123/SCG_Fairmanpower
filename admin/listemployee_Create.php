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
                        <!-- <div class="pull-left">
							<h4 class="text-blue h4">แบบฟอร์มข้อมูลพนักงานเบื้องต้น</h4>
							<p class="mb-20"></p>
						</div> -->
                    </div>
                    <div class="wizard-content">
                        <form method="post" action="">
                            <section>

                                <div class="row">
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>คำนำหน้าชื่อ (ภาษาไทย)</label>
                                            <select name="prefix_th" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value="" disabled selected>ระบุคำนำหน้าชื่อ</option>
                                                <option value="นาย">นาย</option>
                                                <option value="นาง">นาง</option>
                                                <option value="นางสาว">นางสาว</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>ชื่อจริง (ภาษาไทย)</label>
                                            <input name="firstname_thai" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>นามสกุล (ภาษาไทย)</label>
                                            <input name="lastname_thai" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>ชื่อเล่น (ภาษาไทย)</label>
                                            <input name="nickname_thai" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>วันเกิดพนักงาน</label>
                                            <input name="birth_date" type="text" class="form-control date-picker" required="true" autocomplete="off">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>คำนำหน้าชื่อ (ภาษาอังกฤษ)</label>
                                            <select name="prefix_eng" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value="" disabled selected>ระบุคำนำหน้าชื่อ</option>
                                                <option value="MR.">MR.</option>
                                                <option value="MS.">MS.</option>
                                                <option value="MRS.">MRS.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>ชื่อจริง (ภาษาอังกฤษ)</label>
                                            <input name="firstname_eng" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>นามสกุล (ภาษาอังกฤษ)</label>
                                            <input name="lastname_eng" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>ชื่อเล่น (ภาษาอังกฤษ)</label>
                                            <input name="nickname_eng" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <div class="form-group">
                                            <label>อายุ</label>
                                            <div class="flex">
                                                <input name="age_year" type="number" placeholder="ปี" class="form-control wizard-required" required="true" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <div class="form-group">
                                            <label>.</label>

                                            <div class="flex">
                                                <input name="age_month" type="number" placeholder="เดือน" class="form-control wizard-required" required="true" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>รหัสบัตรประชาชนของพนักงาน (Card_id)</label>
                                            <input name="card_id" placeholder="1949999999991" type="number" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>รหัสส่วนบุคคล (Personal Number)</label>
                                            <input name="person_id" placeholder="1002479" type="number" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>รหัสประจำตัวบุคคล (Personnel Number)</label>
                                            <input name="personnel_number" placeholder="1002247" type="number" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>รหัสพนักงาน (SCG Employee)</label>
                                            <input name="scg_employee_id" placeholder="0150-1141" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>เลขประกันสังคม</label>
                                            <input name="social_security_id" type="password" placeholder="**********" class="form-control" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>เลขประจำตัวผู้เสียภาษี</label>
                                            <input name="tax_id" type="text" placeholder="**********" class="form-control" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>ประเภทพนักงาน</label>
                                            <select name="contract_type_id" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value="" disabled selected>ระบุประเภทพนักงาน</option>
                                                <option value="พนักงานประจำ">พนักงานประจำ</option>
                                                <option value="Outsource">Outsource</option>
                                                <option value="สัญญาจ้างพิเศษ">สัญญาจ้างพิเศษ</option>
                                                <option value="นักศึกษาฝึกงาน">นักศึกษาฝึกงาน</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>ตำแหน่ง</label>
                                            <select name="position_text_thai" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value="" disabled selected>ระบุตำแหน่งพนักงาน</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>แผนก</label>
                                            <select name="department_text_thai" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value="" disabled selected>ระบุแผนกพนักงาน</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>ระดับ PL</label>
                                            <select name="pl_text_thai" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value="" disabled selected>ระบุระดับ PL พนักงาน</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group ">
                                            <label class="text-left">ระบุเพศ</label>
                                            <div class="text-left flex col-md-4">
                                                <input type="radio" name="gender" value="male" checked>ชาย <br>
                                                <input type="radio" name="gender" value="female" checked> หญิง<br>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>วันที่เริ่มงาน SCG :</label>
                                            <input name="scg_pro_date" type="text" class="form-control date-picker" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>วันที่บรรจุ SCG :</label>
                                            <input name="scg_hiring_date" type="text" class="form-control date-picker" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>วันที่เกษียณ</label>
                                            <input name="retired_date" type="text" class="form-control date-picker" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>วันที่สิ้นสุดการจ้าง</label>
                                            <input name="termination_date" type="text" class="form-control date-picker" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>ระยะเวลาทดลองงาน</label>
                                            <input name="pro_date" type="number" class="form-control" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>อีเมล</label>
                                            <input name="employee_email" placeholder="example@scg.com" type="text" class="form-control" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>รหัสผ่าน</label>
                                            <input name="employee_password" placeholder="*********" type="text" class="form-control" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>รหัสคอสเซนเตอร์</label>
                                            <select name="cost_center_id" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value=""></option>
                                                <option value="0150-93210">0150-93210</option>
                                                <option value="0150-90200">0150-90200</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>รหัสสถานะการทำงาน</label>
                                            <select name="employment_status_id" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value=""></option>
                                                <option value="ทำงาน">ทำงาน</option>
                                                <option value="พักงาน/ลางาน">พักงาน/ลางาน</option>
                                                <option value="ลาออก">ลาออก</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1 col-sm-12">
                                        <div class="form-group">
                                            <label>กรุ๊ปเลือด</label>
                                            <select name="blood_type" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value=""></option>
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
                                            <select name="marital_status" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value=""></option>
                                                <option value="โสด">โสด</option>
                                                <option value="หม้าย">หม้าย</option>
                                                <option value="หย่าระหว่างปี">หย่าระหว่างปี</option>
                                                <option value="สมรสและคู่สมรสยังมีชีวิต">สมรสและคู่สมรสยังมีชีวิต</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>สัญชาติ</label>
                                            <select name="nation" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value=""></option>
                                                <option value="ไทย">ไทย</option>
                                                <option value="ต่างชาติ">ต่างชาติ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>เชื้อชาติ</label>
                                            <select name="nation" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value=""></option>
                                                <option value="ไทย">ไทย</option>
                                                <option value="ต่างชาติ">ต่างชาติ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>ศาสนา</label>
                                            <select name="nation" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value=""></option>
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
                                            <input name="phone_number" type="number" class="form-control" required="true" autocomplete="off">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>เลือกธนาคาร</label>
                                            <select name="bank_name" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value="">ระบุธนาคาร</option>
                                                <option value="กสิกรไทย">กสิกรไทย</option>
                                                <option value="กรุงเทพ">กรุงเทพ</option>
                                                <option value="กรุงไทย">กรุงไทย</option>
                                                <option value="กรุงศรี">กรุงศรี</option>
                                                <option value="ซีไอเอ็มบี">ซีไอเอ็มบี</option>
                                                <option value="ทหารไทยธนชาต">ทหารไทยธนชาต</option>
                                                <option value="ไทยพาณิชย์">ไทยพาณิชย์</option>
                                                <option value="ออมสิน">ออมสิน</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>สาขาธนาคาร</label>
                                            <input name="bank_branch_name" placeholder="ระบุสาขาธนาคาร" type="text" class="form-control" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>เลขบัญชีธนาคาร</label>
                                            <input name="bank_account_id" placeholder="ระบุหมายเลขบัญชี" type="number" class="form-control" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>วันทำงาน/สัปดาห์</label>
                                            <input name="work_per_day" type="number" class="form-control" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label style="font-size:24px;"><b></b></label>
                                            <div class="justify-content-center">
                                                <button style="font-size:20px;" onclick="location.href='listemployee.php'" type="button" class="btn btn-default" data-dismiss="modal"><i class="fa-solid fa-circle-left"> </i> ย้อนกลับ</button>
                                                <!-- color:#AAAAAA -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-12">
                                        <div class="form-group">
                                            <label style="font-size:16px;"><b></b></label>
                                            <div class="text-right">
                                                <button class="btn btn-primary" name="add_staff" id="add_staff" data-toggle="modal">บันทึก&nbsp;ข้อมูลพนักงาน</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </section>
                        </form>
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