<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $rate = 0.24;

    $y = $_POST['yen'];
    
    $baht = $y * $rate;

    echo "$y Yen = $baht Baht";
    ?>
</body>
</html>