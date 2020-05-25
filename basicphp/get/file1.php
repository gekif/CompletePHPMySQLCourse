<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File 2</title>
</head>
<body>

<?php
$name ="Alex Nugraha";
$position = "Support Manager"
?>

<a href="file2.php?name=<?php echo $name; ?>">Click</a><br>
<a href="file2.php?name=<?php echo $name; ?>&<?php echo $position;?>">Click 2</a><br>
<a href="file2.php?name=<?php echo $name; ?>&position=<?php echo rawurlencode($position); ?>">Click 3</a>

</body>
</html>