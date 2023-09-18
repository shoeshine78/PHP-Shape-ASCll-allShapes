<?php

function drawLine($number) {
    return str_repeat('*', $number);
}
$line = '';
if (isset($_POST['number'])) {
    $number = intval($_POST['number']);
    $line = drawLine($number);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Wico josue</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
        
        <form action="" method="post">
            <input type="number" name="number" placeholder="Enter a number" required>
            <input type="submit" value="Submit">
        </form>
    </div>

    <div class="output-container">
        <div class="output-box">
            <p>The line is:</p>
            <?php echo nl2br($line); ?>
</body>
</html>