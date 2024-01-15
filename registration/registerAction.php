<?php
include "../connection.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO `user`(`id` , `username` , `password`) VALUES(NULL , '$username', '$password')";

$connection->query($sql);

header('location: ../login/loginForm.php');

