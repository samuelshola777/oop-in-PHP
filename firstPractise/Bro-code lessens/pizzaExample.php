<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="pizzaExample.php" method="post">
        <label for="">quantityZ: </label>
        <input type="text" name"quantity">
        <input type="submit" value="total">
    </form>
</body>

</html>

<?php

$item = "pizza";
$price = 5.99;
$quantity = 0;
$quantity = $_POST["quantity"];
$total = $quantity * $price;
echo "you have ordered {$quantity} X {$item}/s <br>";
echo "your total is:  \${$total}";

?>