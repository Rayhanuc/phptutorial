<?php
include 'lib/Database.php';
include 'config/config.php';



$db = new Database();
?>

<?php
if(isset($_POST['submit'])){


$name           = $_POST['name'];
$age            = $_POST['age'];
$blood_group    = $_POST['blood_group'];
$address        = $_POST['address'];
$qualification  = $_POST['qualification'];


$error_msg = '';
$age_msg = '';
$blood_group_msg = '';
$blood_group_msg = '';
$qualification_msg = '';
if(empty($name)){
  $error_msg = "<h3 style='color:red;'>Name Field Empty</h3>";
}elseif(empty($age)){
  $age_msg = "<h3 style='color:red;'>Age Field Empty</h3>";
}elseif(empty($blood_group)){
  $blood_group_msg = "<h3 style='color:red;'>Blood Group Field Empty</h3>";
}elseif(empty($address)){
  $address_msg = "<h3 style='color:red;'>Address Field Empty</h3>";
}elseif(empty($qualification)){
  $qualification_msg = "<h3 style='color:red;'>Qualification Field Empty</h3>";
}

else {
  $query = "INSERT INTO student_manage(name,age,blood_group,address,qualification) VALUES('$name','$age','$blood_group','$address','$qualification')";
  $result = $db->insert($query);
  if($result){
    echo "<span style = 'color: green;font-size: 20px;position: absolute;left: 95px;margin: 60px 0;top: 725px;'>Data insert successfully</span>";
  }else {
    echo "<span style = 'color: green;font-size: 20px;position: absolute;left: 95px;margin: 60px 0;top: 725px;'>Data not inserted</span>";
  }
}

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
<body>



<div style="background-image: url(library-books.jpg);">
  <h1 style="text-align: center; color: red;margin: 50px 0;padding: 200px;font-size: 60px; font-weight: 700;text-shadow: 10px 4px 12px black;">PHP & OOP</h1>
</div>
<div class="container">

  <h2 style="text-align: center;font-family: rubik one; color: #43967f;" >PHP & OOP batch: Student Management</h2>
  <p style="text-align: center; margin-bottom: 70px;">The form below contains five input elements; Input elements are Name, Age, Blood Group, Address and Qualification:</p>
  <p style="text-align: center; margin-bottom: 70px;"><a href="dataview.php" class="btn btn-danger">PHP&OOP Student Data</a></p>



  <form action="" method="post">
    <h2><?php

        if(isset($error)){
          echo $error;
        }?></h2>
        
    <div class="form-group">
     <?php if(isset($error_msg)){
        echo $error_msg;
      }?>
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr" name="name">
    </div>

    <div class="form-group"> 
      <?php if(isset($age_msg)){
        echo $age_msg;
      }?>
      <label for="age">Age:</label>
      <input type="text" class="form-control" id="age" name="age">
    </div>

    <div class="form-group">
      <?php if(isset($blood_group_msg)){
        echo $blood_group_msg;
      }?>
      <label for="blood_group">Blood Group:</label>
      <input type="text" class="form-control" id="blood_group" name="blood_group">
    </div>

    <div class="form-group">
      <?php if(isset($address_msg)){
        echo $address_msg;
      }?>
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" name="address">
    </div>

    <div class="form-group">
      <?php if(isset($qualification_msg)){
        echo $qualification_msg;
      }?>
      <label for="qualification">Qualification:</label>
      <input type="text" class="form-control" id="qualification" name="qualification">
    </div>

    <div class="text-center">
      <button type="submit" id="submit" value="Submit" name="submit" class="btn btn-primary">Submit Student Info</button>
    </div>
  </form>

  <div style="padding: 100px;height: 50px;text-align: center;background: #f3f3f3;">
    <h4>Copyright 2018 @ Student Menagement. All Rights Reserved.</h4>
  </div>

</div>

</body>
</html>
