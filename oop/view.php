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
  <p style="text-align: center;"><a href="index.php">Student Add:</a></p>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>S.no</th>
        <th>Name</th>
        <th>Age</th>
        <th>Roll No</th>
        <th>Father Name</th>
        <th>Mother Name</th>
      </tr>
    </thead>
    <tbody>

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
      </tr>

      <?php }} ?>


    </tbody>
  </table>
</div>

</body>
</html>
