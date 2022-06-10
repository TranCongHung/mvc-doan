<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="Public/css/css.css">
    <link rel="stylesheet" type="text/css" href="Public/css/trangchu.css">
    <link rel="stylesheet" type="text/css" href="Public/css/css.hover.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="PuBlic/CSS/font-awesome/css/fontawesome-all.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=vietnamese" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #cecece;
        }

        a {
            color: #00bd00;
        }

        * {
            box-sizing: border-box;
        }

        .register {
            width: 500px;
            padding: 16px;
            margin: 0 auto;
            background-color: white;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        .submit {
            background-color: #0900bd;
            color: white;
            padding: 15px 18px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .submit:hover {
            opacity: 1;
        }

        .login {
            background-color: #ffffff;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    include_once "./View/Inc/header.php"
    ?>
   
    
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="clearfix vi-header">
                    <h3 class="vi-left-title pull-left"> TRANG CHỦ >ĐĂNG NHẬP > </h3>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <br>
        <div class="row">

            <div class="col-md-6 ">

                <form action="index.php" method="POST" onsubmit="return validate1()">
                    <input type="hidden" name="controller" value="authController">
                    <input type="hidden" name="page" value="login">
                    <h1>Đăng Nhập</h1>
                    <p>Vui lòng điền thông tin để đăng nhập</p>
                    <hr>
                    <label for="username1"><b>Tên đăng nhập</b></label>
                    <input type="text" placeholder="Họ và tên" name="name" id="username1" onfocusout="formValidate()">

                    <label for="password1"><b>Mật khẩu</b></label>
                    <input type="password" placeholder="Nhập pass có độ dài từ 6 đến 12 kí tự" name="password" id="password1" onfocusout="formValidate()">
                    
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Nhớ
                    </label>

                    <button type="submit" class="submit">Đăng nhập</button>



                    <p>Bạn chưa có tài khoản? <a href="formdk.html">Đăng ký</a>.</p>

                </form>
            </div>
            <div class="col-md-6">
                <bR>
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="slide 1"> </button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="slide 2"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Public/images/sanpham/11.jpg" class="d-block w-100" width="800px" height="350px">
                        </div>
                        <div class="carousel-item">
                            <img src="Public/images/12.jpg" class="d-block w-100" width="800px" height="350px">
                        </div>
                        <div class="carousel-item">
                            <img src="Public/images/13.jpg" class="d-block w-100" width="800px" height="350px">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#mycarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#mycarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">next</span>
                    </button>

                </div>
            </div>
        </div>
    </div>
    <br>
    </div>
   
    
    <?php include_once 'inc/foder.php' ?>
</body>

</html>