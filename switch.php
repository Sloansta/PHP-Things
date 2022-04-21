<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Switch</title>
</head>
<body>
    <?php
        $age = 12;
        switch(true) {
            case ($age < 5):
                echo "Stay home<br>";
                break;
            case ($age == 5):
                echo "Go to Kindergarten<br>";
                break;
            case in_array($age, range(6, 17)):
                $grade = $age - 5;
                echo "Go to Grade $grade<br>";
                break;
            default:
                echo "Go to College<br>";
                break;
        }
    ?>
</body>
</html>