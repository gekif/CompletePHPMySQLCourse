<?php
$expireTime = time() + 86400;
setcookie("name","Fikar", $expireTime);
setcookie("age","45", $expireTime);

//UnSEt cookie
$expireTime_Unset = time() - 86400;
setcookie("name","Fikar", $expireTime_Unset);
//setcookie("name",null);
//setcookie("name","",$expireTime_Unset);

if (isset($_COOKIE['name'])) {
    echo 'cookie is set with the Name of ' . $_COOKIE['name'];
} else {
    echo 'cookie is not Set';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookie Unset</title>
</head>
<body>

</body>
</html>