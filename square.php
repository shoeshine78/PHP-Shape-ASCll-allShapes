<?php
function drawSquare($size) {
    $line = str_repeat('*', $size) . PHP_EOL;
    return str_repeat($line, $size);
}
$square = '';
if (isset($_POST['number'])) {
    $number = intval($_POST['number']);
	$square = drawSquare($number);
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
	
	</div>
        <div class="output-box">
            <p>square:</p>
            <?php echo nl2br($square); ?>
        </div>
</body>
</html>