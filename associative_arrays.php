<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <?php
        $assoc = array("first_name" => "Afton", "last_name"=> "Lawver");
    ?>

    <?php
        echo $assoc['first_name'] . " " . $assoc['last_name'];
    ?>

    <br/>

    <?php 
        $assoc['first_name'] = 'Alliyah';
        echo $assoc['first_name'] . " " . $assoc['last_name'];
    ?>

    <br/>
</body>
</html>

