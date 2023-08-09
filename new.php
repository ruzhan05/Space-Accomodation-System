<?php 
 
 
$con = mysqli_connect("localhost", "root","", "loginpage1"); 
if(!$con){ 
    echo "Not connect"; 
} 
if(isset($_POST['Submit'])){ 
    $firstName = $_POST['fname']; 
    $lastName = $_POST['lname']; 
    $Number = $_POST['Contact']; 
    $Email = $_POST['email']; 
    $Course = $_POST['course']; 
    $Date = $_POST['class_date']; 
    $Stime = $_POST['stime']; 
    $Etime = $_POST['etime']; 
    $RoomNo = $_POST['room']; 
 
    if(!empty( $firstName)&& !empty($lastName) && !empty( $Number)&& !empty(  $Email) && !empty( $Course) && !empty($Date)&& !empty( $Stime ) && !empty($Etime)&& !empty($RoomNo)){ 
        $sql = "INSERT INTO form(FirstName, LastName,Contact_No,Email_ID,Course_Name,Class_Date,Start_time,End_Time,Room_No) VALUES ('$firstName','$lastName','$Number','$Email','$Course','$Date','$Stime','$Etime','$RoomNo') "; 
        $result = mysqli_query($con,$sql); 
        if($result){ 
            echo "Data found"; 
        } 
        else{ 
            echo "Failed "; 
        } 
        mysqli_close($con); 
    /*    if($con-> query($sql)== TRUE){ 
            echo 'Appointment done'; 
 
        } 
        else{ 
            echo 'hoi nai kisu'; 
        }*/ 
 
    } 
} 
     
 
?>