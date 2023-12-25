<?php
session_start();

require_once 'C:\xampp\htdocs\SCG_Fairmanpower\LineLogin\connect.php';

$line_id = $_GET['w1'];
$_SESSION['line_id'] = $line_id;


// คำสั่ง เช็คว่ามี Line_id ไหม
$sql_check = "SELECT person_id FROM login_info WHERE line_id = ?";
$params_check = array($line_id);
$options_check = array("Scrollable" => SQLSRV_CURSOR_KEYSET);

$stmt_check = sqlsrv_query($conn, $sql_check, $params_check, $options_check);

if ($stmt_check === false) {
    die(print_r(sqlsrv_errors(), true));
}

// ตรวจสอบว่ามีข้อมูลหรือไม่
if (sqlsrv_has_rows($stmt_check)) {
    // มี line_id อยู่แล้วในระบบ ส่งผ่านไปยังหน้าเว็บหลัก
    header('Location: ../checkrole.php');
    exit;
} else {
    // ไม่มี line_id ในฐานข้อมูล แสดงแบบฟอร์มให้ผู้ใช้กรอก person_id
    ?>
    <!-- แบบฟอร์มที่ใช้รับค่า person_id -->
    <form method="GET" action="login.php">
        <!-- Input field สำหรับให้ผู้ใช้กรอก person_id -->
        <label for="person_id">กรุณากรอก Person ID:</label>
        <input type="text" id="person_id" name="person_id" required>
        
        <!-- ซ่อน Input field สำหรับ line_id ที่ได้จากการ GET มาแล้ว -->
        <input type="hidden" name="w1" value="<?php echo $_GET['w1']; ?>">
        
        <!-- ปุ่มสำหรับ Submit แบบฟอร์ม -->
        <input type="submit" value="Submit">
    </form>
    <?php
    
    // ตรวจสอบว่ามีค่า person_id ที่ส่งมาหรือไม่
    if (isset($_GET['person_id'])) {
        $person_id = $_GET['person_id'];

        $_SESSION['person_id'] = $person_id;
        // ทำการ INSERT ข้อมูลเข้าในฐานข้อมูล
        $sql_insert = "INSERT INTO login_info (line_id, person_id) VALUES (?, ?)";
        $params_insert = array($line_id, $person_id);

        $stmt_insert = sqlsrv_query($conn, $sql_insert, $params_insert);

        if ($stmt_insert === false) {
            die(print_r(sqlsrv_errors(), true));
        } else {
            // บันทึกข้อมูลสำเร็จ ส่งผ่านไปยังหน้าเว็บหลัก
            header('Location: ../emp_main.php');
            exit;
        }
    }
}
?>
