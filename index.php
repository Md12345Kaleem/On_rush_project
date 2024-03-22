<?php
require 'config.php';
$msg="";
if(isset($_POST['submit']))
{
  $emp_id =$_POST['emp_id'];
  $first_name = $_POST['fname'];
  $last_name = $_POST['lname'];
  $mail = $_POST['mail'];
  $qualification = $_POST['qualify'];
  $phone_no = $_POST['phone'];
  $address = $_POST['address'];


  $sql = "INSERT INTO index_table(emp_id, first_name, last_name, email_id, qualification, phone_no, addresse)
   VALUES
   ('$emp_id','$first_name','$last_name','$mail','$qualification','$phone_no','$address')"; 
  // $sss = mysqli_query($conn,$sql);
  if($result = mysqli_query($conn, $sql)){
    $msg = "Product Added to the database successfully";
    if(mysqli_num_rows($result) > 0){
    
    echo 'thank.php?id='. $row['emp_id'];
    
  }
}
  // if(mysqli_num_rows($result) > 0)
  else
  {
    $msg = "Failed to add the product!";
  }
}
?>

<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

form {
  border: 3px solid #f1f1f1;
  font-family: Arial;
}

.container {
  padding: 20px;
  background-color: #f1f1f1;
}

input[type=text], input[type=submit] {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=checkbox] {
  margin-top: 16px;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  border: none;
}

input[type=submit]:hover {
  opacity: 0.8;
}
</style>
<body bgcolor="blue">


<form action="index.php" method="post">
  <div class="container">
    <h2>Subscribe to my Newsletter</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore eligendi 
      quibusdam explicabo doloribus quasi corporis quam deleniti facere dicta illo.
    </p>
  </div>

  <div class="container" style="background-color:white">
    <input type="text" placeholder="Enter employee id" name="emp_id" required>
    <input type="text" placeholder="Enter first name" name="fname" required>

    <input type="text" placeholder="Enter last name" name="lname" required>
    <input type="text" placeholder="Email address" name="mail" required>
 
    <input type="text" placeholder="Enter your highest qualification" name="qualify" required>
    <input type="text" placeholder="Enter your phone no" name="phone" required>
  </div>

    <textarea type="text" placeholder="Enter your address" name="address" required></textarea>
  </div>

  <div class="container">
    <input type="submit" name="submit">
  </div>
</form>

</body>
</html>
