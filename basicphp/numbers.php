<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Numbers</title>
</head>

<body>
<?php
$firstNumber = 3;
$secondNumber = 4;
$thirdNumber = 3.654768;
$fourtNumber = 'Penbeck';

echo $thirdNumber + 9 - 6;
echo '<br>';

echo 3.1 / 6;
echo '<br>';
?>

<hr>
Ceiling: <?= ceil($thirdNumber) ?><br>
Floor: <?= floor($thirdNumber) ?><br>

<hr>
<?= "is $firstNumber: Integer -> " . is_int($firstNumber) ?><br>
<?= "is $secondNumber: Integer -> " . is_int($secondNumber) ?><br>
<?= "is $thirdNumber: Integer -> " . is_float($thirdNumber) ?><br>

<hr>
<?= "is $firstNumber: Float -> " . is_float($firstNumber) ?><br>
<?= "is $secondNumber: Float -> " . is_float($secondNumber) ?><br>
<?= "is $thirdNumber: Float -> " . is_float($thirdNumber) ?><br>

<hr>
<?= "is $firstNumber: Numeric -> " . is_numeric($firstNumber) ?><br>
<?= "is $secondNumber: Numeric -> " . is_numeric($secondNumber) ?><br>
<?= "is $thirdNumber: Numeric -> " . is_numeric($thirdNumber) ?><br>
<?= "is $fourtNumber: Numeric -> " . is_numeric($fourtNumber) ?><br>

<hr>
<?= "The decimal binary of $firstNumber is " . decbin($firstNumber) ?><br>
<?= "The decimal binary of $secondNumber is " . decbin($secondNumber) ?><br>
<?= "The decimal binary of $thirdNumber is " . decbin($thirdNumber) ?><br>

<hr>
Square: <?= sqrt(8) ?><br>
Absolute: <?= abs(-50 + 100) ?><br>
Power: <?= pow(10, 2) ?><br>
Modulus: <?= fmod(15, 7) ?><br>
Random: <?= rand() ?><br>
Random within 500 and 1600: <?= rand(500, 1600) ?><br>

<hr>
<?= $secondNumber += 2 ?><br>
<?= ++$secondNumber ?><br>
<?= $secondNumber -= 3 ?><br>
<?= --$secondNumber ?><br>


</body>

</html>