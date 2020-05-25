<?php session_start(); ?>

<?php
$_SESSION["name"] = "Dzulfikar Maulana";
$name = $_SESSION["name"];
echo $name;
?>

<br>
<?php
$_SESSION["age"] = "45";
$age = $_SESSION["age"];
echo $age;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
</head>
<body>

</body>
</html>