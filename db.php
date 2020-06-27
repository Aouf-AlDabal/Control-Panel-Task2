<?php

$connection = mysqli_connect('localhost', 'root', '', 'controlpanel');

if (!$connection) {

    die('Database connection failed' . mysqli_connect_error());
}


$sql = "INSERT INTO remot_control (stopworking,back,forward,rightway,leftway) VALUES
('stop','back','forward', 'right', 'left')";
//if (mysqli_query($connection, $sql)) {
    //echo "New record created successfully";
//} else {
  //  echo "Error: " . $sql . "<br>" . mysqli_error($connection);
//}
//mysqli_close($connection);