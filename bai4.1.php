<h1>Sử dụng hàm /phương thức</h1>
<?php
//tạo ra một hàm - chức năng - function ten_ham() { ..}
function show() {
    echo 'xin chào';
}
show();
//hàm không có tham số
function tinh_tong() {
    echo 3+4;
}
//gọi hàm method => ten_ham();
tinh_tong();
//hàm có tham số : function ten_ham($a, $b, $c) { }
function tinh_tong2($a ,$b) {
    echo $a + $b;
}
tinh_tong2(3,4);

function tinh_tong3 ($a , $b) {
    return $a + $b;
}
$c = tinh_tong3(3, 4);
echo $c;
?>
