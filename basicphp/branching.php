<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Branching</title>
</head>
<body>

<?php
$names = ['fikar', 'fikir', 'fikur', 'fakur', 'faker'];

for ($i = 0; $i <= 7; $i++) {
    if ($names[$i] == 'fakur') {
        break;
    }

    echo $names[$i] . '<br>';
}
?>

</body>
</html>