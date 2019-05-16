<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>toán tử ! là toán tử phủ định</h1>
<?php
//MẢng chỉ số

$students = array("nguyen van a1","nguyen van a2","nguyen van a3","nguyen van a4","nguyen van a5",);
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