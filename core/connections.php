 <?php

  $connection = mysqli_connect('localhost', 'root', '', 'shopping');
  
  if (mysqli_connect_errno()) {
    echo "there is some error while connecting to db";
    exit();
  }
