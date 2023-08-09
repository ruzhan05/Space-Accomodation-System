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

$sql= "SELECT * FROM lecview WHERE Room='$Matric'";
$result= mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo "Studen ID: " . $row["Id"]. "<br> Booking Status: ". $row["Approval"] . "<br> Room:" . $row["Room"];
        echo'<br> <a href= "Pagla.html ">Go back to main page </a> ';
        
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
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #00B4CC;
  border-right: none;
  padding: 5px;
  height: 20px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}


.wrap{
  width: 30%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
</head>
<body>

<h2>Search Button</h2>

<body>
     <form  action="Lecval.php" method="post">
    <div class="wrap">
        <div class="search">
           <input type="text" class="searchTerm" placeholder="Search Booker Name" name="search">
           <button type="submit" class="searchButton">
            
             <i class="fa fa-search"></i>
          </button>
        </div>
     </div>
    </form>
</body>
</html>