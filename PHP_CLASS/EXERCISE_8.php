<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $hour = date('H');
    if($hour < 12){
    echo '<p>Good morning!</p>';
    }elseif($hour < 18){
    echo '<p>Good afternoon!</p>';
    }else{
    echo '<p>Good evening!</p>';
    }
    ?>

</body>
</html>

<!-- Steps:
1) Create greeting.html and greeting.php
2) Open greeting.php at different times to observe greeting change
3) Modify the boundary hours if desired -->