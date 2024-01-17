<?php


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password=$_POST['password'];

$sql = "insert into student values('','$name', '$email', '$phone', '$password')";

$con = mysqli_connect("localhost", "root", "deshan@1212","form");

$result = mysqli_query($con, $sql);