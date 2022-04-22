<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
</head>
<body>
    <?php 
        function addNumbers($num_1=0, $num_2=0) {
            return $num_1 + $num_2;
        }

        printf("5 + 4 = %d<br>", addNumbers(5, 4));

        # working with memory
        function changeMe(&$change) {
            $change = 10;
        }

        $change = 5;
        changeMe($change);

        echo "Change : $change<br>";

        # working with an unknown amount of params
        function getSum(...$nums) {
            $sum = 0;
            foreach($nums as $num) {
                $sum += $num;
            }

            return $sum;
        }

        printf("Sum = %d<br>", getSum(1, 23, 45, 100));

        # returning multiple values
        function doMath($x, $y) {
            return array(
                $x + $y,
                $x - $y
            );
        }

        list($sum, $difference) = doMath(5, 4);

        echo "Sum = $sum<br>";
        echo "Difference = $difference<br>";

        function double($x) {
            return $x * $x;
        }

        # using print_r to map the list array into dbl_array
        $list = [1, 2, 3, 4];
        $dbl_list = array_map('double', $list);
        print_r($dbl_list);
        echo "<br>";

        #multiply value by every other value
        function mult($x, $y) {
            $x *= $y;

            return $x;
        }

        $mult_list = [1, 2, 3, 4];
        $prod = array_reduce($mult_list, 'mult', 1);
        print_r($prod);
        echo "<br>";


        # get only even numbers
        function isEven($x) {
            return ($x % 2) == 0;
        }

        $even_list = array_filter($mult_list, 'isEven'); #only gets even numbers via filter

        print_r($even_list);
    ?>
</body>
</html>