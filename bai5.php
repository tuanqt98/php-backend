<h2>Đọc ghi file</h2>
<?php
//đường dẫn tới file
$filename = 'C:/xampp/htdocs/hocphp/test.txt';
//mở file sử dụng hàm fopen
$file = fopen($filename, 'w') or exit('Không tìm thấy');
//ghi nội dung vào file
fwrite($file, 'them moi');
fclose($file);


?>
