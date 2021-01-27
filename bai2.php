<h1> Khác nhau giữa post và get</h1>
<?php
$ten_bien = 'dev';
echo $ten_bien;

//biểu thức điều kiện
// if(biểu thức)...else....

if ($ten_bien == 'dev') {
    echo '<br> đúng';
} else {
    echo '<br> sai';
}

$a = 10;
if ($a == '10') echo '<br> số 10';

if ($a === '10') {
    echo '<br> số 10 thứ 2';
    // khi sử dụng điều kiện so sánh === thì nó sẽ so sánh đến cả kiểu dữ liệu


}
//toán tử tăng
$b = 4;
$b++;
echo '<br> toán tử tăng ++ = '.$b;
//toán tử giảm
$b--;
echo'<br> toán tử giảm -- ='.$b;

// Toán tử điều kiện: Biểu thức điều kiện ? (xử lý nếu đúng) :(xử lý nếu sai)
//ví dụ 1:
if (3>2) {
    echo '<br>3 lớn hơn 2';
} else {
    echo '<br>3 nhỏ hơn 2';
}
//
echo (3>2) ? '<br>Lớn hơn' : '<br>Nhỏ hơn';

//Toán tử gán:
if (3>2 && 4>3) echo '<br>đúng';
if (3>2 || 4<3) echo '<br> đúng';

//mảng
$mang = array(); // khai báo mảng rỗng
$mang2 = []; // cách 2 khai báo  mảng

$mang3 = array(1,2,3);
$mang4 = [3,4,5];
echo '<pre>';
print_r($mang3);
print_r($mang4);
echo '<br>';
echo date('d-m-Y');
echo '<br>';
echo date('Y-m-d');

//Hàm trim(): cắt khoảng trắng 2 đầu
echo '<br>';
$d= ' dev ';
echo trim($d);
//hàm explode() - chuyển 1 chuỗi thành mảng

$e = 'dev code';
$arr = explode(' ', $e);
echo '<br>';
print_r($arr);

$e2 = 'dev,code';
$arr2 = explode(',', $e2);
echo '<br>';
print_r($arr2);

// strpos - Hàm tìm kiếm 1 chuỗi bất kỳ trong chuỗi ban đầu.
//kết quả của hàm là trả về vị trí tìm thấy bắt đầu = 0 và là số nguyên
//nếu không tìm thấy sẽ trả về false;
echo '<br>';
var_dump(strpos('dev code', 'code'));
//var_dump giống echo và print_r đều để hiển thị gt nào đó nên màn hình nhưng
//var_dump sẽ hiển thị thêm cả kiểu dl của gt cần hiển thị


?>
