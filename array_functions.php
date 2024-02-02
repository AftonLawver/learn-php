<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <?php
        $numbers = array(8, 23, 15, 42, 16, 4);
    ?>

    Count: <?php echo count($numbers); ?>
    <br>
    Min value: <?php echo min($numbers); ?>
    <br>
    Max value: <?php echo max($numbers); ?>
    <br>

    <!-- Sorting happens inplace -->
    Sort: <?php sort($numbers); print_r($numbers) ?>
    <br>
    Reverse sort: <?php rsort($numbers); print_r($numbers) ?>
    <br>

    <br>
    <!-- Take something out from in between each element in the array by using explode -->
    15 in array? <?php echo in_array(15, $numbers);?>
    <br>
    19 in array? <?php echo in_array(19, $numbers);?>


    

    <br/>
</body>
</html>

