<?php 
    date_default_timezone_set('America/New_York');

    echo "Date: " . date('I F m-d-Y g:i:s A') . "<br>";

    $important_date = mktime(0, 0, 0, 12, 21, 1974);
    echo "Important date: " . date('I F m-d-Y g:i:s A', $important_date) . "<br>";

?>