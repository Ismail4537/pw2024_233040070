<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="admin.php" method="post">
        <input type="text" name="username">
        <br>
        <input type="password" name="password" id="">
        <br>
        <input type="submit" value="Save" name="save">
    </form>
    <?php
    if (isset($_GET["error"])) {
        echo $_GET["error"];
    }
    ?>
</body>

</html>