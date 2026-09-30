<!-- Steps:
1) Create feedback.html (static) and feedback.php (dynamic)
2) Use feedback.php on server, submit feedback and see it displayed
3) Note security: we used htmlspecialchars() to avoid XSS -->

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
    $fb = htmlspecialchars($_POST['feedback']);
    echo '<p>Your feedback: ' . $fb . '</p>';
    }
    ?>

    <form method='post'>
    <input name='feedback' placeholder='Type feedback'>
    <input type='submit' value='Send'>
    </form>

</body>
</html>


<!-- EXERCISE 5.1

Task: Create a form to submit feedback. Display the feedback below the form. If the input is empty, show a warning message.

Goal: Practice $_POST, validation, and htmlspecialchars() for security. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get feedback from form and escape HTML for security
        $feedback = htmlspecialchars($_POST['feedback']);
        
        // Display the submitted feedback
        echo '<p>Your feedback: ' . $feedback . '</p>';
    }
    ?>

    <!-- Feedback form -->
    <form method="post">
        <input type="text" name="feedback" placeholder="Type your feedback" required>
        <input type="submit" value="Send">
    </form>
</body>
</html>

