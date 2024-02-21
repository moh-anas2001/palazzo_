<?php

$connect = mysqli_connect('localhost', 'dacenj4b_palazzo', 'Dacentric@db', 'dacenj4b_palazzo');

if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL :' . mysqli_connect_errno());
}
?>