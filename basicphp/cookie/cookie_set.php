<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookie Set</title>
</head>
<body>

<?php
$expireTime = time() + 86400;

setcookie("name","Dzulfikar", $expireTime);
setcookie("age","45", $expireTime);

//print_r($_COOKIE);
echo $_COOKIE["name"] . "<br>";
echo 'my name is : ' . $_COOKIE["name"] . ' and my age is: ' . $_COOKIE['age'];
?>

</body>
</html>