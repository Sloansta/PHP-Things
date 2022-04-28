<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitizing data in PHP</title>
</head>
<body>
    <form method="post">
        <label>Email: </label>
        <input type="text" name="email" id="" /><br>
        <label>Number 1: </label>
        <input type="text" name="num1" id="" /><br>
        <label>Number 2: </label>
        <input type="text" name="num2" id="" /><br>
        <label>Website </label>
        <input type="text" name="website" id="" /><br>
        <input type="submit" value="submit">
    </form>

    <?php 
        #validating data that is being passed by the user
         if(isset($_POST["email"])) {
             if(!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
                 echo "Email isn't valid<br>";
             } else {
                 echo "Email is valid <br>";
             }
         }

         if(isset($_POST["num1"]) && !empty($_POST["num2"])) {
             $num1 = filter_input(INPUT_POST, 'num1', 
             FILTER_SANITIZE_NUMBER_FLOAT, 
             FILTER_FLAG_ALLOW_FRACTION);
             $num2 = filter_input(INPUT_POST, 'num2', 
             FILTER_SANITIZE_NUMBER_FLOAT, 
             FILTER_FLAG_ALLOW_FRACTION);

             $output = sprintf("%.1f + %.1f = %.1f", $num1, $num2, ($num1 + $num2));

             echo htmlspecialchars($output) . '<br>';

             if(isset($_POST["website"])) {
                 $website = filter_input(INPUT_POST, 'website', 
                 FILTER_VALIDATE_URL);
                 echo htmlspecialchars($website) . '<br>';

             }
         }
    ?>
</body>
</html>