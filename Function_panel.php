<?php include "db.php"; ?>

<?php include "Control_Panel.php"; ?>

<?php
function ReadData()
{
    global $connection;
    $sql = "SELECT * FROM remot_control ";
    $result = mysqli_query($connection, $sql);
    if (!$result) {
        die('Query FAILED');
    }
    $row = mysqli_fetch_assoc($result);

    if (isset($_POST['back'])) {
        echo $row['back'];
    }
    if (isset($_POST['forward'])) {
        echo $row['forward'];
    }
    if (isset($_POST['right'])) {
        echo $row['rightway'];
    }
    if (isset($_POST['left'])) {
        echo $row['leftway'];
    }
}

function stop()
{
    global $connection;
    $sql = "SELECT * FROM remot_control ";
    $result = mysqli_query($connection, $sql);
    if (!$result) {
        die('Query FAILED');
    }
    $row = mysqli_fetch_assoc($result);

    if (isset($_POST['stop'])) {
        echo $row['stopworking'];
    }
}
?>
