<?php
include 'lib/Database.php';
include 'config/config.php';



$db = new Database();
?>

<?php
 $editid = $_GET['editid'];
if(isset($_POST['submit'])){


$name           = $_POST['name'];
$age            = $_POST['age'];
$blood_group    = $_POST['blood_group'];
$address        = $_POST['address'];
$qualification  = $_POST['qualification'];

$query = "UPDATE student_manage SET name = '$name',age = '$age',blood_group = '$blood_group',address = '$address',qualification = '$qualification' WHERE id = '$editid'";

$update = $db->update($query);
if($update){
    echo "<span style = 'color: green;font-size: 20px;position: absolute;left: 95px;margin: 60px 0;top: 725px;'>Data update successfully</span>";
  }else {
    echo "<span style = 'color: red;font-size: 20px;position: absolute;left: 110px;margin: 60px 0;top: 425px;'>Data not updated</span>";
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


<div  style="background-image: url(library-books.jpg);">
  <h1 style="text-align: center; color: red;margin: 50px 0;padding: 200px;font-size: 60px; font-weight: 700;text-shadow: 10px 4px 12px black;">PHP & OOP Edit</h1>
</div>

<div class="container">

  <h2 style="text-align: center;font-family: rubik one; color: #43967f;" >PHP & OOP batch: Student Management</h2>
  <p style="text-align: center; margin-bottom: 70px;">The form below contains five input elements; Input elements are Name, Age, Blood Group, Address and Qualification:</p>
  <p style="text-align: center; margin-bottom: 70px;"><a href="dataview.php" class="btn btn-danger">PHP&OOP Student Data</a></p>
  
  <?php
 
    $query = "SELECT * FROM student_manage WHERE id = '$editid'";
    $edit = $db->select($query);
    while ($result = $edit->fetch_assoc()) {

  ?>


  <form action="" method="post">
        
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr" name="name" value="<?php echo $result['name'];?>">
    </div>

    <div class="form-group">
      <label for="age">Age:</label>
      <input type="text" class="form-control" id="age" name="age" value="<?php echo $result['age'];?>">
    </div>

    <div class="form-group">
      <label for="blood_group">Blood Group:</label>
      <input type="text" class="form-control" id="blood_group" name="blood_group" value="<?php echo $result['blood_group'];?>">
    </div>

    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" name="address" value="<?php echo $result['address'];?>">
    </div>

    <div class="form-group">
      <label for="qualification">Qualification:</label>
      <input type="text" class="form-control" id="qualification" name="qualification" value="<?php echo $result['qualification'];?>">
    </div>

    <div class="form-group">

      <button style="border-radius: 10px; position: relative;left: 500px;background: #024444;"><input style="font-size: 20px;
    font-weight: 700;" type="submit" class="form-control" id="pwd" value="Update" name="submit"></button>
    </div>

    <div style="padding: 100px;height: 50px;text-align: center;background: #f3f3f3;">
      <h4>Copyright 2018 @ Student Menagement. All Rights Reserved.</h4>
    </div>


  </form>

  <?php } ?>



</div>

</body>
</html>
