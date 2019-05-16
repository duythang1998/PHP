<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Foreach mảng kết hợp ( Có key chắc chắn chứa chữ)</h1>

<?php
//Mảng kết hợp

$students = array("a" => "nguyen van a1","b" => "nguyen van a2","c" => "nguyen van a3","d" => "nguyen van a4","e" => "nguyen van a5",);
echo "<pre>";
print_r($students);
echo "</pre>";

echo "<br> Dạng foreach đầy đủ";
// Dậng foreach đầy đủ

if (is_array($students) && !empty($students)) {
    foreach ($students as $key => $values) {
        echo "<br> Key : " . $key . "Values : " . $values;
    }
}

echo "<br> Dạng foreach rút gọn";
// Dạng foreach rút gọn chỉ lặp và xuất ra cái values

if (is_array($students) && !empty($students)) {
    foreach ($students as $values) {
        echo "<br> Values : " . $values;
    }
}
?>
</body>
</html>