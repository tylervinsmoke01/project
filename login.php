<?php
include("include/config.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>เข้าสู่ระบบ แกงหมา เรสเตอรองค์</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>

</head>
<body>
<nav class="navbar navbar-expand-sm bg-danger navbar-dark">
  <a class="navbar-brand" href="#">แกงหมา เรสเตอรองค์</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">หน้าแรก</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">เข้าสู่ระบบ</a>
      </li>  
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-12">
      <h2>เข้าสู่ระบบ</h2>
        <form action="checklogin.php" method="post"> 

          <div class="form-group">
            <label for="username">ชื่อผู้ใช้งาน:</label>
            <input type="text" class="form-control" id="username" placeholder="พิมพ์ชื่อผู้ใช้งานที่นี่" name="username" required>
          </div>

          <div class="form-group">
            <label for="loginpassword">รหัสผ่าน:</label>
            <input type="password" class="form-control" id="loginpassword" placeholder="พิมพ์รหัสผ่านที่นี่" name="loginpassword" required>
          </div>
          <div class="row">
            <div class="col"></div>
            <div class="col">ถ้าท่านยังไม่ได้สมัครสมาชิก <a href="signup.php">ลงทะเบียนที่นี่</a></div>
            <div class="col"></div>
          </div>  
          <button type="submit" class="btn btn-primary" name="login" id="login">เข้าสู่ระบบ</button>

        </form>
    </div>
  </div>
</div>

<style>
        body {
            background-color: #facfad; /* ใส่สีพื้นหลัง */
        }
</style>

</div>




</div>

</body>
</html>




  