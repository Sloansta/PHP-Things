<?php 
    $f_name = "Mark";
    $l_name = "Banas";
    $age = 44;
    $height = 1.87;
    $can_vote = true;
    $addRess = array('street'=> '123 Main Street', 'city'=> 'Pittsburgh');
    $state = NULL;
    define('PI', 3.1415);
    echo $f_name
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <p>Name: <?php echo $f_name . ' ' . $l_name; ?></p>
    <form action="index.php" method="get">
        <label>Your State: </label>
        <input type="text" name="state" /><br>
        <label>Number 1: </label>
        <input type="text" name="num-1" /><br>
        <label>Number 2: </label>
        <input type="text" name="num-2" /><br>
        <input type="submit" value="Submit" />
    </form>
    <?php 
    if(isset($_GET) && array_key_exists('state', $_GET)) {
        $state = $_GET['state'];

        if(isset($state) && !empty($state)) {
            echo 'You live in ' . $state . '<br>';
            echo "$f_name lives in $state <br>";
        }

        if(count($_GET) >= 3) {
            $num_1 = $_GET['num-1'];
            $num_2 = $_GET['num-2'];

            echo "$num_1 + $num_2 = " . ($num_1 + $num_2) . "<br>";
            echo "random number" . mt_rand(0, 50) . "<br>";
            echo number_format(12345.6789,  2) . "<br>";
        }
    }
    ?>
</body>
</html>