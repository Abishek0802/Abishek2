<?php
$con = new mysqli('localhost', 'project', '123', 'hotel');

if ($con->connect_errno) {
    echo $con->connect_error;
    die();
}
?>