<?php

require 'core/connections.php';
require 'core/functions.php';

$itemId = $_GET['itemId']; //id of shopping item
$oldItemName = $_GET['item_name']; //id of shopping item
// dd($itemId);
$editname='';
if(isset($_POST['edit_it'])){
    $itemId=$_POST['id'];
    $editname=$_POST['item_name'];
    mysqli_query($connection, "UPDATE  list SET item_name='$editname' where id='$itemId'");

    header('Location: index.php');
    exit();
}

?>

<form action="edit.php" method="POST">
        <input type="text" placeholder="enter name here" name="item_name" value="<?php echo $oldItemName ?>">
        <input type="hidden" value="<?php echo $_GET['itemId']?>" name="id">

        <input type="submit" value="Save IT" name="edit_it">

    </form>



