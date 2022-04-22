<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays</title>
</head>
<body>
    <?php 
        $friends = array('John', 'Joy', 'Willow', 'Ivy');
        echo 'Wife : ' . $friends[1] . '<br>';
        $friends[4] = 'Steve';

        foreach($friends as $f) {
            printf("Friend: %s<br>", $f);
        }

        $me_info = array("Name"=> "Sloan", "Street"=> "123 Main");
        foreach($me_info as $k => $v) {
            printf("%s : %s<br>", $k, $v);
        }

        $friends2 = array('Doug');
        $friends = $friends + $friends2;

        sort($friends);
        rsort($friends); #reverse sort
        asort($me_info); #sort by key value
        ksort($me_info); #sort by key

        # two dimentional arrays
        $customers = array(array('Derek', '123 Main'),
                           array('Sally', '122 Main'));

        for($row = 0; $row < 2; $row++) {
            for($colum = 0; $colum < 2; $colum++) {
                echo $customers[$row][$colum] . ', ';
            }

            echo '<br>';
        }

        $let_str = "A B C D";
        $let_array = explode(' ', $let_str);

        foreach($let_array as $l) {
            printf('Letter : %s<br>', $l);
        }

        $let_str_2 = implode(' ', $let_array); #convert array to string
        echo "String :$let_str_2<br>";

        printf("Key Exists : %d", array_key_exists("Name", $me_info)); #check if key exists in array
        printf("Value Exists : %d", in_array('Joy', $friends)); #check if value is in array
    ?>
</body>
</html>