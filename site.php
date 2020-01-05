<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn PHP</title>
</head>

<body>
    <form action="site.php" method="post">
        <label for="apples">Apples</label>
        <input type="checkbox" name="fruits[]" value="apples">
        <br>
        <label for="oranges">Oranges</label>
        <input type="checkbox" name="fruits[]" value="oranges">
        <br>
        <label for="pears">Pears</label>
        <input type="checkbox" name="fruits[]" value="pears">
        <br>
        <input type="submit" value="submit">
    </form>

    <br>

    <?php

    $fruits = $_POST['fruits'];
    webLog(1, $fruits);

    // $friends = array("Dinuka", "Sameera", "Lahiru", "Vidura", "Amal");
    // $friends[10] = "Namal";
    // // echo count($friends);
    // webLog(1, $friends[10]);
    // webLog(2, print_r($friends, true));
    // var_dump($friends);
    ?>

    <?php
    function webLog($index, $data)
    {
        echo "$index. $data";
        echo "<br>";
        echo "Data Type = " . gettype($data);
        echo "<br><br>";
    }
    ?>
</body>

</html>