<?php
include 'connect.php';

if(isset($_GET['studentId'])){
    $id = $_GET['studentId'];

    $sql = "DELETE FROM `student` WHERE id = $id";
    $result = mysqli_query($con, $sql);

    if($result){
        header("location: index.php");
    }
}
?>