<?php

function drawParallelogram($number) {
    $output = '';
    for ($i = 0; $i < $number; $i++) {
        $output .= str_repeat('_', $number - $i - 1);
        $output .= str_repeat('*', $number);
        $output .= str_repeat('_', $i);
        $output .= PHP_EOL;
    }
    return $output;
}
$parallelogram = '';
if (isset($_POST['number'])) {
    $number = intval($_POST['number']);
	$parallelogram = drawParallelogram($number);
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
            <p>Parallelogram:</p>
            <?php echo nl2br($parallelogram); ?>
        </div>
</body>
</html>