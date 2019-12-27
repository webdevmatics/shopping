<?php

require 'core/connections.php';

$itemId = $_GET['itemId']; //id of shopping item

mysqli_query($connection, "DELETE FROM list where id='$itemId'");

header('Location: index.php');
exit();
