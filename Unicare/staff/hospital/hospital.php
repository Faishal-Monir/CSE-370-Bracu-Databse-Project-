<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../media/favicon.png" type="image/x-icon">
    <title>Modify Hospital</title>
    <!--CSS-->
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<body>
<!-- Nav bar starts here -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="../../media/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">Modify Hospital Data</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        

 

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">


            <li class="nav-item">
            <a class="nav-link" href="../staff_panel.php">Go back to Staff Panel</a>
            </li>
            <li class="nav-item">
            </li>
        </ul>
  
        <a class="btn btn-outline-info ml-aut"  href="../../index.php" role="button" >Logout</a>
      </nav>






      <div class="admin_alert"> 
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Note:</strong> You should note down the Hospital ID for any kind of modifications further!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>

<?php
require_once '../../dbconnect.php';
?>

<div class="container mt-5" id="table">
    <div class="table-responsive">
        <table class="table custom-table">
            <thead class="thead-dark">
                <tr>
                    <th colspan="4" class="text-center"><button type="button" class="btn btn-outline-warning btn-sm btn-block" data-toggle="modal" data-target="#addAdminModal">Modify Data</button></th>
                </tr>
                <tr>
                    <th colspan="4" class="text-center">Hospital Data</th>
                </tr>
                <tr>
                    <th>Hospital ID</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Admin User ID</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql = "SELECT H.Hospital_id, H.Name AS Hospital_name, HL.Location, H.Admin_user_id
                        FROM Hospital H
                        INNER JOIN Hospital_location HL ON H.Hospital_id = HL.Hospital_id";

                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['Hospital_id'] . "</td>";
                        echo "<td>" . $row['Hospital_name'] . "</td>";
                        echo "<td>" . $row['Location'] . "</td>";
                        echo "<td>" . $row['Admin_user_id'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>









<!-- Modal -->
<div class="modal fade" id="addAdminModal" tabindex="-1" role="dialog" aria-labelledby="addAdminModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAdminModalLabel">More Options</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>


            </div>
            <div class="modal-body">

            <div class="alert alert-warning" role="alert">
                Enter data to Create a New Hospital ! 
            </div>


                <form action="createhospital.php" method="post">
                    <div class="form-group">
                        <label for="hospital-id">Hospital ID:</label>
                        <input type="number" class="form-control" id="hospital-id" name="hospital_id" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="location">Location:</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>

                    <div class="form-group">
                        <label for="create_admin_user_id">Admin User ID:</label>
                        <input type="number" class="form-control" id="create_admin_user_id" name="admin_user_id" required>
                    </div>

                    <button type="submit" class="btn btn-success">Create Hospital</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
                <hr>

 
                <div class="alert alert-warning" role="alert">
                    Enter data below to Update a Hospital! 
                </div>
                <form action="updatehospital.php" method="post">
                <div class="form-group">
                        <label for="hospital-id">Hospital ID:</label>
                        <input type="number" class="form-control" id="hospital-id" name="hospital_id" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="location">Location:</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>

                    <div class="form-group">
                        <label for="create_admin_user_id">Admin User ID:</label>
                        <input type="number" class="form-control" id="create_admin_user_id" name="admin_user_id" required>
                    </div>

                    <button type="submit" class="btn btn-success">Update Hospital</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
                <hr>

                <div class="alert alert-danger" role="alert">
                    Enter Id to delete a Hospital!
                </div>
                <form action="deletehospital.php" method="post">
                    <div class="form-group">
                        <label for="hos_id">Hospital ID:</label>
                        <input type="number" class="form-control" id="hos_id" name="hospital_id" required>
                    </div>

                    <button type="submit" class="btn btn-danger">Delete Hospital</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>



               

            </div>
        </div>
    </div>
</div>





    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>









</body>
</html>