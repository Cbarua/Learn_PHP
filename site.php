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
    function webLog($index, $data)
    {
        echo "$index. $data";
        echo "<br>";
        echo "Data Type = " . gettype($data);
        echo "<br><br>";
    }

    webLog(1, abs(-100));
    webLog(2, pow(2, 4));
    webLog(3, sqrt(144));
    webLog(4, max(2, 10));
    webLog(5, min(2, 10));
    webLog(6, round(3.7));
    webLog(7, ceil(3.3));
    webLog(8, floor(3.9));
    ?>
</body>

</html>