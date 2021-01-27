<h1>Bài 1</h1>
<?php
//Biến
$a = 3; //number - integer(số nguyên)
$b = 'ba'; // string (chuỗi)
$ho_ten = 'Quốc Tuấn'; // suggest
$hoten='DEV';
$hoTen='Dev Master'; //suggest

echo $a;
echo '<br>';
echo $b;

//lấy kiểu dữ liệu của biến
echo gettype($a);
echo '<br>';
echo gettype($b);


//ép kiểu dữ liệu
$c = 2.54;
echo '<br>';
echo gettype($c);
$c = (int) $c;
echo '<br>';
echo $c;

echo '<br>';
//chuyển sang kiểu số nguyên
$c = (int) $c;
echo $c;
echo '<br>';
echo gettype($c);


//
$d = 3.4;
settype(  $d, 'integer');
echo '<br>';
echo $d.'kieu du lieu' .gettype($d); //nối chuỗi bằng dấu chấm
echo gettype($d);


//unset hủy bỏ một biến
unset($d); //giải phóng bộ nhớ bị chiếm bở biến $d

echo $d;
echo $d;

//inset-kiểm tra một biến đã được đinh nghĩa
if(isset($d)) {
echo 'ton tai';

}else {
    echo 'khong ton tai';
}
if (isset($c)) {
    echo '<br> c-ton tai';
}else {
    echo '<br> khong ton tai';
}

//empty  - hàm kiểm tra xem biến có bằng 1 trong các giá trị sau
// 0.0 ; "0"; "" ;NULL;FALSE ; array()
//nếu bằng một trong các gt trên thì trả về true , ngược lại
/*if (dung){
    //dung
}else{
    //sai
}*/
$e = '' ; // chuỗi rỗng
if(empty($e)) {
    echo '<br> chuỗi rỗng';
}
//is-string kiểm tra xem 1 biến có phải chuỗi hay không;
$f = 'dev';
if(is_string($f)) {
    echo '<br> Kiểu chuỗi';
}

$g = true; //kiểu dữ liệu là boolean
if(!$g) {
    echo 'vao';
    //dấu ! làm phủ định giá trị của biểu thức hiện tại
}

// !empty(bieu_thuc) - kiểm tra 1 biến có tồn tại & khác rỗng hay không
$h = '';
if(!empty($g)) {
    echo '<br> h - bien ton tai va khac rong';
}
if(!empty($abc)) {
    echo $abc;
}

?>