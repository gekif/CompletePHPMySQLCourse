<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch</title>
</head>
<body>

<?php
$weather = "sunny";

switch ($weather) {
    case "sunny":
        echo "Weather is pleasent <br>";
        break;

    case "rainy":
        echo "It is raining <br>";
        break;

    case "cloudy":
        echo "Cloud pleasent <br>";
        break;

    default:
        echo "it's not pleasent <br>";
}
?>

<hr>

<?php
$restrictedArea = 'guard';

switch ($restrictedArea) {
    case 'guard':
        echo 'permission granted';
        break;

    case 'office boy':
    case 'public':
    case 'media':
        echo 'permission denied';
        break;

    default:
        echo "See you guys";
}
?>


</body>
</html>