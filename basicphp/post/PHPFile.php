<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP File</title>
</head>
<body>

<?php

print_r($_POST);

$username = $_POST['Username'];
$password = $_POST['Password'];
$submit = $_POST['Submit'];

if (isset($submit)) {
    echo 'Successful login<br>';
    echo "Welcome: $username <br>";
}

if (isset($username) && !empty($username)) {
    echo "Username is set with the name of: $username";
}

?>

</body>
</html>