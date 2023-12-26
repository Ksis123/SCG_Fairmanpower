<?php
session_start();

require_once '../config/connection.php';

$line_id = $_GET['w1'];
$_SESSION['line_id'] = $line_id;


// คำสั่ง เช็คว่ามี Line_id ไหม
$sql_check = "SELECT card_id FROM login WHERE line_id = ?";
$params_check = array($line_id);
$options_check = array("Scrollable" => SQLSRV_CURSOR_KEYSET);

$stmt_check = sqlsrv_query($conn, $sql_check, $params_check, $options_check);

if ($stmt_check === false) {
    die(print_r(sqlsrv_errors(), true));
}

// ตรวจสอบว่ามีข้อมูลหรือไม่
if (sqlsrv_has_rows($stmt_check)) {
    // มี line_id อยู่แล้วในระบบ ส่งผ่านไปยังหน้าเว็บหลัก
    header('Location: checkrole.php');

    exit;
} else {
    // ไม่มี line_id ในฐานข้อมูล แสดงแบบฟอร์มให้ผู้ใช้กรอก card_id
?>
    <!-- แบบฟอร์มที่ใช้รับค่า card_id -->
    <form method="GET" action="signin_Line.php">
        <!-- Input field สำหรับให้ผู้ใช้กรอก card_id -->
        <label for="card_id">กรุณากรอก Person ID:</label>
        <input type="text" id="card_id" name="card_id" required>

        <!-- ซ่อน Input field สำหรับ line_id ที่ได้จากการ GET มาแล้ว -->
        <input type="hidden" name="w1" value="<?php echo $_GET['w1']; ?>">

        <!-- ปุ่มสำหรับ Submit แบบฟอร์ม -->
        <input type="submit" value="Submit">
    </form>
<?php

    // ตรวจสอบว่ามีค่า card_id ที่ส่งมาหรือไม่
    if (isset($_GET['card_id'])) {
        $card_id = $_GET['card_id'];

        $_SESSION['card_id'] = $card_id;
        // ทำการ INSERT ข้อมูลเข้าในฐานข้อมูล
        $sql_insert = "INSERT INTO login (line_id, card_id) VALUES (?, ?)";
        $params_insert = array($line_id, $card_id);

        $stmt_insert = sqlsrv_query($conn, $sql_insert, $params_insert);

        if ($stmt_insert === false) {
            die(print_r(sqlsrv_errors(), true));
        } else {
            header('Location: dashboard.php');
            exit;
        }
    }
}
?>