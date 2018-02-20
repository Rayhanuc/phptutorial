<?php
include 'lib/Database.php';
include 'config/config.php';
$db = new Database();
?>

<?php

$name = $_POST['name'];
$age = $_POST['age'];
$roll = $_POST['roll'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];

if( $name == '' ||  $age == '' ||  $roll == '' ||  $fname == '' ||  $mname == ''){
 $error = "Field empty";
}else {
  $query = "INSERT INTO student(name,age,roll,fname,mname) VALUES ('$name','$age','$roll','$fname','$mname')";
  $db->insert($query);
}

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
<body style="background-color: #e4e4e4; ">

<div class="container">
  <h2 style="text-align: center;">Student Management</h2>
  <p style="text-align: center;">The form below contains two input elements; one of type text and one of type password:</p>


  <form action="" method="post">
    <h2><?php 

    if(isset($error)){
      echo $error;
    }


    

    ?></h2>
    <!-- name -->
    <div class="form-group">
      <label for="usr" ">Name:</label>
      <input type="text" class="form-control" id="usr" name="name">
    </div>
    <!-- age -->
    <div class="form-group">
      <label for="pwd">Age:</label>
      <input type="text" class="form-control" id="pwd" name="age">
    </div>
    <!-- roll no -->
    <div class="form-group">
      <label for="roll">Roll no:</label>
      <input type="number" class="form-control" id="roll" name="roll">
    </div>
    <!-- Father Name -->
    <div class="form-group">
      <label for="fname">Father Name:</label>
      <input type="text" class="form-control" id="fname" name="fname">
    </div>
    <!-- Mother Name -->
    <div class="form-group">
      <label for="mname">Mother Name:</label>
      <input type="text" class="form-control" id="mname" name="mname">
    </div>
    <!-- Submit btn -->
    <div class="form-group">
      <input style="background: blue; color: white; font-size: 20px; width: 147px; text-align: center; position: absolute;
    left: 600px;" type="submit" class="form-control" id="pwd" value="Submit">
    </div>

  </form>


</div>

</body>
</html>
