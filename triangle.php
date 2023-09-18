<?php
function drawTriangle($number) {
    $output = '';
    for ($i = 0; $i < $number; $i++) {
        $output .= str_repeat('*', $number - $i);
        $output .= str_repeat('_', $i);
        $output .= PHP_EOL;
    }
    return $output;
}
$triangle = '';
if (isset($_POST['number'])) {
    $number = intval($_POST['number']);
	 $triangle = drawTriangle($number);
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
            <p>triangle:</p>
            <?php echo nl2br($triangle); ?>
        </div>
</body>
</html>