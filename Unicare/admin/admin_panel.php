<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css\bootstrap\css\bootstrap.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../media\favicon.png" type="image/x-icon">
    <title>Admin Panel !</title>
    <!--CSS-->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="../media/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">Admin Panel !</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <a class="btn btn-primary" href="../index.php" role="button">Go Back to Homepage</a>
            <a class="btn btn-outline-info ml-auto" href="../signout.php" role="button" >Logout</a>
        </div>
      </nav>

      <div style="margin-top:55px;">
      <?php
      include "../welcome.php";
      ?>
      </div>

<!-- END OF NAV -->
<!-- Start of cards -->
      <div class="container cards-container">
        <div class="row">

        
          
            <div class="col-md-3">
            <div class="card mb-3">
              <img src="../media/admin_page_icons/admin.svg" class="card-img-top" alt="Admin Icon">
              <div class="card-body">
                <h5 class="card-title">Update-Admin</h5>
                <a href="curd_admin.php" class="btn btn-outline-success">Let's Go!</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-3">
              <img src="../media/admin_page_icons/authentication.svg" class="card-img-top" alt="...">
              <div class="card-body">
                <h6 class="card-title">Update-Authentications</h6>
                <a href="auth\auth_home.php" class="btn btn-outline-success">Let's Go!</a>
              </div>
            </div>
          </div>


          <div class="col-md-3">
            <div class="card mb-3">
              <img src="../media/admin_page_icons/users.svg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Update-All Users</h5>
                <a href="allusers/users.php" class="btn btn-outline-success">Let's Go!</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-3">
              <img src="../media/admin_page_icons/ambulance.svg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Update-Ambulance</h5>
                <a href="ambulance/ambulance.php" class="btn btn-outline-success">Let's Go!</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-3">
              <img src="../media/admin_page_icons/appointment.svg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Update-Appointments</h5>
                <a href="appointment/appointment.php" class="btn btn-outline-success">Let's Go!</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-3">
              <img src="../media/admin_page_icons/bloodbank.svg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Update-Bloodbank</h5>
                <a href="bloodbank/bloodbank.php" class="btn btn-outline-success">Let's Go!</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-3">
              <img src="../media/admin_page_icons/doctor.svg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Update-Doctor</h5>
                <a href="doctor/doctor.php" class="btn btn-outline-success">Let's Go!</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-3">
              <img src="../media/admin_page_icons/normalusers.svg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Update-Normal Users</h5>
                <a href="normalusers\users.php" class="btn btn-outline-success">Let's Go!</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-3">
              <img src="../media/admin_page_icons/hospital.svg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Update-Hospital</h5>
                <a href="hospital/hospital.php" class="btn btn-outline-success">Let's Go!</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-3">
              <img src="../media/admin_page_icons/patient.svg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Update-Patient</h5>
                <a href="patient/patient.php" class="btn btn-outline-success">Let's Go!</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-3">
              <img src="../media/admin_page_icons/staff.svg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Update-Staff</h5>
                <a href="staff/staff.php" class="btn btn-outline-success">Let's Go!</a>
              </div>
            </div>
          </div>


                                                 

<!-- For future Needs -->
        <!--      
          <div class="col-md-3">
            <div class="card mb-3">
              <img src="../media/admin_page_icons/" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Update-</h5>
                <a href="#" class="btn btn-outline-success">Let's Go!</a>
              </div>
            </div>
          </div>                                                                          
         -->

          
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