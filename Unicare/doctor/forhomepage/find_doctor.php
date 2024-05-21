<!DOCTYPE html>
<html>
<head>
    <title>Find a Doctor</title>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../media/favicon.png" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            color: #333333;
        }
        form {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
            color: #555555;
        }
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #dddddd;
            border-radius: 4px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="../../media/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <span>Unicare</span>
    </a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="../../index.php">Homepage</a>
            </li>
            <li class="nav-item">
            </li>
        </ul>
    </div>
</nav>



    <div class="container">
        <h2>Find a Doctor</h2>
        <form action="display_doctors.php" method="post">
            <label for="specialization">Select Specialization:</label>
            <select name="specialization" id="specialization">
                <option value="Cardiology">Cardiology</option>
                <option value="Dermatology">Dermatology</option>
                <option value="Neurology">Neurology</option>
                <option value="Urology">Urology</option>
                <option value="Gastroenterology">Gastroenterology</option>
                <option value="Endocrinology">Endocrinology</option>
                <option value="Orthopedics">Orthopedics</option>
                <option value="Ophthalmology">Ophthalmology</option>
                <option value="Oncology">Oncology</option>
                <option value="Pediatrics">Pediatrics</option>
                <option value="Pulmonology">Pulmonology</option>
                <option value="Rheumatology">Rheumatology</option>
                <option value="Nephrology">Nephrology</option>
                <option value="Psychiatry">Psychiatry</option>
                <option value="Allergy and Immunology">Allergy and Immunology</option>
                <option value="Infectious Disease">Infectious Disease</option>
                <option value="Dentistry">Dentistry</option>
        
                
            </select>
            <input type="submit" value="Find Doctors">
        </form>
    </div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
