<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body background="blue">
          <form >
                    <input type="text" placeholder="Enter your email id"><br>
                    <button type="submit">Ok</button><br>
                    <a href="edit.php?id=<?php echo $row['$emp_id']?>"><button>Edit</button></a>
          </form>
</body>
</html>