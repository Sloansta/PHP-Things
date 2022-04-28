<?php 
    function badDivide($num) {
        if($num == 0) {
            throw new Exception("You can't divide by zero");
        }

        return $calc = 100 / $num;
    }

    try {
        badDivide(0);
    } catch(Exception $e) {
        echo "Exception: " . $e->getMessage();
    }
?>