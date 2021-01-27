
<h2>Mysql-Cơ sở dữ liệu</h2>

<?php
//1.Thông tin kết nối CSDL
$host = 'localhost'; //127.0.0.1
$name = 'root';
$password = '';
$dbname = 'webshop444';

//2.Khởi tạo đối tượng để kết nối csdl
$conn = mysqli_connect($host,$name,$password,$dbname);

//3.Kiểm tra kết nối thành công hay thất bại
if (!$conn) {
    die("kết nối thất bại:" .mysqli_connect_error());
}
    echo 'Kết nối CSDL thành công';
echo '<br>';
//die(); //kết thúc chương trình tại vị trí đặt nó


?>