<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sign.css">
</head>
<body>
    <div class="signup-box">
        <h2>Sign Up</h2>
        <form action="sign.php" method="POST">
          <label for="firstName">First Name:</label>
          <input type="text" id="firstName" name="firstName" required>
          
          <label for="lastName">Last Name:</label>
          <input type="text" id="lastName" name="lastName" required>
          
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
          
          <input type="submit" value="Submit" name="btn">
        </form>
      </div>
     <?php
     if (isset($_POST['btn'])) {
         
      $con=mysqli_connect("localhost","root","","ems") or die ("fail to conect");
     $fname=$_POST['firstName'];
     $lname=$_POST['lastName'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     $insert=mysqli_query($con,"insert into users(fname,lname,email,password) values('$fname','$lname','$email','$password')");
      if ($insert) {
      echo"<script>alert('successfull');</script>";
     }
     
     }
      ?>    
</body>
</html>