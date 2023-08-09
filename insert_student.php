<?php
 if ($_SERVER ['REQUEST_METHOD']== 'POST') 
 {
  $firstName = $_POST['fname']; 
  $lastName = $_POST['lname']; 
  $Number = $_POST['Contact']; 
  $Email = $_POST['email']; 
  $Course = $_POST['course']; 
  $Date = $_POST['class_date']; 
  $Stime = $_POST['stime']; 
  $Etime = $_POST['etime']; 
  $RoomNo = $_POST['room']; 
    $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "loginpage1";

      
      $conn = mysqli_connect($servername, $username, $password, $database);
     
      if (!$conn){
          die("ERROR: CONNECTION Failed ". mysqli_connect_error());
      }
      else{
        $sql = "INSERT INTO library (FirstName, LastName,Contact_No,Email_ID,Course_Name,Course_Date,Start_time,End_Time,Room_No) VALUES ('$firstName','$lastName','$Number','$Email','$Course','$Date','$Stime','$Etime','$RoomNo') ";
        $result= mysqli_query($conn,$sql);
        if ($result)
        {
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        header("location:Pagla.html");

        }
        else{
            
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      }

      }
    }
?>