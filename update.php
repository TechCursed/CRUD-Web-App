<?php

include 'connect.php';


$id=$_GET['updateid'];

$sql = "Select * from `mdmrecords` where id= $id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);

$Song = $row['Song'];
$Artist = $row['Artist'];
$Album = $row['Album'];
$Genre = $row['Genre'];



if(isset($_POST['submit'])){

  $Song = $_POST['Song'];
  $Artist = $_POST['Artist'];
  $Album = $_POST['Album'];
  $Genre = $_POST['Genre'];

    $sql = "update `mdmrecords` set id= $id,Song='$Song',Artist='$Artist',Album='$Album',Genre='$Genre' where id=$id";
    
    $result = mysqli_query($con,$sql);

    if($result){
    
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

  <form method="POST">
  <div class="form-group">
    <label>Song</label>
    <input type="text" name="Song" class="form-control" placeholder="Enter Song Name" value = "<?php echo $Song;?>">
  </div>
  <div class="form-group">
    <label>Artist</label>
    <input type="text" name="Artist" class="form-control" placeholder="Enter Artist" value = "<?php echo $Artist;?>">
  </div>
  <div class="form-group">
    <label>Album</label>
    <input type="text" name="Album" class="form-control" placeholder="Enter Album" value = "<?php echo $Album;?>">
  </div>
  <div class="form-group">
    <label>Genre</label>
    <input type="text" name="Genre" class="form-control" placeholder="Enter Genre" value = "<?php echo $Genre;?>">
  </div>

  <br>

  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>

  </div>

  </body>
</html>