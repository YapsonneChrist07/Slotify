<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Current Time</title>
</head>
<body>
    <?php
    // Set timezone (optional)
    date_default_timezone_set("Africa/Abidjan");
    ?>

    <p>Current time: <?php echo date("h:i A"); ?></p>
</body>
</html>

<!-- Steps:
1) Create time.html and time.php
2) Open time.php on a server to see server time
3) Try date('H:i:s') for 24-hour format -->


<!-- EXERCISE 3.1

Task: Create a form with two inputs and a dropdown for +, -, *, /. Show the result when the user submits.

Goal: Practice forms, $_POST, numeric conversion (floatval) and conditionals. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get numbers from form and convert to float
        $num1 = floatval($_POST['num1']);
        $num2 = floatval($_POST['num2']);
        $operator = $_POST['operator'];
        $result = '';

        // Perform calculation based on selected operator
        if ($operator == '+') {
            $result = $num1 + $num2;
        } elseif ($operator == '-') {
            $result = $num1 - $num2;
        } elseif ($operator == '*') {
            $result = $num1 * $num2;
        } elseif ($operator == '/') {
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = 'Error: Division by zero';
            }
        }

        // Display the result
        echo '<p>Result: ' . $result . '</p>';
    }
    ?>

    <form method="post">
        <input type="text" name="num1" placeholder="Number 1" required>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="num2" placeholder="Number 2" required>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>
