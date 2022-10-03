<html>
<head>
    <title>Numbers 2</title>
</head>
<body>
    <?php

    // Set the variables.
    $int1 = 12;
    $int2 = 8.5;
    $int3 = 10;

    // Calculate the total.
    $total = $int1 + $int2 + $int3;
    $total = number_format($total, 2);

    // Print the results.
    echo 'The total of integers <b>'. $int1 . '</b>, <b>'. $int2 .'</b> and <b>' . $int3 .'</b> is <b>' . $total . '</b> at two decimal places.';
        
    ?>
</body>
</html>