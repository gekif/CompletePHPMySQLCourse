<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Defined Function</title>
</head>
<body>

<?php
function welcome()
{
    echo "Welcome to the courses";
}

welcome();
?>

<hr>

<?php
function addition()
{
    $a = 5;
    $b = 2;
    $c = $a + $b;

    echo "Addition is $c <br>";
}

addition();
?>

<hr>

<?php
function addition_with_parameter($a, $b)
{
    return $a + $b;
}

$total = addition_with_parameter(50, 50);
$total1 = addition_with_parameter($total, 2);

echo $total1;
?>

</body>
</html>