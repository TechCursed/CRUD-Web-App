<?php

include 'connect.php';


if(isset($_POST['submit'])){

    $Song = $_POST['Song'];
    $Artist = $_POST['Artist'];
    $Album = $_POST['Album'];
    $Genre = $_POST['Genre'];
    

    $sql = "insert into `mdmrecords` (Song,Artist,Album,Genre) 
    values('$Song','$Artist','$Album','$Genre')";

    $result = mysqli_query($con,$sql);

    if($result){
    //echo 'Data inserted successfully';
    header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User Page</title>
  </head>
  <body>
    
  <div class="container">

  <form method="post">
  <div class="form-group ">
    <label>Song</label>
    <input type="text" name="Song" class="form-control" placeholder="Enter Song Name" >
  </div>
  <div class="form-group">
    <label>Artist</label>
    <input type="text" name="Artist" class="form-control" placeholder="Enter Artist " >
  </div>
  <div class="form-group">
    <label>Album</label>
    <input type="text" name="Album" class="form-control" placeholder="Enter Album" >
  </div>
  <div class="form-group">
    <label>Genre</label>
    <input type="text" name="Genre" class="form-control" placeholder="Enter Genre" >
  </div>
  
  <br>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

  </div>

  </body>
</html>