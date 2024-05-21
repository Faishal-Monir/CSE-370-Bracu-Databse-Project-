<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css\bootstrap\css\bootstrap.min.css"> 
    <!-- Favicon -->
    <link rel="shortcut icon" href="media\favicon.png" type="image/x-icon">
    <title>Welcome to Unicare!</title>
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="media/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">Welcome to Unicare !</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">

            <li class="nav-item">
              <a class="nav-link" href="doctor/forhomepage/find_doctor.php">Find Doctor</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Our Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="verify.php">Take an Appointment</a>
                  <a class="dropdown-item" href="verify.php">Donate Blood</a>
                  <a class="dropdown-item" href="verify.php">Book an Ambulance</a>
                </div>
              </li>




            
        </ul>
            <a class="btn btn-outline-success ml-auto" href="verify.php" role="button" >Sign-in/Register</a>
          
        </div>
      </nav>

      <!-- Carasoul -->

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="media/homepage/image1.jpg" class="d-block w-100" alt="Image of a doctor">
          </div>
          <div class="carousel-item">
            <img src="media/homepage/image2.jpg" class="d-block w-100" alt="Operation being done">
          </div>
          <div class="carousel-item">
            <img src="media/homepage/image3.jpg" class="d-block w-100" alt="Blood bank">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


<!-- Cards -->
      <div class="container cards-container">
        <div class="row">
          
            <div class="col-md-3">
            <div class="card mb-3">
              <img src="media/admin_page_icons/doctor.svg" class="card-img-top" alt="Admin Icon">
              <div class="card-body">
                <h5 class="card-title">Find Doctors</h5>
                <a href="doctor/forhomepage/find_doctor.php" class="btn btn-outline-success">Let's Go!</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-3">
              <img src="media/admin_page_icons/appointment.svg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Book Appointment</h5>
                <a href="verify.php" class="btn btn-outline-success">Let's Go!</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-3">
              <img src="media/admin_page_icons/bloodbank.svg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Donate Blood</h5>
                <a href="verify.php" class="btn btn-outline-success">Let's Go!</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-3">
              <img src="media/admin_page_icons/ambulance.svg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Book an Ambulance</h5>
                <a href="verify.php" class="btn btn-outline-success">Let's Go!</a>
              </div>
            </div>
          </div>
        </div>
    </div>
        
<!-- About us section -->
          <div class="container">
            <h1> Hospital Services</h1>
            <div class="row">
                <div class="col-6 ">
                    <p>
                    To serve the Humanity as a whole with this noble vision the Unicare started its journey in April 2024.the trust has agreed upon to provide health care Service to people of Bangladesh with affordable cost.
                    The hospital is providing cardiology services by 2 modern cath-lab and round the clock CCU facility including cardiac surgery (Adult & Pediatric) by 2 cardiac OT by renowned cardiologists and cardiac surgeons. This hospital has its own stoke units with DSA and stanting with coiling facility. Vascular surgery with PAG, Stenting and Laser services is another service of this hospital.

                    <br><hr>
                    <h1>Ambulance Services<br></h1>
                    We have a facility for receiving ambulance service in our hospital. Where you can take advantage of the ambulance for any disease at a low cost. There are special facilities for distressed and indigent patients. Ambulances are manned by skilled and trained drivers for our ambulance services. Emergency 24-hour ambulance service is open
                    </p>
    
                </div>
                <div class="col-6">
                
                    <p><h1>Doctors</h1><br> Our hospital has skilled and talented doctors. He has studied at an educational institution. Through our website, patients can easily consult specialist doctors according to their own problems. We have Acupuncture Specialist,  (Pain) Specialist, Breast Specialist, Cancer Specialist, Cancer Surgery Specialist, Cardiovascular & Thoracic Surgery Specialist, Cardiology Specialist,  & Asthma Specialist, Child Specialist, Cardiology Specialist, Child Gastroenterologist, Child Neurology Specialist, Colorectal Surgery Specialist, Colorectal Surgery (Female) Specialist, Dental Specialist, Endocrinology (Diabetes & Hormone) Specialist, Dietitian/Nutritionist, ENT Specialist, Eye Specialist, Neuro-opthalmologist, Gastroenterology Specialist, General & Laparoscopic Surgery Specialist, Gynecology & Obstetrics Specialist, Gynecological Oncologist, Hematology (Blood) Specialist, Pediatric Hematologist,
                    Hepatobiliary Surgery Specialist, Homeopathy Doctor, Infertility Specialist, Kidney Specialist, Liver Specialist, Medicine Specialist, Neurology/Neuromedicine Specialist, Neurosurgery Specialist, Normal Delivery Specialist, Occupational Therapist, Orthopedic Specialist, Pediatric Nephrologist, Pediatric Orthopedic Surgeon, Pediatric Surgery Specialist, Physical Medicine Specialist, Physiotherapy Specialist, Plastic Surgery Specialist, Psychiatry (Mental) Specialist, Psychologist/Psychotherapist, Rheumatology Specialist, Sex Specialist, Skin Specialist, Urology Specialist and Vascular Surgery Specialist

                    <br><hr>
                    <h1>Blood Donation<br></h1>
                    
                    Donate blood, save lives.
                    Across Bangladesh, every day there remains an urgent need for all types of blood groups. Especially donors with rare blood groups such as O Negative, B Negative and A Negative are in high demand. Your timely response is essential to the supply of healthy blood for the massive daily demand we face.
                    Your donation can save the lives of many, make a difference, or simply make you feel great about your contribution to humanity. Whatever your reason, whatever your motivation we welcome you to learn more about eligibility and benefits of donating blood with a trusted organization like us.
                    </p>
                    
                </div>
    
            </div>
          </div>




<!-- Gallery -->
<div class="row">
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
      <img
        src="media/homepage/1.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
      />
  
      <img
        src="media/homepage/2.png"
        class="w-100 shadow-1-strong rounded mb-4
      />
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="media/homepage/3.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
      />
  
      <img
        src="media/homepage/4.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
      />
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="media/homepage/5.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
      />
  
      <img
        src="media/homepage/6.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
      />
    </div>
  </div>
  <!-- Gallery -->

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