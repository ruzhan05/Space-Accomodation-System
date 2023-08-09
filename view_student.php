<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginpage1";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$Matric= $_POST['search'];

$sql= "SELECT * FROM library WHERE FirstName='$Matric'";
$result= mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo "Studen ID: " . $row["Id"]. "<br> Student Name: ". $row["FirstName"] . "<br> Email Address:" . $row["Email_ID"]
        . "<br> Matric Number: " . $row ["Course_Name"] . "<br> ";
        echo'<a href= "SpaceManager.html ">Approve </a> ';
        echo'<br> <a href= "SpaceManager.html ">Reject </a> '  ;
    }

}
else{
    echo "0 results";

}
mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>

<h2>Search Button</h2>

<p>Full width:</p>
<form  action="view_student.php" method="post">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>



</body>
</html> 
