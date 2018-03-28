<?php

include 'lib/Database.php';
include 'config/config.php';
$db = new Database();
?>



<?php
$editid = $_GET['editid'];
if (isset($_POST['submit'])) {

$name = $_POST['name'];
$age = $_POST['age'];
$roll = $_POST['roll'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];

$query = "UPDATE student SET name='$name',age='$age',roll='$roll',fname='$fname',mname='$mname' WHERE id = '$editid'";
$update = $db->update($query);
if($update){
    echo "<span style = 'color: green;font-size: 20px;position: absolute;left: 105px;margin: 60px 0;top: 25px;'>Data update successfully</span>";
  }else{
    echo "<span style = 'color: red;font-size:40px'>Data not updated</span>";
  }


}


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
<body style="background-color: #e4e4e4; ">

<div class="container">
  <h2 style="text-align: center;">Student Management</h2>
  <p style="text-align: center;">The form below contains two input elements; one of type text and one of type password:</p>
  <p style="text-align: center;"><a href="view.php" class="btn btn-danger">View Studend Data</a></p>

<?php

$query = "SELECT * FROM student WHERE id = '$editid'";
$edit = $db->select($query);
while ($result = $edit->fetch_assoc()) {
  

?>
  <form action="" method="post">

    <!-- name -->
    <div class="form-group">
     
      <label for="usr" ">Name:</label>
      <input type="text" class="form-control" id="usr" name="name" value="<?php echo $result['name'];?>">
    </div>
    <!-- age -->
    <div class="form-group">
      
      <label for="pwd">Age:</label>
      <input type="text" class="form-control" id="pwd" name="age" value="<?php echo $result['age'];?>">
    </div>
    <!-- roll no -->
    <div class="form-group">
     
      <label for="roll">Roll no:</label>
      <input type="number" class="form-control" id="roll" name="roll" value="<?php echo $result['roll'];?>">
    </div>
    <!-- Father Name -->
    <div class="form-group">
      <label for="fname">Father Name:</label>
      <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $result['fname'];?>">
    </div>
    <!-- Mother Name -->
    <div class="form-group">
      <label for="mname">Mother Name:</label>
      <input type="text" class="form-control" id="mname" name="mname" value="<?php echo $result['mname'];?>">
    </div>
    <!-- Submit btn -->
    <div class="form-group">
      <input style="background: blue; color: white; font-size: 20px; width: 147px; text-align: center; position: absolute;
    left: 600px;" type="submit" class="form-control" id="pwd" value="Update" name="submit">
    </div>

  </form>

<?php } ?>

</div>

</body>
</html>
