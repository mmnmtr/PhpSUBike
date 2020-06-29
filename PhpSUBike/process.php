<?php

@session_start();
   $mysqli =new mysqli('localhost','root','','DatebaseSUGB') or die(mysqli_error($mysqli));  
  
   $mysqli->set_charset('utf8');
     
     $student_Id = '';
     $update = false;
     $student_FName ='';
     $student_LName='';
     $Faculty_Id ='';
     $student_Grade ='';
     $Card_ID ='';
     $student_phone ='';
     $mysqli2 =new mysqli('localhost','root','','DatebaseSUGB') or die(mysqli_error($mysqli));  
     
     $Card_Password ='';
     $Card_Point ='';

    
     
     if(isset($_POST['save'])){          
         $_SESSION['message'] = "Record has been saved";
         $_SESSION['msg_type'] = "success";

        $student_Id = $_POST['student_Id'];
        $student_FName = $_POST['student_FName'];
        $student_LName= $_POST['student_LName'];
        $Faculty_Id = $_POST['Faculty_Id'];
        $student_Grade = $_POST['student_Grade'];
        $Card_Password = $_POST['Card_Password'];
        $student_phone = $_POST['student_phone'];

        $Card_ID = $_POST['Card_ID'];
        $Card_Point = $_POST['Card_Point'];

        $mysqli->query("INSERT INTO `Member` (`student_Id`, `student_FName`, `student_LName`, `Faculty_Id`, `student_Grade`, `Card_ID`,`student_phone`) VALUES ('$student_Id', '$student_FName', '$student_FName', '$Faculty_Id', '$student_Grade', '$Card_ID','$student_phone')") or
         die($mysqli->error); 
         
         $mysqli2->query("INSERT INTO `MemberCard` (`Card_ID`, `Card_Password`, `Card_Point`) VALUES ('$Card_ID','$Card_Password','$Card_Point')") or
         die($mysqli->error); 
         header('Location: registerMember.php');
     }  
     if(isset($_GET['delete'])){
        $student_Id = $_GET['delete'];
        $mysqli->query("DELETE FROM Member WHERE student_Id = $student_Id")or die($mysqli->error());
        header('Location:  registerMember.php');

        $_SESSION['message'] = "Record has been deleted";
        
        $_SESSION['msg_type'] = "danger";

     }
     if(isset($_GET['edit']))
     {
        $student_Id = $_GET['edit'];
        $update = true;
        $result = $mysqli->query("SELECT * FROM Member WHERE student_Id =$student_Id") or die($mysqli->error());
        if(@count($result)==1)
        {
            $row = $result->fetch_array();
            $student_FName = $row['student_FName'];
            $student_LName= $row['student_LName'];
            $Faculty_Id = $row['Faculty_Id'];
            $student_Grade = $row['student_Grade'];
            $Card_Password = $row['Card_Password'];
            $Card_ID = $row['Card_ID'];
            
            $student_phone  = $row['student_phone'];
        }
    }
    if(isset($_POST['update']))
    {
        $student_Id = $_POST['student_Id'];
        $student_FName = $_POST['student_FName'];
        $student_LName= $_POST['student_LName'];
        $Faculty_Id = $_POST['Faculty_Id'];
        $student_Grade = $_POST['student_Grade'];
        $Card_Password = $_POST['Card_Password'];
        $Card_ID = $_POST['Card_ID'];
        $student_phone = $_POST['student_phone'];

        $mysqli->query("UPDATE Member SET student_FName='$student_FName',student_LName='$student_LName',Faculty_Id='$Faculty_Id',student_Grade='$student_Grade',Card_Password='$Card_Password',student_phone='$student_phone'WHERE student_Id=$student_Id")
        or
        die($mysqli->error);
        
        $_SESSION['message']= "Record has been updated!";
        $_SESSION['msg_type']="warnning";
        header('Location:  registerMember.php');
    }
       
?>