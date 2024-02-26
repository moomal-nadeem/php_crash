<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- using GET
    <form action="08Display.php" method="get">
        <input type="text" name="name">
        <input type="email" name="email" id="">
        <input type="password" name="pass" id="">
        <button type="submit">Submit</button>
    </form> -->

    <!-- 
    <form action="08Display.php" method="POST">
        <input type="text" name="name">
        <input type="email" name="email" id="">
        <input type="password" name="pass" id="">
        <button type="submit">Submit</button>
    </form> -->

    <!-- //SERVER GLOBAL Variable -->

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="name">
        <input type="email" name="email" id="">
        <input type="password" name="pass" id="">
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        echo $_POST['name'];
    }
    ?>

</body>

</html>