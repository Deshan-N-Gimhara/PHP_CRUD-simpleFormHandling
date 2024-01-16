<?php


$name = $_POST['name'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];

$sql = "insert into student values('','$name', '$address', '$mobile')";

$con = mysqli_connect("localhost", "root", "deshan@1212","form");

mysqli_query($con, $sql);