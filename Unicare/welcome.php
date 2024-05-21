<?php 
session_start(); 
 $name = $_SESSION['name'];
$user_id = $_SESSION['user_id'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="alert alert-success alert-dismissible fade show" role="alert" style="text-align:center;">
  <strong>Welcome,</strong> <?php echo $name; ?> || Your User ID is: <strong><?php echo $user_id; ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

</body>
</html>




