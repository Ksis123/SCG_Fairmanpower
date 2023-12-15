<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/ico" href="../favicon.ico">
    
    <link href="../asset/css/styles.css" rel="stylesheet">

    <script src="../asset/plugins/sweetalert2-11.10.1/jquery-3.7.1.min.js"></script>
    <script src="../asset/plugins/sweetalert2-11.10.1/sweetalert2.all.min.js"></script>

    <title> SCG | Fair Manpower</title>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .bg {
            background-image: url("https://salmon-charming-stingray-66.mypinata.cloud/ipfs/QmWJbmPVGoa4aErMAaCVkH8LXbXPcopAkkNDsbzV27Rnk4?_gl=1*1eemf2l*_ga*MTE0ODI0Mjc0LjE2OTY4NjQ2MTU.*_ga_5RMPXG14TE*MTcwMjI4NTMyNi41OC4xLjE3MDIyODcyMDguNjAuMC4w");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }

        .transbox {
            background: transparent;
            backdrop-filter: blur(5px);
            height: 100%;


        }

        hr.custom {
            border: 2px solid #d2d4d4;
            border-radius: 5px;
        }

        .card {
            border-radius: 67px;
        }

        .card-body {
            border-radius: 67px;

        }

        div.BoxLogo {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: transparent;
        }

        img.Logo {
            width: 35%;
        }

        h1 {
            font-size: 38px;
            font-weight: bold;
            color: #ed2626;
            text-shadow: -1px 1px #000, 1px 1px 0 #ffffff, 1px -1px 0 #ffffff, -1px -1px 0 #ffffff;
            /* box-shadow: 0px 2px 15px -6px #000000; */

        }

        h4 {
            color: #b8b2b2;
        }

        input[type=submit] {
            width: 50%;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 15px;
            border-style: solid;
            border-color: white;
            border-width: 3px;
        }

        .login-button {
            font-size: 25px;
            font-weight: bold;
            transition: 0.5s ease-in-out;
            color: #f0f8ff;
            padding: 4px 50px;
            box-shadow: 0px 2px 15px -6px #000000;
            transition: 0.1s ease-in-out;
            background-image: linear-gradient(#1FBABF, #60D3AA);
        }

        .login-button:hover {
            font-weight: bold;
            color: white;
            transform: scale(1.1);
            transition: 0.25s ease-in-out;
            box-shadow: 0px 2px 15px -8px #000000;
            background-image: linear-gradient(#1FBABF, #60D3AA);

        }

        .center {
            margin: auto;
            width: 50%;
            padding: 10px;
        }

        input:focus {
            border: 2px solid #A3DBD6 !important;
            box-shadow: 0px 0px 5px rgba(56, 169, 240, 0.75) !important;
        }

        .formcustom {
            display: inline-block;
            border: 2px solid #d2d4d4;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>

</head>

<body>


    <?php
    $email_err = $pass_err = $login_Err = "";
    $email = $pass = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_REQUEST["email"])) {
            $email_err = " <p style='color:red'> * กรุณากรอกอีเมล</p> ";
            echo "<script>";
            echo "Swal.fire({title: 'อีเมลไม่ถูกต้อง!',text: 'กรุณาระบุอีเมลให้ถูกต้อง ', icon: 'error', confirmButtonText: 'ตกลง'});";
            echo "</script>";
        } else {
            $email = $_REQUEST["email"];
        }

        if (empty($_REQUEST["password"])) {
            $pass_err =  " <p style='color:red'> * กรุณากรอกรหัสผ่าน</p> ";
            echo "<script>";
            echo "Swal.fire({title: 'รหัสผ่านไม่ถูกต้อง!',text: 'กรุณาระบุรหัสผ่านให้ถูกต้อง', icon: 'error', confirmButtonText: 'ตกลง'});";
            echo "</script>";
        } else {
            $pass = $_REQUEST["password"];
        }
        if (!empty($email) && !empty($pass)) {
            // database connection
            echo "<script>";
            echo "Swal.fire({title: 'เข้าสู่ระบบสำเร็จ!',text: 'ยินดีต้อนรับสู่ Fair Manpower', icon: 'success', timer: 1500});";
            echo "</script>";
            require_once "../connection.php";

            $sql_query = "SELECT * FROM admin WHERE email='$email' && password = '$pass'  ";
            $result = mysqli_query($conn, $sql_query);

            if (mysqli_num_rows($result) > 0) {

                while ($rows = mysqli_fetch_assoc($result)) {
                    session_start();
                    session_unset();
                    $_SESSION["email"] = $rows["email"];

                    header("Location: dashboard.php?login-sucess");
                }
            } else {
                echo "<script>";
                echo "Swal.fire({title: 'เข้าสู่ระบบไม่สำเร็จ!',text: 'อีเมลหรือรหัสผ่านของท่านไม่ถูกต้อง', icon: 'error', confirmButtonText: 'ตกลง'});";
                echo "</script>";
            }
        }
    }

    ?>
    <!-- php script end -->

    <div class="bg" style="height: 100%">
        <div class="transbox">
            <div class="login-form-bg h-100">
                <div class="container h-100">
                    <div class="row justify-content-center h-100">
                        <div class="col-xl-6">
                            <div class="form-input-content">
                                <div class="card login-form mb-0">
                                    <div class="card-body pt-5 shadow">

                                        <div class="BoxLogo">
                                            <div className="BoxLogoinfo">
                                                <img src="https://salmon-charming-stingray-66.mypinata.cloud/ipfs/QmebXP3b8JbPb14WvphSJQavhqtBgFTcYBfZD6X5rkiUbP?_gl=1*j2trn5*_ga*MTE0ODI0Mjc0LjE2OTY4NjQ2MTU.*_ga_5RMPXG14TE*MTcwMjI4NTMyNi41OC4xLjE3MDIyODY1OTEuNjAuMC4w" class="Logo " />
                                            </div>
                                        </div>
                                        <h1 class="text-center">Fair Manpower</h1>
                                        <hr class="custom">
                                        <form id="loginForm" method="POST" action=" <?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">

                                            <div class="form-group">
                                                <label>Email :</label>
                                                <input type="email" class="form-control formcustom" value="<?php echo $email; ?>" name="email" require autofocus>
                                                <?php echo $email_err; ?>
                                            </div>

                                            <div class="form-group">
                                                <label>Password :</label>
                                                <input type="password" class="form-control formcustom" name="password" require autofocus>
                                                <?php echo $pass_err; ?>

                                            </div>

                                            <div class="form-group text-center">
                                                <input type="submit" value="เข้าสู่ระบบ" class="login-button " name="signin">
                                            </div>
                                            <p class="text-center login-form__footer">กรณีไม่ใช่แอดมิน? โปรด <a href="../employee/signin.php" class="text-primary">เข้าสู่ระบบในฐานะพนักงาน</a></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>