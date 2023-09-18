<?php

function drawReverseTriangle($number) {
    $output = '';
    for ($i = 0; $i < $number; $i++) {
        $output .= str_repeat('*', $i + 1);
        $output .= str_repeat('_', $number - $i - 1);
        $output .= PHP_EOL;
    }
    return $output;
}

$Reversetriangle = '';

if (isset($_POST['number'])) {
    $number = intval($_POST['number']);
    $Reversetriangle = drawReverseTriangle($number);
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
	 <div class="output-box">
            <p>reverse triangle:</p>
            <?php echo nl2br($Reversetriangle); ?>
        </div>
    </div>
</body>
</html>
