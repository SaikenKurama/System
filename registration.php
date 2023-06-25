<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <?php

if (isset($_POST['Submit']))
{

$name = $_POST['name'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];


  $con=mysqli_connect("localhost","root","","lagayy");

  if (mysqli_connect_errno())
  {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql="INSERT INTO users (name, address, gender, contact)
        VALUES
        ('$name','$address','$gender','$contact')";

  if (!mysqli_query($con,$sql))
  {
   die('Error: ' . mysqli_error($con));
  }

  mysqli_close($con);

  echo "Thank you! <br><br>";

  if ($gender=="male")
  {
   echo "Mr.";
  }
  elseif ($gender=="female")
  {
   echo "Ms./Mrs.";
  }
  else
  {
   echo "Mr./Ms./Mrs.";
  }      

  echo $name, ", from ", $address, ". <br> we will send your reservation information to ", $contact, ".";
}

else
{
  echo "Please fill in the information above.";
}
?>
        <form action="registration.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
            </div>
            <div class="form-group">
                <input type="emamil" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>
        <div>
        <div><p>Already Registered <a href="login.php">Login Here</a></p></div>
      </div>
    </div>
</body>
</html>