<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Form</title>
</head>
<body>
<fieldset>
    <legend>HTML 5 Form</legend>
    <form action="PHPFile.php" method="POST" >
        <label for="Username">Username:</label>
        <input id="Username" type="text" name="Username"><br><br>
        <label for="Password">Password:</label>
        &nbsp;
        <input id="Password" type="Password" name="Password"><br><br><br>
        <input type="Submit" name="Submit" value="Submitted">
    </form>
</fieldset>

</body>
</html>