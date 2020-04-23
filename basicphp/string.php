<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String</title>
</head>
<body>

<!-- String Foundation -->
<?php
//echo 'My name is fikar <br>';
//echo 'I am 30 years old<br>';
//
//$color = 'red';
//$shirt = 'sleev-les';
//$combination = $color . ' ' . $shirt;
//
//echo "I have $combination shirt"
?>

<!-- String Function -->
<?php
$phrase1 = 'student who come late ';
$phrase2 = 'in class sit in last with rock';

$combine = $phrase1;
$combine .= $phrase2;

echo "Original full of string: $combine <br>"
?>

<hr>
Uppercase First: <?= ucfirst($combine) ?> <br>
Uppercase Words: <?= ucwords($combine) ?> <br>
Lowercase: <?= strtolower($combine) ?> <br>
Uppercase: <?= strtoupper($combine) ?> <br>

<hr>
Repeat: <?= str_repeat($combine, 2) ?><br>
Make substring from one point to another: <?= substr($combine, 5, 10) ?><br>
Find position of any specific word: <?= strpos($combine, "come") ?><br>
Find character: <?= strchr($combine, 'r') ?><br>

<hr>
Total Length of String: <?= strlen($combine) ?><br>
Trim: <?= 'A' . trim(' B C D ') . 'E' ?><br>
Find Specific and Show After: <?= strstr($combine, 'come') ?><br>
Replace Word With New: <?= str_replace('sit', 'stand', $combine) ?><br>
</body>
</html>