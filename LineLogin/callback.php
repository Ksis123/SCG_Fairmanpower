<?php
define('CLIENT_ID', 'oPg3Er3Fi6z6NbvGrhygxV');
define('CLIENT_SECRET', 'AoBKBtxLxFsUFv6B4PSBf97T8God7TiNrjYP3km3Swb');
//define('LINE_API_URI', 'https://notify-bot.line.me/oauth/token');
define('CALLBACK_URI', 'https://localhost/LineloginTest/callback.php');

// define('CALLBACK_URI', 'https://localhost/SCG_Fairmanpower/Linelogin/callback.php');


parse_str($_SERVER['QUERY_STRING'], $queries);



// $fields = [
//     'grant_type' => 'authorization_code',
//     'code' => $queries['code'],
//     'redirect_uri' => CALLBACK_URI,
//     'client_id' => CLIENT_ID,
//     'client_secret' => CLIENT_SECRET
// ];

// try {
//     $ch = curl_init();

//     curl_setopt($ch, CURLOPT_URL, LINE_API_URI);
//     curl_setopt($ch, CURLOPT_POST, count($fields));
//     curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

//     $res = curl_exec($ch);
//     curl_close($ch);

//     if ($res == false)
//         throw new Exception(curl_error($ch), curl_errno($ch));

//     $json = json_decode($res);
//     $token = $json->access_token;
//     // echo ($token);

//     // var_dump($json);
//     // var_dump($json.access_token);
// } catch (Exception $e) {
//     var_dump($e);
// }

// $employee_id = $_POST['user_id'];
// $line_token = $_POST['line_token'];


// if (isset($_POST["submit"])) {
//     $sql3 = mysqli_query($con, "SELECT * FROM employee WHERE `employee_id` = '$employee_id' ");  
//     if (mysqli_affected_rows($con) >= '1') {
//         $row5 = $sql3->fetch_object() ;
//         if ($row5->line_id == NULL) {
//             $sql = mysqli_query($con, "UPDATE `employee` SET `line_token`='$line_token' WHERE `employee_id`='$employee_id'");
//             if ($sql) {
//                 // header("Location: addLine.php");
//             } else {
//                 echo "ขณะนี้ระบบมีปัญหา กรุณาติดต่อเจ้าหน้าที่";
//             }
//         } else {
//             echo "ท่านเคยลงทะเบียนไปแล้ว หากมีข้อสงสัยกรุณาติดต่อเจ้าหน้าที่" ;
//         }
//     } else {
//          $sql = mysqli_query($con, "INSERT INTO `employee`(`employee_id`,`line_token`) VALUES ('$employee_id','$line_token')");
//         if ($sql) {
//             // header("Location: addLine.php");
//             // header("Location: https://lin.ee/RPd2a0c");
//         } else {
//             echo "ขณะนี้ระบบเกิดข้อผิดพลาด กรุณาติดต่อเจ้าหน้าที่";
//         }
//     }
// }
?>