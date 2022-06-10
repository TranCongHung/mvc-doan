<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Public/css/CSS.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="Public/CSS/font-awesome/css/fontawesome-all.css"> 
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
    input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }
    input[type=text]:focus, input[type=password]:focus {
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
    <div class="container-fluid"  style="background-color:#a9c7e1;">
  <?php include_once 'inc/header.php'?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <BR> <div class="clearfix vi-header">
                <h3 class="vi-left-title pull-left"> TRANG CHỦ >LIÊN HỆ </h3>
                </div>
          
        </div>
        </div>
    </div>
    <div class="container">
       
        <br>
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7628.721061082017!2d106.9438681!3d17.0550087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1623976784701!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <div class="row">
            <div class="col-md-6">
                <form action="" method="POST" onsubmit="return validate()">
                    <div class="register"> 
                        <hr>
                      
                      
                        <label for="noidung"><b>NỘI DUNG CẦN GÓP Ý</b></label>
                        <input type="text"   name="noidung" id="noidung">
                        <hr>
                        <button type="submit" class="submit" onclick="return validate()">gửi</button>
                    </div>
            
                    <div class="register login">
                        <p id="thu"></p>
                        
            
                    
                    
                    </div>
            
                </form>
              
            </div>
       
        
            <div class="col-md-6" >
                <div class="row">
                    <div class="col-md-2">
                        <img src="Public/images/sanpham/Logo-removebg-preview.png"  width="200px">
                    </div>
                    <div class="col-md-10">
                        
                        
                    </div>
                <div class="row">
                    <div class="col-md-2">
                        <img src="Public/images/ảnh logo/house-fill.svg" class="img-fluid" width="40px">
                    </div>
                    <div class="col-md-10">
                        
                        <p>Doãn Kế Thiện, Cầu Giấy, Hà Nội, Vietnam</p>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <img src="Public/images/ảnh logo/headset.svg" class="img-fluid" width="40px">
                        </div>
                        <div class="col-md-10">
                            <p>19001234</p>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <img src="Public/images/ảnh logo/chat-square-quote-fill.svg" class="img-fluid" width="40px">
                    </div>
                    <div class="col-md-10">
                        <p>hung.trancong@phuxuan.edu.vn</p>
                    </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <img src="Public/images/ảnh logo/alarm-fill.svg" class="img-fluid" width="40px">
                </div>
                <div class="col-md-10">
                    <p>Đang cập nhật</p>
                </div>
        </div>
                
            </div>
            
        </div>
    </div>
    <br>
    </div>
    <div class="row">
        <div class="col-md-1 col-md-offret-1"></div>
        <div class="col-md-10 ">
               
            
                 
          
            
        </div>
    </div>

</div>
<?php include_once 'inc/foder.php'?>
    <br>
    <script src="js/js-lienhe.js"></script>
</body>

</html>