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
                                <h3>ประวัติส่วนตัว</h3>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="listemployee.php">รายการข้อมูลพนักงานทั้งหมด</a></li>
                                    <li class="breadcrumb-item"><a href="listemployee_Create.php">ข้อมูลพนักงานเบื้องต้น</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">ประวัติส่วนตัว</li>
                                    <li class="breadcrumb-item"><a href="listemployee_Education.php">ประวัติการศึกษา</a></li>
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
                                    <div class="col-md-3 col-sm-12 flex">
                                        <div class="profile-photo">
                                            <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                                            <img src="<?php echo (!empty($row['location'])) ? '../uploads/' . $row['location'] : '../asset/img/employee/4.jpg'; ?>" alt="" class="avatar-photo">
                                            <form method="post" enctype="multipart/form-data">
                                                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered " role="document">
                                                        <div class="modal-content col-md-12 pd-5">
                                                            <div class="title text-center">
                                                                <h3>อัพโหลดรูปโปรไฟล์</h3>
                                                            </div>
                                                            <div class="weight-500 height-100-p col-md-12 pd-5">
                                                                <div class="form-group">
                                                                    <div class="custom-file">
                                                                        <input name="image" id="file" type="file" class="custom-file-input" accept="image/*" onchange="validateImage('file')">
                                                                        <label class="custom-file-label" for="file" id="selector">Choose file</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <input type="submit" name="update_image" value="อัพโหลด" class="btn btn-primary">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

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
                                            <label>ชื่อผู้ใช้งาน</label>
                                            <input name="employee_user" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>อีเมลทางธุรกิจ</label>
                                            <input name="email_business" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>เบอร์โทรศััพท์ทางธุรกิจ</label>
                                            <input name="telephone_business" type="number" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2 col-sm-3">
                                        <div class="form-group">
                                            <label>คำนำหน้าชื่อ-คู่สมรส</label>
                                            <select name="prefix_th" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value=""></option>
                                                <option value="นาย">นาย</option>
                                                <option value="นาง">นาง</option>
                                                <option value="นางสาว">นางสาว</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>ชื่อคู่สมรส</label>
                                            <input name="spourse_first_name" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>นามสกุลคู่สมรส</label>
                                            <input name="spourse_last_name" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <div class="form-group">
                                            <label>จำนวนบุตร</label>
                                            <div class="flex">
                                                <input name="number_of_child" type="number" placeholder="จำนวนบุตร" class="form-control wizard-required" required="true" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>เลขประจำตัวผู้เสียภาษีคู่สมรส</label>
                                            <div class="flex">
                                                <input name="spourse_tax_id" type="number" placeholder="XXXXXXXXXXXXX" class="form-control wizard-required" required="true" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>เลขที่อยู่บ้าน</label>
                                            <input name="address_no" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-sm-12">
                                        <div class="form-group">
                                            <label>หมู่</label>
                                            <input name="village_no" type="number" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>ถนน</label>
                                            <input name="street" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>ตำบล</label>
                                            <input name="sub_district" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>อำเภอ</label>
                                            <input name="district" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>จังหวัด</label>
                                            <input name="province" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>รหัสไปรษณีย์</label>
                                            <input name="postal_id" type="number" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>ประเทศ</label>
                                            <input name="country" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label>เบอร์โทรศัพท์บ้าน</label>
                                            <input name="telephone_home" type="number" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-12">
                                        <div class="form-group">
                                            <label>ที่อยู่ออฟฟิศ</label>
                                            <input name="office_address" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label style="font-size:24px;"><b></b></label>
                                            <div class="justify-content-center">
                                            <button style="font-size:20px;" onclick="location.href='listemployee_Create.php'" type="button" class="btn btn-default" data-dismiss="modal"><i class="fa-solid fa-circle-left"> </i> ย้อนกลับ</button>
                                            <!-- color:#AAAAAA -->
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-12">
                                        <div class="form-group">
                                            <label style="font-size:16px;"><b></b></label>
                                            <div class="text-right">
                                                <button style="font-size:16px;" class="btn btn-primary" name="add_staff" id="add_staff" data-toggle="modal">บันทึก&nbsp;report-to</button>
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