<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../media/favicon.png" type="image/x-icon">
    <title>Modify Bloodbank</title>
    <!--CSS-->
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<body>
<!-- Nav bar starts here -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="../../media/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">Modify Bloodbank</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        

 

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">


            <li class="nav-item">
            <a class="nav-link" href="../admin_panel.php">Go back to Admin Panel</a>
            </li>
            <li class="nav-item">
            </li>
            <li class="nav-item">
            <a class="nav-link" href="Showallhos.php">Show_all Hospitals</a>
            </li>
        </ul>
  
        <a class="btn btn-outline-info ml-aut"  href="../../signout.php" role="button" >Logout</a>
      </nav>






    <div class="admin_alert"> 
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Note:</strong> You should note down the Blood Bank  ID for any kind of modifications further !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
        </div>




<?php
require_once '../../dbconnect.php';
?>

<div class="container mt-5" id="table">

    <?php
   
    $bloodBankSQL = "SELECT DISTINCT Blood_bank_id FROM BloodBank";
    $bloodBankResult = mysqli_query($conn, $bloodBankSQL);

 
    while ($bloodBankRow = mysqli_fetch_assoc($bloodBankResult)) {
        $bloodBankID = $bloodBankRow['Blood_bank_id'];
    ?>


    <div class="table-responsive">
        <table class="table custom-table">
            <thead class="thead-dark">
                <tr>
                    <th colspan="3" class="text-center">Blood Bank ID: <?php echo $bloodBankID; ?></th>                    
                </tr>
                <tr>
                    <th colspan="3" class="text-center"><button type="button" class="btn btn-outline-warning btn-sm btn-block" data-toggle="modal" data-target="#addAdminModal">Modify this BloodBank</button></th>
                </tr>
                <tr>
                    <th>Blood Group</th>
                    <th>Quantity [BAG]</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $bloodGroupsSQL = "SELECT Blood_groups, Quantity FROM Blood_groups WHERE BloodBank_id = $bloodBankID";
                $bloodGroupsResult = mysqli_query($conn, $bloodGroupsSQL);

                if (mysqli_num_rows($bloodGroupsResult) > 0) {
                    while ($bloodGroupRow = mysqli_fetch_assoc($bloodGroupsResult)) {
                        echo "<tr>";
                        echo "<td>" . $bloodGroupRow['Blood_groups'] . "</td>";
                        echo "<td>" . $bloodGroupRow['Quantity'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>No records found for this Blood Bank ID</td></tr>";
                }
                ?>
            </tbody>
            <tfoot class="bg-dark text-white">
                <tr>
                    <td colspan="3">

                    <div class="spinner-grow text-warning" role="status">
                    <span class="sr-only">Loading Live...</span>
                    </div>
                    <span class="ml-2">Loading live ...</span>

                    </td>
                </tr>
            </tfoot>

        </table>
    </div>
    <hr>

    <?php
    }
    ?>

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
                Enter data to Create a BloodBank ! 
            </div>

            <form action="createbloodbank.php" method="post">
                <div class="form-group">
                    <label for="doc_id">Hospital ID:</label>
                    <input type="number" class="form-control" id="doc_id" name="hospital_id" required>
                </div>
                <button type="submit" class="btn btn-success">Create BloodBank</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
            <hr><hr>


            <div class="alert alert-warning" role="alert">
                Enter data below to Update Bloodbank ! 
            </div>


            <form action="updatebloodbank.php" method="post">
            <div class="form-group">
                    <label for="doc_id">BloodBank ID:</label>
                    <input type="number" class="form-control" id="doc_id" name="bloodbank_id" required>
                </div>
                <b><i><h6 style="text-align: center;">Update the Blood Quantity Below</h6></i></b>
                <div class="form-group">
                    <label for="blood">(A+):</label>
                    <input type="number" class="form-control" id="blood" name="A+" >
                </div>                
                <div class="form-group">
                    <label for="blood">(A-):</label>
                    <input type="number" class="form-control" id="blood" name="A-" >
                </div>
                <div class="form-group">
                    <label for="blood">(B+):</label>
                    <input type="number" class="form-control" id="name" name="B+" >
                </div>
                <div class="form-group">
                    <label for="blood">(B-):</label>
                    <input type="number" class="form-control" id="blood" name="B-" >
                </div>
                <div class="form-group">
                    <label for="blood">(AB+):</label>
                    <input type="number" class="form-control" id="blood" name="AB+" >
                </div>
                <div class="form-group">
                    <label for="blood">(AB-):</label>
                    <input type="number" class="form-control" id="blood" name="AB-" >
                </div>
                <div class="form-group">
                    <label for="blood">(O+):</label>
                    <input type="number" class="form-control" id="blood" name="O+" >
                </div>
                <div class="form-group">
                    <label for="blood">(O-):</label>
                    <input type="number" class="form-control" id="blood" name="O-" >
                </div>

                <button type="submit" class="btn btn-success">Update BloodBank</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>

            <hr><hr>


            <div class="alert alert-danger" role="alert">
                Enter Bloodbank id to delete Bloodbank !
            </div>

            <form action="deletebloodbank.php" method="post">
                    <div class="form-group">
                        <label for="bb_id">BloodBank ID:</label>
                        <input type="number" class="form-control" id="bb_id" name="bloodbank_id" required>
                    </div>
                    <button type="submit" class="btn btn-danger">Delete BloodBank</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>



               

            </div>
        </div>
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