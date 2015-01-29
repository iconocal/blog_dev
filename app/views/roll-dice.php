<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Roll Dice</title>
</head>

<body>
    <h1>Roll dem bones!</h1>

    <p>You guessed <?= $guess ?></p>
    
    <p>You rolled <?= $roll; ?> !</p>

    <?php
        if ($roll == $guess) {
            echo "<h1>You won!</h1>";
        }
    ?>
</body>
</html>