<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../media/favicon.png" type="image/x-icon">
    <title>Staff Panel</title>
    <!-- CSS -->
    <style>
        body {
            padding-top: 70px;
            position: relative;
            margin-bottom: 60px;
        }
        .profile-container {
            max-width: 800px;
            margin: 0 auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 5px 0;
            margin-bottom: -30px;
        }
        .form-container {
            margin-top: 20px;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="../media/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">View Profile</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
 
            </ul>
            <a class="btn btn-outline-info ml-aut"  href="../signout.php" role="button" >Logout</a>
        </div>
    </nav>
    <!-- End Navigation Bar -->

    <div class="profile-container">
        <?php
        include "../welcome.php";
        include "../dbconnect.php";

        // Fetch additional user details from the database
        $user_id = $_SESSION['user_id'];
        $query = "SELECT name, age, address, user_email, mobile FROM Users INNER JOIN Authentication ON Users.user_id = Authentication.User_id WHERE Users.user_id = $user_id";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $name = $row['name'];
            $age = $row['age'];
            $address = $row['address'];
            $email = $row['user_email'];
            $mobile = $row['mobile'];

            echo "<table>";
            echo "<tr><th colspan='2'>User Profile</th></tr>";
            echo "<tr><td>Name:</td><td>" . $name . "</td></tr>";
            echo "<tr><td>Age:</td><td>" . $age . "</td></tr>";
            echo "<tr><td>Address:</td><td>" . $address . "</td></tr>";
            echo "<tr><td>Email:</td><td>" . $email . "</td></tr>";
            echo "<tr><td>Mobile:</td><td>" . $mobile . "</td></tr>";
            echo "</table>";
        } else {
            echo "No user found.";
        }

        // Close database connection
        mysqli_close($conn);
        ?>
    </div>

    <div class="form-container">
        <h3>Update Profile</h3>
        <form action="updateprofile.php" method="POST">
            <div class="form-group">
                <label class="form-label" for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $_SESSION['name']; ?>">
            </div>
            <div class="form-group">
                <label class="form-label" for="age">Age:</label>
                <input type="number" class="form-control" id="age" name="age" value="<?php echo $age; ?>">
            </div>
            <div class="form-group">
                <label class="form-label" for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" value="<?php echo $address; ?>">
            </div>
            <div class="form-group">
                <label class="form-label" for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="form-group">
                <label class="form-label" for="mobile">Mobile:</label>
                <input type="tel" class="form-control" id="mobile" name="mobile" value="<?php echo $mobile; ?>">
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <div class="form-container">
        <h3>Delete User</h3>
        <form action="delete_user.php" method="POST">
            <button type="submit" class="btn btn-danger">Delete User</button>
        </form>
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