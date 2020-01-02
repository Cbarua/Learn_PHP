<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn PHP</title>
</head>

<body>
    <form action="site.php" method="get">
        <label for="name">Name</label>
        <br>
        <input type="text" name="name">
        <br>
        <input type="submit" value="submit">
    </form>

    <br>

    <?php
    echo $_GET['age'];
    // http://localhost:4000/www/site.php?age=90
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