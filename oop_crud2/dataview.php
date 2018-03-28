<?php
include 'lib/Database.php';
include 'config/config.php';



$db = new Database();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="text-align: center;">Student List</h2>
  <p style="text-align: center;">The .table-bordered class adds borders to a table:</p>            
  <p style="text-align: center;"><a href="index.php"  class="btn btn-danger">Add Student</a></p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>S.No.</th>
        <th>Name</th>
        <th>Age</th>
        <th>Blood Group</th>
        <th>Address</th>
        <th>Qualification</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        if(isset($_GET['delid'])){
        $deleteid =$_GET['delid'];
        $query = "DELETE FROM student_manage WHERE id = '$deleteid'";
        $delete = $db->delete($query);
        if($delete){
          echo "<span style = 'color: green;font-size: 20px;position: absolute;left: 110px;margin: 60px 0;top: 25px;'>Data delete successfully</span>";
        }else{
          echo "<span style = 'color: red;font-size: 20px;position: absolute;left: 110px;margin: 60px 0;top: 425px;'>Data not delete</span>";
        }
      }
        
      ?>
      <?php
      $query = "SELECT * FROM student_manage";
      $view = $db->select($query);
      if ($view) {
      while($result = $view->fetch_assoc()){
      
      ?>
      <tr>
        <td><?php echo $result['id'];?></td>
        <td><?php echo $result['name'];?></td>
        <td><?php echo $result['age'];?></td>
        <td><?php echo $result['blood_group'];?></td>
        <td><?php echo $result['address'];?></td>
        <td><?php echo $result['qualification'];?></td>
        <td>
          <a href="dataview.php?delid=<?php echo $result['id'];?>" class="btn btn-danger">Delete</a>
          <a href="edit.php?editid=<?php echo $result['id'];?>" class="btn btn-info">Edit</a>
        </td>
      </tr>

     <?php }} ?>

    </tbody>
  </table>
</div>

</body>
</html>
