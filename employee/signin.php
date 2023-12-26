<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="../asset/css/signin.css" rel="stylesheet">

    <script src="../asset/plugins/sweetalert2-11.10.1/jquery-3.7.1.min.js"></script>
    <script src="../asset/plugins/sweetalert2-11.10.1/sweetalert2.all.min.js"></script>

    <link rel="icon" type="image/ico" href="../favicon.ico">
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
            width: 45%;
        }

        h1 {
            src: url('../asset/fonts/Inter/Inter-VariableFont_slnt\,wght.ttf');
            font-size: 38px;
            font-weight: bold;
            color: #ed2626;
            /* box-shadow: 0px 2px 15px -6px #000000; */

        }

        h2 {
            font-size: 38px;
            font-weight: bold;
            color: #9C9D9D;
        }

        h4 {
            color: #2CCFCF;
        }

        input[type=submit] {
            width: 100%;
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
            color: #C6EBD5;
            box-shadow: 0px 2px 15px -6px #000000;
            transition: 0.1s ease-in-out;
            background: linear-gradient(#06C755, #12B153);
        }

        .login-button:hover {
            font-weight: bold;
            color: white;
            transform: scale(1.05);
            transition: 0.25s ease-in-out;
            box-shadow: 0px 2px 15px -8px #000000;

        }

        .center {
            margin: auto;
            width: 50%;
            padding: 10px;
        }

        input:focus {
            border: 2px solid #90d4ce !important;
            box-shadow: 0px 0px 5px rgba(56, 169, 240, 0.75) !important;
        }

        .formcustom {
            display: inline-block;
            border: 2px solid #d2d4d4;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .user-icon {
            width: 80px;
            height: 80px;
            background: #9C9D9D;
            border-radius: 100%;
            box-shadow: 0 0 10px rgba(0, 0, 0, .18)
        }

        .line-icon {
            width: 72px;
            height: 72px;
            background: #ebeff3;
            color: #524d7d;
            -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, .18);
            box-shadow: 0 0 10px rgba(0, 0, 0, .18)
        }

        .border-radius-100 {
            border: 3px solid #ffffff !important;
            box-shadow: 0px 0px 5px rgba(48, 50, 51, 0.382) !important;
            border-radius: 100%
        }
    </style>
</head>

<body>

    <div class="bg">
        <div class="transbox">
            <div class="login-form-bg h-100">
                <div class="container h-100">
                    <div class="row justify-content-center h-100">
                        <div class="col-xl-6">
                            <div class="form-input-content">
                                <div class="card login-form mb-0">
                                    <div class="card-body pt-10 shadow">
                                        <div class="user-icon">
                                            <img src="../asset/img/employeeicon.png" class="border-radius-100" width="80" height="80" alt="">
                                        </div>
                                        <div class="BoxLogo">
                                            <div className="BoxLogoinfo">
                                                <img src="https://salmon-charming-stingray-66.mypinata.cloud/ipfs/QmebXP3b8JbPb14WvphSJQavhqtBgFTcYBfZD6X5rkiUbP?_gl=1*j2trn5*_ga*MTE0ODI0Mjc0LjE2OTY4NjQ2MTU.*_ga_5RMPXG14TE*MTcwMjI4NTMyNi41OC4xLjE3MDIyODY1OTEuNjAuMC4w" class="Logo " />
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h1>Fair Manpower
                                                <h2>พนักงาน</h2>
                                            </h1>
                                        </div>
                                        <hr class="custom">

                                        <div class="form-group text-center">
                                            <input type="submit" value="เข้าสู่ระบบด้วย LINE" class="login-button " name="signin" onclick="location.href='home.php'">
                                        </div>
                                        <p class="text-center login-form__footer">กรณีได้สิทธิ์แอดมิน? โปรด <a href="../admin/signin.php" class="text-red">เข้าสู่ระบบในฐานะแอดมิน </a></p>
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