<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sanitizing 2 PHP</title>
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
        $con_html = '<a href="#">Sample</a>';

        echo $con_html . '<br>';

        echo htmlspecialchars($con_html) . '<br>';

        echo strip_tags($con_html, '<a>');

        $con_html = strip_tags($con_html) . '<br>';
    ?>
</body>
</html>