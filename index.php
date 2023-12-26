<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/ico" href="favicon.ico">
    <link href="asset/css/signin.css" rel="stylesheet" />

    <title>SCG | Fair Manpower</title>
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
            font-size: 40px;
            font-weight: bold;
            color: #ed2626;
            text-shadow: -1px 1px 0 #000, 1px 1px 0 #ffffff, 1px -1px 0 #ffffff, -1px -1px 0 #ffffff;

        }

        h4 {
            color: #b8b2b2;
        }

        hr.custom {
            border: 2px solid #d2d4d4;
            border-radius: 5px;
        }

        .admin-button {
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            height: 45px;
            width: 120px;
            text-shadow: 2px 2px 2px #000000 25%;
            background-image: linear-gradient(#EB5858, #B71B1B);
            color: white;
            border-radius: 50px;
            border-style: solid;
            border-color: white;
            box-shadow: 0px 2px 15px -5px #000000;
            transition: 0.5s ease;

        }

        .admin-button:hover {
            background-image: linear-gradient(#ffffff, #ffffff);
            color: #EB5858;
            font-size: 25px;
            font-weight: bold;
            border-radius: 50px;
            border-style: solid;
            border-color: #EB5858;
            transition: 0.5s ease-in-out;
            text-shadow: -1px 1px 0 #000, 1px 1px 0 #ffffff, 1px -1px 0 #ffffff, -1px -1px 0 #ffffff;
        }

        .empoyee-button {
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            height: 45px;
            width: 120px;
            transition: 0.5s ease-in-out;
            background-image: linear-gradient(#1FBABF, #60D3AA);
            color: #f0f8ff;
            border-radius: 50px;
            border-style: solid;
            border-color: white;
            box-shadow: 0px 2px 15px -5px #000000;
            transition: 0.5s ease-in-out;
        }

        .empoyee-button:hover {
            background-image: linear-gradient(#ffffff, #ffffff);
            color: #60D3AA;
            border-radius: 50px;
            transition: 0.5s ease-in-out;
            border-style: solid;
            border-color: #60D3AA;
            text-shadow: -1px 1px 0 #000, 1px 1px 0 #ffffff, 1px -1px 0 #ffffff, -1px -1px 0 #ffffff;

        }
    </style>

</head>

<body>
    <div class="bg border">
        <div class="transbox">
            <div class="login-form-bg h-100">
                <div class="container h-100">
                    <div class="row justify-content-center h-100">
                        <div class="col-xl-6">
                            <div class="form-input-content">
                                <div class="card login-form">
                                    <div class="card-body shadow">
                                        <div class="BoxLogo">
                                            <div className="BoxLogoinfo">
                                                <img src="https://salmon-charming-stingray-66.mypinata.cloud/ipfs/QmebXP3b8JbPb14WvphSJQavhqtBgFTcYBfZD6X5rkiUbP?_gl=1*j2trn5*_ga*MTE0ODI0Mjc0LjE2OTY4NjQ2MTU.*_ga_5RMPXG14TE*MTcwMjI4NTMyNi41OC4xLjE3MDIyODY1OTEuNjAuMC4w" class="Logo " />
                                            </div>
                                        </div>
                                        <h1 class="text-center">Fair Manpower <h4 class="text-center ">โปรดเลือกการเข้าสู่ระบบในฐานะ ?</h4>
                                        </h1>
                                        <hr class="custom">
                                        <div class="container mt-5">
                                            <div class="btn-toolbar justify-content-between">
                                                <div class="btn-group">
                                                    <a href="admin/signin.php" class="admin-button">แอดมิน</a>
                                                </div>

                                                <div class="btn-group">
                                                    <a href="employee/signin.php" class="empoyee-button">พนักงาน</a>
                                                </div>
                                            </div>
                                        </div>
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