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
        <label for="color">Color</label>
        <br>
        <input type="text" name="color">
        <br>

        <label for="pluralNoun">Plural Noun</label>
        <br>
        <input type="text" name="pluralNoun">
        <br>

        <label for="celebrity">Celebrity</label>
        <br>
        <input type="text" name="celebrity">
        <br>

        <input type="submit" value="submit">
    </form>

    <br>

    <?php
    $color = $_GET['color'];
    $pluralNoun = $_GET['pluralNoun'];
    $celebrity = $_GET['celebrity'];

    echo "<p>Roses are $color</p>";
    echo "<p>$pluralNoun are blue</p>";
    echo "<p>I love $celebrity</p>";
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