<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <?php
   $con = mysqli_connect("localhost","root","","mdb");
   if(isset($_POST['log'])){
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $password=mysqli_real_escape_string($con,$_POST['password']);

      if ($username!="" && $password!="") {
      $sql = "SELECT id FROM credentials WHERE username='$username' and password='$password'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);
        if ($count==1) {
          header("location:display.php");
        }

      }
   }
   ?>
</head>
<body>

  <div class="text-center">
      <h1>MUSIC DATA MANAGEMENT</h1>
  </div>

 <div class="container">
 <form action="index.php" method="post">

      <div class="form-group">
      <label>Enter Username</label>
      <input type="text" name="username" class="form-control" placeholder="username" value="">
      </div>

      <div class="form-group">
      <label>Enter Password</label>
      <input type="password" name="password" class="form-control " placeholder="Password" value="">
      </div>

      <br>
      <button type="submit" class="btn btn-primary w-100" name="log">login</button>
</form>
</div>

</body>
</html>