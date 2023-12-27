<?php
require_once('C:\xampp\htdocs\SCG_Fairmanpower\config\connection.php');


if (isset($_POST['deletechapter'])) {
    var_dump($_POST['business_id']);
    $business_id = $_POST['business_id'];

    $sql = "DELETE FROM business WHERE business_id = '?';";
    $params = array($business_id);

    $stmt = sqlsrv_prepare($conn, $sql, $params);
    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    $result = sqlsrv_execute($stmt);
    if ($result === false) {
        die(print_r(sqlsrv_errors(), true));
    } else {

        echo "const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-success',
              cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
          });
          swalWithBootstrapButtons.fire({
            title: 'ลบข้อมูลสำเร็จ?',
            text: 'ข้อมูลถูกลบออกจากระบบเรียบร้อย!',
            icon: 'success',
            showCancelButton: true,
            cancelButtonText: 'ตกลง',
          });";

        echo "<meta http-equiv='refresh' content='2;URL=org1_Business_unit.php'/>";

        exit();
    }
} else {
    echo "ไม่มีคำขอการลบที่ถูกส่งมา";
}
