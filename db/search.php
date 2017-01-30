<!DOCTYPE html>
<html lang="en">
<head>
  <title>Earlham Prize</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<?php

include("config.php");
$name=$_POST['Name'];
$email=$_POST['Email'];
$college=$_POST['College'];

$sql = "SELECT * FROM records WHERE (name LIKE '%".$name."%') AND (email LIKE '%".$email."%') AND (college LIKE '%".$college."%')";
$result = mysqli_query($conn, $sql);
?>


<div class="container">
  <div style="overflow-x:auto;">
  <center><h1> Search Result </h1></center>
  <table class = "table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>College/Univeristy</th>
      </tr>
    </thead>
    <tbody>

<?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["college"]; ?></td>
      </tr>

    <?php
  }
} else {
  ?>
    <center><h2>Sorry there are no entries that match your needs!</h2></center><br/><br/>
<?php
}

mysqli_close($conn);
?>




</tbody>
</table>
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
