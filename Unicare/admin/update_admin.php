<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../media/favicon.png" type="image/x-icon">
    <title>Update Admin Info</title>
    <!--CSS-->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<!-- Nav bar starts here -->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
<a class="navbar-brand" href="#"><img src="../media/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">Update Admin Info</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <a class="nav-item nav-link" href="../index.php">Homepage</a>
      <a class="nav-item nav-link" href="curd_admin.php">Previous_Page</a>
      <a class="nav-item nav-link" href="admin_panel.php">Admin_Home_Panel</a>
    </div>
  </div>
  <a class="btn btn-outline-info ml-aut"  href="../signout.php" role="button" >Logout</a>
</nav>






<div class="container mt-5" id="table">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th colspan="4" class="text-center"><button type="button" class="btn btn-outline-warning btn-sm btn-block" data-toggle="modal" data-target="#addAdminModal">Update Admin Info</button></th>
                </tr>
                <tr>
                    <th colspan="4" class="text-center">All Admin Data </th>
                </tr>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once '../dbconnect.php';

                $sql = "SELECT a.User_id, u.name, u.age, u.address
                        FROM Admin a 
                        INNER JOIN Users u ON a.User_id = u.user_id";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['User_id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['age'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No records found</td></tr>";
                }
                ?>
                </tbody>

            <tfoot class="bg-dark text-white">
                <tr>
                    <td colspan="4">

                    <div class="spinner-grow text-warning" role="status">
                    <span class="sr-only">Loading Live...</span>
                    </div>
                    <span class="ml-2">Loading live ...</span>

                    </td>
                </tr>
            </tfoot>

        </table>
    </div>
</div>







<div class="modal fade" id="addAdminModal" tabindex="-1" role="dialog" aria-labelledby="addAdminModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAdminModalLabel">Update Exsisting Admin Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">
                <form action="update_admin_data.php" method="post" >
                    <div class="form-group">
                        <label for="user_id">User ID:</label>
                        <input type="number" class="form-control" id="user_id" name="user_id" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="age">Age:</label>
                        <input type="number" class="form-control" id="age" name="age" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
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