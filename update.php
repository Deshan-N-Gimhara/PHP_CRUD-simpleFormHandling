<?php

include 'connect.php';

$id = $_GET['studentId'];

$getSql = "SELECT * FROM `student` WHERE id = $id";
$getResult = mysqli_query($con, $getSql);
$row = mysqli_fetch_assoc($getResult);

$name = $row['name'];
$email = $row['email'];
$phone = $row['phone'];
$password=$row['password'];


if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password=$_POST['password'];

  $sql = "UPDATE `student` SET 
    id = $id, 
    name = '$name', 
    email = '$email', 
    phone = '$phone', 
    password = '$password' WHERE id = $id";

  $result = mysqli_query($con, $sql);

  if($result){
    header('location: index.php');
  }else{
      die(mysqli_error($con));
  }
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Update Record</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet" />
    
  </head>
  <body style="background-color: gainsboro">
    <div class="d-flex justify-content-center mt-3">
      <h1>Edit Student Details</h1>
    </div>
    <div class="container my-4" style="width: 450px">
      <form  method="post">
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input
            type="text"
            class="form-control"
            name="name"
            autocomplete="off"
            value="<?= $name ?>" />
        </div>
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input
            type="email"
            class="form-control"
            name="email"
            autocomplete="off"
            value="<?= $email ?>" />
        </div>
        <div class="mb-3">
          <label class="form-label">Phone</label>
          <input
            type="tel"
            class="form-control"
            name="phone"
            autocomplete="off"
            value = "<?= $phone ?>" />
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input
            type="password"
            class="form-control"
            name="password"
            autocomplete="off"
            value = "<?= $password ?>" />
        </div>
        <div class="d-flex justify-content-center mt-3">
          <button
            name="submit"
            type="submit"
            class="btn btn-primary"
            >
            Update
          </button>
        </div>
      </form>
    </div>
  </body>
</html>
