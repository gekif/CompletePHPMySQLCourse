<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>For Each Loops</title>
</head>
<body>

<?php
$number = [8, 60, 153, 322, 43, 32, 34, 45, 100];

foreach ($number as $n)
    echo "Numbers: $n<br>";
?>

<hr>

<?php
$food = [
    'item_number' => 100,
    'name' => 'pizza',
    'region' => 'italy',
    'side_food' => 'pasta',
    'drink' => 'cook',
    'package_price' => 200
];

foreach ($food as $key => $value) {
    $data = ucwords(str_replace("_", " ", $key));

    if ($key == 'package_price') {
        if (is_numeric($value)) {

        } else {
            $value = 'Can not be determined';
        }
    }

    echo "$data have: $value <br>";
}
?>

<hr>
<?php
$foods =
[
    [
        'item_number' => 100,
        'name' => 'pizza',
        'region' => 'italy',
        'side_food' => 'pasta',
        'drink' => 'cook',
        'package_price' => 12000
    ],
    [
        'item_number' => 200,
        'name' => 'pizzas',
        'region' => 'italies',
        'side_food' => 'pastas',
        'drink' => 'cooks',
        'package_price' => 120000
    ]
];

foreach ($foods as $food) {
    echo $food['item_number'] . '<br>';
}
?>

</body>
</html>