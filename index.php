<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tip Calculator</title>
</head>
<body>
    <h1>Tip Calculator</h1>
    <form action="calculateTip.php"   >
        Bill subtotal: $
        <input type="text" name="Subtotal" value="0.00">
        <br><br>
        Tip percentage:
        <br><br>
        <?php
        for ( $i = 10; $i <= 20; $i += 5) {
        ?>
             <input type="radio" name="tipPercent<?php echo $i; ?>" value="<?php echo $i; ?>" <?php echo ($i==10)?'checked':''?> > <?php echo $i; ?>% 
        <?php
            #echo "The number is: $i<br>";
        }
        ?>
        <br><br>
        <input type="submit" value="Submit">
        <br><br>
    </form>
</body>
</html>