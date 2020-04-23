<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
</head>
<body>

<?php
$name = ['Fikar', 'Febrina', 'Fikri'];

echo $name[2];
?>

<hr>
<?php
$food = [
    'pizza', 10, 15, [
        'asian', 'french', 'german'
    ], 'pasta'
];
?>
<?= $food[2] ?><br>
<?= $food[3][1] ?><br>
<?= $food[56] = 'Mango' ?><br>
<?= $food[300] = 'Apple' ?><br>
<?= print_r($food) ?><br>

<hr>
<?php
$color = [
    'a' => 40,
    'b' => 'pizza'
];

echo $color['a'];
echo '<br>';

echo $color['b'];
echo '<br>';

print_r($color);
?>

<hr>
<?php
$foods = [
    'asian' => 'pizza',
    'italian' => 'Briyani'
];

foreach ($foods as $key => $value) {
    echo $key . ' ' . $value . ' ';
}

?>

</body>
</html>