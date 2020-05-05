<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>If Statement</title>
</head>
<body>

<?php
$weather = "sunny";

if ($weather == "sunny") {
    echo 'Weather is pleasent' . '<br>';

} elseif ($weather == 'rainy') {
    echo "It is raining";

} elseif ($weather == 'cloudy') {
    echo "Cloud pleasent";

} else {
    echo "it's not pleasent";
}
?>

<hr>

<?php
$boughtProduct = true;

if ($boughtProduct) {
    echo '<h1>Thank you</h1>';
    echo "<p>Your product will be dispatch soon</p>";

} else {
    echo '<h1>Please Wait</h1>';
    echo "<p>Your payment is in processing</p>";
}
?>

<hr>

<?php
$a = 4;
$b = 2;
$c = 'can not be out';

if ($b > 0) {
    $c = $a / $b;
}

echo $c;
?>

</body>
</html>