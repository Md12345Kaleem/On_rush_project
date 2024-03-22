<!DOCTYPE html>
<?php
if(isset($_GET['id']))
{
          $id = $_GET['id'];
}
$query = "SELECT * FROM `index_table` WHERE `emp_id` = '$id'";
$result = mysqli_query($config,$query);
if(!$result)
{
die("query failed ");
}
else
{
$row = mysqli_fetch_row($result);
print_r($row);
}
?>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
<form action="edit.php" method="post">


  <div class="container" style="background-color:white">
    <input type="text" placeholder="Enter first name" name="fname" value="<?php echo $row['first_name']?>">

    <input type="text" placeholder="Enter last name" name="lname" value="<?php echo $row['last_name']?>">
    <input type="text" placeholder="Email address" name="mail" required>
 
    <input type="text" placeholder="Enter your highest qualification" name="qualify" value="<?php echo $row['qualify']?>">
    <input type="text" placeholder="Enter your phone no" name="phone" value="<?php echo $row['phone_no']?>">
  </div>

    <textarea type="text" placeholder="Enter your address" name="address" value="<?php echo $row['address']?>"></textarea>
  </div>

  <div class="container">
    <input type="submit" name="submit">
  </div>
</form>   
</body>
</html>