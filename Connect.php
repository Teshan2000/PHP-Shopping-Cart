<?php

$conn = mysqli_connect('localhost', 'root');

if($conn->connect_error) {
    die("Connection Failed!".$conn->connect_error);
}

mysqli_select_db($conn, 'shopping_cart');

?>