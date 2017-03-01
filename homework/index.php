<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Homework<?= ($title) ? " | " . $title : "" ?></title>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <style>
        footer {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 10px;
            background-color: #efefef;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
require_once "../assets/inc/page_start.inc.php";
echo "<h1 align='center'>Homeworks of this course will be added here</h1>";
?>
<nav>
    <ul>
        <li><a href="<?php echo URL_BASE; ?>">Home</a></li>
    </ul>
</nav>
</body>
</html>

<?
require_once PATH_INC . "footer.inc.php";
?>
