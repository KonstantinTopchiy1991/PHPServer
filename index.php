<?php
session_start();
$a = $_POST['a'];
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
} else {
    $_SESSION['count'] += $a;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <style>
        input {
            width: 300px;
            height: 300px;
            font-size: 140px;
        }
    </style>
</head>
<body>
<div>

    <span>Count= <?php print $_SESSION['count'] ?></span>
    <form class="" action="index.php" method="post">
        <input value="1" type="submit" name="a">
    </form>
</div>
</body>
</html>