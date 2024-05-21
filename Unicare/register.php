<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="media/favicon.png" type="image/x-icon">
    <title>Register</title>
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">



</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="media/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">Register</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        

 

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">


            <li class="nav-item">
            <a class="nav-link" href="index.php">Homepage</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="verify.php">Go Back to LogIn</a>
            </li>
        </ul>
  
</div>
      </nav>


      <div class="login-dark-1" id="fit" >
            <form action="append.php" method="post">
                <h2 class="sr-only">Login Form</h2>
                <div class="illustration">
                    <img src="media\favicon.png" height="100px">
                    <i class="icon ion-ios-locked-outline"></i>
                </div>
                <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                <div class="form-group"><input class="form-control" type="number" name="age" placeholder="Age"></div>
                <div class="form-group"><input class="form-control" type="text" name="address" placeholder="Address"></div>

                <div class="form-group">
                    <label>Select User Type:</label><br>
                    <label><input type="radio" name="user_type" value="patient" required> Patient</label><br>
                    <label><input type="radio" name="user_type" value="normal" required> Normal User</label>
                </div>

                <div class="form-group"><input class="form-control" type="email" name="user_email" placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="mobile" name="mobile" placeholder="Mobile"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                
                <div class="form-group">
                <input type="reset" value="Reset Form">
                    <button class="btn btn-primary btn-block" type="submit">Register</button>
                </div>
            </form>
        </div>


<!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
