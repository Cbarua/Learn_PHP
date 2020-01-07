<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn PHP</title>
</head>

<body>
    <!-- <form action="site.php" method="post">
        <label for="student">Student: </label>
        <input type="text" name="student">
        <br>
        <input type="submit" value="submit">
    </form> -->

    <!-- <br> -->

    <?php
    function sayHi($name, $occupation)
    {
        echo "Hello $name, you are a $occupation <br>";
    }

    sayHi('Chinmoy', 'student');
    sayHi('Dave', 'doctor');
    sayHi('Tom', 'teacher');

    function cube($num)
    {
        echo '<br>Start<br>';
        return $num * $num * $num;
        echo "End";
    }

    echo cube(16);
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