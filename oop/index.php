<?php
include 'lib/Database.php';
include 'config/config.php';
$db = new Database();
?>

<?php
if (isset($_POST['submit'])) {

$name = $_POST['name'];
$age = $_POST['age'];
$roll = $_POST['roll'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];

// if($name == '' || )


  if( $name == ''|| $age == '' || $roll == '' || $fname == '' || $mname == ''){
 $error = "<h2 style ='color:red;font-size: 13px;position:relative;left:99px;top:0px'>Field empty!</h2>";
}


else {
  $query = "INSERT INTO student(name,age,roll,fname,mname) VALUES ('$name','$age','$roll','$fname','$mname')";
  $result = $db->insert($query);
  if($result){
    echo "<span style = 'color: green;font-size: 20px;position: absolute;left: 105px;margin: 60px 0;top: 25px;'>Data insert successfully</span>";
  }else{
    echo "<span style = 'color: red;font-size:40px'>Data not inserted</span>";
  }
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
  <p style="text-align: center;"><a href="view.php">View Studend Data</a></p>


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
    left: 600px;" type="submit" class="form-control" id="pwd" value="Submit" name="submit">
    </div>

  </form>


</div>

</body>
</html>
