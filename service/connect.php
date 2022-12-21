<?php
$conn = new mysqli('localhost', 'root', '', 'map_api');
if (!$conn) {
    die("Ket noi that bai" . mysqli_connect_error());
} else {
    echo 'Ket noi thanh cong';
}
?>