<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="icon" href="loginPage/images/favicon.png" type="image/png" sizes="16x16">
        <title>E.B Creasy Group Of Companies</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="loginPage/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="loginPage/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="loginPage/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="loginPage/vendor/animate/animate.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="loginPage/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="loginPage/vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="loginPage/vendor/select2/select2.min.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="loginPage/vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="loginPage/css/util.css">
        <link rel="stylesheet" type="text/css" href="loginPage/css/main.css">
        <!--===============================================================================================-->
        <style type="text/css">
            .company-names{
                margin-top: 60px;
            }
            .company-names span{
                line-height: 14px;
                text-align: right;
                color: #000101;
                font-weight: inherit;
                text-shadow: 0px 0px #111;
            }
            .login100-form{
                padding: 100px 55px 55px 55px !important;
                min-height: fit-content !important;
            }
            .login100-form-btn {
                background: #004a8e;
            }
            .login100-form-btn:hover {
                background: #6675df;
            }
            .img-thumbnail{
                border: none !important;
                border-bottom: 1px solid #ddd !important;
                padding: 0px ;
            }
            .wrap-login100 {
                flex-direction: inherit !important; 
            }

            #embossed span{

                /*                color: #fff;
                                text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #ff2d95, 0 0 30px #ff2d95, 0 0 40px #ff2d95, 0 0 50px #ff2d95, 0 0 75px #ff2d95;
                                letter-spacing: 5px;*/


                /*                               color: #333;
                                                text-shadow: -1px -1px 0px rgba(255, 255, 255, 0.3), 1px 1px 0px rgba(0, 0, 0, 0.8);*/

                color: #fff;
                letter-spacing: 3px;
                text-shadow: 0 0 2px #000, 0 0 2px #000, 0 0 5px #000, 0 0 0px #ff2d95, 0 0 0px #ff2d95, 0 0 0px #ff2d95, 0 0 0px #ff2d95, 0 0 10px #ff2d95;


            }
        </style>
        <!--===============================================================================================-->

    </head>
    <body oncontextmenu="return false"  onselectstart="return false">

        <div class="limiter">
            <div class="container-login100">
                <div class="row" style="margin:0">
                    <div><img src="loginPage/images/header1350X80.jpg" class="img-thumbnail"/></div>
                </div>
                <div class="wrap-login100">
                    <form class="login100-form validate-form" action="controller/registration.php" method="post">
                        <span class="login100-form-title p-b-43">
                            Login to continue
                        </span>


                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="username" required="required">
                            <span class="focus-input100"></span>
                            <span class="label-input100">Username</span>
                        </div>


                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="password" name="password" required="required">
                            <span class="focus-input100"></span>
                            <span class="label-input100">Password</span>
                        </div>
                        <?php
                        if (!empty($_GET['status'])) {
                            if ($_GET['status'] == "failed") {
                                ?>
                                <span style="color:red; margin-left:45px;">Invalid Username & Password</span>
                                <?php
                            }
                        }
                        ?>
                        <div class="container-login100-form-btn">
                            <input class="login100-form-btn" type="submit" name="submit" value="Login">
                        </div>

                        <div class="text-center p-t-46 p-b-20">
                            <span class="txt2">Welcome to E.B Creasy Group</span>
                            <br/>
                            <span class="txt2">You are about to connect to the E.B Creasy Network.</span>
                            <br/>
                            <span class="txt2">By login, you agree to abide by the terms of the E.B Creasy Acceptable IT Use Policy.</span>
                            <br/>
                        </div>
                    </form>

                    <div class="login100-more" style="background-image: url('loginPage/images/darleybutler.jpg');">
                        <div class="company-names"  id="embossed">
                            <span class="login100-form-title p-b-43">DARLEY BUTLER & CO LTD</span>
                            <span class="login100-form-title p-b-43">E.B CREASY LOGISTICS LTD</span>
                            <span class="login100-form-title p-b-43">CANDY DELIGHTS LTD</span>
                            <span class="login100-form-title p-b-43">LAXAPANA BATTERIES PLC</span>
                            <span class="login100-form-title p-b-43">MULLER & PHIPPS (CEYLON) PLC</span>
                            <span class="login100-form-title p-b-43">PETTAH PHARMACY (PVT) LTD</span>
                            <span class="login100-form-title p-b-43">LANKA SPECIAL STEELS LTD</span>
                            <span class="login100-form-title p-b-43">CEYFLEX RUBBER LTD</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <!--===============================================================================================-->
        <script src="loginPage/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="loginPage/vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="loginPage/vendor/bootstrap/js/popper.js"></script>
        <script src="loginPage/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="loginPage/vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="loginPage/vendor/daterangepicker/moment.min.js"></script>
        <script src="loginPage/vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="loginPage/vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="loginPage/js/main.js"></script>

    </body>
</html>