<?php
include 'lib/Database.php';
include 'config/config.php';
$db = new Database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="text-align: center;">Bordered Table</h2>
  <p style="text-align: center;"><a href="index.php" class="btn btn-danger">Student Add:</a></p>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>S.no</th>
        <th>Name</th>
        <th>Age</th>
        <th>Roll No</th>
        <th>Father Name</th>
        <th>Mother Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if(isset($_GET['delid'])){
        $deleteid =$_GET['delid'];
        $query = "DELETE FROM student WHERE id='$deleteid'";
        $delete = $db->delete($query);
        if ($delete) {
          echo "<span style = 'color: green;font-size: 20px;position: absolute;left: 105px;margin: 60px 0;top: 0;'>Data delete successfully</span>";
        }else{
          echo "<span style = 'color: red;font-size:40px'>Data not deleted</span>";
        }
      }      

      ?>

      <?php

      $query = "SELECT * FROM student";
      $view = $db->select($query);
      if($view){
      while($result =$view-> fetch_assoc()){



      ?>
      <tr>
        <td><?php echo $result['id'];?></td>
        <td><?php echo $result['name'];?></td>
        <td><?php echo $result['age'];?></td>
        <td><?php echo $result['roll'];?></td>
        <td><?php echo $result['fname'];?></td>
        <td><?php echo $result['mname'];?></td>
        <td>
          <a href="view.php?delid=<?php echo $result['id'];?>" class="btn btn-danger">Delete</a>
          <a href="edit.php?editid=<?php echo $result['id'];?>" class="btn btn-info">Edit</a>
        </td>
      </tr>

      <?php }} ?>


    </tbody>
  </table>
</div>

</body>
</html>
