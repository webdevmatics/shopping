<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?php
    require 'core/connections.php';

    if (isset($_POST['save_it'])) {
        $itemName = $_POST['item_name'];
        $insertQuery = "INSERT INTO list (item_name) VALUES ('$itemName')";
        mysqli_query($connection, $insertQuery); // executing query , this will save user data to database
    }

    ?>

    <h1>My shooping list</h1>

    <form action="index.php" method="POST">
        <input type="text" placeholder="enter name here" name="item_name">

        <input type="submit" value="Save IT" name="save_it">

    </form>


    <h3>My saved lists</h3>

    <?php

    $fetchResult = mysqli_query($connection, "SELECT * FROM list");

    ?>

    <ul>
        <?php while ($item = mysqli_fetch_assoc($fetchResult)) : ?>

            <li>
                Id: <?php echo $item['id'] ?>
                <?php echo $item['item_name'] ?>
                <a href="/test/edit.php?itemId=<?php echo $item['id'] ?>&item_name=<?php echo $item['item_name'] ?>">edit</a>
                <a href="/test/delete.php?itemId=<?php echo $item['id'] ?>">delete</a>
            </li>
            <br>


        <?php endwhile; ?>
    </ul>
</body>

</html>