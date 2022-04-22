<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strings</title>
</head>
<body>
    <?php 
        $rand_str = "    Random String    ";
        printf("Length: %d<br>", strlen($rand_str));
        printf("Length: %d<br>", strlen(ltrim($rand_str)));
        printf("Length: %d<br>", strlen(rtrim($rand_str)));
        $rand_str = trim($rand_str);

        printf("Upper: %s<br>", strtoupper($rand_str));
        printf("Lower: %s<br>", strtolower($rand_str));
        printf("First: %s<br>", ucfirst($rand_str));
        printf("First 6: %s<br>", substr($rand_str, 0, 6));
        printf("Index: %s<br>", strpos($rand_str, "String"));
        $rand_str = str_replace("String", "Characters", $rand_str);
        printf("Replace: %s<br>", $rand_str);
        printf("A == B: %d<br>", strcmp("A", "B"));
    ?>
</body>
</html>