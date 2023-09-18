<?php
function drawStripedLine($number) {
    $output = '';
    for ($i = 0; $i < $number; $i++) {
        $output .= ($i % 2 == 0) ? '*' : '_';
    }
    return $output;	
}
$stripedLine = '';

if (isset($_POST['number'])) {
    $number = intval($_POST['number']);
    $stripedLine = drawStripedLine($number);
   
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
            <div class="output-box">
            <p>striped line:</p>
            <?php echo nl2br($stripedLine); ?>
</body>
</html>