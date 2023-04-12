<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <title>Document</title>
</head>
<body>
    <div class="form">
    <form action="" method="POST">
        <h1>WELCOME</h1>
     <div class="oo"><input type="text" name="email" placeholder="email" require></div>
    <div class="o"><input type="password" name="pwd" placeholder="password" require></div>
          <input type="submit" value="login" name="btn" style="background-color: #45a049; color: white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="submit" value="sign up" name="sign" style="background-color: #45a049; color: white;"><br>
          <h5>Don't have account?<a href="./sign.php">&nbsp;&nbsp;sign up</a></h5>
    </form>
    </div>
    <?php
    if (isset($_POST['btn'])) {
        include('conn.php'); 
    
    $email=$_POST['email'];
    $password=$_POST['pwd'];
    $select=mysqli_query($con,"select * from users where email='$email' AND password='$password'");
    $count=mysqli_num_rows($select);
    $r=mysqli_fetch_array($select);
    if ($select==1) {
       header('location:dashboard.php');
    }
    else{
        echo"<script>alert('incorrect password or username');</script>";
    }
    }
    

    
    
    ?>
</body>
</html>