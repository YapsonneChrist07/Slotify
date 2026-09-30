<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome</title>
</head>
<body>
<?php
// PHP code embedded within HTML
$name = "John"; // You can change this to your own name
?>
<h1>Welcome to my website, <?php echo $name; ?>!</h1>
</body>
</html>

<!-- Steps:
1) Create welcome.html and welcome.php
2) Open welcome.html to see static message
3) Open welcome.php on a PHP-enabled server to see dynamic message
4) Change $name to your own name and refresh -->


<!-- EXERCISE 1.2 -->

 <!-- 1. Current Date and Time in Multiple Formats
Task: Display today’s date in multiple formats:
Y-m-d → 2025-11-17
d/m/Y → 17/11/2025
l, F j, Y → Sunday, November 17, 2025
Goal: Practice date() and formatting options. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Date Formats</title>
</head>
<body>
    <p>Format Y-m-d: <?php echo date("Y-m-d"); ?></p>
    <p>Format d/m/Y: <?php echo date("d/m/Y"); ?></p>
    <p>Format l, F j, Y: <?php echo date("l, F j, Y"); ?></p>
</body>
</html>
