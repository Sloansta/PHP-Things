<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Turnary</title>
</head>
<body>
    <?php 
        $age = 12;
        $can_vote = ($age >= 18) ? "Can Vote" : "Can't Vote";
        echo "Vote? : $can_vote<br>";

        # Same as JavaScript
        if("10" === 10) {
            echo "They are equal<br>";
        } else {
            echo "They aren't equal<br>";
        }
    ?>
</body>
</html>