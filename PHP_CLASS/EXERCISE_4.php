<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $quotes = ['Keep going!', 'Never give up!', 'Code your dreams!', 'Ship early, ship often.'];
    echo '<p>Quote: ' . $quotes[array_rand($quotes)] . '</p>';
?>
</body>
</html>

<!-- Steps:
1) Create quote.html and quote.php
2) Open quote.php and refresh to see different quotes
3) Add more quotes to the array -->


<!-- EXERCISE 4.1 

Task: Create an array of colors. Use a foreach loop to display them as an unordered HTML list.

Goal: Practice arrays and loops in PHP. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colors List</title>
</head>
<body>
    <?php
    // Create an array of colors
    $colors = ['Red', 'Blue', 'Green', 'Yellow', 'Purple'];

    // Start unordered list
    echo '<ul>';

    // Loop through each color and display as a list item
    foreach ($colors as $color) {
        echo '<li>' . htmlspecialchars($color) . '</li>';
    }

    // End unordered list
    echo '</ul>';
    ?>
</body>
</html>



