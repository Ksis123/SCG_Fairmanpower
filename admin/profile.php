<?php include('../admin/include/header.php') ?>

<body>

    <?php include('../admin/include/navbar.php') ?>
    <?php include('../admin/include/sidebar.php') ?>

    <div class="mobile-menu-overlay"></div>
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-30">
                        <div class="card-box height-100-p overflow-hidden">
                            <div class="profile-tab height-100-p">
                                <div class="tab height-100-p">
                                    <ul class="nav nav-tabs customtab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">โปรไฟล์</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#employee_create" role="tab">ข้อมูลเบื้องต้น</a>
                                        </li>

                                    </ul>
                                    <div class="tab-content">
                                        <!-- employee_create Tab start -->
                                        <div class="tab-pane fade height-100-p" id="employee_create" role="tabpanel">
                                            <div class="profile-setting">
                                                <form method="POST" enctype="multipart/form-data">
                                                    <div class="profile-edit-list row">
                                                        <div class="col-md-12">
                                                            <h4 class="text-blue h5 mb-20">แก้ไขประวัติส่วนตัว</h4>
                                                        </div>

                                                        <div class="weight-500 col-md-6">
                                                            <div class="form-group">
                                                                <label>ชื่อ</label>
                                                                <input name="fname" class="form-control form-control-lg" type="text" required="true" autocomplete="off" value="<?php echo $fname; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="weight-500 col-md-6">
                                                            <div class="form-group">
                                                                <label>นามสกุล</label>
                                                                <input name="lastname" class="form-control form-control-lg" type="text" placeholder="" required="true" autocomplete="off" value="<?php echo $lname; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="weight-500 col-md-6">
                                                            <div class="form-group">
                                                                <label>Email Address</label>
                                                                <input name="email" class="form-control form-control-lg" type="text" placeholder="" required="true" autocomplete="off" value="<?php echo $emp_email; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="weight-500 col-md-6">
                                                            <div class="form-group">
                                                                <label>Phone Number</label>
                                                                <input name="phonenumber" class="form-control form-control-lg" type="text" placeholder="" required="true" autocomplete="off" value="<?php echo $row['Phonenumber']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="weight-500 col-md-6">
                                                            <div class="form-group">
                                                                <label>Date Of Birth</label>
                                                                <input name="dob" class="form-control form-control-lg date-picker" type="text" placeholder="" required="true" autocomplete="off" value="<?php echo $row['Dob']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="weight-500 col-md-6">
                                                            <div class="form-group">
                                                                <label>Gender</label>
                                                                <select name="gender" class="custom-select form-control" required="true" autocomplete="off">
                                                                    <option value="male">Male</option>
                                                                    <option value="female">Female</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="weight-500 col-md-6">

                                                            <div class="form-group">
                                                                <label>Address</label>
                                                                <input name="address" class="form-control form-control-lg" type="text" placeholder="" required="true" autocomplete="off" value="<?php echo $row['Address']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="weight-500 col-md-6">
                                                            <div class="form-group">
                                                                <label>Department</label>
                                                                <select name="department" class="custom-select form-control" required="true" autocomplete="off">
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="weight-500 col-md-6">
                                                            <div class="form-group">
                                                                <label></label>
                                                                <div class="modal-footer justify-content-center">
                                                                    <button class="btn btn-primary" name="new_update" id="new_update" data-toggle="modal">Save & &nbsp;Update</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- employee_create Tab End -->

                                        <!-- Contract Tab start -->
                                        <!-- <div class="tab-pane fade show active" id="profile" role="tabpanel">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                                                <div class="pd-20 card-box height-100-p">
                                                    <div class="profile-photo">
                                                        <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                                                        <img src="<?php echo (!empty($row['location'])) ? '../uploads/' . $row['location'] : '../asset/img/admin.png'; ?>" alt="" class="avatar-photo">
                                                        <form method="post" enctype="multipart/form-data">
                                                            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="weight-500 col-md-12 pd-5">
                                                                            <div class="form-group">
                                                                                <div class="custom-file">
                                                                                    <input name="image" id="file" type="file" class="custom-file-input" accept="image/*" onchange="validateImage('file')">
                                                                                    <label class="custom-file-label" for="file" id="selector">Choose file</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <input type="submit" name="update_image" value="Update" class="btn btn-primary">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <h5 class="text-center h5 mb-0">
                                                    </h5>
                                                    <p class="text-center text-muted font-14">
                                                    </p>
                                                    <div class="profile-info">
                                                        <h5 class="mb-20 h5 text-blue">ช่องทางการติดต่อ</h5>
                                                        <ul>
                                                            <li>
                                                                <span><b>Email Address : </b><a class='text-primary'><?php echo ' ' . $row['employee_email']; ?></a></span>
                                                            </li>
                                                            <li>
                                                                <span><b>เบอร์โทรศีพท์ : </b><a class='text-primary'><?php echo ' ' . $row['phone_number']; ?></a></span>
                                                            </li>

                                                            <li>
                                                                <span><b>ที่อยู่ : </b></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- Contract Tab End -->



                                    </div>
                                </div>
                            </div>
                        </div>
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