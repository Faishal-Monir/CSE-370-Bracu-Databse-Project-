<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Doctor Information</title>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../media/favicon.png" type="image/x-icon">

    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .message {
            margin-top: 10px;
            padding: 10px;
            border-radius: 5px;
        }
        .success {
            background-color: #DFF2BF;
            color: #4F8A10;
        }
        .error {
            background-color: #FFBABA;
            color: #D8000C;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="../media/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">Unicare</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="info.php">Previous Page</a>
                </li>
            </ul>
            <a class="btn btn-outline-info ml-auto" href="../signout.php" role="button">Logout</a>
        </div>
    </nav>
    <div style="margin-top:20px;">
        <?php
        include "../welcome.php";
        ?>
    </div>  
   
    <h2>Update Doctor Information</h2>

    <?php
    require_once '../dbconnect.php';

  
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $userId = $_GET['user_id'];
        $fee = intval($_POST['fee']);
        $age = intval($_POST['age']);
        $address = htmlspecialchars($_POST['address']);
        $name = htmlspecialchars($_POST['name']);
        $specialization = htmlspecialchars($_POST['specialization']);
        $_SESSION['name'] = $name;

        $sql = "UPDATE Doctor D
                INNER JOIN Users U ON D.User_id = U.user_id
                SET D.Fee = ?,
                    D.Specialization = ?,
                    U.age = ?,
                    U.address = ?,
                    U.name = ?
                WHERE D.User_id = ?";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("issssi", $fee, $specialization, $age, $address, $name, $userId);

        $updateResult = $stmt->execute();
        $stmt->close();

        if ($updateResult) {
            $confirmationMessage = "Doctor's information updated successfully.";
        } else {
            $errorMessage = "Error updating record: " . $conn->error;
        }
    }

    $userId = $_GET['user_id'];

    $sql = "SELECT D.User_id, D.Fee, D.Specialization, U.age, U.address, U.name
            FROM Doctor D
            INNER JOIN Users U ON D.User_id = U.user_id
            WHERE D.User_id = $userId";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $doctor = $result->fetch_assoc();
    ?>
    
    <?php if (isset($confirmationMessage)) : ?>
        <div class="message success"><?php echo $confirmationMessage; ?></div>
    <?php endif; ?>

    <?php if (isset($errorMessage)) : ?>
        <div class="message error"><?php echo $errorMessage; ?></div>
    <?php endif; ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?user_id=' . $userId; ?>">
        <label for="fee">Fee:</label>
        <input type="text" name="fee" value="<?php echo $doctor['Fee']; ?>" required><br>
        <label for="age">Age:</label>
        <input type="text" name="age" value="<?php echo $doctor['age']; ?>"><br>
        <label for="address">Address:</label>
        <input type="text" name="address" value="<?php echo $doctor['address']; ?>"><br>
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $doctor['name']; ?>" required><br>
        <label for="specialization">Specialization:</label>
        <input type="text" name="specialization" value="<?php echo $doctor['Specialization']; ?>" required><br>
        <input type="submit" value="Update">
    </form>

    <?php
    } else {
        echo "Doctor not found.";
    }

    $conn->close();
    ?>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
