<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>comment trong php</h1>
<pre>
    Comment thì không chạy mà chỉ để giải thích code cho các lập trình viên
    Phân biệt sự khác biệt khi echo giá trị cho 1 biến
    bằng nháy "" hoặc nháy đơn
    nếu trong nháy "" có $a thì php sẽ in ra giá trị của biến đó
    còn nếu trong nháy đơn thì $a được hiểu là một chuỗi bình thường
</pre>
<?php
/*
 * Comment nhiều dòng
 */
// Conment 1 dòng
$a = 10;
echo "Nháy kép :  giá trị của biến $a bằng :" .$a;
echo "<br>";
echo 'Nháy đơn : giá trị của biến $a bằng :' .$a;
?>
</body>
</html>