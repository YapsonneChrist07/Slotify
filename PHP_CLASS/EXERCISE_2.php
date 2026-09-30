<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Date: <?php echo date("Y-m-d H:i:s"); ?></p>
</body>
</html>

<!-- 1) Create date.html and date.php
2) Open date.html (shows fixed date)
3) Open date.php on server (shows today's date)
4) Try different formats like date('Y-m-d') -->


<!-- EXERCISE 2.1
Task: Create an array of greetings like ['Hello', 'Hi', 'Welcome'] and display a random greeting each time the page loads.

Goal: Practice arrays and array_rand(). -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Greeting</title>
</head>
<body>
    <?php
    // Create an array of greetings
    $greetings = ['Hello', 'Hi', 'Welcome', 'Good day', 'Hey there'];

    // Pick a random greeting
    $randomGreeting = $greetings[array_rand($greetings)];

    // Display the greeting
    echo '<p>' . $randomGreeting . '</p>';
    ?>
</body>
</html>
