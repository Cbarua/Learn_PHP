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
        <label for="fnum">First number: </label>
        <input type="number" name="fnum" step="0.001">
        <br>
        <label for="operator">Operator: </label>
        <input type="text" name="operator">
        <br>
        <label for="lnum">Last number: </label>
        <input type="number" name="lnum" step="0.001">
        <br>
        <input type="submit" value="submit">
    </form>

    <br>

    <?php
        $fnum = $_POST['fnum'];
        $lnum = $_POST['lnum'];
        $operator = $_POST['operator'];
        
        if ($operator == '+') {
            echo $fnum + $lnum;
        }
        elseif ($operator == '-') {
            echo $fnum - $lnum;
        }
        elseif ($operator == '*') {
            echo $fnum * $lnum;
        }
        elseif ($operator == '/') {
            echo $fnum / $lnum;
        }
        else {
            echo "Invalid operator";
        }
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