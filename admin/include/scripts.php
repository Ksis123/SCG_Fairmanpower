<script src="../vendors/scripts/core.js"></script>
<script src="../vendors/scripts/script.min.js"></script>
<script src="../vendors/scripts/process.js"></script>
<script src="../vendors/scripts/layout-settings.js"></script>
<script src="../src/plugins/apexcharts/apexcharts.min.js"></script>
<script src="../src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="../src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="../src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="../src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
<script src="../vendors/scripts/datagraph.js"></script>

<!-- buttons for Export datatable -->
<script src="../src/plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="../src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="../src/plugins/datatables/js/buttons.print.min.js"></script>
<script src="../src/plugins/datatables/js/buttons.html5.min.js"></script>
<script src="../src/plugins/datatables/js/buttons.flash.min.js"></script>
<script src="../src/plugins/datatables/js/pdfmake.min.js"></script>
<script src="../src/plugins/datatables/js/vfs_fonts.js"></script>
<script src="../vendors/scripts/advanced-components.js"></script>


<!-- Add Modal for OpenEdit_Business  -->
<script>
    function openEdit_Business_Modal(business_id, name_thai, name_eng) {
        document.getElementById('editBusinessIdInput').value = business_id;
        document.getElementById('editNameThai').value = name_thai;
        document.getElementById('editNameEng').value = name_eng;
        $('#editModal').modal('show');
    }
</script>

<!-- Add Modal for OpenEdit_SubBusiness -->
<script>
    function openEdit_SubBusiness_Modal(business_id, sub_business_id, name_thai, name_eng) {
        document.getElementById('editBusinessIdInput').value = business_id;
        document.getElementById('editSubBusinessId').value = sub_business_id;
        document.getElementById('editNameThai').value = name_thai;
        document.getElementById('editNameEng').value = name_eng;
        $('#editModal').modal('show');
    }
</script>

<!-- Add Modal for OpenEdit_Org -->
<script>
    function openEdit_OrgID_Modal() {
        $('#editModal').modal('show');
    }
</script>
<script>
    function openEdit_Cost_Modal() {
        $('#editModal').modal('show');
    }
</script>

<!-- Add Modal for OpenEdit_Company -->
<script>
    function openEdit_Company_Modal(company_id, organization_id, name_thai, name_eng) {
        // Set values in the modal form
        document.getElementById('editCompanyIdInput').value = company_id;
        document.getElementById('editOrganizationId').value = organization_id;
        document.getElementById('editNameThai').value = name_thai;
        document.getElementById('editNameEng').value = name_eng;
        // Open the modal
        $('#editCompanyModal').modal('show');
    }
</script>

<!-- Add Modal for OpenEdit_Location -->
<script>
    function openEdit_Location_Modal(location_id, company_id, name) {
        // Set values in the modal form
        document.getElementById('editLocationIdInput').value = location_id;
        document.getElementById('editCompany').value = company_id;
        document.getElementById('editLocationName').value = name;

        // Open the modal
        $('#editLocationModal').modal('show');
    }
</script>

<!-- Add Modal for OpenEdit_Division -->
<script>
    function openEdit_Division_Modal(division_id, location_id, name_thai, name_eng) {
        // Set values in the modal form
        document.getElementById('editDivisionIdInput').value = division_id;
        document.getElementById('editLocation').value = location_id;
        document.getElementById('editDivisionNameThai').value = name_thai;
        document.getElementById('editDivisionNameEng').value = name_eng;

        // Open the modal
        $('#editDivisionModal').modal('show');
    }
</script>

<!-- Add Modal for OpenEdit_Department -->
<script>
    function openEdit_Department_Modal(department_id, division_id, name_thai, name_eng) {
        // Set values in the modal form
        document.getElementById('editDepartmentIdInput').value = department_id;
        document.getElementById('editDivision').value = division_id;
        document.getElementById('editDepartmentNameThai').value = name_thai;
        document.getElementById('editDepartmentNameEng').value = name_eng;
        // Open the modal
        $('#editDepartmentModal').modal('show');
    }
</script>

<!-- Add Modal for OpenEdit_Section -->
<script>
    function openEdit_Section_Modal(section_id, department_id, name_thai, name_eng) {
        // Set values in the modal form
        document.getElementById('editSectionIdInput').value = section_id;
        document.getElementById('editDepartment').value = department_id;
        document.getElementById('editSectionNameThai').value = name_thai;
        document.getElementById('editSectionNameEng').value = name_eng;
        // Open the modal
        $('#editSectionModal').modal('show');
    }
</script>


<script>
    function confirmDeleteSubmit() {
        Swal.fire({
            title: "ยืนยันการลบข้อมูลใช่ หรือ ไม่?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "ใช่, ยืนยันการลบ",
            cancelButtonText: "ยกเลิก",
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById("deleteForm").submit();
            }
        });
    }
</script>

<script>
    function swalAddAlert1() {
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
            title: "บันทึกข้อมูลสำเร็จ"
        });
    };
</script>

<!-- Delete cornfirm sweetalert2-->

<script>
    function confirmDelete(businessId) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "delete-swal",
                cancelButton: "edit-swal"
            },
            buttonsStyling: false
        });
        swalWithBootstrapButtons.fire({
            icon: "warning",
            title: "คุณต้องการลบข้อมูล Business Unit นี้หรือไม่ ?",
            showCancelButton: true,
            confirmButtonText: "ลบ",
            cancelButtonText: "ยกเลิก"
        }).then((result) => {
            if (result.isConfirmed) {
                // ถ้าคลิกปุ่ม "ลบ" ให้ทำการลบข้อมูล
                swalWithBootstrapButtons.fire({
                    icon: "success",
                    title: "ระบบลบข้อมูล Business-Unit สำเร็จ ",
                    text: "อีกสักครู่ ...ระบบจะทำการรีเฟส",
                    confirmButtonText: "ตกลง",
                });
                window.location.href = `org1_Business_unit.php?delete_business_id=${businessId}`;
                window.location.href = `org1_Business_unit.php`;

            }
            exit();

        });
    }

    function confirmDelete_Cost(cost_center_id) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "delete-swal",
                cancelButton: "edit-swal"
            },
            buttonsStyling: false
        });
        swalWithBootstrapButtons.fire({
            icon: "warning",
            title: "คุณต้องการลบหมายเลข Cost Center นี้หรือไม่ ?",
            showCancelButton: true,
            confirmButtonText: "ลบ",
            cancelButtonText: "ยกเลิก"
        }).then((result) => {
            if (result.isConfirmed) {
                // ถ้าคลิกปุ่ม "ลบ" ให้ทำการลบข้อมูล
                swalWithBootstrapButtons.fire({
                    icon: "success",
                    title: "ระบบลบข้อมูล Business-Unit สำเร็จ ",
                    text: "อีกสักครู่ ...ระบบจะทำการรีเฟส",
                    confirmButtonText: "ตกลง",
                });
                window.location.href = `org9_Costcenter.php?delete_cost_center_id=${cost_center_id}`;
                window.location.href = `org9_Costcenter.php`;

            }
            exit();

        });
    }

    function deleteEmployee(cardId) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "delete-swal",
                cancelButton: "edit-swal"
            },
            buttonsStyling: false
        });
        swalWithBootstrapButtons.fire({
            title: 'คุณแน่ใจหรือไม่?',
            text: 'คุณต้องการลบข้อมูลพนักงานนี้หรือไม่?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ใช่, ลบ!',
            cancelButtonText: 'ยกเลิก'
        }).then((result) => {
            if (result.isConfirmed) {
                // ส่ง request ไปยังไฟล์ PHP ที่ทำการลบข้อมูล
                $.ajax({
                    type: 'POST',
                    url: 'listemployee_delete.php',
                    data: {
                        delete_employee: true,
                        card_id_to_delete: cardId
                    },
                    success: function(response) {
                        // ตรวจสอบคำตอบที่ได้จาก PHP
                        var result = JSON.parse(response);
                        if (result.status === 'success') {
                            swalWithBootstrapButtons.fire({
                                icon: 'success',
                                title: 'ลบข้อมูลสำเร็จ!',
                                text: 'ข้อมูลพนักงานถูกลบออกจากระบบแล้ว',
                            }).then(() => {
                                // ทำการรีเฟรชหน้าหลังจากลบสำเร็จ
                                location.reload();
                            });
                        } else {
                            swalWithBootstrapButtons.fire({
                                icon: 'error',
                                title: 'เกิดข้อผิดพลาด!',
                                text: 'ไม่สามารถลบข้อมูลได้',
                            });
                        }
                    },
                    error: function() {
                        swalWithBootstrapButtons.fire({
                            icon: 'error',
                            title: 'เกิดข้อผิดพลาด!',
                            text: 'ไม่สามารถเชื่อมต่อกับเซิร์ฟเวอร์ได้',
                        });
                    }
                });
            }
        });
    }
</script>