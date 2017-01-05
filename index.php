<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tip Calculator</title>
</head>
<body>
    <h1>Tip Calculator</h1>
    <form action="index.php"   >
        Bill subtotal: $
        <input type="text" name="subtotal" value="0.00">
        <br><br>
        Tip percentage:
        <br><br>
        <?php
        for ( $i = 10; $i <= 20; $i += 5) {
        ?>
             <input type="radio" name="tipPercent" value="<?php echo $i; ?>" <?php echo ($i==10)?'checked':''?> > <?php echo $i; ?>% 
        <?php
        }
        ?>
        <br><br>
        <input type="submit" value="Submit">
        <br><br>
        <?php
        $selectedRadio = $_POST['tipPercent'];
        if($selectedRadio == "10") {
            #$tip = $_POST['subtotal'] * 
            # how to do math on POST
        }
        if($selectedRadio == "15") {

        }
        if($selectedRadio == "20") {

        }
        ?>
    </form>
</body>
</html>