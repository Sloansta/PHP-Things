<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP If</title>
</head>
<body>
    <?php
        # Conditional operators : == != < > <= >= and with
        # Logical operators : && ||
        $num_oranges = 4;
        $num_bananas = 36;

        if(($num_oranges > 25) && ($num_bananas > 30)) {
            echo "25% Discount<br>";
        } elseif(($num_oranges > 30) || ($num_bananas > 35)) {
            echo "15% Discount<br>";
        } elseif(!(($num_oranges < 5)) || (!($num_bananas < 5))) {
            echo "5% Discount<br>";
        } else {
            echo "No Discount<br>";
        }
    ?>
</body>
</html>