<?php
$name = 'user';
$value = 'Moomal Nadeem';

setcookie($name, $value, time() + (2 * 24), '/');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (!isset($_COOKIE['user'])) {
        echo "Cookie not set";
    } else {
        echo $_COOKIE['user'];
    }
    ?>
</body>
</html>