<?php include('../employee/include/header.php') ?>

<body>
    <?php include('../employee/include/navbar.php') ?>
    <?php include('../employee/include/sidebar.php') ?>

    <div class="mobile-menu-overlay"></div>
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h3>ประวัติการศึกษา</h3>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="home.php">หน้าหลัก</a></li>
                                    <li class="breadcrumb-item"><a href="listemployee_Create.php">ข้อมูลพนักงานเบื้องต้น</a></li>
                                    <li class="breadcrumb-item"><a href="listemployee_Info.php">ประวัติส่วนตัว</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">ประวัติการศึกษา</li>
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
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>รหัสบัตรประชาชนของพนักงาน</label>
                                            <input name="card_id" type="number" placeholder="1949999999991" class="form-control wizard-required" required="true" autocomplete="off" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>ชื่อจริง (ภาษาไทย)</label>
                                            <input name="firstname_thai" type="text" placeholder="ศิวกร" class="form-control wizard-required" required="true" autocomplete="off" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>นามสกุล (ภาษาไทย)</label>
                                            <input name="lastname_thai" type="text" placeholder="แก้วมาลา" class="form-control wizard-required" required="true" autocomplete="off" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>วุฒิการศึกษา</label>
                                            <select name="education_level_entry_degree" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value=""></option>
                                                <option value="บัณฑิตปี">บัณฑิตปี 4-6</option>
                                                <option value="บัณฑิต (ปริญญาตรี)">บัณฑิต (ปริญญาตรี)</option>
                                                <option value="มหาบัณฑิต (ปริญญาโท)">มหาบัณฑิต (ปริญญาโท)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>ใบรับรองการศึกษา</label>
                                            <input name="image" id="file" type="file" class="form-control wizard-required" accept="image/*" onchange="validateImage('file')">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>คณะ</label>
                                            <select name="faculty_entry_degree" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>วิชาเอก</label>
                                            <select name="major_entry_degree" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>สถาบัน</label>
                                            <select name="institute_entry_degree" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>เกรดเฉลี่ย</label>
                                            <input name="grade_entry_degree" type="text" class="form-control wizard-required" required="true" autocomplete="off">

                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>ปีที่สำเร็จการศึกษา</label>
                                            <input name="year_acquired_entry_degree" type="text" class="form-control date-picker" required="true" autocomplete="off">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label style="font-size:24px;"><b></b></label>
                                            <div class="justify-content-center">
                                                <button style="font-size:20px;" onclick="location.href='listemployee_Info.php'" type="button" class="btn btn-default" data-dismiss="modal"><i class="fa-solid fa-circle-left"> </i> ย้อนกลับ</button>
                                                <!-- color:#AAAAAA -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-12">
                                        <div class="form-group">
                                            <label style="font-size:16px;"><b></b></label>
                                            <div class="text-right">
                                                <button style="font-size:16px;" class="btn btn-primary" name="add_staff" id="add_staff" data-toggle="modal">บันทึก&nbsp;ประวัติการศึกษา</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
            <?php include('../employee/include/footer.php') ?>

        </div>
    </div>

    <!-- js -->
    <?php include('../employee/include/scripts.php') ?>
</body>

</html>