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

<!-- Add buttons fuctiion for C-R-U-D -->
<script>
    function swalDeleteAlert() {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                denyButton: "delete-swal",
                cancelButton: "edit-swal"
            },
            buttonsStyling: false
        });
        swalWithBootstrapButtons.fire({
            icon: "warning",
            title: "คุณต้องการลบข้อมูลชุดนี้ใช่หรือไม่ ?",
            showDenyButton: true,
            showCancelButton: true,
            showConfirmButton: false,
            denyButtonText: "ลบ",
            cancelButtonText: "ยกเลิก",

        }).then((result) => {
            if (result.isDenied) {
                <?php
                if (isset($_GET['delete'])) {
                    $delete = $_GET['delete'];
                    $sql = "DELETE FROM sub_business WHERE sub_business_id = " . $delete;
                    $row = sqlsrv_query($conn, $sql);
                    if ($row) {
                        "swalWithBootstrapButtons.fire('ลบข้อมูลสำเร็จ!'', '', 'success')";
                    }
                }
                ?>
            }
        })
    };
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

<script language="JavaScript">
    function check_thai(ch) {
        var len, digit;
        if (ch == " ") {
            len = 0;
        } else {
            len = ch.length;
        }
        for (var i = 0; i < len; i++) {
            digit = ch.charAt(i)
            if (!((digit >= "a" && digit <= "z") || (digit >= "0" && digit <= "9") || (digit >= "A" && digit <= "Z"))) {
                ;
            } else {
                return false;
            }
        }
        return true;
    }

    function checkvalue() {
        if (!check_thai(document.fThai.n.value) || document.fThai.n.value == "") {
            alert('Please Enter Text Thai Only');
            return false;
        } else {
            return true;
        }
    }
</script>