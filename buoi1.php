<h1>Xin chào</h1>
<?php
//Biến
$a = 5;
$b = 'ab';
echo $a;
echo '<br>';
echo $b;
//Tên biến
$tenbien = 'Dev Master';
$ten_bien = 'Quoc Tuan'; // nên dùng
$tenBien = 'Dev'; //nên dùng

//gettype - lấy kiểu dữ liệu của biến
echo '<br>';
echo gettype($a);
echo '<br>';
echo gettype($b);

//ép kiểu
$c = 12.4;
$c = (int) $c;
echo '<br>';
echo $c;
$c = (double) $c;
echo '<br>';
echo $c;

//settype -- hàm chuyển đổi kiểu dữ liệu

$d = 3.4; // double

settype($d, 'integer'); //chuyển kiểu dl:integer
echo '<br>';
echo gettype($d);
echo '<br>';
echo $d. ' kieu du lieu ' . gettype($d);

//unset -- hủy bỏ một biến
unset($d); //giải phóng bộ nhớ bị chiếm bởi biến $d
echo $d;
echo $d;

//isset -- kiểm tra 1 biến đã được định nghĩa hoặc khai báo hay chưa???
if (isset($d)) {
    echo 'ton tai';
} else {
    echo 'd - khong ton tai';
}

echo '<br>';
if (isset($c)) {
    echo 'c - ton tai';
} else {
    echo 'khong ton tai';
}

//empty -- hàm kiểm tra xem biến có bằng một trong các giá trị sau
// 0.0 ; "0"  ; "" ; NULL ; FALSE ; array()
//nếu bằng một trong các giá trị trên thì n sẽ trả về true  ,  và ngược lại .

$e = ''; // chuỗi rỗng
if (empty($e)) {
 echo '<br>chuỗi rỗng';
} else {
    echo '<br> false';
}

// is_string -- kiểm tra xem 1 biến có phải là chuỗi hay không???
$f = 'dev';
if (is_string($f)) {
    echo '<br> kiểu chuỗi';

} else {
    echo '<br> không phải kiểu chuỗi';
}

$g = true; //kiểu dữ liệu boolean
if ($g) {
    echo '<br>vào';
    //dấu !  làm phủ định giá trị của biểu thức hiện tại
    //!empty - kiểm tra xem một biến có tồn tại và khác rỗng hay không?

}
$h = '';
if (!empty($h)) {
    echo '<br> h - biến tồn tại và khác rỗng';
}




?>
