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
    <script>
      function navigateToUpdate() {
        window.location.href = "update.php";
      }
    </script>
  </head>
  <body >
    <table class="table table-hover" >
      <div class="table-title">
        <div class="row">
          <div class="col mx-2">
            <h2>Student <b>Details</b></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <button
          type="button"
          class="btn btn-success add-new mx-2"
          onclick="navigateToForm()">
          <i class="fa fa-plus"></i> Add New
        </button>
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
      <button type="button" class="btn btn-danger btn-sm">
        <a class="text-light" href="delete.php?studentId='.$id.'">
          Delete
        </a>
      </button>
      <button type="button" class="btn btn-secondary btn-sm" ">
        <a class="text-light" href="update.php?studentId='.$id.'" >
          Update
        </a>
      </button>
    </td>
  </tr>';
  }
}
?>
        
      </tbody>
    </table>
  </body>
</html>
