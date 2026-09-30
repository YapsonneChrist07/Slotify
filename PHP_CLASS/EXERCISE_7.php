<!-- Steps:
1) Create products.html and products.php
2) Open products.php on server to see list generated from array
3) Add/remove items in the array to update list -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $products = ['Laptop', 'Phone', 'Tablet', 'Camera'];
    echo '<ul>';
    foreach($products as $p){
    echo '<li>' . htmlspecialchars($p) . '</li>';
    }
    echo '</ul>';
    ?>
</body>
</html> 

<!-- EXERCISE 7.1
Task: Generate a random number between 1 and 10. Let the user input a guess via a form and display “Correct!” or “Try again”. 
Goal: Practice forms, conditionals, random numbers (rand()), and server-side logic. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Guessing Game</title>
</head>
<body>
    <?php
    // Generate a random number between 1 and 10
    $randomNumber = rand(1, 10);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $guess = intval($_POST['guess']); // Convert user input to integer

        // Compare guess with random number
        if ($guess === $randomNumber) {
            echo '<p>Correct! The number was ' . $randomNumber . '.</p>';
        } else {
            echo '<p>Try again! The number was ' . $randomNumber . '.</p>';
        }
    }
    ?>

    <!-- User guess form -->
    <form method="post">
        <input type="number" name="guess" placeholder="Enter a number 1-10" min="1" max="10" required>
        <input type="submit" value="Guess">
    </form>
</body>
</html>
