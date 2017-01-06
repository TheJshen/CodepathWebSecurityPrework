<!DOCTYPE html>
<html lang="en">
<head>
    <style> 
    .error {color: #FF0000;}
    </style>
    <meta charset="UTF-8">
    <title>Tip Calculator</title>
</head>
<body>
    <?php
    $subtotalError = "";
    function validateSubtotal($data) {
        return (filter_var($data, FILTER_VALIDATE_FLOAT) && floatval($data) > 0.0);
    }

    if(isset($_POST['submit'])) {
        if(!validateSubtotal($_POST['subtotal'])) {
            $subtotalError = "Enter Valid Subtotal(positive)";
        }
    }
    ?>
    <h1>Tip Calculator</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"  >
        Bill subtotal: $
        <input type="text" name="subtotal" value=
         <?php echo isset($_POST['subtotal']) ? htmlspecialchars($_POST['subtotal']) : "0.00";?>
            >
        <span class="error"> <?php echo $subtotalError;?> </span>
        <br><br>
        Tip Percentage:
        <br><br>
        <?php
        for ( $i = 10; $i <= 20; $i += 5) {
        ?>
             <input type="radio" name="tipPercent" value="<?php echo $i; ?>" 
                <?php echo isset($_POST['tipPercent']) && ($i == intval($_POST['tipPercent'])) ? 'checked' :($i == 10 ? 'checked' : '');?>>
                <?php echo $i; ?>%
        <?php
        }
        ?>
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br><br>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $selectedRadio = floatval($_POST['tipPercent']);
        $subtotalVal = floatval($_POST['subtotal']);
        if($subtotalVal > 0.0) {
            $tip = $subtotalVal * ($selectedRadio)*(0.01);
            $tipFormat = number_format($tip, 2, ".", ",");
            $subtotalFormat = number_format($subtotalVal, 2, ".", ",");
            echo "Tip:     $", $tipFormat, "<br>";
            echo "Total:  $", $tipFormat + $subtotalFormat, "<br>";
        }
    }
    ?>
</body>
</html>