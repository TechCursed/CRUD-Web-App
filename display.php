<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="displaystyle.css" rel="stylesheet">
    <title>Display Page</title>
</head>
<body>
    


<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Song</th>
      <th scope="col">Artist</th>
      <th scope="col">Album</th>
      <th scope="col">Genre</th>
      <th scope="col">      </th>
    </tr>
  </thead>



  <?php
  
  $sql = "select * from `mdmrecords`";
  $result = mysqli_query($con,$sql);

  if($result){

    while($row = mysqli_fetch_assoc($result))
    {
        $id = $row['id'];
        $Song = $row['Song'];
        $Artist = $row['Artist'];
        $Album = $row['Album'];
        $Genre = $row['Genre'];
        
        echo' 
        <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$Song.'</td>
        <td>'.$Artist.'</td>
        <td>'.$Album.'</td>
        <td>'.$Genre.'</td>
       
        <td>
        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light" > Update </a>
        <br>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light"> Delete </a>  
      </td>
      </tr>
      ';
    }
    
  }
  
  ?>

</tbody>
</table>

<div class="text-center">
    <button class="btn btn-primary my-5 text-center btn-lg"><a href="user.php" class="text-light">   Add Records   </p></button>
</div>

</body>
</html>