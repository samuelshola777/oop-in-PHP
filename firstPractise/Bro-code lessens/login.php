<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form action="login.php" method="post">
        <label for="">username:</label><br />
        <input type="text" name="username" /><br />

        <label for="">password:</label><br />
        <input type="password" name="password" /><br />
        <input type="Submit" value="Log in" />
    </form>
</body>

</html>
<?php

$usernamez = $_POST["username"];
echo "{$_POST["username"]}<br />";
echo $_POST["password"];


echo $usernamez;
?>