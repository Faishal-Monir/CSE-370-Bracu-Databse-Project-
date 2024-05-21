<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../media/favicon.png" type="image/x-icon">
    <title>Normal Users!</title>
    <!--CSS-->
    <link rel="stylesheet" href="../css/style.css">
</head>
<style>
    .container{
        margin-top: 100px;
    
    }
</style>
<body>
 <!-- Navigation Bar -->
 <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="../media/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">Normal Users!</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="normalusers.php">PreviousPage</a>

            </ul>
            <a class="btn btn-outline-info ml-aut"  href="../signout.php" role="button" >Logout</a>
        </div>
    </nav>
    <div class="container">
        <h2>Donate Blood</h2>
        <form action="donate_blood_process.php" method="POST">
            <div class="form-group">
                <label for="bloodBankID">Blood Bank ID:</label>
                <input type="number" class="form-control" id="bloodBankID" name="bloodBankID" required>
            </div>
            <div class="form-group">
                <label for="bloodGroup">Blood Group:</label>
                <input type="text" class="form-control" id="bloodGroup" name="bloodGroup" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity (Bag):</label>
                <input type="number" class="form-control" id="quantity" name="quantity">
            </div>
            <button type="submit" class="btn btn-primary">Donate</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>
