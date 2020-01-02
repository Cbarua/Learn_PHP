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
        <label for="username">Name :</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="age">Age :</label>
        <input type="number" name="age" id="age">
        <br>
        <input type="submit" value="submit">
    </form>

    <br>

    <p>Your Name is <?php echo $_GET['username'] ?></p>
    <p>Your Age is <?php echo $_GET['age'] ?></p>
    
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