<?php
include 'welcome.php';
include 'dbconnect.php'; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST["email"];
    $password = $_POST["password"];

    
    $query = "SELECT User_id FROM Authentication WHERE user_email = '$email' AND password = '$password'";

    
    $result = $conn->query($query);

    
    if ($result) {
        
        
        if ($result->num_rows > 0) {
            
            

            $row = $result->fetch_assoc();
            $user_id = $row['User_id'];
            $_SESSION['user_id'] = $user_id;

            $query2 = "SELECT name FROM Users WHERE user_id = '$user_id'";
            $result2 = mysqli_query($conn, $query2);
            $row2 = mysqli_fetch_assoc($result2);
            $name = $row2['name'];            
            $_SESSION['name'] = $name;

            
            $doctor_query = "SELECT User_id FROM Doctor WHERE User_id = $user_id";
             $doctor_result = $conn->query($doctor_query);
            if ($doctor_result && $doctor_result->num_rows == 1) {
            header("location: doctor/info.php");
            exit();
            }

            
            $patient_query = "SELECT User_id FROM Patient WHERE User_id = $user_id";
            $patient_result = $conn->query($patient_query);
            if ($patient_result && $patient_result->num_rows == 1) {
                header("location: patient/Patient.php");
                exit();
            }

            
            $staff_query = "SELECT User_id FROM Staff WHERE User_id = $user_id";
            $staff_result = $conn->query($staff_query);
            if ($staff_result && $staff_result->num_rows == 1) {
                header("location: staff/staff_panel.php");
                exit();
            }

            
            $admin_query = "SELECT User_id FROM Admin WHERE User_id = $user_id";
            $admin_result = $conn->query($admin_query);
            if ($admin_result && $admin_result->num_rows == 1) {
                header("location: admin/admin_panel.php");
                exit();
            } 

            
            header("location: normaluser/normalusers.php");
            exit();
        } else {
            
            
            echo "Invalid email or password.";
            header("location: verify.php");
            exit();
        }
    } else {
        
        
        echo "Query execution failed.";
    }

    
    $conn->close();
}
?>