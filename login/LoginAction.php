<?php
session_start();
include "../connection.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM `user` WHERE `username` = '$username' && `password` = '$password'";
$result = $connection->query($sql);
$row = $result->fetch_array();

if ($row > 0) {
    $_SESSION['username'] = $username;
    header('location: ../dashboard.php');
} else {
    header('location:loginForm.php');
}
