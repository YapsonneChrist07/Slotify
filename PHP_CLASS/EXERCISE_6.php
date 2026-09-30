<!-- Steps:
1) Create calculator.html and calculator.php
2) Open calculator.php on server, input numbers and submit
3) Try decimal numbers; we used floatval() for safety -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $a = floatval($_POST['a']);
    $b = floatval($_POST['b']);
    $sum = $a + $b;
    echo '<p>Result: ' . $sum . '</p>';
    }
    ?>

    <form method='post'>
    <input name='a' placeholder='a'> + <input name='b' placeholder='b'>
    <input type='submit' value='Calculate'>
    </form>

</body>
</html>




<!-- EXERCISE 6.1

Task: Display Good morning / Good afternoon / Good evening / 
Good night based on the current server hour. Goal: Practice conditionals (if…elseif…else) and date('H') -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time-Based Greeting</title>
</head>
<body>
    <?php
    // Get the current hour (24-hour format)
    $hour = date('H');

    // Determine greeting based on hour
    if ($hour < 6) {
        echo '<p>Good night!</p>';
    } elseif ($hour < 12) {
        echo '<p>Good morning!</p>';
    } elseif ($hour < 18) {
        echo '<p>Good afternoon!</p>';
    } else {
        echo '<p>Good evening!</p>';
    }
    ?>
</body>
</html>


