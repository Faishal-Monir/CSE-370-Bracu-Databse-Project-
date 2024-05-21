<!DOCTYPE html>
<html>
<head>
    <title>Doctor Information</title>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../media/favicon.png" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; 
            color: #333; 
            text-align: center;
            padding-top: 50px;
        }

        h2 {
            color: #4a90e2; 
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .navbar-brand {
            display: flex;
            align-items: center; 
        }

        .navbar-nav {
            display: flex;
            align-items: center; 
        }

        .nav-link {
            margin-right: 15px; 
        }

        ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center; 
            margin-top: 20px; 
        }

        li {
            margin-right: 10px; 
        }

        a.button, button.button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff; 
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            cursor: pointer; 
        }

        a.button:hover, button.button:hover {
            background-color: #388e3c; 
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="../media/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <span>Unicare</span>
    </a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Homepage</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-info" href="../signout.php" role="button">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<div>
    <?php
    include "../welcome.php";
    ?>
</div>

<h2>Doctor Information</h2>

<ul>
    <li><a class="button" href="update_info.php?user_id=<?php echo $user_id; ?>">Update Info</a></li>
    <li>
        <form action="remove_doctor.php" method="post">
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
            <button class="button" type="submit">Delete User</button>
        </form>
    </li>
    <li><a class="button" href="appointment.php?user_id=<?php echo $user_id; ?>">Appointments</a></li>
</ul>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
