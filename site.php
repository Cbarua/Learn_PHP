<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn PHP</title>
</head>

<body>
    <?php
    $phrase = "Giraffe Academy";
    echo strtolower($phrase);
    echo "<br>";
    echo strtoupper($phrase);
    echo "<br>";
    echo $phrase[0];
    echo "<br>";
    $phrase[0] = "B";
    echo $phrase;
    echo "<br>";
    echo str_replace("Biraffe", "Panda", $phrase);
    echo "<br>";
    echo substr($phrase, 8, 3);
    ?>
</body>

</html>