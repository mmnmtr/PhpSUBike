<?php

@session_start();
   $mysqli =new mysqli('localhost','root','','DatebaseSUGB') or die(mysqli_error($mysqli));  
  
   $mysqli->set_charset('utf8');
     
     $Bike_Id = '';
     $update = false;
     $Bike_Status ='';
     $Bike_LoanDate='';
     $Bike_ReturnedDate ='';
     $Bike_Time  ='';
   
  
    
     
     if(isset($_POST['save'])){          
         $_SESSION['message'] = "Record has been saved";
         $_SESSION['msg_type'] = "success";

        $Bike_Id = $_POST['Bike_Id'];
        $Bike_Status = $_POST['Bike_Status'];
        $Bike_LoanDate= $_POST['Bike_LoanDate'];
        $Bike_ReturnedDate = $_POST['Bike_ReturnedDate'];
        $Bike_Time = $_POST['Bike_Time'];
     
        

        $mysqli->query("INSERT INTO `Bicycle` (`Bike_Id`, `Bike_Status`, `Bike_LoanDate`, `Bike_ReturnedDate`, `Bike_Time`) VALUES ('$Bike_Id', '$Bike_Status', '$Bike_LoanDate', '$Bike_ReturnedDate', '$Bike_Time')") or
         die($mysqli->error); 
         
         header('Location: registerBike.php');
     }  
       
?>

