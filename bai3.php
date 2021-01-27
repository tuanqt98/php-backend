<h1>Bài 3</h1>
<?php require 'bau3.2.php'?>
<?php require_once 'bau3.2.php'?>

<?php include 'bau3.1.php' ?>
<?php include_once 'bau3.1.php' ?>

<!--//sự khác nhau giữa include và require-->
<!--//Kết luận : nếu sử dụng include() khi gặp lỗi thì chương trình sẽ hiển thị một warning và vẫn tiếp-->
<!--//tục chạy những đoạn code bên dưới-->
<!--//+require()-Khi gặp lỗi chương trình sẽ trả về warning đồng thời-->
<!--//tạm dừng chương trình tại vị trí đó/-->
<!--//include_once và require_once :sẽ không triệu gọi file-->

<!--Cookie-->
<?php

date_default_timezone_set('Asia/Ho_Chi_Minh');
echo time();
echo date('d/m/Y H:i:s', time());
setcookie('username' , 'hcdung', time() +15);
setcookie('password' , '123456', time() +30);

// kết luận:cookie sẽ bị tự động xóa khi hết hạn expired
//Thời gian sống của cookie thì phụ thuộc vào cấu hình người dùng (ứng dụng ) setup

//Lấy giá trị của cookie : $_COOKIE['ten_bien']
if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
    $ten = $_COOKIE['username'];
    $pwd = $_COOKIE['password'];
    echo '<br>';
    echo $ten.' - ' .$pwd;
}
//xóa cookie thì sét thời gian sống < hiện tại

//SESSION- phiên làm việc

//Khởi động session
session_start();
// Khai báo sử dụng $_SESSION['ten_bien']
$_SESSION['user'] = 'DEV';
$a = $_SESSION['user'];
echo '<br>';
echo $a;

//xóa session : cách 1 : dùng hàm unset() & cách 2 session_destroy()
unset($_SESSION['user']); // xóa chỉ định một biến session
session_destroy(); //hủy toàn bộ session của trang


class customException extends Exception
{
    public function errorMessage()
    {
        //error message
        $errorMsg = 'Error on line ' . $this->getLine() . ' in ' . $this->getFile()
            . ': <b>' . $this->getMessage() . '</b> is not a valid E-Mail address';
        return $errorMsg;
    }
}

$email = "someone@example.com";

try {
    //check if
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        //throw exception if email is not valid
        throw new customException($email);
    }
    //check for "example" in mail address
    if (strpos($email, "example") !== FALSE) {
        throw new Exception("$email is an example e-mail");
    }
} catch (customException $e) {
    echo $e->errorMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}


?>














