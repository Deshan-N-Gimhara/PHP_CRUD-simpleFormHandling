<?php
include 'connect.php'
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Student Registration</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet" />
    <script>
      function navigateToForm() {
        window.location.href = "createStudent.php";
      }
    </script>
  </head>
  <body>
    <table class="table table-hover">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-8">
            <h2>Student <b>Details</b></h2>
          </div>
          <div class="col-sm-4 ml-auto">
            <button
              type="button"
              class="btn btn-info add-new"
              onclick="navigateToForm()">
              <i class="fa fa-plus"></i> Add New
            </button>
          </div>
        </div>
      </div>
      <thead>
        <tr>
          <th scope="col">Student ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
$sql = "SELECT * FROM `student`";
$result = mysqli_query($con, $sql);

if($result){
  while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];

    echo '<tr>
    <td scope="row">'.$id.'</td>
    <td>'.$name.'</td>
    <td>'.$email.'</td>
    <td>'.$phone.'</td>
    <td>
      <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
      <button type="button" class="btn btn-outline-secondary btn-sm">Update</button>
    </td>
  </tr>';
  }
}
        ?>
        
      </tbody>
    </table>
  </body>
</html>
