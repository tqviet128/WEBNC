<?php
$connect = mysqli_connect ('localhost', 'root', '1', 'data') or die ('Không thể kết nối tới database');
mysqli_set_charset($connect, 'UTF8');

if($connect === false){ 
die("ERROR: Could not connect. " . mysqli_connect_error()); 
}
else {
echo " <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />";
echo 'Kết nối DB thành công!';
}
?>