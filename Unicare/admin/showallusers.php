<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../media/favicon.png" type="image/x-icon">
    <title>Update-Admin</title>
    <!--CSS-->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<body>
<!-- Nav bar starts here -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="../media/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">Edit-Admin</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        

 

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">


            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                More Options
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="add_remove_admin.php">Add/Remove Admin</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="update_admin.php">Update Admin Info</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="admin_panel.php">Go Back to Admin Panel</a>
              </div>
            </li>
        </div>
       
        </ul>
  
        <a class="btn btn-outline-info ml-aut"  href="../index.php" role="button" >Logout</a>
      </nav>

    <div class="admin_alert"> 
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Note:</strong> You should note down the user ID for any kind of modifications further !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
        </div>


      <?php
require_once '../dbconnect.php';
?>


 

<div class="container mt-5" id="table">
    <div class="table-responsive">
        <table class="table custom-table">
            <thead class="thead-dark">
                 <tr>
                    <th colspan="2" class="text-center">All active Users</th>
                </tr>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT user_id, name FROM Users";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) 
                    {
                           echo "<tr>";
                        echo "<td>" . $row['user_id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "</tr>";
                    }
                } 
                
                else {
                    echo "<tr><td colspan='2'>No records found</td></tr>";
                }
                ?>

            </tbody>
        </table>
    </div>
</div>






<footer class="footer">
        <?php
        $year = date("Y");
        echo "© $year All rights reserved by CSE-370 Group-4 [Unicare] Spring2024";
        ?>
    </footer>









    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>









</body>
</html>