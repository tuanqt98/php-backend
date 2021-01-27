<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
setcookie('username','nqtuan',time() + 10);
setcookie('password','123456',time() + 15);
echo time();
echo '<br>';
echo date('d/m/Y H:i:s', time());
echo '<br>';
//Hàm lấy giá trị của cookie: $_COOKIE['ten_bien'];
if(isset($ten) && isset($mk));
$ten =$_COOKIE['username'];
$mk = $_COOKIE['password'];
echo $ten. '_' .$mk;

//session
//khởi tạo session
session_start();
//khai báo sử dụng
$_SESSION['user'] = 'DEV';






?>
