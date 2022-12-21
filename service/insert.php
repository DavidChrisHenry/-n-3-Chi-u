<?php
include 'connect.php';

echo ("<script>alert('Insert!')</script>");
// echo (($_POST['submit']));
echo (($_POST['origin']));
echo (($_POST['destination']));

if (
    (isset($_POST['origin'])) && ($_POST['origin'])
    && (isset($_POST['destination'])) && ($_POST['destination'])
    // && (isset($_POST['time'])) && ($_POST['time'])
    // && (isset($_POST['far'])) && ($_POST['far'])
    // && (isset($_POST['result'])) && ($_POST['result'])
) {
    // $username = $_POST['username'];
    // $id_search = $_POST['id_search'];
    $from = $_POST['origin'];
    $to = $_POST['destination'];
    // $time = $_POST['time'];
    // $far = $_POST['far'];

    echo ("<script>alert('Insert!')</script>");

    $sql = "INSERT INTO `search` (`username`, `id_search`, `from`, `to`, `time`, `far`, `result`) VALUES ('admin', NULL,'$from', '$to', '', '', '');";

    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        echo 'successfully';
    } else {
        echo 'failed';
    }
} else {
    echo ("<script>alert('Insert fail!')</script>");

}

?>