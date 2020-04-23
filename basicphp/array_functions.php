<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Functions</title>
</head>
<body>

<?php
$color = ['red', 'green', 'blue'];

array_pop($color);
array_push($color, 'black', 'white', 'pink');

print_r($color);
?>

<hr>
<?php
$numbers = [113, 54, 6, 89, 100, 15, 12, 789, 1000];

print_r($numbers);
?>

<br>

Count: <?= count($numbers) ?><br>
Min: <?= max($numbers) ?><br>
Max: <?= min($numbers) ?><br>
Check: <?= in_array(54, $numbers) ?><br><br>

Sort: <?= sort($numbers) ?><br>
<?= print_r($numbers) ?><br><br>

Reverse Sort: <?= rsort($numbers) ?><br>
<?= print_r($numbers) ?><br><br>

Implode:
<?php
$quote = ['Never', 'Give', 'Up', 'In', 'Life'];

echo implode(' ', $quote);
?><br><br>

Explode:
<?php
$quote = "Never Give Up In Life";

 print_r(explode(' ', $quote));
?><br><br>

</body>
</html>