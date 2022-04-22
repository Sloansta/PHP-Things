<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops</title>
</head>
<body>
    <?php 
        $i = 0;
        while($i < 10) {
            echo ++$i . ', ';
        }
        echo '<br>';

        for($i = 0; $i < 10; $i++) {
            if(($i % 2) == 0) {
                continue;
            }
            if($i == 7) break;

            echo $i . ', ';
        }

        echo '<br>';

        $i = 0;

        do {
            echo "Do While : $i<br>";
            $i++;
        } while ($i <= 10);
    ?>
</body>
</html>